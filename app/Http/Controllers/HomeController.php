<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use Hash;
use App\Role;
use Storage;
use App\Item;
use App\Form;
use App\Category;
use App\Module;
use Con;
use Illuminate\Support\Str;
use Mail;
use App\NewsLater;
use App\Review;
use App\Order;
use Socialite;
use App\Author;
use App\Blog;
use App\Tweet;
use App\BlogCategory;
use App\Video;
use App\Setting;
use App\Contact;

class HomeController extends Controller
{
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    
        $posts = Module::where('slug','blog')->first();
        $posts = $posts->post;
        $testimonail = Module::where('slug','testimonail')->first();
        $testimonail = $testimonail->post;
       
        $service= Module::where('slug','service')->first();
        $service = $service->post;
       
        return view('wel',compact('posts','testimonail','service'));        
    }
    

    public function videos()
    {
        $items = Video::paginate(2);
        return view('videos',compact('items'));
    }

    public function videos_category(Request $request)
    {
        $search = $request->s;
        $video_id = $request->video_id;
        $items = Video::orderBy('title', 'DESC');

        if($request->video_id != 'all' ){
          $items = $items->where('category_id',$request->video_id);
        }

        if($search != '' ){
          $items = $items->where('title', 'LIKE', "%{$search}%");
        }


        $items = $items->paginate(8);

        return view('videos',compact('items','search','video_id'));
    }
    
    
    public function login_ajax(Request $request)
    {
        
        if(Auth::check()){
            return response()->json([
                "message" => "You are already logged In",
                ],500);
        }
        
        $credentials = $request->only('email','password');
        
        if(Auth::attempt($credentials)){
            
            return response()->json([
                "message" => "You Are logged in Now",
               ],200);
        }

        return response()->json([
                "message" => "Invlaid Email or Password",
               ],500);
    }
    
    public function register_ajax(Request $request)
    {
        
        if(Auth::check()){
            return response()->json([
                "message" => "You are already logged In",
                ],500);
        }
        
         $user = User::where('email',$request->email)->get();
         
         if(count($user) > 0 ){
             return response()->json([
                "message" => "Email allready Exist",
               ],500);
         }
    
        $role = Role::where('name','Customer')->first();
        try {

             $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $role->id,
                'mobile' => $request->phone,
                'status' => 'approved',
             ]);
             
             return response()->json([
                "message" => "Register Success Please Login Now",
               ],200);

             
        } catch (\Throwable $th) {
                return response()->json([
                "message" => "Error",
               ],500);  
        }
        
        
    }
    
    

    public function review_add(Request $request)
    {
        
        $id = $request->id;
        $comment = $request->comment;

        Review::create([
            'user_id' =>Auth::user()->id,
            'body' =>$comment,
            'blog_id' =>$id,
            'type' =>$request->type,
        ]);
       
        return back()->with('success','Added Successfully');
    }

    public function blogs_category_search(Request $request)
    {
      
        $search = $request->s;
        $category = BlogCategory::find($request->category);
        $items = Blog::where('title', 'LIKE', "%{$search}%");
        $items = $items->where('category_id', $request->category)->get();
        
        return view('category',compact('items','search','category'));
    }


    public function blogs()
    {
        $items = Blog::all();
        return view('blogs',compact('items'));
    }

    public function blog($slug)
    {
        $item = Blog::where('slug',$slug)->first();
        $reviews = Review::where('blog_id' , $item->id)->where("type","asnaf")->get();
        return view('blog',compact('item' ,'reviews'));
    }
    
    
    
    public function tweets()
    {
        $items = Tweet::all();
        return view('tweets',compact('items'));
    }

    public function tweet($slug)
    {
        $item = Tweet::where('slug',$slug)->first();
         $latest = Tweet::latest()->limit(2)->get();
        $reviews = Review::where('blog_id' , $item->id)->where("type","tweet")->get();
         
        return view('tweet',compact('item','reviews','latest'));
    }

    public function blogs_category($slug)
    {

        $category = BlogCategory::where('slug',$slug)->first();
        $items = Blog::where('category_id',$category->id)->get();

        return view('category',compact('items','category'));
    }

    

    public function authors()
    {
        $items = Author::all();
        return view('authors',compact('items'));
    }

    public function author($id)
    {
        $item = Author::where('slug',$id)->first();
        return view('author',compact('item'));
    }

    public function authors_search(Request $request)
    {
      
        $search = $request->s; 
        $items = Author::where('title', 'LIKE', "%{$search}%")->get();
        return view('authors',compact('items','search'));
    }


    public function magazines()
    {
        $items = Item::where('type', 'magazine')->paginate(9);
        return view('magazines',compact('items'));
    }

    public function magazines_search(Request $request)
    {
        $items = Item::where('type', 'magazine');
        $search = $request->s; 
        $items = $items->where('title', 'LIKE', "%{$search}%");
        $items = $items->paginate(9);
        return view('magazines',compact('items','search'));
    }
    
    
  
    


    public function books()
    {
        $items = Item::where('type', 'book')->paginate(9);
        
        return view('books'); 
    }
    
    
    public function books_category($slug){
        
        $category = Category::where('slug',$slug)->first();
        
        $items = Item::where('type', 'book')->where('category_id',$category->id)->paginate(9);
        return view('book-category',compact('items','category')); 
    }
    
    public function books_search(Request $request)
    {    
        
      //  dd($request->all());
        
        $items = Item::where('type', 'book');
        $category = Category::find($request->category_id);
        
        $search = $request->s; 
        $items = $items->where('title', 'LIKE', "%{$search}%")->where('category_id',$category->id);
        $items = $items->paginate(9);
        return view('book-category',compact('items','search','category'));
    }


      public function item_pdf($slug)
    {
    
        $item = Item::where('slug',$slug)->first();
        return view('item-pdf',compact('item'));
    }
    

     /**
     * Show the application dashboard.
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function item($slug)
    {
    
        $item = Item::where('slug',$slug)->first();

        if($item->type == 'book'){
            return view('book',compact('item'));
        }else{
            return view('magazine',compact('item'));
        }

    }
    
    
   public function contact(){
       
       return view('contact');  
   }
   
   public function thankyou(){
       
       return view('thankyou');  
   }
    
    
    public function contact_submit(Request $request){
      
        $data = [
            "fname" => $request->fname,
            "lname" =>  $request->lname,
            "phone" => $request->phone,
            "email" => $request->email,
            "m" => $request->m,
            "sitename" => Con::settings()->app_name,
            "from" => "owaisazamtest@gmail.com",
         ];
         
        $contact = Contact::create([
             "fname" => $request->fname,
             "lname" =>  $request->lname,
             "phone" => $request->phone,
             "email" => $request->email,
             "message" => $request->message,
             ]);
         
        Mail::send('emails.contact',$data,function ($mesage){
            $mesage->from('owaisazamtest@gmail','Mukalma'); 
            $mesage->to('iamowaisazam@gmail.com', 'Mukalma' )->subject('Contact Form');
        });
        
       return  back()->with('success','Form Submited We Will Contact You Later');
    }
 
 
 
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function logout()
    {
        
        Auth::logout();
        return redirect()->route('login');
    }
 
    

    
    
    public function login()
    {
        
        if(Auth::check()){
            return redirect()->route('home')->with('success','You are already logged In');
        }
        
        return view('login');
    }
    
    
    public function login_submit(Request $request)
    {
        
        if(Auth::check()){
            return redirect()->route('home')->with('success','You are already logged In');
        }
        
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
          return redirect()->route('home')->with('success','You Are logged in Now');
        }

        return back()->with('warning','Email Or Password Wrong');
    }
     
     
     
     public function register_submit(Request $request)
     {
        
        if(Auth::check()){
            return redirect()->route('home')->with('success','You Are already Registered');
        }
         
         $user = User::where('email',$request->email)->get();
         if(count($user) > 0 ){
            return back()->with('warning','Email allready Exist');      
         }
    
        $role = Role::where('name','Customer')->first();
         
        try {

             $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $role->id,
                'mobile' => $request->phone,
                'status' => 'approved',
             ]);

             return back()->with('success','Register Success Please Login Now');  
            
        } catch (\Throwable $th) {
                return back()->with('warning','Action Not Performed There is Problem');  
        }
               
     }
    
    

    public function news_submit(Request $request)
    {
        $email  = NewsLater::where('email',$request->email)->get();
        if(count($email) > 0 ){
         return back()->with('success','You Have already Subscribed');    
        }
        
        NewsLater::create([
                  'email' => $request->email
                  ]);
            
        return back()->with('success','Successfully Subscribed');
    }
    
   
    public function terms()
    {
        $terms = Setting::where('name' ,'=', 'terms')->first();
        return view('terms' , compact('terms'));
    }
    public function payment_method()
    {
        $terms = Setting::where('name' ,'=', 'payment')->first();
        return view('terms' , compact('terms'));
    }
    public function shipping_guide()
    {
        $terms = Setting::where('name' ,'=', 'shipment')->first();
        return view('terms' , compact('terms'));
    }
    public function location()
    {
        $terms = Setting::where('name' ,'=', 'location')->first();
        return view('terms' , compact('terms'));
    }
    public function estimated_delivery()
    {
        $terms = Setting::where('name' ,'=', 'adjustment')->first();
        return view('terms' , compact('terms'));
    }
    public function shipping_policy()
    {
        $terms = Setting::where('name' ,'=', 'policy')->first();
        return view('terms' , compact('terms'));
    }
    public function return_policy()
    {
        $terms = Setting::where('name' ,'=', 'return')->first();
        return view('terms' , compact('terms'));
    }

}