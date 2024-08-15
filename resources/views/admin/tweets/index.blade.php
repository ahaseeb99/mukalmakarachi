@extends('admin.layouts.admin')
@section('title','Blogs')

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
          <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-muted">Dashboard</a></li>
          <li class="breadcrumb-item active"><a href="{{route('admin.tweet.index')}}" class="text-muted">Tweets</a>
          </li>
        </ul>
      </div>
      <div class="d-flex align-items-center">
          <a href="{{route('admin.tweet.create')}}" class="update_btn btn btn-primary"> Add New </a>
          </div>
        </div>
      </div>

      <div class=" main-container d-flex flex-column-fluid">
          <div class="container">
            <div class="card card-custom">
              <div class="card-body">
                 <div class="table-responsive" >
                <table class="table table-hover table-checkable" id="my_datatable" style="margin-top: 13px !important">
                  <thead>
                      <tr>
                          <th> #</th>
                          <th> Thumbnail</th>
                          <th> Title</th>
                          <th class="text-center" > Actions</th>
                      </tr>
                  </thead>
                  <tbody> 
                      @foreach ($modules as $key => $item)
                        <tr class="odd gradeX">
                            <td class="center" >{{$key + 1}}</td> 
                            <td class="text-left" ><img style="width: 50px" src="{{asset($item->thumbnail)}}"  /> </td>
                            <td class="text-left urdu" > {{$item->title}}</td>
                            <td class="text-center">
                                <a href="{{route('admin.tweet.edit', $item->id)}}" class="btn btn-sm btn-clean btn-icon" title="Edit">
                                  <i class="text-success la la-edit"></i></a>
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
                                            <a href="{{route('admin.tweet.delete', $item->id)}}"  class="btn btn-primary">Delete</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                            </td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
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
        language: {
        searchPlaceholder: "Search"
        },
       
         ordering: false,
        responsive: false,
        dom: `<'row' <"col-md-6"  > <"col-md-6 text-right " f> <'col-sm-12'tr >><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
      });
      
  });
  </script>

@endsection