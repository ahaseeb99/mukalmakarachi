@extends('layouts.app')
@section('title',$item->title)

@section('css')

<style>
    .main .widget-title{
          background: #09255f;
          padding: 6px 0px;
          color: white;
          border-radius: 0px 29px;
      }
      
        .sub-title{
          position: relative;
          background: #138fcf;
          padding: 4px 14px;
          font-size: 20px;
          border-radius: 0px 7px 5px 0px;
          top: -3px;
          left: -296px;
          
      }
      
      .quote-text {
      color: #138FCF!important;
      margin-bottom: 0px;
      margin-top: 0px;
      padding-top: 3px;
  }
  
  .slider-text1 {
      font-size: 34px;
  }
  
   .slider-text2 {
      font-size: 20px;
  }
  
  .date {
      color: black;
      font-size: 16px;
      font-weight: 700;
  }
      
      
</style>

@endsection

@section('content')
<section  class="bread-secton" >
    <h1 class="bread-title" > {{$item->title}}  </h1>
</section>

<section class="main"  style="padding: 40px 0" >
    
        <div class="container " >
            <div class="row">
                <div class="col-md-4"></div> 
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="widget-title">
                          <div>
                            <h1 style="font-size: 32px;" class="text-white"><span class="sub-title">تمام</span> حال صناف</h1>
                          </div>
                    </div>
                </div>
            </div>
            <?php 
               $items = Con::blogs()->where('author_id',$item->id);
              
            ?>
            <div id="testimonial-slide3"  class=" row pt-3 pb-5 ">
                @foreach ($items as $blogs)
                
                <div class="col-md-4 my-4 ">
                    <div class="shadow  text-center ">
                        <img class="w-100" src="{{asset($blogs->thumbnail)}}" />
                        <a class="d-block pt-3 py-1" href="{{route('blog',$blogs->slug)}}" >
                            <p class="quote-text">  <span class="slider-text2">{{$blogs->title}}</span>
                                <span class="slider-text1">{{$blogs->category->title}} </span>
                            </p>
                        </a>
                        <span class="pb-3 d-block date">{{$blogs->date->format('Y-m-d')}} </span>
                     </div>
                </div>    
                @endforeach            
            </div>
        </div>
        
  <?php 
        $posts = Con::books()->where('author_id',$item->id);
   ?>

        <div class="container " >
            <div class="row">
                <div class="col-md-4"></div> 
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="widget-title">
                          <div>
                            <h1 style="font-size: 32px;" class="text-white"><span class="sub-title">تمام</span> حال صناف</h1>
                          </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-5 ">
                @foreach ($posts as $item)
                <div class="col-md-3">
                    <div class="testimonial-item-single text-center ">
                        <a class="a-note" href="{{route('item',$item->slug)}}">
                         <img class="w-100" src="{{asset($item->thumbnail)}}" />
                         <p class="quote-text">
                             <span style="font-size: 30px;color:black" class="slider-text1"> {{$item->title}}  </span><br>
                             <span style="font-size: 20px;" class="d-none text-danger slider-text1"> Rs {{$item->price}} </span>
                         </p>
                         <div style="max-width: 173px;" class="d-none container">
                             <div class="row">
                                 <div class="p-0 col-2">
                                    <a  style="color:black" href="{{route('cart.add',$item->id)}}" >
                                        <i style="border: 1px solid black;" class="p-1 fa fa-heart-o"></i>
                                    </a> 
                                 </div>
                                  <div class="p-0 col-8  ">
                                    <a style="background-color: #138FCF;" href="{{route('cart.add',$item->id)}}" class="w-100 text-white d-block   ">ADD TO CART</a> 
                                  </div>
                                 <div class=" p-0 col-2  ">
                                    <a  style="color:black" href="{{route('item',$item->slug)}}" >
                                     <i style="border: 1px solid black;" class="p-1 fa fa-pencil-square-o"></i>
                                    </a>
                                 </div>
                             </div>
                         </div>
                         </a>
                     </div>
                 </div>
               @endforeach

            </div>
        </div>
</section>
      
@endsection




@section('js')

        <script>
           $(document).ready(function(){


            }); 
        </script>

      
@endsection