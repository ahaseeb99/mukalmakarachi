<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Author;
use Auth;
use Con;
use App\Item;
use App\Blog;

class AuthorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $modules = Author::all();
         return view('admin.authors.index',compact('modules'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.authors.create');
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
            'title' => 'required|max:255|unique:authors,title',
            'english' => 'required|max:255|unique:authors,english',
        ]);

         try {
        
            Author::create([
                'title' => $request->title,
                'english' => $request->english,
                'slug' => str_replace(' ', '-', strtolower($request->english)),
                'des' =>  $request->des,
                'thumbnail' => $request->thumbnail,
            ]);
             
            return redirect()->route('admin.authors.index')->with('success','Author is successfully added');
        
        } catch (\Throwable $th) {
             return back()->with('warning','Error');
        }
    
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $module = Author::Find($id); 
        return view('admin.authors.edit',compact('module'));
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

        $module = Author::Find($id);
        $request->validate([
            'title' => 'required|max:255|unique:authors,title',
            'english' => 'required|unique:authors,english,'.$module->id,
        ]);

        $module->title = $request->title;
        $module->english = $request->english;
        $module->slug = str_replace(' ', '-', strtolower($request->english));
        $module->des = $request->des;
        $module->thumbnail = $request->thumbnail;
        $module->save();
        
        
        return redirect()->route('admin.authors.index')->with('success','Author is successfully updated.');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $item = Item::where('author_id',$id)->get();
        $blog = Blog::where('author_id',$id)->get();

        if(count($item) > 0 ){
            return back()->with('warning','Can Not Delete Data is Used Some Where');
        }

        if(count($blog) > 0 ){
            return back()->with('warning','Can Not Delete Data is Used Some Where');
        }
        
       $module = Author::Find($id);

        try {
            $module->delete();
            return back()->with('success','Author is successfully deleted.');
        } catch (\Throwable $th) {
            return back()->with('warning','Can Not Delete Data is Used Some Where');
        }
             
    }



}