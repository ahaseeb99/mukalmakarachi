<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Review;
use Illuminate\Support\Facades\Gate;

class ReviewController extends Controller
{

    public function index()
    {
        $modules = Review::all();
         return view('admin.reviews',compact('modules'));
    }

    public function delete($id)
    {
       
        $modules = Review::find($id)->delete();
        return back()->with("success","Comment is successfully Deleted");
    }

    public function type($id)
    {
        $modules = Review::find($id);
        $modules->status  = 1;
        $modules->save();
        return back()->with("success","Approved");
        
    }


    public function status($id,$status)
    {
          $order = Review::find($id);    
          $order->status = $status;
          $order->save();
          
       return back()->with('success','Updated');
    }
   
    
}