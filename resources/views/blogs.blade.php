@extends('layouts.app')
@section('title','Blogs')

@section('css')

<style>
    .con{
        
        padding: 8px;
        text-align: center;
        margin: 11px;
        border-radius: 0px 25px;
        background: #F5F5F5;
        
    }
    
    .widget-title{
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
        left: -201px;
        
    }
    
    .column{
        border-radius: 10px 14px;
        border-bottom: 1px solid #eceaea ;
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        padding-bottom: 5px;
        
    }  
    
</style>
       
@endsection

@section('content')

        <section  class="bread-secton" >
            <h1 class="bread-title" > اصناف </h1>
        </section>

        <section  style="padding: 40px 0" >
            <div class="container " >
            <div class="row" >
                <div class="col-md-3" >
                    
                    <div class="shadow-sm  my-3 widget" >
                        <div class="widget-title" >
                            <div>
                                <h1 style="font-size: 32px;" class="text-white"><span class="sub-title" >تمام</span> حالیہ اصناف</h1>
                            </div>
                        </div>
                        
                        @foreach (Con::blogs() as $item)
                        <div class="column  container" >
                            <a href="{{route('blog',$item->slug)}}" >
                                <div class="row" >
                                    <div class="col-10 text-right" >
                                        <h1  style="font-size: 23px;color: black;" class="m-0"   > {{$item->title}} </h1>
                                        <span style="color: #5E5E5E;font-size: 22px" >{{$item->category->title}} : {{$item->author->title}} </span>
                                    </div>
                                    <div class="col-2 align-self-center p-0" >
                                            <img class="d-block"  style="width: 40px;border-radius: 11px;"  src="{{asset($item->thumbnail)}}"  />
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach

                    </div>
                    
                        <div class="shadow-sm my-3 widget" >
                        <div class="widget-title" >
                            <div>
                                <h1 style="font-size: 32px;" class="text-white" ><span class="sub-title" >تمام</span> مصنفین </h1>
                                
                            </div>
                        </div>
                        @foreach (Con::authors() as $item)
                            <div class="column container" >
                                <a href="{{route('author',$item->slug)}}" >
                                    <div class="row" >
                                        <div class="col-10 text-right" >
                                                <h1  style="font-size: 23px;color: black;" class="m-0" >{{$item->title}}</h1>
                                        </div>
                                        <div class="col-2 align-self-center p-0" >
                                                <img class="d-block"  style="width: 40px;border-radius: 11px;"  src="{{asset($item->thumbnail)}}"  />
                                        </div>
                                    </div>
                                </a>
                            </div>    
                        @endforeach
                    </div>
                </div>
                
                <div class="col-md-9" >
                        <div class="container-fluid" >
                            <div class="row" >
                                @foreach (Con::blog_categories() as $item)
                                <div class="col-md-3" >
                                    <div class="con shadow p-3 mb-5  "  >
                                         <a href="{{route('blogs.category',$item->slug)}}" > <h1>{{$item->title}}</h1></a>
                                    </div>          
                                </div>      
                                @endforeach
                            </div>
                        </div>
                </div>
            </div>
            </div>
    </section>
  
@endsection


@section('js')


      
@endsection