@extends('layouts.app')
@section('title',$category->title)

@section('css')

<style>
    

</style>
       
@endsection

@section('content')

            <section  class="bread-secton" >
              <h1 class="bread-title" > {{$category->title}} </h1>
            </section>

            <section  style="padding: 40px 0" >
                <div class="container " >
                    <div class="row">
                    <div class="col-md-4"> </div> 
                    <div class="col-md-4">
                        
                    </div>
                        <div class="col-md-4">
                            <form action="{{route('blogs.categry.search')}}">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                    <button style="border-color: #CACDD3;border-right: 0px;" class="btn btn-outline-secondary" type="submit"><i class="icon icon-search"></i></button>
                                    </div>
                                    <input type="hidden" name="category" value="{{$category->id}}" />
                                    <input value="@if(isset($search)) {{$search}} @endif" required name="s"   placeholder="سرچ کریں"  style="font-size: 19px;border-left: 0px;height: 41px;border-color: #CACDD3;" type="text" class="form-control text-right "  aria-describedby="basic-addon1">
                                </div>
                              </form>
                        </div>
                    </div>

                <div class="testimonial-slide2 row pt-3 pb-5 " style="direction:rtl">
                    @foreach ($items as $item)
                    <div class="my-3 col-md-4">
                        <a href="{{route('blog',$item->slug)}}" >
                            <div class="testimonial-item-single text-center ">
                                <img class="w-100" src="{{asset($item->thumbnail)}}"  />
                                <p class="quote-text">  
                                    <span class="slider-text2"  >{{$item->title}}</span>
                                    <span class="slider-text1" >-   {{$item->category->title}} </span>
                                </p>
                                <span class="date" >{{$item->date->format('Y-m-d')}}</span>
                            </div> 
                        </a>
                    </div>    
                    @endforeach
                    <div class="col-12">
                        <hr style="height: 2px" >
                    </div>
                </div>
                </div>
            </section>
  
@endsection


@section('js')


      
@endsection