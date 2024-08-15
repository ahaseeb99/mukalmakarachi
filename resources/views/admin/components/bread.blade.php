<div class="page-bar">
    <div class="page-title-breadcrumb">
        <div class=" pull-left">
        <div class="page-title">{{__($title)}}</div>
        </div>
       
        <ol class="breadcrumb page-breadcrumb pull-right">
            @foreach ($routes as $key => $item)
            <li>
         &nbsp;<a class="parent-item" href="{{route($key)}}">{{__($item)}}</a>&nbsp;<i class="fa fa-angle-right"></i>
            </li>    
            @endforeach
        <li class="active">{{__($title)}}</li>
        </ol>
    </div>


</div>