<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Blog;
use Auth;
use Con;

class BlogController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Blog::all();
        return view('admin.posts.index',compact('modules'));
    }


    /**
     * Show the form for creating a new resource
     */
    public function create()
    { 
       return view('admin.posts.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  

        //dd($request->all());

        $request->validate([
            'title' => 'required|max:255|unique:blogs,title',
            'english' => 'required|max:255|unique:blogs,english',
        ]);

        Blog::create([
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->english)),
            'english' => $request->english,
            'date' => $request->date,
            'author_id' => $request->author_id,
            'category_id' => $request->category_id,
            'thumbnail' => $request->thumbnail,
            'des' => $request->des,
        ]);
        
        return redirect()->route('admin.blogs.index')->with('success','Asnaf is successfully added');
    }


    /**
     * Show the form for editing the specified resource.
    */
    public function edit($id)
    {
        $module = Blog::Find($id); 
        return view('admin.posts.edit',compact('module'));
    }


   /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $module = Blog::Find($id);
        $request->validate([
            'title' => 'required|unique:blogs,title,'.$module->id,
            'english' => 'required|unique:blogs,english,'.$module->id,
        ]);

        $module->title = $request->title;
        $module->slug = str_replace(' ', '-', strtolower($request->english));
        $module->english = $request->english;
        $module->date = $request->date;
        $module->author_id = $request->author_id;
        $module->category_id = $request->category_id;
        $module->thumbnail = $request->thumbnail;
        $module->des = $request->des;
        $module->save();

        return redirect()->route('admin.blogs.index')->with('success','Asnaf is successfully updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {

       $module = Blog::Find($id);

       try {
            $module->delete();
            
            return redirect()->route('admin.blogs.index')->with('success','Asnaf is successfully deleted');
        
          } catch (\Throwable $th) {
            return back()->with('warning','Can Not Delete Data is Used Some Where');
          }

    }


}