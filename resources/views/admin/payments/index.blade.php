@extends('admin.layouts.admin')
@section('title','Payments')

@section('css')

  
  <style>

      .pagination-con ul {
        display: inline;
      }

      .pagination-con ul li {
        display: inline-block;
      }

      .pagination-con nav {
        text-align: center;
      }

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
                     <a href="{{route('admin.payments.index')}}" class="text-muted">Payments</a>
                  </li>
                </ul>
              </div>
              <div class="d-flex align-items-center">
        
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
                      <!--end::Svg Icon-->
                    </span>
                  </a>
                  <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right py-3" style="">
                    <!--begin::Navigation-->
                    <ul class="navi navi-hover py-5">
                        <li class="navi-item">
                          <a  href="{{route('admin.payments.create')}}" class="navi-link">
                            <span class="navi-icon"> <i class="flaticon2-pen text-danger mr-5"></i> </span>
                            <span class="navi-text">Add New</span>
                          </a> 
                        </li>
                    </ul>
                        <!--end::Navigation-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>

             <!--end::Subheader-->
            <!--begin::Entry-->
            <div class=" main-container d-flex flex-column-fluid">
              <!--begin::Container-->
              <div class="container">
                <!--begin::Card-->
                <div class="card card-custom">
                  <div class="card-body">
                    <!--begin: Datatable-->
                     <div class="table-responsive" >
                    <table class="table table-hover table-checkable" id="my_datatable" style="margin-top: 13px !important">
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>Date</th>
                            <th>Payer</th>
                            <th>Order ID</th>
                            <th>Currency</th>
                            <th>Amount</th>
                            <th>Method</th>
                            <th class="text-center" >Actions</th>
                          </tr>
                      </thead>
                      <tbody> 
                          @foreach ($modules as $key => $item)
                           <?php 
                             $payer_info = unserialize($item->payer_info);
                           ?>
                            <tr class="odd gradeX">
                                  <td class="center" > #{{$item->id}} </td>
                                  <td class="center" > {{$item->date->format('Y-m-d h:i:s A')}} </td>
                                  <td class="center" > {{$payer_info['email'] }} </td>
                                  <td class="center" > <a href="{{route('admin.orders.edit', $item->order_id)}}" >#{{$item->order_id}}</a>  </td>
                                  <td class="center" > {{$item->currency}}</td>
                                  <td class="center" > {{$item->amount}} </td>
                                  <td class="center" > {{$item->payment_method}} </td>
                                  <td class="text-center">
                                    <a href="{{route('admin.payments.edit', $item->id)}}" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="text-success la la-edit"></i></a>
                                    <a href="{{route('admin.payments.delete', $item->id)}}" class="btn btn-sm btn-clean btn-icon" title="Delete"><i class="text-danger la la-trash"></i></a>
                                  </td>
                            </tr>
                          @endforeach
                      </tbody>
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
        

      var table = $('#my_datatable').DataTable({
        colReorder: true,
        rowReorder: false,
        "aaSorting": [],
        language: { search: "" },
        buttons: [
            { 
              extend: 'copyHtml5', 
              footer: true,
              exportOptions: {
                    columns: ':visible'
                }
            },
            { 
              extend: 'excelHtml5',
              footer: true ,
              exportOptions: {
                    columns: ':visible'
                }
            },
            { 
              extend: 'csvHtml5', 
              footer: true,
              exportOptions: {
                    columns: ':visible'
                }
            },
            { 
              extend: 'pdfHtml5', 
              footer: true,
              exportOptions: {
                    columns: ':visible'
                }
            },
            { 
              extend: 'print', 
              footer: true,
              exportOptions: {
                    columns: ':visible'
                }
            },
            {
                extend: 'colvis',
                collectionLayout: 'fixed two-column'
            }
            
        ],
        responsive: false,
        dom: `<'row' <"col-md-6" B > <"col-md-6 text-right " f> <'col-sm-12'tr >><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
         ordering: false,
      });
      
  
   

  });


  </script>

@endsection
