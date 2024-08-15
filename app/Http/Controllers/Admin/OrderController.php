<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\User;
use App\Item;
use Illuminate\Support\Facades\Gate;
use Con;
class OrderController extends Controller
{
    
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {    
        $sstart = null;
        $send = null;
        $sstatus = $request->sstatus;
        $pstatus = $request->pstatus;
        $scustomer = $request->scustomer;  
        $modules = Order::whereNotIn('id',[0]);
       
        if($request->sstart != null){
             $sstart = date('Y-m-d', strtotime($request->sstart));
             $send =  date('Y-m-d', strtotime($request->send));
             $modules = $modules->whereBetween('date', [$sstart, $send]);  
        }
         
        if($sstatus != 'all'){
            $modules = $modules->where('status',$sstatus);  
        }
        
        if($pstatus != 'all'){
            $modules = $modules->where('payment_status',$pstatus);  
        }
        
        if($scustomer != 'all'){
            $modules = $modules->where('user_id',$scustomer);  
        }
        
        $modules = $modules->get();
        return view('admin.orders.index',compact('modules','sstart','send','sstatus','pstatus','scustomer'));
    }
    
    
 
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Order::all();
        return view('admin.orders.index',compact('modules'));
    }
    
    
  

 
     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $user = User::all();
        $item = Item::all();
        $module = Order::Find($id);
        
        return view('admin.orders.edit',compact('module','user','item'));
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
        
          $order = Order::find($id);    
          $order->payment_method = $request->payment_method;
          $order->payment_status =  $request->payment_status;
          $order->status = $request->status;
          $order->additional_note = $request->additional_note;  
          $order->save();
          
       return redirect()->route('admin.orders.index')->with('success','Order is successfully updated');
    }

    
    public function delete($id)
    {
       $module= Order::Find($id);
      try {
            $module->delete();
            return redirect()->route('admin.orders.index')->with('success','Order is successfully deleted');
           
        } catch (\Throwable $th) 
        {
            return redirect()->route('admin.orders.index')->with('warning','Can Not Delete Becaouse The Data Used Some Where');
        }
    }


    public function status($id,$status)
    {
          $order = Order::find($id);    
          $order->status = $status;
          $order->save();
          
       return back()->with('success','Updated');
    }

}