@extends('layouts.app')
@section('title','My Orders')

@section('css')
       
     <style>
        .blog-content ul{
           margin-left: 14px;
           list-style: disc;
           
          }
          
          .blog .title{
              color:#393D72;
          }
          
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

  <section class="all-page-banner item-eight">
            <div class="d-table">
              <div class="d-tablecell">
               <div class="container">
                <div class="banner-text text-center">
                <h1>Order History</h1>
                <ul>
                  <li><a href="{{route('home')}}">home</a><i class="flaticon-right-arrow"></i></li>
                  <li>My Account</li>
                </ul>
               </div>
               </div>
             </div>
            </div>
    </section>
    
    <section class="py-5">
      <div class="container">  
           <div class="row">
              <div class="col-md-12">
                    <div class="tab product-tab">
                        <!-- Nav tabs -->
                          @component('dashboard.components.dashboard_nav') @endcomponent
                    </div>
              </div>
           </div>
            <div class="pt-3 row shopping-cart-wrap ">
                <div class="col-lg-12 ">
                  <div class=" table-responsive">
                    <table class="cart-table table">
                      <thead class="cart-heading">
                        <tr>
                          <th class="text-center">ID</th>
                          <th class="text-center" scope="col" style="font-weight:900;">Status</th>
                          <th class="text-center" scope="col" style="font-weight:900;">Created At</th>
                          <th class="delete">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($orders as $order)
                              <tr>
                                  <td class="text-center">#{{$order->id}}</td>
                                  <td class="text-center"><span class="product-price text-dark font-w-6 px-1">{{$order->status}}</span></td>
                                  <td class="text-center"><span class="product-price text-dark font-w-6 px-1">{{$order->created_at}} </span></td>
                                  <td class="remove-pro"><a href="{{route('order.track',$order->tracking_id)}}"><i class="fa fa-eye"></i></a></td>
                             </tr>
                            @endforeach
                     </tbody>
                     </table>
                   </div>
                  </div>
              </div>
         </div>
  </section>
  
<!--body content end--> 
  @endsection
  
@section('js')
 <script>
 
 </script>
@endsection

@section('js')


      
@endsection