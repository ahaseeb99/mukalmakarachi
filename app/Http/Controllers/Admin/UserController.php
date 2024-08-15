<?php

namespace App\Http\Controllers\Admin;

use App\Profile;
use Hash;
use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use app\Permission;

use Illuminate\Support\Facades\Gate;
class UserController extends Controller

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $roles = Role::whereIn('name',['super-admin'])->pluck('id')->toArray();
        $users = User::whereNotIn('role_id',$roles)->get();

        return view('admin.users.index',compact('roles','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::whereNotIn('name', ['super-admin'])->get();
        return view('admin.users.create',compact('roles'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $request->validate([
                'name' => 'required|string|max:255|unique:users,name',
                'email' =>'required|email|max:255|unique:users,email',
                'password' => 'required|min:6',
            ]);
            
            try {

                $user= User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'role_id' => $request->role_id,
                    'status' => $request->status,
                ]);

                   return back()->with('success','User Added Successfully');  
              } catch (\Throwable $th) {
                 return back()->with('warning','There is a Problem');
            }
        
    }
    
    
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   
       
           $module = User::find($id);    
           $request->validate([
                'name' => 'required|min:3|unique:users,name,'.$module->id,
                'email' => 'required|min:3|unique:users,email,'.$module->id,
            ]);
          
            try {

                   if($request->password != ''){
                        $module->password = Hash::make($request->password);
                   }
                   
                   $module->name =  $request->name;
                   $module->email =  $request->email;
                   $module->role_id =  $request->role_id;
                   $module->status =  $request->status;
                   $module->save();
                   
                  return back()->with('success','User Updated Successfully');  
             
              } catch (\Throwable $th) {

                 return back()->with('warning','There is a Problem');
              }
        
    }
    
    
      /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Gate::denies('users.edit','none')) {
            return redirect()->route('admin.home')->with('warning','You dont have permission');  
         }
        
        $module = User::find($id);
        $roles = Role::whereNotIn('name', ['super-admin'])->get();
        
        return view('admin.users.edit',compact('roles','module'));
    }


    /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Profile  $profile
      * @return \Illuminate\Http\Response
    */
    public function delete($id)
    {
           try {
                    User::destroy($id);            
                    return back()->with('success','User is successfully deleted.');         
                 } catch (\Exception $e) {
                 return back()->with('warning','Can Not Delete Data is Used Some Where');
            }
           
    }
    
    
     /**
      * Permissions Display.
     **/
    public function Permissions($id)
    {
    
        $permissions = Permission::all();
        $user = User::find($id);
        $userpermission = unserialize($user->permissions);
        $rp = Permission::whereIn('name',$userpermission)->get()->pluck('name')->toArray();
        
        return view('admin.users.permissions',compact('permissions','rp','user'));
    }


    /*** Permissions add ***/
    public function addpermission(Request $request,$id)
    {        
          $user = User::find($id);
          $request->request->remove('_token');
          $permissions = array_values($request->all());
          $user->permissions = serialize($permissions);
          $user->save();
            
        return back();
    }



}