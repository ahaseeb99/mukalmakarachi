@extends('admin.layouts.admin')
@section('title','All Settings')

@section('css')
    <!-- data tables -->

   
@endsection

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
  <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
    <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
      <div class="d-flex align-items-center flex-wrap mr-2">
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
          <li class="breadcrumb-item">
          <a href="{{route('admin.home')}}" class="text-muted">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">
             <a href="{{route('admin.settings.index')}}" class="text-muted">All Settings</a>
          </li>
        </ul>
      </div>
      <div class="d-flex align-items-center">
        <div class="input-icon">
          <input type="text" class="form-control" placeholder="Search..." id="kt_subheader_search_form" />
          <span><i class="flaticon2-search-1 text-muted"></i></span>
        </div>
        <div class="dropdown dropdown-inline ml-2" >
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCustomScrollable"> Add New </button>
        </div>
      </div>
    </div>
  </div>

  <div class="d-flex flex-column-fluid">
    <div class="container">
      <div class="card card-custom">
        <div class="card-body">
          <table class="table table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
            <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th class="text-center" >Actions</th>
                </tr>
            </thead>
            <tbody> 
              @foreach ($settings as $key => $item)
                <tr class="odd gradeX">
                      <td class="center" >{{$item->id}}</td>
                      <td class="text-left" >{{$item->name}}</td>
                      <td class="text-center">
                          <a href="{{route('admin.settings.delete', $item->id)}}" class="btn btn-sm btn-clean btn-icon" title="Edit">
                                <i class="la la-trash"></i></a>
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


<!-- Modal-->
<div class="modal fade" id="exampleModalCustomScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
    <form method="post" action="{{route('admin.settings.store')}}">
        @csrf
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Settings</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i aria-hidden="true" class="ki ki-close"></i></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Name </label>
                    <input required name="name" type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label>Value</label>
                    <input required  name="value" type="text" class="form-control" >
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
            </div>
        </div>
        </div>
    </div>
  </form>
  </div>
</div>
@endsection


@section('js')
<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle9cd7.js?v=7.1.5')}}"></script>

<script>
  $(document).ready(function(){
        
     var table = $('#kt_datatable').DataTable({
       responsive: true,
       dom: `<'row'<'col-sm-12'tr>><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

     });

     $('#kt_subheader_search_form').on('change', function () {

      table.search( this.value ).draw();
      });


  });

  </script>
@endsection
