<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;


class SettingController extends Controller
{
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('CheckUserStatus');
    }
    

    public function all()
    {
        if (Gate::denies('settings.create','none')) {
            return redirect()->route('admin.home')->with('warning','You dont have permission');  
         }

        $settings = Setting::all();
        return view('admin.settings.index',compact('settings'));
    }

    public function store(Request $request)
    {

        if (Gate::denies('settings.create','none')) {
            return redirect()->route('admin.home')->with('warning','You dont have permission');  
         }

        Setting::create([
            "name" => $request->name,
            "value" => $request->value,
        ]);

        return back()->with('success','Created');
    }
    

      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $settings = Setting::find($id);
        $settings->delete();

        return back()->with('success','Deleted');

    }
    
   


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function setting_update(Request $request)
    {
    
  
        $request->request->remove('_token');
        $data= $request->all(); 
        $fields = Setting::all();
        
        foreach ($fields as $key => $value) {
            $name = $value->name; 
            if(array_key_exists($name,$data)){
             $val = $data[$value->name];
             Setting::where('id', '=',$value->id)->update(['value'=> $val]);
            }
        }

        return response()->json([
            'message' => 'success'
        ],200);

    }
    
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function setting_update1(Request $request)
    {
      

        $request->request->remove('_token');
        $data= $request->all(); 
        $fields = Setting::all();
        
        foreach ($fields as $key => $value) {
            $name = $value->name; 
            if(array_key_exists($name,$data)){
             $val = $data[$value->name];
             Setting::where('id', '=',$value->id)->update(['value'=> $val]);
            }
        }

        return back()->with('success','Updated');
    }


    public function shop_settings()
    {
        return view('admin.settings.shop');
    }
    
    public function general()
    {
        return view('admin.settings.general');
    }
    
    public function customizations()
    {
        return view('admin.settings.customizations');
    }

    public function mail()
    {
        return view('admin.settings.mail');
    }
    
     public function filemanager()
    {
        return view('admin.filemanager');
    }

}