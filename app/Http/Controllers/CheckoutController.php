<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use Hash;
use App\Role;
use Storage;
use App\Item;
use Con;
use Illuminate\Support\Str;
use Mail;
use App\Order;
use App\OrderItem;
use App\Payment as Mypayment ;

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;

  class CheckoutController extends Controller
{
    
   
        
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function checkout()
    {
        
         if(Auth::check() == false){
           return redirect()->route('login')->with('warning' ,'Please Login First');
         }
    
         $cart = session()->get('cart');
         if(!isset($cart)) {
            return redirect()->route('cart')->with('warning' ,'Cart is Empty');
         }
         
         $cart = Con::cart_info();
         if(count($cart->items) == 0) {
            return redirect()->route('cart')->with('warning' ,'Cart is Empty');
         }
         
        
         return view('checkout');
    }
    
    
    
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function checkout_submit(Request $request){
         
            $cart = session()->get('cart');
        
            if(!isset($cart)) {
                return redirect()->route('cart')->with('warning' ,'Cart is Empty');
            }
             
            if(count($cart) == 0) {
                return redirect()->route('cart')->with('warning' ,'Cart is Empty');
            }
            
            if($request->has('payment_method') == false ){
                return back()->with('warning' ,'Please Select Payment Method');
            }
            
          $cartts = Con::cart_info();
            
          $customer = [
                        "user_id" => $request->user_id,
                        "address" => serialize([
                             "name" =>  $request->customer['name'],
                             "email" => $request->customer['email'],
                             "mobile" => $request->customer['phone'],
                             "country" => $request->customer['country'],
                             "state" => $request->customer['state'],
                             "city" => $request->customer['city'],
                             "zip" => $request->customer['zip'],
                             "address" => $request->customer['address'],
                          ]),
                        "payment_method" => $request->payment_method,
                        "items" => serialize($cartts->items),
                        "additional_note" => $request->notes,
                        "total" => $cartts->total
                     ];
            
        
         session()->put('customer',json_encode($customer));
         session()->put('customer_email',$request->customer['email']);
          
          if($request->payment_method == "paypal")
          {
            return redirect()->route('paypal');      
          }else{
              return redirect()->route('cash_on_delivery');  
          }
    
   }
   
  
   public function cash_on_delivery(){
       
        $customer = json_decode(session()->get('customer'));
        $order = Order::create([
              "items" => $customer->items,
              "tracking_id" => rand(),
              "user_id" => $customer->user_id,
              "payment_method" => $customer->payment_method,
              "payment_status" => 0,
              "status" => 'processing',
              "address" =>  $customer->address,
              "total" => $customer->total,
              "additional_note" => $customer->additional_note,
              "date" => date('Y-m-d H:i:s'),
            ]);
                    
            $data = ["id" => $order->id];
            
            Mail::send('emails.customer',$data,function ($mesage){
                $mesage->from('owaisazamtest@gmail.com', Con::settings()->app_name ); 
                $mesage->to(session()->get('customer_email'), Con::settings()->app_name )->subject('Order Confirmation');
            });
           
            session()->forget('cart');
            session()->forget('customer');
            
            return redirect()->route('thankyou')->with('success','Order Created Success');
   }
   
   
 
