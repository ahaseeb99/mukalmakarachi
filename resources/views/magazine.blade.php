@extends('layouts.app')
@section('title',$item->title)

@section('css')



<style>
     
       .child-container{
            padding-top:10px;
            padding-left: 30px;
            list-style: circle;
        }
        
      .child-container .fa-angle-right:before {
          content: none!important;
        }
     
     .key{
       width: 26%!important;
     }
     
     .button1{
         border-bottom: unset;
            background: #393d72;
            color: #ffff;
            border: 1px solid #eee;
     }
     
     .button1:hover{
         border-bottom: unset;
            background: #393d72;
            color: #ffff;
            border: 1px solid #eee;
     }
     
</style>
     
@endsection

@section('content')

    <section class=" bread-secton ">
      <h1 class="bread-title">دکان </h1>
    </section>

    <section style="padding: 40px 0">
      <div class="container ">
          <div class="row pt-3 pb-5 ">
                   <div class="align-self-center col-md-8">
                       <div class=" text-right ">
                          <form method="get" action="{{route('cart.qty')}}" >
                              <p style="color:black;font-size: 65px;" class="">{{$item->title}}  </p>

                              @if($item->price > 0)
                              <p style="color:black;font-size: 25px;">
                                <label for="vehicle1"><j class="text-danger" >Rs {{$item->price}}</j>   HardCopy</label> <input id="hardcopy" type="checkbox" name="{{$item->id}}-hard" value="{{$item->price}}" />
                              </p>
                              @endif
                              @if($item->pdf_price > 0)
                              <p style="color:black;font-size: 25px;">
                                  <label for="vehicle2"><j class="text-danger" >$ {{$item->pdf_price}} </j> SoftCopy</label> <input id="softcopy" type="checkbox" name="{{$item->id}}-soft" value="{{$item->pdf_price}}" /><br>
                              </p>
                              @endif
                              <div class="d-flex justify-content-end align-items-center">
                                  
                                   @if($item->pdf != null) 
                                    <a href="{{route('item.pdf',$item->slug)}}" class="border text-muted py-1 px-3 mr-3">
                                        Read Now
                                    </a>   
                                   @endif
                                  
                                  <a style="color:black" href="{{route('wish.add',$item->id)}}" >
                                     <i style="border: 1px solid black;" class="p-1  fa fa-heart-o"></i>    
                                  </a>
                                  
                                  <button type="submit" id="submit" style="background-color: #138FCF;" href="#" class="p-1 text-white    ">ADD TO CART</button>
                                
                             
                              </div>
                              <div class="py-3">
                                 
                                
                                   <span class="" style="background: #138fcf;padding: 4px 11px;color: white;border-radius: 0px 12px;">
                                 
                                 <a target="_blank" class="text-white" href="https://www.facebook.com/sharer/sharer.php?u={{ url('/') }}/tweet/{{$item->slug}}">
                                      <i class="fa fa-facebook"></i>
                                      </a>
                                 <a target="_blank" class="text-white" href="https://twitter.com/intent/tweet?text=my share text&amp;url={{ url('/') }}/tweet/{{$item->slug}}">
                                     <i class="fa fa-twitter"></i>
                                 </a>
                             </span>
                              </div>
                          </form>
                       </div> 
                   </div>
                   <div class="col-md-4">
                        <img src="{{asset($item->thumbnail)}}">
                   </div>
           </div>
      </div>
 </section>

 <?php 
      $posts = Con::magazines();
 ?>
 
 
 <section style="padding: 8px 0;background-color: #EEEEEE;" >
        <h2  class="text-center heading-title " >
          <img src="{{asset('images/site/br2.png')}}" alt="" /> 
          <span>  میاسی طرح کی دوسری تحریریں </span>
          <img src="{{asset('images/site/br2.png')}}" alt="" /> 
        </h2>
        <div class="container" >
              <div id="book2" class=" owl-carousel owl-theme">
                    @foreach ($posts as $item)
                      <div style="background:#EEEEEE" class="testimonial-item-single text-center ">
                         <a class="a-note" href="{{route('item',$item->slug)}}" >
                          <img class="w-100" src="{{asset($item->thumbnail)}}" alt="" />
                          <p class="quote-text">
                              <span style="font-size: 30px;" class="slider-text1" > {{$item->title}} </span><br>
                              <span style="font-size: 20px;" class="d-none text-danger slider-text1" > Rs {{$item->price}} </span>
                          </p>
                          <div style="max-width: 173px;"  class="d-none container">
                            <div class="row">
                                <div class="p-0 col-2">
                                   <a style="color: black" ><i style="border: 1px solid black;" class="p-1 fa fa-heart-o"></i></a>
                                </div>
                                <div class="p-0 col-8  ">
                                  <a style="background-color: #138FCF;" href="#" class="w-100 text-white d-block   ">ADD TO CART</a> </div>
                                <div class=" p-0 col-2  ">
                                  <a style="color: black" href="{{route('item',$item->slug)}}" ><i style="border: 1px solid black;" class="p-1  fa fa-pencil-square-o"></i></a>
                                </div>
                            </div>
                          </div>
                          </a>
                      </div>   
                    @endforeach
              </div>
              
              <div class="py-5 text-center" >
                  <a href="{{route('magazines')}}" style="background:#06194F" class="custom-btn-1 px-3 py-1 btn btn-primary" >مزید  بک  </a>
              </div>
        </div>
</section>
    
        
            
  
@endsection


@section('js')
<script>

  $(document).ready(function(){
      
      $('#book2').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
           0:{
                 items:2
           },
           900:{
                 items:3
           },
           1000:{
                 items:4
           }
        }
     });


  });
  
</script>


      
@endsection