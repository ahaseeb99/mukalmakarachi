
@extends('admin.layouts.admin')
@section('title','Book Categories')

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
                        <a href="{{route('admin.categories.index')}}" class="text-muted">Book Categories</a>
                      </li>
                    </ul>
                </div>
                <div class="text-right col-6 ">
                    <a href="{{route('admin.categories.create')}}" class="update_btn btn btn-primary"> Add New </a>
              </div>
            </div>
        </div>    
      </div>

      <div class="d-flex flex-column-fluid">
        <div class="container">
          <div class="card card-custom">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-2"></div>
                <div class="col-xl-7 my-2">
                    <form enctype="multipart/form-data" method="post" action="{{route('admin.categories.store')}}"  class="form-horizontal">
                       @csrf
                      <div class="form-body">
                        <div class="form-group row">
                          
                          <div class="col-12">
                              <label style="font-size: 16px;" class="col-form-label text-lg-right text-left">Title (Urdu)</label>
                            <input  name="title" value="{{old('title')}}"  class="title form-control form-control-lg" type="text" >
                            @if($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}</div>
                            @endif
                          </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <label style="font-size: 16px;" class="col-form-label text-lg-right text-left">Title (English)</label>
                              <input  name="english" value="{{old('english')}}"  class="slug form-control form-control-lg" type="text" >
                              @if($errors->has('english'))
                                  <div class="error text-danger">{{ $errors->first('english') }}</div>
                              @endif
                            </div>
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
        <!--end::Container-->
      </div>

  <!--end::Entry-->

@endsection

@section('js')

  <script>
      $(document).ready(function () {

    
        
      });
  </script>

@endsection

