@extends('layouts.app')
@section('title','Register')

@section('css')
       
     <style>
        .blog-content ul{
           margin-left: 14px;
           list-style: disc;
           
          }
          
          .blog .title{
              color:#393D72;
          }
     </style>
@endsection

@section('content')
         <section class="all-page-banner item-eight">
                    <div class="d-table">
                        <div class="d-tablecell">
                            <div class="container">
                                <div class="banner-text text-center">
                                  <h1>Register</h1>
                                 <ul>
                                  <li><a href="{{route('home')}}">home</a><i class="flaticon-right-arrow"></i></li>
                                  <li>register</li>
                                 </ul>
                                </div>
                            </div>
                        </div>
                    </div>
              </section>
      
             <div class="container py-5">
                   <div class="container text-center py-2">
                        <a href="{{route('home')}}" class="logo"> <img src="{{asset($_settings->app_big_logo)}}" alt="Image"> </a>
                   </div>
                          <div class="row">
                              <div class="col-md-6 mx-auto">
                                <div class="modal-header">
                                
                                <form action="{{route('register_submit')}}" method="post">
                                    
                                    @csrf
                                         
                                         <label>Full Name</label>
                                         <input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter your username" />
                                         
                                          @if($errors->has('name'))
                                            <div class="error text-danger">{{ $errors->first('name') }}</div>
                                          @endif
                                          
                                         <label>Email</label>
                                         <input type="email" name="email" value="{{old('email')}}" class="pt-2 form-control" placeholder="Enter your Email" />
                                          @if($errors->has('email'))
                                            <div class="error text-danger">{{ $errors->first('email') }}</div>
                                          @endif
                                        
                                        <label class="password-label">password</label>
                                         <input type="password" name="password" class="password form-control" placeholder="Enter your password" />
                                            @if($errors->has('password'))
                                              <div class="error text-danger">{{ $errors->first('password') }}</div>
                                            @endif
                                        
                                    <div class="frm-all-btn">
                                     
                                     <button type="submit" class="btn login-btn btn-xs">Register</button>
                              </form>
                            
                                <div class="forgot-password text-center py-2">
                                  <a href="{{route('login')}}">If you Already Have Account?</a>
                                </div>
                            
                                <div class="social-link">
                                    <ul>
                                        <li><a href="{{route('fb')}}" class="color-1"><i class="flaticon-facebook-logo"></i></a></li>
                                        <li><a href="{{route('google')}}" class="color-2"><i class="flaticon-google-plus-symbol"></i></a></li>
                                        <!--<li><a href="#" class="color-3"><i class="flaticon-twitter-black-shape"></i></a></li>-->
                                        <!--<li><a href="#" class="color-4"><i class="flaticon-linkedin-letters"></i></a></li>-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                   </div>
              </div>
          </div>
@endsection


@section('js')


      
@endsection