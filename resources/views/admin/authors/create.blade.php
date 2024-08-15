@extends('admin.layouts.admin')
@section('title','Authors')

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
                       <a href="{{route('admin.authors.index')}}" class="text-muted">Authors</a>
                    </li>
                  </ul>
              </div>
    
              <div class="text-right col-6 ">
                  <a href="{{route('admin.authors.create')}}" class="update_btn btn btn-primary"> Add New </a>
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
    
                <form enctype="multipart/form-data" method="post" action="{{route('admin.authors.store')}}"  class="form-horizontal">
                    @csrf
                          <div class="form-body">
                            <div class="form-group row">
                             
                              <div class="col-12">
                                <label style="font-size:16px" class="col-form-label text-lg-right text-left">Name (Urdu) *</label>
                                <input required  name="title" value="{{old('title')}}"  class="title form-control form-control-lg" type="text" >
                                @if($errors->has('title'))
                                    <div class="error text-danger">{{ $errors->first('title') }}</div>
                                @endif
                              </div>
                            </div>
    
                            <div class="form-group row">
                              <div class="col-12">
                                  <label style="font-size:16px" class="col-form-label text-lg-right text-left">Name (English) *</label>
                                <input required  name="english" value="{{old("english")}}"  class="form-control form-control-lg" type="text" >
                                @if($errors->has('english'))
                                    <div class="error text-danger">{{ $errors->first('english') }}</div>
                                @endif
                              </div>
                            </div>
                          
                            <div class="form-group row">
                                <div class="col-12">
                                  <label style="font-size:16px" class="col-form-label text-lg-right text-left">Description</label>
                                  <textarea name="des" class="form-control" >{{old('des')}}</textarea>
                                  @if($errors->has('des'))
                                      <div class="error text-danger">{{ $errors->first('des') }}</div>
                                  @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                              <div class="col-lg-12 ">
                                   <label style="font-size:16px" class="col-form-label text-lg-right text-left">Thumbnail</label>
                                  <div class="input-group">
                                      <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder1" class="btn btn-primary">
                                          <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                      </span>
                                      <input id="thumbnail"  class="form-control" type="text" name="thumbnail" value="" />
                                    </div>       
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
      </div>


@endsection

@section('js')

<script>

    $(document).ready(function () {

      $('#lfm').filemanager('file');
        
    });
      

</script>

@endsection

