<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

use App\Tag;
use Auth;

use App\Module;
use App\Post;
use App\PostCategory;
use App\PostTag;


class ModuleController extends Controller
{
    
    public function index()
    {
        
          $modules = Module::all(); 
         return view('admin.blogs.modules.index',compact('modules'));
    }
    
    
    public function create()
    {
        
        
         $tags = PostTag::all();
         $PostCat = PostCategory::all();
         return view('admin.blogs.modules.create');
    }
    
    public function store(Request $request)
    {
      
       if($request->has('item')){
            $items = $request->item; 
        }else{
            $items = [];
        }
       
        $request->validate([
            'title' => 'required|max:255|unique:modules,title',
            'plural' => 'required',
            'icon' => 'required',
            'slug' => 'required|max:255|unique:modules,slug',
        ]);
        
         Module::create([
            "plural" => $request->plural,
            "icon" => $request->icon,
            'title' => $request->title,
            'slug' => $request->slug,
            "excerpt" => $request->excerpt,
            "fields"=>serialize($items),
        ]);
        
        return redirect()->route('admin.modules.index')->with('success','Created Successfully');
        
    }
    
    
    public function edit($id)
    {
        
        $module = Module::find($id);
        return view('admin.blogs.modules.edit',compact('module'));
    }
    
    
    public function update(Request $request)
    {
        if($request->has('item')){
            $items = $request->item; 
        }else{
            $items = [];
        }
        
        $module = Module::Find($request->id);
        $request->validate([
            'title' => 'required|unique:modules,title,'.$module->id,
            'slug' => 'required|unique:modules,slug,'.$module->id,
            'plural' => 'required|unique:modules,plural,'.$module->id,
        ]);
        
        $module->icon = $request->icon;
        $module->title = $request->title;
        $module->plural = $request->plural;
        $module->slug = $request->slug;
        $module->fields = serialize($items);
        $module->excerpt = $request->excerpt;
        $module->save();

       return back()->with('success','Updated');
    }
    
    public function delete($id)
    {
        
      $module = Module::Find($id);
      $post = Post::where('module_id',$module->id)->get();
      
      if(count($post) > 0){
           return back()->with('warning','Can Not Delete Data is Used Some Where');
       }
       
        try {
    
            $module->delete();
            return back()->with('success','Deleted');
           
        } catch (\Throwable $th) {
            
            return back()->with('warning','Error Found');
        }
    
   }
    
}