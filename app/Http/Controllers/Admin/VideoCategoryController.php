<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\VideoCategory;
use Auth;
use Con;
use App\Video;

class VideoCategoryController extends Controller
{
    
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $modules = VideoCategory::all();
         return view('admin.video-categories.index',compact('modules'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return view('admin.video-categories.create');
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
            'title' => 'required|max:255|unique:video_categories,title',
            'english' => 'required|max:255|unique:video_categories,english',
        ]);

        VideoCategory::create([
                'title' => $request->title,
                'slug' => str_replace(' ', '-', strtolower($request->english)),
                'english' => $request->english,
        ]);
       
        return redirect()->route('admin.video-categories.index')->with('success','Video Category is successfully added.');
    }


     /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $module = VideoCategory::Find($id); 
        return view('admin.video-categories.edit',compact('module'));
    }


   /**
     * Update the specified resource in storage.
    */
    public function update(Request $request,$id)
    {

        $module = VideoCategory::Find($id);
        $request->validate([
            'title' => 'required|unique:video_categories,title,'.$module->id,
            'english' => 'required|unique:video_categories,english,'.$module->id,
        ]);

         $module->title = $request->title;
         $module->slug = str_replace(' ', '-', strtolower($request->english));
         $module->english = $request->english;
         $module->save();

        return redirect()->route('admin.video-categories.index')->with('success','Video Category is successfully updated.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
       $video = Video::where('category_id',$id)->get();
       
       if(count($video) > 0 ){
            return redirect()->route('admin.video-categories.index')->with('warning','Can not Delete This Category is used in Videos');
       }
       
       $module = VideoCategory::Find($id);
       try {
            $module->delete();
            return redirect()->route('admin.video-categories.index')->with('success','Video Category is successfully deleted.');
             
          } catch (\Throwable $th) {

            return back()->with('warning','Can Not Delete Data is Used Some Where');
          }


    }



}