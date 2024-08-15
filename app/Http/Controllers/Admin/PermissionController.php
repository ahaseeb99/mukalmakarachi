<?php

namespace App\Http\Controllers\Admin;

use App\Permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;

class PermissionController extends Controller
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
        //

        if (Gate::denies('users.permissions','none')) {     
            
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }

        
        $permissions = Permission::all();

        return view('admin.permissions.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::denies('users.permissions','none')) {     
            
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }
         
    
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Gate::denies('users.permissions','none')) {     
            
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }
         
     
        $request->validate([
            'name' => 'required|unique:permissions'
        ]);
        //
        
        Permission::create([
            'name' => $request->name,
            'detail' => $request->detail,
        ]);

        return redirect()->route('admin.permissions.index')->with('success','Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        if (Gate::denies('users.permissions','none')) {     
            
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }
         
        
        //
        return view('admin.permissions.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        if (Gate::denies('users.permissions','none')) {     
            
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }
         
        
        $request->validate([
            'name' => 'required|unique:permissions,name,'.$permission->id,
        ]);

        $permission->name = $request->name;
        $permission->detail = $request->detail;
        $permission->save();

        return redirect()->route('admin.permissions.index')->with('success','Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        if (Gate::denies('users.permissions','none')) {     
            
            return redirect()->route('admin.home')->with('warning','You Dont Have Permissions');
         }
         

        //
              try {

                $permission->delete();
    
                return redirect()->route('admin.permissions.index')->with('success','Deleted');
            
            } catch (\Throwable $th) {
                
                return redirect()->route('admin.permissions.index')->with('error','Can Not Delete Becaouse The Data Used Some Where');
            }
    }
}
