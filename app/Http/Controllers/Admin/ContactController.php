<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Auth;
use App\Item;
use App\Contact;

class ContactController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $modules = Contact::all();
         
         return view('admin.contacts.index',compact('modules'));
    }

 
 
    /**
     * Remove the specified resource from storage.
     *

     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $module= Contact::Find($id);
        try {

            $module->delete();
            return back()->with('success','Contact is successfully Deleted');

        } catch (\Throwable $th) {    
           return back()->with('warning','Can Not Delete Becaouse The Data Used Some Where');
        }
    }
           
}