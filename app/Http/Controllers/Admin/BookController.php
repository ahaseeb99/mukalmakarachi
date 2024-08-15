<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Category;
use App\Tag;
use Auth;
use App\Item;

class BookController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $modules = Item::where("type","book")->get();   
         return view('admin.books.index',compact('modules'));
    }

 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.books.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());

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
            "category_id" => $request->category_id,
            "author_id" => $request->author_id,
            "type" => "book",
        ]);
        
        return redirect()->route('admin.books.index')->with('success','Book is successfully added');

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
        return view('admin.books.edit',compact('module'));
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
      //  dd($request->all());

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
        $module->author_id = $request->author_id;
        $module->category_id = $request->category_id;
        $module->des = $request->des;
         $module->save();

       return redirect()->route('admin.books.index')->with('success','Book is successfully updated');
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
            return redirect()->route('admin.books.index')->with('success','Book is successfully deleted');

        } catch (\Throwable $th) {
            
            return redirect()->route('admin.books.index')->with('warning','Can Not Delete Becaouse The Data Used Some Where');
        }
    }
       
}
