<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\BlogCategory;
use Con;
use App\Item;
class BlogCategoryController extends Controller
{
    
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
         $modules = BlogCategory::all();
         return view('admin.blog-categories.index',compact('modules'));
    }


    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog-categories.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|max:255|unique:blog_categories,title',
            'english' => 'required|max:255|unique:blog_categories,english',
        ]);

      //  try {
        
            BlogCategory::create([
                'title' => $request->title,
                'slug' => str_replace(' ', '-', strtolower($request->english)),
                'english' => $request->english,
            ]);
             
          return redirect()->route('admin.blog-categories.index')->with('success','Asnaf Category is successfully added');
        
        // } catch (\Throwable $th) {
        //      return back()->with('warning','Error');
        //  }   
    }


   /**
     * 
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $module = BlogCategory::Find($id);
     
        return view('admin.blog-categories.edit',compact('module'));
    }


   /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $module = BlogCategory::Find($id);
        $request->validate([
            'title' => 'required|unique:blog_categories,title,'.$module->id,
            'english' => 'required|unique:blog_categories,english,'.$module->id,
        ]);

         $module->title = $request->title;
         $module->english = $request->english;
         $module->slug = str_replace(' ', '-', strtolower($request->english));
         $module->save();

         return redirect()->route('admin.blog-categories.index')->with('success','Asnaf Category is successfully updated');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {

        $item = Item::where('category_id',$id)->get();
        if(count($item) > 0 ){
            return back()->with('warning','Can Not Delete Data is Used Some Where');
        }
        
          $module = BlogCategory::Find($id);   
        //try {
                $module->delete();
                 return redirect()->route('admin.blog-categories.index')->with('success','Asnaf Category is successfully deleted');
            // } catch (\Throwable $th) {
            //     return back()->with('warning','Can Not Delete Data is Used Some Where');
            // }
            
    }
    
    

}