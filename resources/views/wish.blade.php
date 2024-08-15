@extends('layouts.app')

@section('title','میرا انتخاب ')

@section('css')

    <style>
    
        .con{
            max-width: 953px;
            margin:auto;
         } 
        
         .ticket td {
          /* width: 50%; */
         }
        
         .btn-product {
            background: none;
            color: #042825;
            border: 1px solid #ced4da;
            height: 22px;
            width: auto;
            padding: 0 11px;
            font-size: 13px;
            cursor: pointer;
            display: inline;
        }
        
         .cart-heading {
            background: #393d72;
            color:white;
         }
         
         .cart-table tr td{
           vertical-align: middle;  
         }
     
  </style>
  
@endsection

@section('content')

     
    <section  class=" bread-secton " >
      <h1 class="bread-title"  > میرا انتخاب </h1>
    </section>

     <section  style="padding: 40px 0" >
            <div class="container " >
                <div class="row pt-3 pb-5 ">
                    @foreach (session()->get('wish') as $p)
                    
                       <?php 
                           $item = Con::item($p['id']);  
                       ?>
                       
                      <div class="col-md-3">
                        <div class="testimonial-item-single text-center ">
                              <a class="a-note" href="{{route("item",$item->slug)}}" >
                              <img class="w-100" src="{{asset($item->thumbnail)}}" alt="" />
                              <p class="quote-text">
                                  
                                      <span style="font-size: 30px;" class="slider-text1" > {{$item->title}} </span><br>
                                 
                               </p>
                              <div style="max-width: 173px;"  class="container">
                                  <div class="row">
                                      <div class="p-0 col-2">
                                        <a style="color:black" href="{{route('wish.remove',$item->id)}}" >
                                          <i style="border: 1px solid black;" class="p-1 fa fa-trash-o"></i>
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



<!--body content end--> 
@endsection
  
@section('js')
@endsection