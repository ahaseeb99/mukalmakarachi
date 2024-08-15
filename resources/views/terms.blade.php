@extends('layouts.app')
@section('title',"Terms")

@section('css')


     
@endsection

@section('content')
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            {{ $terms->value }}
        </div>
    </div>
</div>
           

            


@endsection


@section('js')



<script>
    $(document).ready(function() {
        
       
     
    
    	
    
    
    
    
    
    });

</script>
  

@endsection