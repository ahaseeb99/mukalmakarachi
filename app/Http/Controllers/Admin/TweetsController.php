<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Tweet;
use Auth;
use Con;

class TweetsController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $modules = Tweet::all();
        return view('admin.tweets.index',compact('modules'));
    }


    /**
     * Show the form for creating a new resource
     */
    public function create()
    { 
       return view('admin.tweets.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  

    

        $request->validate([
            'title' => 'required',
            'english' => 'required|max:255|unique:tweets,english',
        ]);

        Tweet::create([
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->english)),
            'english' => $request->english,
            'date' => $request->date,
            'author_id' => $request->author_id,
            "excerpt" => "",
            'thumbnail' => $request->thumbnail,
            'des' => $request->des,
        ]);
        return back()->with('success','Created Successfully');
    }


    /**
     * Show the form for editing the specified resource.
    */
    public function edit($id)
    {
     
        $module = Tweet::Find($id); 
        return view('admin.tweets.edit',compact('module'));
    }


   /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {

        $module = Tweet::Find($id);
        $request->validate([
            'title' => 'required',
            'english' => 'required|unique:tweets,english,'.$module->id,
        ]);

        $module->title = $request->title;
        $module->slug = str_replace(' ', '-', strtolower($request->english));
        $module->english = $request->english;
        $module->date = $request->date;
        $module->author_id = $request->author_id;
        $module->excerpt = "";
        $module->thumbnail = $request->thumbnail;
        $module->des = $request->des;
        $module->save();

        return back()->with('success','Updated');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {

       $module = Tweet::Find($id);

       try {
            $module->delete();
            return back()->with('success','Deleted');
          } catch (\Throwable $th) {
            return back()->with('warning','Can Not Delete Data is Used Some Where');
          }

    }


}