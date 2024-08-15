<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Video;
use Auth;
use Con;

class VideoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
         $modules = Video::all();
         return view('admin.videos.index',compact('modules'));
    }


    /**
     * 
     * Show the form for creating a new resource
     * 
     */
    public function create()
    {
      
        return view('admin.videos.create');
    }

    /**
     * 
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {  

    
        $request->validate([
            'title' => 'required|max:255|unique:videos,title',
            'english' => 'required|max:255|unique:videos,english',
        ]);

        Video::create([
            'title' => $request->title,
            'slug' => str_replace(' ', '-', strtolower($request->english)),
            'category_id' => $request->category_id,
            'des' => $request->des,
            'video' => $request->video,
            'english' => $request->english,
            'thumbnail' => $request->thumbnail,
        ]);
       
         return redirect()->route('admin.videos.index')->with('success','Video is successfully added.');
    }


     /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $module = Video::Find($id); 
        return view('admin.videos.edit',compact('module'));
    }


   /**
     * 
     * Update the specified resource in storage.
     * 
     */
    public function update(Request $request,$id)
    {

        $module = Video::Find($id);
        $request->validate([
            'title' => 'required|unique:videos,title,'.$module->id,
            'english' => 'required|unique:videos,english,'.$module->id,
        ]);

        $module->title = $request->title;
        $module->slug = str_replace(' ', '-', strtolower($request->english));
        $module->thumbnail = $request->thumbnail;
        $module->category_id = $request->category_id;
        $module->des = $request->des;
        $module->video = $request->video;
        $module->english = $request->english;
        $module->save();

        return redirect()->route('admin.videos.index')->with('success','Video is successfully updated.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {

       $module = Video::Find($id);

       try {
            $module->delete();
            
            return redirect()->route('admin.videos.index')->with('success','Video is successfully deleted.');
          
           
       } catch (\Throwable $th) {
            return back()->with('warning','Can Not Delete Data is Used Some Where');
          }

    }


}