    public function paypal(Request $request)
    {
        
         $cart = session()->get('cart');
        if(!isset($cart)) {
            return redirect()->route('cart')->with('warning' ,'Cart is Empty');
        }
         
        if(count($cart) == 0) {
            return redirect()->route('cart')->with('warning' ,'Cart is Empty');
        }
        
        
     
        $customer = json_decode(session()->get('customer'));
    
        $apiContext = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
              Con::settings()->paypal_client,
              Con::settings()->paypal_secret 
            )
          );
        
          // Create new payer and method
          $payer = new Payer();
          $payer->setPaymentMethod("paypal");


          // Set redirect URLs
          $redirectUrls = new RedirectUrls();
          
          $redirectUrls->setReturnUrl(route('process.paypal'))
          ->setCancelUrl(route('cancel.paypal'));
          
          // Set payment amount
          $amount = new Amount();
          $amount->setCurrency("USD")
          ->setTotal($customer->total);

          // Set transaction object
          $transaction = new Transaction();
          $transaction->setAmount($amount)
          ->setDescription("Payment description");

          // Create the full payment object
          $payment = new Payment();
          $payment->setIntent('sale')
          ->setPayer($payer)
          ->setRedirectUrls($redirectUrls)
          ->setTransactions(array($transaction));


          try {
              
               $payment->create($apiContext);
               $approvalUrl = $payment->getApprovalLink();

              return redirect($approvalUrl);
          
         
             } catch (PayPal\Exception\PayPalConnectionException $ex) {

               echo $ex->getCode();
               echo $ex->getData();
               die($ex);

            } catch (Exception $ex) {
        
               die($ex);
           }
           

    }
    
    

    public function process_paypal(Request $request)
    {
        
       $paymentId = $request->paymentId;
       $token = $request->token;
       $PayerID = $request->PayerID;

       $apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
           Con::settings()->paypal_client,
           Con::settings()->paypal_secret 
         )
       );

        //Get payment object by passing paymentId
        $payment = Payment::get($paymentId, $apiContext);
        

        //Execute payment with payer ID
        $execution = new PaymentExecution();
        $execution->setPayerId($PayerID);
        
       try {
           
           
            //Execute payment
            
             $customer = json_decode(session()->get('customer'));
            
                $order = Order::create([
                      "tracking_id" => rand(),
                      "user_id" => $customer->user_id,
                      "payment_method" => $customer->payment_method,
                      "payment_status" => 1,
                      "status" => 'processing',
                      "address" =>  $customer->address,
                      "subtotal" => $customer->subtotal,
                      "discount" => $customer->discount,
                      "tax" => $customer->tax,
                      "total" => $customer->total,
                      "additional_note" => $customer->additional_note,
                      "date" => date('Y-m-d H:i:s'),
                    ]);
                    
                    
                 $cart =  unserialize($customer->items);
                  foreach($cart as $item){
                         OrderItem::create([
                            "order_id" => $order->id,
                            "item_id" => $item['id'] ,
                            "title" => $item['title'],
                            "des" => null,
                            "unit" => $item['unit'],
                            "price" => $item['price'],
                            "qty" => $item['quantity'],
                            "discount" => $item['discount'],
                            "tax" => $item['tax'],
                            "total" => $item['total'],
                        ]);
                    }
            
            
                 $mypayment = Mypayment::create([
                  "payer_info" => serialize([
                        "email" => $payment->payer->payer_info->email,
                        "name" => $payment->payer->payer_info->first_name.' '.$payment->payer->payer_info->last_name,
                        "payer_id" => $payment->payer->payer_info->payer_id,
                        "address" => $payment->payer->payer_info->country_code,
                        "bank_account" => $payment->transactions[0]->payee->email,
                      ]),
                    "payment_method" => $customer->payment_method,
                    "amount" => $payment->transactions[0]->amount->total,
                    "currency" => $payment->transactions[0]->amount->currency,
                    "details" => "",
                    "date" => $payment->update_time,
                    "order_id" => $order->id,
                ]);
                
                
                   $data = [ "id" => $order->id];
                   
                    Mail::send('emails.orderConfirmation',$data,function ($mesage){
                        $mesage->from('customercare@humarimama.pk', Con::settings()->app_name ); 
                        $mesage->to(session()->get('customer_email'), Con::settings()->app_name )->subject('Order Confirmation');
                    });
            
            
                   session()->forget('cart');
                   session()->forget('customer');
                   return redirect()->route('order.track',$order->tracking_id);
    
    
        } catch (PayPal\Exception\PayPalConnectionException $ex) {


            echo $ex->getCode();
            echo $ex->getData();
            die($ex);
        
         } catch (Exception $ex) {


           die($ex);
        }
     
    }

    public function cancel_paypal()
    {

     return redirect()->route('checkout')->with('warning','Payment Error');  
        
   }



    public function stripe()
    {
          // Enter Your Stripe Secret
        

          \Stripe\Stripe::setApiKey('sk_test_51IOnjFHiHsiwIMTQlIpo0cKn7OlhplP6hRVRpEHGERdKiwAqtaQGtdGhYMJCNEpfsKSeOlsO1XLiEnXZeuCbbQn0007FCsRGNC');
          
        //   $customer = json_decode(session()->get('customer'));
        //   if($customer == ""){
        //     return back()->with('error', 'Your Cart Is Empty');;
        //   }
          
          $amount = 100;
          $amount *= 100;
          $amount = (int) $amount;
          
          $payment_intent = \Stripe\PaymentIntent::create([
              'description' => 'Stripe Test Payment',
              'amount' => $amount,
              'currency' => 'USD',
              'description' => 'Payment From Humarimam.com',
              'payment_method_types' => ['card'],
          ]);

          $intent = $payment_intent->client_secret;
          return view('stripe',compact('intent'));
        
    }

    public function afterPayment()
    {

        $customer = json_decode(session()->get('customer')); 
        if($customer == ""){

          return back()->with('error', 'Your Cart Is Empty');;
        }
        
        if(Auth::check()){
            $user_id = Auth::user()->id;
        }else{
            $user_id = null;
        }
            
        $order = Order::create([ 
              'user_id' =>	$user_id, 
              'items' =>$customer->items,
              'status' => 'pending',
              'payment_method' => 'cash_on_delivery',
              'customer' => $customer->customer,
              'sub_total' => $customer->sub_total,
              'total' => $customer->total,
              'tax' => $customer->tax,
              'discount' => $customer->discount,
              'tracking_id' => rand(),
         ]);
             
         if($order){
             
            foreach(unserialize($order->items) as $item){
              $p = Product::find($item['id']);
               if($p->manage_stock == 1){
                       $p->stock = $p->stock - $item['quantity']; 
                       $p->save();
                   }
               }
    
              session()->forget('cart');
              session()->forget('customer');
              return redirect()->route('order.track',$order->tracking_id);
        }
        

    }


    
}