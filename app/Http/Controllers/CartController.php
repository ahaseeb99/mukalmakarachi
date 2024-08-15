<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use App\Profile;
use Hash;
use App\Role;
use Storage;
use App\Item;
use App\Category;
use Con;
use Illuminate\Support\Str;


class CartController extends Controller
{
    
    /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function cart()
    {
        $cart = session()->get('cart');
        
        if(!$cart) {
         
            return  redirect()->route('home')->with('warning','Cart Is Empty'); 
        }

        return view('cart');
    }
   
 

   public function increament($id)
    {
        
         $cart = session()->get('cart');
         $old = $cart[$id]["quantity"];
         $cart[$id]["quantity"] = ++$old;
         
         session()->put('cart', $cart);
     
         return redirect()->back()->with('success', 'Products Updated successfully');
    }

    public function decreament($id)
    {
        
         $cart = session()->get('cart');
         
         $old = $cart[$id]["quantity"];
         
          if($old == 1){
              
              unset($cart[$id]);
            return redirect()->back()->with('success', 'Products Updated successfully');     
          }
          
         $cart[$id]["quantity"] = --$old;
         session()->put('cart', $cart);
     
          return redirect()->back()->with('success', 'Product Updated successfully');
    }
    

    public function remove($id)
    {
        
            $cart = session()->get('cart');
            $customer = json_decode(session()->get('customer'));
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->forget('customer');
      
                session()->put('cart', $cart);
            }

         return redirect()->back()->with('success', 'Product removed successfully');
    }
    
    
    public function add_with_qty(Request $request)
    { 
         
         foreach($request->all() as $key => $item){
            $id = explode("-",$key)[0];
            $type = explode("-",$key)[1];
            $this->adds($key,$id,$type);   
         }
         
        return redirect()->back()->with('success', 'Product added successfully');
    }
    
    
      public function cartget_ajax(Request $request)
    { 
        
        
         return response()->json([
             "cart" => Con::cart_info(), 
             ],200); 
      
         
        return redirect()->back()->with('success', 'Product added successfully');
    }
    
    
    
    
      public function adds($id,$ii,$type)
    {
        $item = Item::find($ii);
        $cart = session()->get('cart'); 
        
        if($type == 'soft'){
            $price = $item->pdf_price;
            
        }else{
            $price = $item->price;
        }

          if(isset($cart[$id])) {
              
              
                   if($type == 'soft'){
                        $cart[$id]['quantity'] =  1;
                        
                   }else{
                       $cart[$id]['quantity'] +=  1;
            
                    }
                  
                  session()->put('cart', $cart);
                  return true;
              
          }else{
              
            $cart[$id] = [
                "id" => $item->id,
                "slug" => $item->slug,
                "title" => $item->title,
                "quantity" => 1,
                "price" => $price,
                "thumbnail" => $item->thumbnail,
                "type" => $type,
             ];  
             
             session()->put('cart', $cart);
              return 0;
          }    
         
    }



}