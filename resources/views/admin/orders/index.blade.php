@extends('admin.layouts.admin')
@section('title','Orders')

@section('css')
  
      <style>
            .dt-buttons button {
              background:white!important;
            }
    
            .main-container .dropdown-menu {
              position: relative;
              top: 0;
              left: 0;
              z-index: 98;
              display: block;
              float: none;
              min-width: 100%;
              padding: 0px;
              margin: 0px;
              font-size: 1rem;
              color: #3F4254;
              text-align: left;
              list-style: none;
              background-color: #ffffff;
              background-clip: padding-box;
              border: 0 solid rgba(0, 0, 0, 0.15);
              border-radius: 0.42rem;
              -webkit-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
              box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
            }
    
            .main-container .dropdown-menu a {
              color: black;
            }
            
      </style>

    <link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle9cd7.css?v=7.1.5')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatable/buttons.css')}}" rel="stylesheet" type="text/css" />
     
        <style>
         .table thead th::after{
        
            display:contents!important;
        }
        
       .table thead th::after{
            position:relative!important;
            left:0px!important;
            margin:0px!important;
            display:none!important;
        }
        
        .table thead th::before{
            position:relative!important;
            margin:0px!important;
           left:0px!important;
           display:contents!important;
        }
        
    </style>
    
@endsection


