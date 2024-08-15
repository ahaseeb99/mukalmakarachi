@extends('layouts.app')
@section('title','میگزین اسٹور')

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
     
</style>
       
@endsection

@section('content')

    <section  class="bread-secton" >
      <h1 class="bread-title" >  میگزین اسٹور </h1>
    </section>

      <section  style="padding: 40px 0" >
        <div class="container " >
            <div class="row">
                <div class="col-md-4"></div> 
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <form action="{{route('magazines.search')}}">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <button style="border-color: #CACDD3;border-right: 0px;" class="btn btn-outline-secondary" type="submit"><i class="icon icon-search"></i></button>
                        </div>
                        <input value="@if(isset($search)) {{$search}} @endif" required name="s"   placeholder="سرچ کریں"  style="font-size: 19px;border-left: 0px;height: 41px;border-color: #CACDD3;" type="text" class="form-control text-right "  aria-describedby="basic-addon1">
                    </div>
                  </form>
                </div>
            </div>

            <div class="row pt-3 pb-5 ">

                @foreach ($items as $item)
                  <div class="col-md-3">
                    <div class="testimonial-item-single text-center ">
                           <a class="a-note" href="{{route("item",$item->slug)}}" >
                          <img class="w-100" src="{{asset($item->thumbnail)}}" alt="" />
                          <p class="quote-text">
                                  <span style="font-size: 30px;" class="slider-text1" > {{$item->title}} </span><br>
                                  <span style="font-size: 20px;" class="d-none text-danger slider-text1" > {{$item->price}} Rs </span>
                           </p>

                          <div style="max-width: 173px;"  class="d-none container">
                              <div class="row">
                                  <div class="p-0 col-2">
                                    <a style="color:black" href="{{route("item",$item->slug)}}" >
                                      <i style="border: 1px solid black;" class="p-1 fa fa-heart-o"></i>
                                    </a>
                                  </div>
                                  <div class="p-0 col-8  ">
                                    <!--<a style="background-color: #138FCF;" href="{{route('cart.add',$item->id)}}" class="w-100 text-white d-block   ">ADD TO CART</a>-->
                                  </div>
                                  <div class=" p-0 col-2  ">
                                    <a href="{{route("item",$item->slug)}}" style="color: black;" >
                                       <i style="border: 1px solid black;" class="p-1 fa fa-pencil-square-o"></i>
                                    </a>
                                  </div>
                              </div>
                          </div>
                          </a>
                      </div>
                  </div>
                  @endforeach

                  <div class="col-12">
                      <hr style="height: 2px" >
                      {{ $items->links() }}
                  </div>
            </div>
        </div>
      </section>
  
@endsection


@section('js')


      
@endsection