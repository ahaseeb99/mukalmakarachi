@extends('layouts.app')
@section('title','رجسٹریشن / لاگ ان')

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
      
             <section  class=" bread-secton " >
                  <h1 class="bread-title" > رجسٹریشن / لاگ ان</h1>
             </section>
             
             <section  style="padding: 40px 0" >
               <div class="container " >
                  <div class="row pt-3 pb-5 ">
                     <div class="col-md-6">
                        <div class="shadow-lg login-form  card">
                             <form class="" action="{{route('register_submit')}}" >
                                  <h5 class="card-title text-center ">رجسٹریشن</h5>
                                  <input type="text" required name="name" placeholder="آپ کا نام"  />
                                  <input type="email" required name="email" placeholder="آپ کا ای میل"  />
                                  <input type="text"  name="phone" placeholder="فون" type="text"  />
                                  <input type="phone" required  name="password" placeholder="پاس ورڈ"  />
                                  <div class="text-center" >
                                    <button type="submit" class="btn-my" >جمع کروائیے</button>
                                  </div>
                              </form>
                         </div>
                     </div>
                     <div class="col-md-6">
                        <div class="shadow-lg login-form  card">
                              <form action="{{route('login_submit')}}" >
                                       <h5 class="card-title text-center ">لاگ ان</h5>
                                       <input required name="email" placeholder="آپ کا ای میل" type="email"  />
                                       <input required name="password" placeholder="پاس ورڈ" type"password"  />
                                     <div style="margin-top: 92px;" class="text-center" >
                                        <button type="submit" class="btn-my" >جمع کروائیے</button>
                                     </div>
                              </form>
                         </div>
                     </div>       
                  </div>
               </div>
           </section>
           
           
@endsection


@section('js')


      
@endsection