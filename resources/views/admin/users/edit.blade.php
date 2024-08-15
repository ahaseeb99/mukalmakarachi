@extends('admin.layouts.admin')
@section('title','Edit User')

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
                 <a href="{{route('admin.users.index')}}" class="text-muted">Users</a>
              </li>
            </ul>
        </div>
  
        <div class="text-right col-6 ">
                
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

            <form method="post" action="{{route('admin.users.update',$module->id)}}"  class="form-horizontal">
                @csrf
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-form-label col-3 text-lg-right text-left">Name</label>
                          <div class="col-9">
                            <input  name="name" value="{{$module->name}}"  class="form-control form-control-lg" type="text" >
                            @if($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}</div>
                            @endif
                          </div>
                        </div>

                        <div class="form-group row">
                          <label class="col-form-label col-3 text-lg-right text-left">Email</label>
                          <div class="col-9">
                            <input  name="email" value="{{$module->email}}" class="form-control form-control-lg " type="email" >
                            @if($errors->has('email'))
                                <div class="error text-danger">{{ $errors->first('email') }}</div>
                            @endif
                          </div>
                        </div>
                        
                         <div class="form-group row">
                          <label class="col-form-label col-3 text-lg-right text-left">Phone</label>
                          <div class="col-9">
                            <input  name="mobile" value="{{$module->mobile}}" class="form-control form-control-lg " type="text" >
                          </div>
                        </div>
                        

                         <div class="d-none form-actions">
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
  </div>
@endsection

@section('js')

<script>
      

</script>

@endsection