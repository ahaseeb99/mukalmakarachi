
@extends('admin.layouts.admin')
@section('title','Create Role')

@section('css')


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
          <li class="breadcrumb-item">
          <a href="{{route('admin.roles.index')}}" class="text-muted">Roles</a>
          </li>
          <li class="breadcrumb-item active">
            <a href="{{route('admin.roles.create')}}" class="">Create</a>
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
              @can('users.create','none')
                <li class="navi-item">
                  <a  href="{{route('admin.roles.create')}}" class="navi-link">
                    <span class="navi-icon"> <i class="flaticon2-pen text-danger mr-5"></i> </span>
                    <span class="navi-text">Add New </span>
                  </a> 
                </li>
              @endcan
            </ul>
                <!--end::Navigation-->
              </div>
            </div>
        
        
        
      </div>
    </div>
  </div>

  <!--end::Subheader-->
  <!--begin::Entry-->
  <div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
      <!--begin::Card-->
      <div class="card card-custom">
        <div class=" card-header flex-wrap border-0 pt-6 pb-0">
          <div class="card-title">
            <h3 class="card-label">Create Role</h3>
          </div>
          <div class="card-toolbar">
            
          </div>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-7 my-2">

              @if ($errors->any())  
                <div class="row mb-5">
                  <label class="col-3"></label>
                  <div class="col-9">
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-custom alert-light-danger fade show py-4" role="alert">
                      <div class="alert-icon"><i class="flaticon-warning"></i></div>
                      <div class="alert-text font-weight-bold">{{ $error }}</div>
                      <div class="alert-close">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true"><i class="la la-close"></i></span>
                        </button>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              <!--begin::Row-->
            @endif
            <form method="post" action="{{route('admin.roles.store')}}"  id="user_create_form" class="form-horizontal">
                @csrf
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-form-label col-3 text-lg-right text-left">Title</label>
                          <div class="col-9">
                            <input required name="name"  class="form-control form-control-lg " type="text" >
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-3 text-lg-right text-left">Details</label>
                          <div class="col-9">
                              <textarea required class="form-control" name="detail"  cols="30" rows="10"></textarea>
                          </div>
                        </div>

                         <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12 text-right">
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
        <!--end::Container-->
      </div>
  <!--end::Entry-->
  </div>
@endsection

@section('js')

<script>
      

</script>

@endsection


