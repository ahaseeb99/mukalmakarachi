<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="{{Con::settings()->app_meta}}" />
        <meta name="author" content="{{Con::settings()->app_name}}" />
        
        <title>Login - {{Con::settings()->app_name}}</title>
    
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="path" content="{{env('APP_URL')}}">
        
        <link rel="icon" href="{{asset(Con::settings()->app_fav_icon)}}" type="image/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <link href="{{asset('admin/assets/plugins/global/plugins.bundle9cd7.css?v=7.1.5')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/plugins/custom/prismjs/prismjs.bundle9cd7.css?v=7.1.5')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/assets/css/style.bundle9cd7.css?v=7.1.5')}}" rel="stylesheet" type="text/css" />

        <style>
            .create_form input {
                background: white!important;
            }

        </style>
    </head>
        <body  class="align-self-center">
                    <div class="m-auto container-fluid ">      
                        <div class="row ">
                            <div class="m-auto col-sm-6 align-self-center p-5 ">
                                <div  class="login-form login-signin">

                                    <form method="get" action="{{route('admin.login.submit')}}" class="create_form px-5 form">
                                        <div class=" text-center pb-13 pt-lg-0 pt-5">
                                            <img  src="{{asset(Con::settings()->app_logo)}}" >
                                            <h3 class="py-2 text-center font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome to {{$_settings->app_name}}</h3>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                            <input value="{{old('email')}}" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="email" autocomplete="off" />
                                            @if($errors->has('email'))
                                                <span class="mt-3 text-danger">{{ $errors->first('email') }}</span>    
                                            @endif

                                        </div>

                                        <div class="form-group">
                                            <div class="d-flex justify-content-between mt-n5">
                                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                            </div>
                                            <input  class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="password" name="password" autocomplete="off" />
                                            @if($errors->has('password'))
                                                <span class="mt-3 text-danger">{{ $errors->first('password') }}</span>    
                                            @endif
                                        </div>

                                        <div class=" text-center pb-lg-0 pb-5">
                                            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script src="{{asset('admin/assets/plugins/global/plugins.bundle9cd7.js?v=7.1.5')}}"></script>
                    <script src="{{asset('js/app.js')}}" ></script>
                    
                    @include('admin.components.notifications')
                
            </body>
</html>
