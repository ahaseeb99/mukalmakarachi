<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Auth;
use App\Item;

class MagazineController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $modules = Item::where("type","magazine")->get();         
         return view('admin.magazines.index',compact('modules'));
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $modules = Item::all();
        return view('admin.magazines.create',compact('modules'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());

        $request->validate([
            'title' => 'required|max:255|unique:items,title',
            'english' => 'required|max:255|unique:items,english',
        ]);

        Item::create([
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->english)),
            'english' => $request->english,

            'price' => $request->price ,
            'pdf_price' => $request->pdf_price ,
     
            
            'thumbnail' => $request->thumbnail,
            'pdf' => $request->pdf,
            
            'des' => $request->des,
            "type" => "magazine",
        ]);

        return redirect()->route('admin.magazines.index')->with('success','Magazine is successfully added');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Item::find($id); 
        return view('admin.magazines.edit',compact('module'));
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
        $module = Item::Find($id);
        $request->validate([
            'title' => 'required|unique:items,title,'.$module->id,
            'english' => 'required|unique:items,english,'.$module->id,
        ]);

        $module->english =  $request->english;
        $module->title = $request->title;
        $module->slug = str_replace(' ', '-', strtolower($request->english));
        $module->price = $request->price;
        $module->pdf_price = $request->pdf_price;
        $module->thumbnail = $request->thumbnail;
        $module->pdf = $request->pdf;
        $module->des = $request->des;
        $module->save();

       return redirect()->route('admin.magazines.index')->with('success','Magazine is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *

     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $module= Item::Find($id);
        try {

            $module->delete();
            return redirect()->route('admin.magazines.index')->with('success','Magazine is successfully deleted');

        } catch (\Throwable $th) {    
           return back()->with('warning','Can Not Delete Becaouse The Data Used Some Where');
        }
    }
           
}