
@extends('admin.layouts.admin')
@section('title','Videos')

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
                        <a href="{{route('admin.videos.index')}}" class="text-muted">Videos</a>
                      </li>
                    </ul>
                </div>
                <div class="text-right col-6 ">
                    <a href="{{route('admin.videos.create')}}" class="update_btn btn btn-primary"> Add New </a>
                    
          
              </div>
            </div>
        </div>    
      </div>

      <div class="d-flex flex-column-fluid">
        <div class="container">
          <div class="card card-custom">
            <div class="card-body">
              <div class="row">
                <div class="col-12 my-2">
                    <form enctype="multipart/form-data" method="post" action="{{route('admin.videos.update',$module->id)}}"  class="form-horizontal">
                       @csrf
                      <div class="form-body">
                        <div class="form-group row">
                        
                          <div class="col-md-6">
                            <label style="font-size:16px" class="col-form-label text-lg-right text-left">Title (Urdu)</label>
                            <input required  name="title" value="{{$module->title}}"  class="title form-control form-control-lg" type="text" >
                            @if($errors->has('title'))
                                <div class="error text-danger">{{ $errors->first('title') }}</div>
                            @endif
                          </div>
                    
                          
                          <div class="col-md-6">
                              <label style="font-size:16px" class="col-form-label text-lg-right text-left">Title (English)</label>
                              <input required  name="english" value="{{$module->english}}"  class="form-control form-control-lg" type="text" >
                              @if($errors->has('english'))
                                <div class="error text-danger">{{ $errors->first('english') }}</div>
                              @endif
                          </div>
                     
                         
            
                          <div class="col-md-6">
                            <label style="font-size:16px" class="col-form-label text-lg-right text-left">Category</label>
                            <select class="form-control" name="category_id">
                              @foreach (Con::video_categories() as $item)
                              <option @if($module->category_id == $item->id) {{"selected"}}  @endif value="{{$item->id}}">{{$item->title}}</option>    
                              @endforeach
                            </select>
                          </div>

                          
                          <div class="col-md-6">
                            <label style="font-size:16px" class="col-form-label text-lg-right text-left">Video Url</label>
                            <input required value="{{$module->video}}"  name="video"   class="form-control form-control-lg" type="text" >
                          </div>
                         
                          <div class="col-md-6">
                              <label style="font-size:16px" class="col-form-label text-lg-right text-left">Thumbnail</label>
                              <div class="form-group">
                                <div class="input-group">
                                      <input id="thumbnail"  class="form-control" type="text" name="thumbnail" value="{{$module->thumbnail}}"  />
                                      <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary"> 
                                          <i class="fa fa-picture-o"></i> Choose </a>
                                      </span>
                                </div>
                              </div>
                          </div> 
            
                          
                          <div class="col-md-12">
                           <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Description</label>
                            <textarea class="form-control" name="des"  cols="30" rows="10">{{$module->des}}</textarea>
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
        $('#lfm').filemanager('file');
    
        
      });
  </script>

@endsection

