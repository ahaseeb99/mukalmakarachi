@extends('admin.layouts.admin')
@section('title','Create')

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
                      <li class="breadcrumb-item">
                        <a class="text-muted">{{$module->plural}}</a>
                      </li>
                      <li class="breadcrumb-item active">
                        <a  class="text-muted">create</a>
                      </li>
                  </ul>
              </div>
              <div class="text-right col-6 ">
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
                          <a  href="{{route('admin.posts.create',$module->plural)}}" class="navi-link">
                            <span class="navi-icon"> <i class="flaticon2-pen text-danger mr-5"></i> </span>
                            <span class="navi-text">Add New </span>
                          </a> 
                        </li>
                    </ul>
                        <!--end::Navigation-->
                      </div>
                    </div>
              </div>
          </div>
        </div>    
    </div>

    <form enctype="multipart/form-data" method="post" action="{{route('admin.posts.store',$module->plural)}}">
      @csrf
       
       <div class="container" >
           <div class="row" >
               <div class="col-md-8" >
                   
                        <div class="card card-custom gutter-b">
                            <!--end::Header-->
                            <div class="card-body">
                                <label class="font-size-h3 font-weight-bolder text-dark mb-7">General</label>
                              <div class="form-group row">
                                  
                                <div class="col-lg-12">
                                  <label class="col-form-label">Title</label>
                                  <input name="title" value="{{old('title')}}" class="title form-control" type="text" required >
                                   @if($errors->has('title'))
                                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                                   @endif
                                </div>
                                
                                <div class="col-lg-12">
                                  <label class="col-form-label">Slug</label>
                                  <input name="slug" value="{{old('slug')}}" class="slug form-control" type="text" required >
                                   @if($errors->has('slug'))
                                        <div class="error text-danger">{{ $errors->first('slug') }}</div>
                                   @endif
                                </div>
                                
                                @php   $attributes = unserialize($module->fields);   @endphp
                                @if(is_array($attributes))
                                 @foreach($attributes as  $key => $item)
                                    <div class="col-lg-12">
                                      <label class="col-form-label">{{$item['key']}}</label>
                                      <input name="items[{{$item['key']}}]" value="{{$item['value']}}" class="form-control" type="text">
                                    </div>
                                 @endforeach
                                @endif
                            </div>
                          </div>
                        </div>
                        
                        <div class="card card-custom gutter-b">
                                <!--end::Header-->
                                <div class="card-body">
                                    <label class="font-size-h3 font-weight-bolder text-dark mb-7">Description</label>
                                    <textarea class="form-control" name="des" id="editor1">{{old('stock')}}</textarea>

                              </div>
                        </div>
                        
                          <div class="card card-custom gutter-b">
                                <!--end::Header-->
                                <div class="card-body">
                                    <label class="font-size-h3 font-weight-bolder text-dark mb-7">Gallery</label>
                                     <div class="input-group">
                                      <span class="input-group-btn">
                                        <a id="lfm" data-input="thumbnail" data-preview="holder1" class="btn btn-primary"> <i class="fa fa-picture-o"></i> Choose </a>
                                      </span>
                                      <input id="thumbnail"  class="form-control" type="text" name="gallery" value="" />
                                    </div>
                              </div>
                        </div>
                            
                        <div class="container text-center"> 
                          <button type="submit" class="btn btn-success" >Submit</button>
                        </div>
               </div>
               <div class="col-md-4" >
                    <div class="card card-custom gutter-b">
            		   <div class="card-body">
            		    <label class="font-size-h3 font-weight-bolder text-dark mb-7">Status</label>
    				    <select class="form-control" name="status" autocomplete="off" >
    						 <option value="approved" >Approve</option>
    						 <option value="pending" >Pending</option>
    					</select>
                    	</div>
                	</div>
                	
                  <div class="card card-custom gutter-b">
                     <div class="card-body">
                          <label class="font-size-h3 font-weight-bolder text-dark mb-7">Thumbnail</label>
                          <div class="form-group row">
                            <div class="col-lg-12">
                              <div class="form-group">
									<div class="input-group">
                                      <span class="input-group-btn">
                                        <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary"> <i class="fa fa-picture-o"></i> Choose </a>
                                      </span>
                                        <input id="thumbnail1"  class="form-control" type="text" name="thumbnail"  />
                                    </div>
							  </div>
                            </div>
                        </div>
                     </div>
                  </div>
                  
                    <div class="card card-custom gutter-b">
            		  <div class="card-body">
            		   <label class="font-size-h3 font-weight-bolder text-dark mb-7">Excerpt</label>
    				    <textarea class="form-control" name="excerpt"></textarea>
                    	</div>
                	</div>
               </div>
           </div>
       </div>
        <!--end::Container-->
      </form>

      </div>

  <!--end::Entry-->

@endsection

@section('js')

<script src="{{asset('admin/assets/js/pages/crud/forms/widgets/select29cd7.js?v=7.1.5')}}"></script>
<script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"> </script>
<script>

    $(document).ready(function () {
        
         $('#lfm').filemanager('file');
      $('#lfm1').filemanager('file');
        
    

       $(".title").keyup(function(){
            var Text = $(this).val();
            Text = Text.toLowerCase();
            Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
            $(".slug").val(Text);        
        });
            

      var index = 0 ;

      $('.custom_field').on("click", ".remove-icon" , function() {
          $(this).parent().remove();
      });


      $('.add-icon').on('click', function () {
        
         index = index + 1;

        $(".custom_field").append(`<div class="form-group row">
          <div class="col-md-6">
           <label class="col-form-label ">Name</label><input min="1" name="item[${index}][key]" class="form-control" type="text" required ></div>
          <div class="col-md-6"><label class="col-form-label">Value</label> <input name="item[${index}][value]" class="form-control" type="text" ></div>
          <a class="border remove-icon" style="cursor: pointer;position: absolute;right: 13px;color: red;">
                                                <i  class="text-danger icon-xl fas fa-window-close"></i> </a>
          </div>`);
        });
        
        CKEDITOR.replace( 'editor1' );
  });
      
</script>

@endsection