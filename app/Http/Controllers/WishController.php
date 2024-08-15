<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use Hash;
use Storage;
use App\Item;
use Con;
use Illuminate\Support\Str;


class WishController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $wish = session()->get('wish');
        if(!$wish) {
            return  redirect()->route('home')->with('warning','Wishlist Is Empty'); 
        }

        return view('wish');
    }
   
 
    public function add_to_wish($id)
    {
        
        $item = Item::find($id);
        if(!$item) {
           return redirect()->back()->with('warning', 'Product Not Exist');
        }
        
        $wish = session()->get('wish');
      
        if(!$wish) {

            $wish = [
                    $id => [
                        "id" => $id,
                        "slug" => $item->slug,
                        "title" => $item->title,
                    ]
            ];
            
            session()->put('wish', $wish);
            return back()->with('success','Product added to Wishlist successfully!');
        }
        
        
         if(isset($wish[$id])) {
            return back()->with('success',count($wish).' Product added to Wishlist successfully!');
         }

           $wish[$id] = [
            "id" => $item->id,
            "slug" => $item->slug,
            "title" => $item->title,
           ];

        session()->put('wish', $wish);
        
         return back()->with('success', count($wish).' Products added to Wishlist successfully!');
    }


 
    public function remove($id)
    {
        
        $wish = session()->get('wish');
        if(isset($wish[$id])) {
            unset($wish[$id]);
            session()->put('wish', $wish);
        }


         return redirect()->back()->with('success', 'Product removed successfully');
    }
    

}