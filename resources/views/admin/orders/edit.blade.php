@extends('admin.layouts.admin')
@section('title','Orders')

@section('css')

<style>
    .total-details span{
      /*font-size:16px;*/
    }
</style>

@endsection

@php    @endphp

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid">
            <div class="row">
              <div class="col-6">
                  <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                      <li class="breadcrumb-item">
                      <a href="{{route('admin.home')}}" class="text-muted">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active">
                        <a href="{{route('admin.orders.index')}}" class="text-muted">Orders</a>
                      </li>
                  </ul>
              </div>
              <div class="text-right col-6 ">
          
              </div>
          </div>
        </div>    
    </div>

    <form enctype="multipart/form-data" method="post" action="{{route('admin.orders.update',$module->id)}}">
      @csrf
       
       <div class="container" >
           <div class="row" >
               <div class="col-md-12" >
                        <div class="card card-custom gutter-b">
                            <!--end::Header-->
                            <div class="card-body">
                                <label class="font-size-h3 font-weight-bolder text-dark mb-7">Order Details</label>
                              <div class="form-group row">
                                <div class="col-md-3">
                                      <label style="font-size:16px" class="col-form-label">Order Tracking ID</label>
                                      <input readonly value="{{$module->tracking_id}}" class=" form-control" type="text"  />
                                </div>
                                <div class="col-md-3">
                                      <label style="font-size:16px" class="col-form-label">Customer</label>
                                      <input readonly value="{{$module->user->name}}" class=" form-control" type="text"  />
                                </div>
                                <div class="col-md-3">
                                      <label style="font-size:16px" class="col-form-label">Payment Method</label>
                                      <select name="payment_method" class="form-control">
                                          <option @if($module->payment_method == 'cash_on_delivery') {{'selected'}} @endif value="cash_on_delivery" > Cash On Delivery </option>
                                          <option @if($module->payment_method == 'bank') {{'selected'}} @endif value="bank_transfer" > Bank Transfer </option>
                                          <option @if($module->payment_method == 'paypal') {{'selected'}} @endif value="paypal" > Paypal </option>
                                      </select>
                                </div>
                                <div class="col-md-3">
                                     <label style="font-size:16px" class="col-form-label">Payment Status</label>
                                     <select class="form-control" name="payment_status" autocomplete="off">
                						 <option @if($module->payment_status == 0) {{'selected'}} @endif value="0">UnPaid</option>
                						 <option @if($module->payment_status == 1) {{'selected'}} @endif value="1">Paid</option>
                					 </select>
                                </div>
                                <div class="col-md-3">
                                  <label style="font-size:16px" class="col-form-label">Order Status</label>
                                  <select class="form-control" name="status" autocomplete="off">
            						 <option  @if($module->status == 'pending') {{'selected'}} @endif value="pending">Pending</option>
            						 <option @if($module->status == 'canceled') {{'selected'}} @endif value="canceled">Cancel</option>
            						 <option @if($module->status == 'approved') {{'selected'}} @endif value="approved"> Approve</option>
            						 <option @if($module->status == 'processing') {{'selected'}} @endif value="processing"> Processing</option>
            						 <option @if($module->status == 'delivered') {{'selected'}} @endif value="delivered">Delivered</option>
                                     <option @if($module->status == 'completed') {{'selected'}} @endif value="completed">Completed</option>
            					  </select>
                                </div>
                                <div class="col-md-3">
                                      <label style="font-size:16px" class="col-form-label">Date</label>
                                      <input readonly  name="date" class=" form-control" type="date" required value="{{$module->date->format('Y-m-d')}}"  />
                                </div>
                            </div>
                          </div>
                     </div>
               </div>
                  <?php
                      $address = unserialize($module->address);
                      $address = (object) $address;
                    ?>
               
               
               
                    <div class="col-md-12" >
                      <div class="card card-custom gutter-b">
                                <div class="card-body">
                                  <label class="font-size-h3 font-weight-bolder text-dark mb-3">Items Details</label>
                                  <hr>
                                  <div class="row" >
                                      <div class="col-12" >
                                          <div class="custom_field" > 
                                            <?php
                                              $orders = unserialize($module->items);
                                              $gtotal = 0;
                                            ?>
                                              <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th style="font-size:16px" scope="col">#</th>
                                                    <th style="font-size:16px" scope="col">Item</th>
                                                    <th style="font-size:16px" >Type</th>
                                                    <th style="font-size:16px" scope="col">Price</th>
                                                    <th style="font-size:16px" scope="col">Quantity</th>
                                                    <th style="font-size:16px" scope="col">Total</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  @foreach($orders as $key => $item)

                                                  <?php
                                                    $gtotal += $item['quantity'] * $item['price'];
                                                  ?>

                                                    <tr>
                                                      <th >{{$key}}</th>
                                                      <td>{{$item['title']}} ({{$item['type']}})</td>
                                                      <td>{{$item['tt']}}</td>
                                                      <td>{{$item['currency']}} {{$item['price']}}</td>
                                                      <td  >{{$item['quantity']}}</td>
                                                      <td>{{$item['currency']}} {{$item['total']}}</td>
                                                    </tr>
                                                  @endforeach
                                                </tbody>
                                              </table>         
                                          </div>
                                      </div>
                                  </div>
                                  <hr>
                                      
                                  <div class=" " >
                                    <P class=" px-3 text-right font-weight-bold font-size-h6 mb-3">Total Amount : Rs {{number_format($module->total,2)}} </P>  
                                  </div>
                            </div>
                      </div>
              </div>

                  <div class="col-md-12" >
                    <div class="my-5 card card-custom">
                        <div class=" card-header flex-wrap border-0 pt-6 pb-0">
                          <div class="card-title">
                            <h3 class="font-size-h3 font-weight-bolder text-dark mb-3">Address Details</h3>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-xl-12 my-2">
                                  <div class="address-details form-body">
                                      <div class="form-group row">
                                            <div class="col-md-3">
                                              <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Full Name</label>
                                              <input readonly name="address[name]" value="{{$address->name}}" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                              <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Email</label>
                                              <input readonly name="address[email]" value="{{$address->email}}" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                              <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Phone</label>
                                              <input readonly name="address[mobile]" value="{{$address->mobile}}" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                            <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Country</label>
                                            <input readonly name="address[country]" value="{{$address->country}}" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                            <label style="font-size:16px" class="col-form-label  text-lg-right text-left">State / Province</label>
                                            <input readonly name="address[state]" value="{{$address->state}}" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                            <label style="font-size:16px" class="col-form-label  text-lg-right text-left">City / Town</label>
                                            <input readonly name="address[city]" value="{{$address->city}}" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                            <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Zip / Postal Code</label>
                                            <input readonly name="address[zip]" value="{{$address->zip}}" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-12">
                                            <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Street Address</label>
                                            <input readonly name="address[address]" value="{{$address->address}}" class="form-control form-control-lg" type="text">
                                          </div>
                                      </div>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                
               <div class="col-md-12" >
                   <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <label class="font-size-h3 font-weight-bolder text-dark mb-7">Additional Notes</label>
                          <div class="form-group row">
                            <div class="col-md-12">
                                  <textarea name="additional_note" class="form-control" > {{$module->additional_note}}</textarea>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-12" >
                     <div class="container text-center"> 
                          <button type="submit" class="btn btn-success" >Submit</button>
                     </div>
                </div>    
            </div>
         </div>
      </form>
      </div>

@endsection

@section('js')


<script src="{{asset('admin/assets/js/pages/crud/forms/widgets/select29cd7.js?v=7.1.5')}}"></script>

<script>

    $(document).ready(function () {
       
 


      
    
  
  });
      
</script>

@endsection