@section('content')

 
<div class=" content d-flex flex-column flex-column-fluid" >

              <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
                <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                  <div class="d-flex align-items-center flex-wrap mr-2">
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                      <li class="breadcrumb-item">
                        <a href="{{route('admin.home')}}" class="text-muted">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active">
                         <a href="{{route('admin.orders.index')}}" class="text-muted">Orders</a>
                      </li>
                    </ul>
                  </div>
                  <div class="d-flex align-items-center">
                
                  </div>
              </div>
            </div>
          
          <div class="d-flex flex-column-fluid mb-4">
              <div class="container">
                <div class="card card-custom">
                  <div class="card-body">
                    <form method="get" action="{{route('admin.orders.search')}}" >
                        <div class="row align-items-center">  
                             <div class="py-2 col-lg-4">
                                <label class="col-form-label">Customer</label>
                                <select class="form-control" name="scustomer" autocomplete="off">
        					       <option value="all" > Select   </option>
            					      @foreach(Con::getUsersWhereNotIn(['super-admin']) as $customer )
            					       <option @if(isset($scustomer) && $scustomer == $customer->id) {{'selected'}} @endif value="{{$customer->id}}" > {{$customer->name}}</option>
            					      @endforeach
        				        </select>
                            </div>
                            
                             <div class="py-2 col-lg-4">
                                  <label class="col-form-label">Status</label>
                                  <select class="form-control" name="sstatus" autocomplete="off">
                                    <option value="all" > Select  </option>
                                    <option @if(isset($sstatus) && $sstatus == 'pending' ) {{'selected'}} @endif value="pending"> Pending</option>
                                    <option @if(isset($sstatus) && $sstatus == 'canceled' ) {{'selected'}} @endif value="canceled"> Cancel</option>
                                    <option @if(isset($sstatus) && $sstatus == 'approved' ) {{'selected'}} @endif value="approved"> Approve</option>
                                    <option @if(isset($sstatus) && $sstatus == 'processing' ) {{'selected'}} @endif value="processing"> Processing</option>
                                    <option @if(isset($sstatus) && $sstatus == 'delivered' ) {{'selected'}} @endif value="delivered"> Delivered</option>
                                    <option @if(isset($sstatus) && $sstatus == 'completed' ) {{'selected'}} @endif value="delivered"> Completed</option>
                                  </select>
                             </div>
                                
                            <div class="py-2 col-lg-4">
                                <label class="col-form-label">Payment Status</label>
                                <select class="form-control" name="pstatus" autocomplete="off">
        					      <option value="all" > Select   </option>
        					      <option @if(isset($pstatus) && $pstatus == '1' ) {{'selected'}} @endif  value="1">Paid</option>
        					      <option @if(isset($pstatus) && $pstatus == '0' ) {{'selected'}} @endif value="0">Unpaid</option>
        				        </select>
                            </div>
                            
                            <div class="py-2 col-md-10 ">
                                <div class="input-daterange input-group" id="kt_datepicker">
                                  <input autocomplete="off" @isset($sstart) value="{{date('m/d/Y', strtotime($sstart))}}" @endisset  type="text" class="form-control datatable-input" name="sstart" placeholder="From" data-col-index="5">
                                  <div class="input-group-append">
                                    <span class="input-group-text">
                                      <i class="la la-ellipsis-h"></i>
                                    </span>
                                  </div>
                                  <input autocomplete="off" @isset($send) value="{{date('m/d/Y', strtotime($send))}}" @endisset type="text" class="form-control datatable-input" name="send" placeholder="To" data-col-index="5">
                                </div>
                            </div>
                                  
                            <div class="col-lg-2 text-right ">
                               <button type="submit" class="w-100 btn btn-primary" >Search</button>
                            </div>
                        </div>
                      </form>
                    </div>
                 </div>
             </div>
        </div>
    

        <div class=" main-container d-flex flex-column-fluid">
          <div class="container">
            <div class="card card-custom">
                 <div class="card-header flex-wrap py-5">
                    <div class="card-title"><h3 class="card-label">Orders</h3></div>
                    <div class="card-toolbar"></div>
                </div>
              <div class="card-body">
                 <div class="table-responsive" >
                <table class=" table table-hover table-checkable" id="my_datatable" style="margin-top: 13px !important">
                  <thead>
                      <tr>
                            <th style="font-size:16px;" class="text-center" > Order ID</th>
                            <th style="font-size:16px;" class="text-center" > Date</th>
                            <th style="font-size:16px;" class="text-center" > Customer Name</th>
                            <th style="font-size:16px;" class="text-center" > Status</th>
                            <th style="font-size:16px;" class="text-center" > Payment Status</th>
                            <th style="font-size:16px;" class="text-center" > Total</th>
                            <th style="font-size:16px;" class="text-center" > Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $gtotal = 0;  ?>
                    
                    @foreach ($modules as $key => $item)
                    
                       <?php $gtotal += $item->total;  ?>
                        <tr class="odd gradeX">
                           <td class=" text-center" >#{{$item->id}}</td>
                           <td class=" text-center">{{$item->date->format('d-m-Y')}}</td>
                           <td class=" text-center"> {{$item->user->name}} </td>
                           <td class=" text-center">{{ucwords($item->status)}}</td>
                           <td class=" text-center"> @if($item->payment_status) {{'Paid'}} @else {{'UnPaid'}}  @endif</td>
                           <td class=" text-center">{{number_format($item->total,2)}} Rs</td>
                           <td class=" text-center">
                                <a href="{{route('admin.orders.edit', $item->id)}}" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="text-success la la-edit"></i></a>
                             <a data-toggle="modal" data-target="#exampleModal{{$item->id}}"  class="btn btn-sm btn-clean btn-icon" title="Delete"><i class="text-danger la la-trash"></i></a>
                                <div class="modal fade" id="exampleModal{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog modal-dialog-centered " role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Are You Sure Do You Want To Delete?</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <a href="{{route('admin.orders.delete', $item->id)}}"  class="btn btn-primary">Delete</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </td>
                       </tr>
                      @endforeach
                  </tbody>
                  <tfoot>
                        <tr>
                            <th class="text-center" >Grand Total  </th>
                            <th colspan="4" style="text-align:right"></th>
                            <td class="text-center" >{{number_format($gtotal,2)}} Rs </td>
                            <th class="text-center" > </th>
                        </tr>
                  </tfoot>
                </table>
                </div>
                <!--end: Datatable-->
              </div>
            </div>
          </div>
          <!--end::Container-->
        </div>
</div>

@endsection


@section('js')

<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle9cd7.js?v=7.1.5')}}"></script>


<script>
    $(document).ready(function(){

          $('#kt_datepicker').datepicker({
               todayHighlight: true,
               templates: {
               leftArrow: '<i class="la la-angle-left"></i>',
               rightArrow: '<i class="la la-angle-right"></i>',
              },
    	  });

  
          var table = $('#my_datatable').DataTable({
            colReorder: true,
            rowReorder: true,
            language: {
        searchPlaceholder: "Search"
        },
         ordering: false,
            responsive: true,
            dom: `<'row' <"col-md-6"  > <"col-md-6 text-right " f> <'col-sm-12'tr >><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
          });
      

   });
  
 </script>

@endsection