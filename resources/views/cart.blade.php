@extends('layouts.app')

@section('title','Cart')

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
  <h1 class="bread-title" >ٹوکری</h1>
</section>

<section  style="padding: 40px 0" >
  <div class="container " >
     <div class="row pt-3 pb-5 ">
        <div class="col-md-12">
          @if(session('cart'))

           <table class="table">
               <thead>
                 <tr>
                   <th style="border: 0px;" ></th>
                   <th style="border: 0px;"  scope="col">ٹوٹل</th>
                   <th style="border: 0px;"  scope="col">کوانٹیٹی</th>
                   <th style="border: 0px;"  scope="col">پرائس</th>
                   <th style="border: 0px;"  scope="col">Type</th>
                   <th style="border: 0px;"  scope="col">پروڈکٹ</th>
                   <th style="border: 0px;"  ></th>
                 </tr>
               </thead>
               <tbody class="cart-details" >
               
                <?php  $cart = Con::cart_info(); ?>
                
                @foreach($cart->items as $key =>  $details)
                  <tr class="d-none" >
                        <td style=" vertical-align: middle;" > <a style="color: black" href="{{route('cart.remove',$details['cartid'])}}" ><i class="fa fa-trash-o"></i></a> </td>
                        <td  style="font-weight: 700;color: black;vertical-align: middle;" class="text-danger" >
                          {{$details['currency']}} {{number_format($details['total'],2)}} </td>
                        <td style="vertical-align: middle;" >
                            @if($details['type'] == 'soft')
                           <div class="qty btn-group" role="group" aria-label="Basic example">
                             <a style="background: #0A265F!important;" href="{{route('cart.decreament',$details['cartid'])}}" class="decreament btn btn-secondary">-</a>
                             <a style="background: #0A265F!important;"  type="button" class="text-white btn btn-secondary">{{$details['quantity']}}</a>
                             <a style="background: #0A265F!important;" href="{{route('cart.increament',$details['cartid'])}}" class="increament btn btn-secondary">+</a>
                           </div>
                           
                           @else
                             
                             {{$details['quantity']}}
                           
                           @endif
                        </td>
                        <td style="font-weight: 700;color: black;vertical-align: middle;" >{{$details['currency']}} {{number_format($details['price'],2)}}</td>
                        <td style="font-weight: 700;color: black;vertical-align: middle;" > {{$details['tt']}}</td>
                        <td style="font-weight: 700;color: black;vertical-align: middle;" >({{$details['type']}}) {{$details['title']}} </td>
                        <td><img width="66px" src="./images//site//book1.jpg" alt="" srcset=""></td>
                  </tr>
                 @endforeach
                
              </tbody>
         </table>

    
             @endif
           
        </div>
        <div class="col-12 text-left ">
           <a href="{{route('checkout')}}" class="btn-my" > پروسس ٹو چیک آوٹ</a>
        </div>
     </div>
  </div>
</section>




<!--body content end--> 
@endsection
  
@section('js')
  <script>
  
       cartget_ajax();
       
        function cartget_ajax(){
            
            
            $.ajax({
                    url:"{{env('APP_URL')}}/cartget_ajax", 
                    method:'get',
                    data:null,
                    dataType: "json",
                    success: function(result){
                       
                      $('.cart-details').empty();
                      
                      result.cart.items.forEach((item,index) => {
                      console.log(index);
                      
                       $('.cart-details').append(`
                        <tr>
                            <td style=" vertical-align: middle;" > <a data-id="${item.cartid}" class="remove" style="color: black" ><i class="fa fa-trash-o"></i></a> </td>
                            <td  style="font-weight: 700;color: black;vertical-align: middle;" class="text-danger" > ${item.currency} ${item.total} </td>
                            <td style="vertical-align: middle;" >
                            
                            ${item.type == 'hard' ? 
                            `<div class="qty btn-group" role="group" aria-label="Basic example">
                                 <a style="background: #0A265F!important;" data-id="${item.cartid}"  class="decreament btn btn-secondary">-</a>
                                 <a style="background: #0A265F!important;" type="button" class="text-white btn btn-secondary">${item.quantity}</a>
                                 <a style="background: #0A265F!important;" data-id="${item.cartid}"  class="increament btn btn-secondary">+</a>
                             </div>` 
                            : 
                            item.quantity }
                           </td>
                           <td style="font-weight: 700;color: black;vertical-align: middle;" >${item.currency} ${item.price} </td>
                           <td style="font-weight: 700;color: black;vertical-align: middle;" >${item.tt}</td>
                           <td style="font-weight: 700;color: black;vertical-align: middle;" > (${item.type}) ${item.title} </td>
                           <td><img width="66px" src="./images//site//book1.jpg" alt="" srcset=""></td>
                        </tr>`);
                     });


                       console.log(result.cart.items);
                     
                   $(".decreament").click(function(){
                 
                        var dataId = $(this).attr("data-id");        
                        remove_ajax(dataId);
                          
        
                    });
                    
                    $(".increament").click(function(){
                        
                        var dataId = $(this).attr("data-id");        
                        add_ajax(dataId);
                             
                    });
                    
                    
                    $(".remove").click(function(){
                        
                        var dataId = $(this).attr("data-id");        
                        hide(dataId);
                             
                    });
                    
                    
                  },
                  error: function(e){
                      toastr.warning(e.responseJSON.message);
                  }
             
                  
             });
             
            
        }
        
        
        
        
        
        
        function add_ajax(id){
            
            $.ajax({
                    url:`{{env('APP_URL')}}/cart/increament/${id}`, 
                    method:'get',
                    data:null,
                    dataType: "json",
                    success: function(result){
                    cartget_ajax();
                  },
                  error: function(e){
                      toastr.success("Item Updated successfully");
                      cartget_ajax();
                      //toastr.warning(e.responseJSON);
                  }
            
             });

        }
        
        
        function remove_ajax(id){
            
            $.ajax({
                    url:`{{env('APP_URL')}}/cart/decreament/${id}`, 
                    method:'get',
                    data:null,
                    dataType: "json",
                    success: function(result){
                    cartget_ajax();
                  },
                  error: function(e){
                      toastr.success("Item Updated successfully");
                      cartget_ajax();
                      //toastr.warning(e.responseJSON);
                  }
            
             });

        }
        
        function hide(id){
            
            $.ajax({
                    url:`{{env('APP_URL')}}/cart/remove/${id}`, 
                    method:'get',
                    data:null,
                    dataType: "json",
                    success: function(result){
                    cartget_ajax();
                  },
                  error: function(e){
                      
                      toastr.success("Item remove successfully");
                      cartget_ajax();
                      //toastr.warning(e.responseJSON);
                  }
            
             });

        }
        
      
    
  </script>
@endsection