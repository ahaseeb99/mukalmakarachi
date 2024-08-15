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
use App\Category;
use App\Tag;
use App\Module;
use Con;
use Illuminate\Support\Str;
use Mail;
use App\Order;
use App\Review;


class DashboardController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('auth');
    }
    
    
    public function index(){
  
         $id = Auth::user()->id;
         $orders = Order::where('user_id',$id)->get();
         
        // dd($orders);
         return view('dashboard.index',compact('orders'));
     }
     
     
    public function profile_update(Request $request,$id)
    {
        
        //dd($request->all());
         
         $user = User::find($id);

        //  if($request->has('username')){
        //     $request->validate([
        //         'username' => 'required|min:3|unique:users,name,'.$user->id,
        //       ]);
        //     $user->name = $request->username;
        //  }
         
         
        //  if($request->has('email')){
        //     $request->validate([
        //       'email' =>'required|email|max:255|unique:users,email,'.$user->id, 
        //     ]);
        //     $user->email = $request->email;
        //  }
         
         
        //   if($request->password != null ){
        //     $user->password = Hash::make($request->password);
        //  }


        if($request->hasFile('image')){ 
            $image = $request->file('image');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move('admin/upload/', $new_name);
            $user->image = 'admin/upload/'.$new_name;
        }
        
        $user->gender = $request->gender;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->mobile = $request->phone;
        $user->gender = $request->gender;
        $user->birthday = $request->birthday;
        $user->bio = $request->bio;
        $user->country = $request->country;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->zip = $request->zip;
        $user->address = $request->address;
        $user->save();

        return back()->with('success','Updated');
     }


   public function orders()
   {
      
      $id = Auth::user()->id;
      $orders = Order::where('user_id',$id)->get();
      return view('dashboard.orders.index',compact('orders'));
   }
    



}