<?php

namespace App\Http\Controllers\Admin;

use App\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Hash;
use Gate;
use Auth;

class ProfileController extends Controller
{

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function profile($id)
    {  

       $user = User::find($id);
       if (Gate::denies('users.edit','none')) {

         if(Auth::user()->id == $id){

         }elseif(Auth::user()->role->name == 'Admin'){

         }else{

            return redirect()->route('admin.home')->with('warning','You dont have permission'); 
         }

      }



       
      //  if(Auth::user()->role->name != 'Super-admin'){

      //    return back()->with('warning','Updated');

      // }elseif(Auth::user()->role->name != 'Super-admin'){

      // }
        
        $roles = Role::whereNotIn('name', ['super-admin'])->get();

        return view('admin.users.profiles.admin',compact('user','roles'));
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   
        
        $user = User::find($id);

         if($request->has('username')){
            $request->validate([
                'username' => 'required|min:3|unique:users,name,'.$user->id,
              ]);

            $user->name = $request->username;
         }

         if($request->has('email')){

            $request->validate([
              'email' =>'required|email|max:255|unique:users,email,'.$user->id, 
            ]);
            

            $user->email = $request->email;
         }

         if($request->has('role')){
            $user->role_id = $request->role;
         }

         if($request->has('status')){
            $user->status = $request->status;
         }

         if($request->password != null ){
            $user->password = Hash::make($request->password);
         }


        $user->image = $request->image;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->mobile = $request->mobile;
        $user->nic = $request->nic;
        $user->gender = $request->gender;
        $user->bio = $request->bio;
        
        $user->country = $request->country;
         $user->state = $request->state;
         $user->city = $request->city;
         $user->zip = $request->zip;
         $user->address = $request->address;
        $user->save();

        return  response()->json(['message' =>'success'],200);
    }
    

  
    
 
}
