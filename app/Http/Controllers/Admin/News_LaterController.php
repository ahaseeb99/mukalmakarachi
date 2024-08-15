<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Permission;
use App\Role_Permission;
use Illuminate\Support\Facades\Gate;
use App\Category;
use App\PostType;
use App\Complain;
use Auth;
use App\User;
use App\NewsLater;

class News_LaterController extends Controller
{
    
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       //$this->middleware('CheckAjax', ['only' => ['get_all_message']]);
    }

      /**
     * Create a new controller instance.
     *
     * @return void
     */
  
  public function index()
  {
      $newslater=NewsLater::all();
      return view('admin.news_later',compact('newslater'));
  }
  
  public function delete($id)
  {
       $newslater=NewsLater::find($id);
       $newslater->delete();
       return back()->with('success',"Deleted Successfully");
  }
    
    
    
    
    
    
    
    
}