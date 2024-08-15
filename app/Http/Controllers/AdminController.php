<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Auth;
use App\User;
use App\Profile;
use Hash;
use App\Role;
use Storage;
use App\News;
use App\Item;
use App\Form;
use App\Category;
use Con;
use Illuminate\Support\Str;
use Mail;


class AdminController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

  
  
    public function login(){

        if(Auth::check()){
            return redirect()->route('admin.home');
        }

        return view('admin.auth.login');
    }



    public function register(){

        if(Auth::check()){
            return redirect()->route('admin.home');
        }

        return view('admin.auth.register');
    }
    
    

    public function reset_password(){

        if(Auth::check()){
            return redirect()->route('admin.home');
        }

        return view('admin.auth.forget');
    }



    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function login_submit(Request $request)
    {

        if(Auth::check()){
            return redirect()->route('admin.home')->with('success','You Are logged in Now');
        }

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');
        
        
        if (Auth::attempt($credentials)) {
            
            if(Auth::user()->role->name == 'Customer'){
              return redirect()->route('home')->with('success','You Are logged in Now');    
            }

            return redirect()->route('admin.home')->with('success','You Are logged in Now');
            
        }else{
            
             return back()->with('warning','Username Or Password Wrong');
            
        }

    }


    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function register_submit(Request $request)
    {
        
        if(Auth::check()){
            return redirect()->route('admin.home')->with('success','You Are logged in Now');
        }

        $request->validate([
            'name' => 'required|min:6|unique:users,name',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        $role = Role::where('name','Guest')->first();
        
        try {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => $role->id,
                'status' => 'pending'
             ]);

             return redirect()->route('admin.login')->with('success','Register Success Please Login Now');  
            
       } catch (\Throwable $th) {
            
            return back()->with('warning','Action Not Performed There is Problem');  
            
       }


    }


  
    public function reset_password_submit(Request $request){

        if(Auth::check()){
            return redirect()->route('admin.home');
        }

        $user = User::where('email',$request->email)->first();
        if($user != null ){

            $token = Str::random(60);
            $user->remember_token = $token;
            $user->save();

            $data = [
                'name' => 'email',
                'url' =>'asdasd',
            ];

            Mail::send('emails.forgetPassword',$data,function ($mesage){

                $mesage->from('owaisazamtest@gmail.com', Con::settings()->app_name ); 
                $mesage->to('iamowaisazam@gmail.com', Con::settings()->app_name )->subject('Foget Password');
            });

            return back()->with('success','Password Reset Link Sent Please Check your Email');
        

        }else{

            return redirect()->back()->withErrors([
                'email' => 'Email Not Found',
            ]);

        }
      
    }



    public function reset_token(){

        if(Auth::check()){
            return redirect()->route('admin.home');
        }

        return view('register');
    }


    public function new_password(Request $request){

        if(Auth::check()){
            return redirect()->route('admin.home');
        }

        return view('register');
    }



    
     /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function get_settings()
    {
        
        return response()->json(Con::settings());
    }



    
}