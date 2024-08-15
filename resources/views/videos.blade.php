@extends('layouts.app')
@section('title',' بک اسٹور ')

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
  <h1 class="bread-title" > وڈیوز </h1>
</section>

<section  style="padding: 40px 0" >
    <div class="container " >
        <form action="{{route('videos.category')}}" method="get">
        <div class="row">
         <div class="col-md-4"> </div> 
          <div class="col-md-4">
             <div class="input-group mb-3">
                 <select class="form-control text-right "   style="font-size: 19px;height: 41px;border-color: #CACDD3;" name="video_id" id="">
                    <option value="all">اقسام</option>
                    @foreach (Con::video_categories() as $video)
                      <option @if(isset($video_id) && $video_id == $video->id ) {{'selected'}} @endif  value="{{$video->id}}">{{$video->title}}</option>
                    @endforeach
                 </select>
               </div>
           </div>
            <div class="col-md-4">
             <div class="input-group mb-3">
                 <div class="input-group-prepend">
                   <button style="border-color: #CACDD3;border-right: 0px;" class="btn btn-outline-secondary" type="submit"><i class="icon icon-search"></i></button>
                 </div>
                 <input name="s" value="@if(isset($search)) {{$search}} @endif" placeholder="سرچ کریں"  style="font-size: 19px;border-left: 0px;height: 41px;border-color: #CACDD3;" type="text" class="form-control text-right "  aria-describedby="basic-addon1">
               </div>
            </div>
        </div>
       </form>
       <div class="row pt-3 pb-5 ">

           @foreach ($items as $item)
            <div class="col-md-4">
                <div class="text-center ">
                <img class="w-100 showVideo" src="{{asset($item->thumbnail)}}" data-toggle="modal" data-target="#videoModal"  data-video="{{ $item->video }}"/>
                <p class="quote-text"> 
                        <span style="color:black;font-size: 30px;"  class="slider-text2"  >{{$item->title}}</span> <br>
                        <span style="font-size: 18px;" >{{$item->category->title}}</span>
                </p>
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

 <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half" id="videoEmbed">
              
                </div>
          </div>
        </div>
      </div>
    </div>

  
@endsection


@section('js')

<script>
    
 
    
    $(document).ready(function(){
     // Upload
     $(document).on('click', '.showVideo', function() {
         if($(this).data('video')){
  	        $('#videoEmbed').html('<iframe class="embed-responsive-item allowfullscreen" src="' + $(this).data('video') + '"/>')
         } else {
             $('#videoEmbed').html('<p>No Video Found</p>')
         }
   });

});
    

</script>

      
@endsection