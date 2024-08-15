<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Tag;
use Auth;
use App\Module;
use App\Post;


class PostController extends Controller
{
    
    public function index($slug)
    {
        
        $module = Module::where("plural",$slug)->first();
        $posts = Post::where('module_id',$module->id)->get();
        return view('admin.blogs.posts.index',compact('module','posts'));
    }
    
    public function create($slug)
    {
        $module = Module::where("plural",$slug)->first();
        
        return view('admin.blogs.posts.create',compact('module'));
    }
    
    public function store(Request $request,$slug)
    {
        
        //dd($request);
       
           $module = Module::where("plural",$slug)->first();
      
           if($request->has('items')){
                $items = $request->items; 
            }else{
                $items = [];
            }
           
 

          $request->validate([
            'title' => 'required|max:255|unique:posts,title',
            'slug' => 'required|max:255|unique:posts,slug',
        ]);
        
        
  
     
         Post::create([
            'module_id' => $module->id,
            'title' => $request->title,
            'slug' => $request->slug,
            'thumbnail' => $request->thumbnail,
            'des' => $request->des,
            'gallery' => $request->gallery,
            "status" => $request->status,
            "excerpt" => $request->excerpt,
            "attributes"=>serialize($items),
        ]);

        return redirect()->route('admin.posts.index',$module->plural)->with('success','Created Successfully');
        
    }
    
    public function edit($id)
    {
        
        $post = Post::find($id);
        
        return view('admin.blogs.posts.edit',compact('post'));
    }
    
    
    
    public function update(Request $request,$id)
    {   
        
        $module = Post::Find($id);
        $request->validate([
            'title' => 'required|unique:posts,title,'.$module->id,
            'slug' => 'required|unique:posts,slug,'.$module->id,
        ]);
       
        if($request->has('items')){
            $attributes = $request->items; 
        }else{
            $attributes = [];
        }
        
        
         $module->attributes = serialize($attributes);
         $module->title = $request->title;
         $module->slug = $request->slug;
         $module->thumbnail = $request->thumbnail;
         $module->gallery = $request->gallery;
         $module->status = $request->status;
         $module->excerpt = $request->excerpt;
         $module->des = $request->des;
         $module->save();

       return back()->with('success','Updated');
    }
    
    
  
     public function delete($id)
    {
           
       $module = Post::find($id);
       
        try {
            $module->delete();
            return back()->with('success','Deleted');
           
        } catch (\Throwable $th) {
            return back()->with('warning','Error Found');
        }
            
    }
}