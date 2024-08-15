<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;
use Illuminate\Support\Facades\Gate;

class RoleController extends Controller
{
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::denies('users.roles','none')) {       
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }

         $roles = Role::whereNotIn('name', ['super-admin'])->get();
         return view('admin.roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('users.roles','none')) {       
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }
        
        return view('admin.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::denies('users.roles','none')) {       
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }
     
        $request->validate([
            'name' => 'required|unique:permissions',
            'detail' => 'required'
        ]);
        

        Role::create([
            'name' => $request->name,
            'detail' => $request->detail,
        ]);

        return redirect()->route('admin.roles.index')->with('success','Created Successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        if (Gate::denies('users.roles','none')) {       
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }
  
        return view('admin.roles.edit',compact('role'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        if (Gate::denies('users.roles','none')) {       
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }
    
        $request->validate([
            'name' => 'required|unique:roles,name,'.$role->id,
            'detail' => 'required',
        ]);

        $role->name = $request->name;
        $role->detail = $request->detail;
        $role->save();

        return redirect()->route('admin.roles.index')->with('success','Updated');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        if (Gate::denies('users.roles','none')) {       
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }

        try {

            $role->delete();
            return redirect()->route('admin.roles.index');
           
        } catch (\Throwable $th) {
            
            return redirect()->route('admin.roles.index')->with('error','Can Not Delete Becaouse The Data is Used Some Where');
        }

    }



   


    
}
