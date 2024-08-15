
@extends('admin.layouts.admin')
@section('title','Create Payment')

@section('css')


@endsection

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
                       <a href="{{route('admin.payments.index')}}" class="text-muted">Payments</a>
                    </li>
                  </ul>
              </div>
              <div class="text-right col-6 ">
                <div class="dropdown dropdown-inline"  data-placement="left" >
                  <a href="#" class="btn btn-sm btn-clean btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-success svg-icon-lg">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24"></polygon>
                          <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                          <path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
                        </g>
                      </svg>
                    </span>
                  </a>
                  <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3" >
                    <ul class="navi navi-hover py-5">
                        <li class="navi-item">
                          <a  href="{{route('admin.payments.create')}}" class="navi-link">
                            <span class="navi-icon"> <i class="flaticon2-pen text-danger mr-5"></i> </span>
                            <span class="navi-text">Add New</span>
                          </a>
                        </li>
                    </ul>
                  </div>
                </div>
            </div>
          </div>
      </div>    
    </div>

  <div class="d-flex flex-column-fluid">
    <div class="container">
      <div class="card card-custom">
        <div class=" card-header flex-wrap border-0 pt-6 pb-0">
          <div class="card-title"><h3 class="card-label">Create Payment</h3></div>
          <div class="card-toolbar"></div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 my-2">
            <form enctype="multipart/form-data" method="post" action="{{route('admin.payments.store')}}"  class="form-horizontal">
                @csrf
                      <div class="form-body">
                          <div class="form-group row">
                              
                            <div class="col-4">
                                <label class="col-form-label  text-lg-right text-left">Date</label>
                                <input required  name="date" value="{{old('date')}}"  class="form-control form-control-lg" type="date" >
                            </div>
                             
                             <div class="col-4">
                              <label class="col-form-label  text-lg-right text-left">Order ID</label>
                              <select name="order_id" class="form-control" >
                                   @foreach(Con::orders() as $order)
                                      <option value="{{$order->id}}" >#{{$order->id}}</option>
                                  @endforeach
                              </select>
                            </div>
                            <div class="col-4">
                                <label class="col-form-label  text-lg-right text-left">Payer ID</label>
                                <input required value="none"  name="payer_info[payer_id]" class="form-control form-control-lg" type="text" >
                            </div>
                            <div class="col-4">
                                <label class="col-form-label  text-lg-right text-left">Payer Phone / Email</label>
                                <input required  name="payer_info[email]"  class="form-control form-control-lg" type="text" >
                            </div>
                            <div class="col-4">
                                <label class="col-form-label  text-lg-right text-left">Payer Name</label>
                                <input required value="none"  name="payer_info[name]" class="form-control form-control-lg" type="text" >
                            </div>
                            
                            
                            <div class="col-4">
                                <label class="col-form-label  text-lg-right text-left">Payer Address</label>
                                <input required value="none"  name="payer_info[address]" class="form-control form-control-lg" type="text" >
                            </div>
                            
                            <div class="col-4">
                                  <label class="col-form-label text-lg-right text-left">Payment Method</label>
                                  <select name="payment_method" class="form-control" >
                                        <option value="cash_on_Delivery"  >Cash</option>
                                        <option value="bank">Bank</option>
                                        <option value="stripe">Stripe</option>
                                        <option value="paypal">Paypal</option>
                                        <option value="easypaisa">EasyPaisa</option>
                                        <option value="jazcash">JazCash</option>
                                        <option value="other">Other</option>
                                  </select>
                           </div>
                            
                            
                             <div class="col-4">
                                <label class="col-form-label  text-lg-right text-left">Paye Account</label>
                                <input required value="none"  name="payer_info[bank_account]" class="form-control form-control-lg" type="text" >
                            </div>
        
                           
                            
                         
                           <div class="col-4">
                                <label class="col-form-label text-lg-right text-left">Currency</label>
                                  <select name="currency" class="form-control" >
                                        <option>USD</option>
                                        <option>URO</option>
                                        <option>RUPES</option>
                                 </select>
                            </div>
                           <div class="col-4">
                                <label class="col-form-label text-lg-right text-left">Amount</label>
                                <input required min="1"  name="amount" value="{{old('amount')}}"  class=" form-control form-control-lg" type="number" >
                            </div>
                            <div class="col-4">
                                  <label class=" col-form-label text-lg-right">File:</label>
                                  <div class="input-group">
                                      <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder1" class="btn btn-primary">
                                          <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                      </span>
                                      <input id="thumbnail"  class="form-control" type="text" name="file" />
                                    </div>
                            </div>
                            <div class="col-12">
                              <label class="col-form-label  text-lg-right text-left">Description</label>
                              <textarea name="details" class="form-control" >{{old('details')}}</textarea>
                            </div>
                        </div>
                         <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </div>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

@section('js')

<script>

    $(document).ready(function () {

      $('#lfm').filemanager('file');
        


    });
      

</script>

@endsection

