<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Gate;
use Auth;
use Con;
use Hash;
use Str;
use App\Token;
use App\Order;

class AuthController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         $this->middleware('auth:api')->except(['login','file','register']);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function login(Request $request)
    {
        //dd($request);
        
        $token = Str::random(80);
        $user = User::where('email',$request->email)->get();

        if(count($user) > 0 ){
            
            $user = $user->first();
            if(Hash::check($request->password, $user->first()->password)){

                $ch = curl_init();
                curl_setopt($ch,CURLOPT_URL,"http://ip-api.com/json");
                curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
                $data =  curl_exec($ch);
                $data = json_decode($data);


                $user->api_token = hash('sha256',$token);
                $user->save();
                
                 Token::create([
                    'user_id'=>$user->id,
                    'token' => $token,
                    'hash' => $user->api_token,
                    'status' =>'success' ,
                    'address' => serialize($data)
                ]);
                
              $auth = [
                        "id" => $user->id,
                        "fname" => $user->fname,
                        "lname" => $user->lname,
                        "username" => $user->name,
                        "email" => $user->email,
                        "role" => $user->role->name,
                        "image" => asset($user->image),
                       ];
                
                return response()->json([
                    "message" => 'Login Successfully',
                    "auth" => $auth,
                    "token" => $token
                ],200);
                
            }
        }

        return response()->json([
            "message" => 'Email Or Password Not Found',
        ],500);
        
    }




    /**
     * Store a newly created resource in storage.
     */
    public function update(Request $request)
    {

        $user = $request->user();
        $user->fname  =  $request->fname;
        $user->lname  =  $request->lname;
        $user->save();  
     
        return response()->json([
            "message" => 'Update Successfully',
        ],200);
    }


   /**
     * 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        
          $request->validate([
              'name' => 'required|string|max:255|unique:users',
              'email' =>'required|email|max:255|unique:users',
              'password' => 'required',          
          ]);
          
         
        
          $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'role_id' => 29,
                'status' => 'approved',
          ]);
          
          $auth = [
                    "id" => $user->id,
                    "first_name" => $user->fname,
                    "last_name" => $user->lname,
                    "username" => $user->name,
                    "email" => $user->email,
                    "role" => $user->role->name,
                    "image" => asset($user->image),
                  ];
            
            

           return response()->json([
              "message" => 'User Created Successfully',
              "auth" => $auth     
           ],200);

    }



    /**
     * Get Auth Details
     *
     */
    public function auth(Request $request)
    {
         $user = $request->user();
         
          $auth = [
                    "id" => $user->id,
                    "first_name" => $user->fname,
                    "last_name" => $user->lname,
                    "username" => $user->name,
                    "email" => $user->email,
                    "role" => $user->role->name,
                    "image" => asset($user->image),
                  ];
                  
    
        return response()->json($auth,200);
    }
    

    /**
     * 
     * Get Auth Details
     *
     */
    public function file(Request $request)
    {  
        if($request->hasFile('img')){ 
            $img = $request->file('img');
            $new_name = rand() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('admin/upload/'), $new_name);
            $path = asset('admin/upload/'.$new_name);
         }

        return response()->json(['file'=>$path],200);   
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {

        $user = $request->user();
        $user->api_token = null;
        $user->save();    

        return response()->json([
            "message" => 'Logout Success',
            ],200);
     }


     
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function checkout(Request $request)
    {
    
       $user = $request->user();
       $order = Order::create([
               'user_id' => $user->id,
               'products' => serialize($request->cart),
               'address' => serialize($request->address),
               'payment' => $request->payment,
               'status' => $request->status,
               'total' => $request->total,
        ]);
      
      
        return response()->json([
            "message" => $request->all(),
            ],200);
     }
     
     

}