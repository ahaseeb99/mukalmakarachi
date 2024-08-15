<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Payment;
use Illuminate\Support\Facades\Gate;
use Con;

class PaymentController extends Controller
{
    
    /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
    */
     
    public function create()
    {
        
         $modules = Payment::all();
        return view('admin.payments.create',compact('modules'));
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        
         $modules = Payment::all();
        return view('admin.payments.index',compact('modules'));
    }
    
    
     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)   
    {
       // dd($request->all());
       //  try {
                $payment = Payment::create([
                    "currency" => $request->currency,
                    "amount" => $request->amount,
                    "details" => $request->details,
                    "payment_method" => $request->payment_method,
                    "order_id" => $request->order_id,
                    "date" => $request->date,
                    "file" => $request->file,
                    "payer_info" => serialize([
                        "email" => $request->payer_info['email'],
                        "name" => $request->payer_info['name'],
                        "payer_id" => $request->payer_info['payer_id'],
                        "address" => $request->payer_info['address'],
                        "bank_account" => $request->payer_info['bank_account'],
                    ]),
                ]);
               
          
           return redirect()->route('admin.payments.index')->with('success','Payment Created');
   
        // } catch (\Throwable $th) 
        // {
        //      return back()->with('error','Order Not Created Please Contact To Admin');
        // }
        
      
   }

 
     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $module = Payment::Find($id);
        return view('admin.payments.edit',compact('module'));
    }


     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
        $module = Payment::find($id);
        $module->currency = $request->currency;
        $module->amount = $request->amount;
        $module->details = $request->details;
        $module->payment_method = $request->payment_method;
        $module->order_id = $request->order_id;
        $module->date = $request->date;
        $module->file = $request->file;
        $module->payer_info = serialize([
          "email" => $request->payer_info['email'],
          "name" => $request->payer_info['name'],
          "payer_id" => $request->payer_info['payer_id'],
          "address" => $request->payer_info['address'],
          "bank_account" => $request->payer_info['bank_account'],
        ]);
        $module->save();
          
       return back()->with('success','Updated');
    }


    public function delete($id)
    {
        
      $module= Payment::Find($id);
      try {
            $module->delete();
            return redirect()->route('admin.payments.index')->with('success','Deleted');
           
        } catch (\Throwable $th) 
        {
            return redirect()->route('admin.payments.index')->with('warning','Can Not Delete Becaouse The Data Used Some Where');
        }
        
    }


}