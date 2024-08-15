@extends('admin.layouts.admin')
@section('title','Magazines')

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
                        <a href="{{route('admin.magazines.index')}}" class="text-muted">Magazines</a>
                      </li>
                  </ul>
              </div>
              <div class="text-right col-6 ">
               <a href="{{route('admin.magazines.create')}}" class="update_btn btn btn-primary"> Add New </a>
              </div>
          </div>
        </div>    
    </div>

    <form enctype="multipart/form-data" method="post" action="{{route('admin.magazines.update',$module->id)}}">
      @csrf
       
       <div class="container" >
           <div class="row" >
               <div class="col-md-12" >
                        <div class="card card-custom gutter-b">
                            <!--end::Header-->
                            <div class="card-body">
                              <div class="form-group row">
                                
                                <div class="col-lg-6">
                                  <label style="font-size:16px;" class="col-form-label">Title (Urdu) *</label>
                                  <input name="title" value="{{$module->title}}"  class="form-control" type="text" required >
                                  @if($errors->has('title'))
                                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                                   @endif
                                </div>

                                <div class="col-lg-6">
                                  <label style="font-size:16px;" class="col-form-label">Title (English) *</label>
                                  <input name="english" value="{{$module->english}}" class="form-control" type="text" required >
                                  @if($errors->has('english'))
                                        <div class="error text-danger">{{ $errors->first('english') }}</div>
                                   @endif
                                </div>
                                
                                <div class="col-lg-6">
                                  <label class="col-form-label">Price</label>
                                  <input name="price" value="{{$module->price}}"  class="form-control" type="number" required >
                                </div>

                                <div class="col-lg-6">
                                  <label class="col-form-label">Pdf Price</label>
                                  <input required name="pdf_price" value="{{$module->pdf_price}}"  class="form-control" type="number"  >
                                </div>

                                <div class="col-md-6">
                                    <label class="col-form-label">Thumbnail</label>
                                    <div class="form-group row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <div class="input-group">
                                                <input id="thumbnail" value="{{$module->thumbnail}}"  class="form-control" type="text" name="thumbnail"  />
                                                <span class="input-group-btn">
                                                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary"> 
                                                    <i class="fa fa-picture-o"></i> Choose </a>
                                                </span>
                                                
                                          </div>
                                          <a class="d-block py-2" href="{{asset($module->thumbnail)}}" target="_blank" >Download</a>
                                        </div>
                                      </div>
                                  </div>
                                 
                                </div>

                                <div class="col-md-6">
                                  <label class="col-form-label">PDF</label>
                                  <div class="form-group row">
                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <div class="input-group">
                                              <input value="{{$module->pdf}}" id="thumbnail1"  class="form-control" type="text" name="pdf"  />
                                              <span class="input-group-btn">
                                                <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Choose </a>
                                              </span>
                                              
                                        </div>
                                        <a class="d-block py-2" href="{{asset($module->pdf)}}" target="_blank" >Download</a>
                                      </div>
                                    </div>
                                </div>
                              </div>
                                <div class="col-12">
                                  <label class="col-form-label" >Description</label>
                                  <textarea  class="form-control" name="des">{{$module->des}}</textarea>
                                </div>
                            </div>
                          </div>
                        </div>
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
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"> </script>
<script>

    $(document).ready(function () {

      $('#lfm').filemanager('file');
      $('#lfm1').filemanager('file');
        
    
  });
      
</script>

@endsection
