<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Category;
use App\Item;
use Con;
class CategoryController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $modules = Category::all();
         return view('admin.categories.index',compact('modules'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.categories.create');
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
            'title' => 'required|max:255|unique:categories,title',
            'english' => 'required|max:255|unique:categories,english',
        ]);

         try {
        
            Category::create([
                'title' => $request->title,
                'slug' => str_replace(' ', '-', strtolower($request->english)),
                'english' => $request->english,
            ]);
             
            return redirect()->route('admin.categories.index')->with('success','category is successfully added');
        
        } catch (\Throwable $th) {

             //throw $th;
             return back()-> with('warning','Error');
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
        $module = Category::Find($id);
        return view('admin.categories.edit',compact('module'));
    }


     /**
     * Update the specified resource in storage.
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

        $module = Category::Find($id);
        $request->validate([
            'title' => 'required|unique:categories,title,'.$module->id,
            'english' => 'required|unique:categories,english,'.$module->id,
        ]);

         $module->title = $request->title;
         $module->english = $request->english;
         $module->slug = str_replace(' ', '-', strtolower($request->english));
         $module->save();

        return redirect()->route('admin.categories.index')->with('category is successfully updated','Updated');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $item = Item::where('category_id',$id)->get();
        if(count($item) > 0 ){
            return back()->with('warning','Can Not Delete Data is Used Some Where');
        }
        
          $module = Category::Find($id);   
        try {
                $module->delete();
                return back()->with('success','category is successfully deleted');
            } catch (\Throwable $th) {
                return back()->with('warning','Can Not Delete Data is Used Some Where');
            }
            
    }
    
    
}
