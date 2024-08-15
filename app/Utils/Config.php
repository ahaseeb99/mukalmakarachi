<?php

namespace App\Utils;

use App\User;
use App\Setting;
use App\Module;
use App\Role;
use App\Category;
use App\Item;
use App\Author;
use Con;
use Mail;
use App\Order;
use App\Message;
use Auth;
use App\VideoCategory;
use App\BlogCategory;
use App\Blog;
use App\Review;
use App\Video;
use App\Tweet;
class Config {
      

      public function videos(){
        return Video::all();    
      } 

     public function tweet(){
         return Tweet::all();    
     } 
     
     public function video_categories(){
         return VideoCategory::all();    
     } 

     public function blog_categories(){
        return BlogCategory::all();    
     } 

   
      
      public function books(){      
        return Item::where("type","book")->orderBy('id', 'DESC')->get();    
     } 

      public function magazines(){
        return Item::where("type","magazine")->orderBy('id', 'DESC')->get();     
      } 
      
      public function item_Stock($id){     
          $item =  Item::find($id);
          $stockitem = array_sum($item->stocks->pluck('qty')->toArray());
          $sellitem = array_sum($item->order->pluck('qty')->toArray());
          $currentStock = $stockitem - $sellitem; 
        
         return  $currentStock;  
      } 
     

      public function items(){
      
         return Item::all();    
      }
      
       public function item($id){
      
         return Item::find($id);    
      }
      
      
   
      public function categories(){
      
         return Category::all();    
      }
      
      public function order($id){
      
         return Order::find($id);    
      }
      
      public function orders(){
      
         return Order::all();    
      }

      public function blogs(){
      
        return Blog::all();    
     }

     public function reviews(){
      
      return Review::orderBy('created_at','DESC')->get();    
     }

     public function authors(){

      return Author::all();
     }
      

    public function settings(){
        
        $setting = Setting::all();
        $setting = $setting->pluck('value','name');
        $setting= $setting->toArray();
        $setting = (object)$setting;
        return $setting;
      }
      
      
       public function modules(){
           
    
        return Module::all();    
      }
      
        
      public function blog_cat($id){  
    
        return Blog::where('category_id',$id)->get();    
      }
    
    
     public function user($id){
        
        return User::find($id);
      
     }
     
     public function get_product_by_category($id){
         
           $category = Category::where('id',$id)->first();
            
            if($category->parent == 0){
                
                   $array = [];
                    $childcats = $category->child->pluck('id')->toArray(); 
                    foreach($childcats as $child){
                       
                       foreach(Item::all() as $item){
                            $cats = unserialize($item->categories_id);
                              if (in_array($child,$cats)){
                                array_push($array,$item->id);
                              }
                        } 
                     }
                   
                   return $modules =  Item::whereIn('id',$array)->get(); 
                
            }else{
                
                   $array = [];
                   foreach(Item::all() as $item){
                        $cats = unserialize($item->categories_id);
                        
                     if (in_array($category->id,$cats)){
                            array_push($array,$item->id);
                      }
                   }
                   
                 return  $modules = Item::whereIn('id',$array)->get();
    
               }
        
     }
    
    
     
     public function get_product_by_tag($id){
         
           $category = Tag::where('id',$id)->first();
            
           $array = [];
           foreach(Item::all() as $item){
                $cats = unserialize($item->tags_id);
                
             if (in_array($category->id,$cats)){
                    array_push($array,$item->id);
              }
           }
           
           
         return  $modules = Item::whereIn('id',$array)->get();
    
     }
     
     
     public function get_product_by_brand($id){
         
           $category = Brand::where('id',$id)->first();
            
           $array = [];
           foreach(Item::all() as $item){
                $cats = unserialize($item->brands_id);
                
             if (in_array($category->id,$cats)){
                    array_push($array,$item->id);
              }
           }
           
           
         return  $modules = Item::whereIn('id',$array)->get();
    
     }
     
     
    
     public function getUsersByRoleName($name){
         
        $roles = Role::whereIn('name',$name)->pluck('id')->toArray();
        $roles = User::whereIn('role_id',$roles)->get();
          
        return $roles; 
      }
    
    
     public function getUsersWhereNotIn($name){
    
          $roles = Role::whereNotIn('name',$name)->pluck('id')->toArray();
          $roles = User::whereIn('role_id',$roles)->get();
    
        return $roles;
      }
      
      
      public function posts($type){
    
          $post = Module::where('slug',$type)->first();
          return $post->post;
      }
      
      
      public function getChat($id){
          
           $auth = Auth::user()->id;
           $m = [];
           $mesages = Message::where('sender_id',$id)->orWhere('receiver_id',$id)->get();
            
            foreach($mesages as $msg){
                
                if($msg->sender_id == $auth){
                    array_push($m,$msg->id);
                }
                
                if($msg->receiver_id == $auth){
                    array_push($m,$msg->id);
                }
            
           }
    
    
          $post = Message::whereIn('id',$m)->orderBy('created_at','ASC')->get();
          return $post;
      }
      
      
      
   

      public function cart_info(){
        
        //session()->forget('cart');
        
        //dd(session('cart'));

           $subTotal = 0 ;      
           $items = array();
           
           foreach(session('cart') as $id => $details){
                        
                        
               $p = Item::find($details['id']);

               if($p){
                   
                   if($details['type'] == 'soft'){
                        
                        $pprice = $p->pdf_price; 
                        $pqty = 1;
                        $currency = "$";
                        $pcost = $pqty * $pprice;
                        $subTotal += $pcost * 150.93;
                       
                   
                   }else{
                        
                        $pprice = $p->price;
                        $pqty = $details['quantity'];
                        $currency = "RS";
                        $pcost = $pqty * $pprice;
                        $subTotal += $pcost;
                    }
                   
                  
                    array_push($items,array(
                        "tt" => $p->type,
                        "cartid" => $id,
                        "title" => $p->title,
                        "id" => $p->id,
                        "slug" => $p->slug,
                        "price" => $pprice, 
                        "quantity" => $pqty,
                        "type" => $details['type'],
                        "currency" => $currency,
                        "total" => $pcost,
                   ));
                   
               }
               
               
           }
                  
             $cartinfo = array([
                 "items" => $items,
                 "total" => $subTotal,
             ]);
               
               
          return (object)$cartinfo[0];
      }
      
      
      
      
      
    public function get_client_ip()
    {
        $ipaddress = '';
        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } else if (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } else if (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        } else {
            $ipaddress = 'UNKNOWN';
        }
    
        return $ipaddress;
    }




}

?>

