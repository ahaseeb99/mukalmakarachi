@extends('admin.layouts.admin')
@section('title','Customizations')

@section('css')

       
@endsection

@section('content')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
          <div class="d-flex align-items-center flex-wrap mr-2">
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
              <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-muted">Dashboard</a></li>
              <li class="breadcrumb-item"><a class="text-muted">Settings</a></li>
            </ul>
          </div>
          <div class="d-flex align-items-center">
            <button class="update_btn btn btn-primary"> Update </button>
          </div>
        </div>
      </div>
    <div class="d-flex flex-column-fluid">
        <div class="container">
               <div class="card card-custom">
                <div class="card-header card-header-tabs-line">
                    <ul class="nav nav-dark nav-bold nav-tabs nav-tabs-line" data-remember-tab="tab_id" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#terms">Terms</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#payment">Payment Method</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#shipment">Shipment Guide</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#location">Location</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#adjustment">Adjustment Delivery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#policy">Shipment Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#return">Return Policy</a>
                        </li>
                    </ul>
                </div>
                <form class="form setting_form" method="post" enctype="multipart/form-data" action="{{route('admin.settings.update1')}}" id="form-builder"  >
                @csrf
                 <div class="card-body">
                        <div class="tab-content pt-3">
                            <div class="tab-pane active " id="terms">
                                <div class="form-group row">
                                    <div class="col-lg-12 ">
                                       <textarea id="editor1" class="form-control" name="terms"  cols="30" rows="10">{{$_settings->terms}}</textarea>
                                    </div>
                                </div>
                           </div>
                           <div class="tab-pane" id="payment">
                                <div class="form-group row">
                                    <div class="col-lg-12 ">
                                       <textarea id="editor2" class="form-control" name="payment"  cols="30" rows="10">{{$_settings->payment}}</textarea>
                                    </div>
                                </div>
                           </div>
                           <div class="tab-pane" id="shipment">
                                <div class="form-group row">
                                    <div class="col-lg-12 ">
                                       <textarea id="editor3" class="form-control" name="shipment"  cols="30" rows="10">{{$_settings->shipment}}</textarea>
                                    </div>
                                </div>
                           </div>
                           <div class="tab-pane" id="location">
                                <div class="form-group row">
                                    <div class="col-lg-12 ">
                                       <textarea id="editor4" class="form-control" name="location"  cols="30" rows="10">{{$_settings->location}}</textarea>
                                    </div>
                                </div>
                           </div>
                           
                           <div class="tab-pane" id="adjustment">
                                <div class="form-group row">
                                    <div class="col-lg-12 ">
                                       <textarea id="editor5" class="form-control" name="adjustment"  cols="30" rows="10">{{$_settings->adjustment}}</textarea>
                                    </div>
                                </div>
                           </div>
                           
                           
                           <div class="tab-pane" id="policy">
                                <div class="form-group row">
                                    <div class="col-lg-12 ">
                                       <textarea id="editor6" class="form-control" name="policy"  cols="30" rows="10">{{$_settings->policy}}</textarea>
                                    </div>
                                </div>
                           </div>
                           
                           <div class="tab-pane" id="return">
                                <div class="form-group row">
                                    <div class="col-lg-12 ">
                                       <textarea id="editor7" class="form-control" name="return"  cols="30" rows="10">{{$_settings->return}}</textarea>
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
@endsection

@section('js')

   
  <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
   
   <script>



    $('.update_btn').click(function (e) { 
       
       $('.setting_form').trigger('submit');
       
      //e.preventDefault();
      
    //   let form = $('.setting_form')[0];
    //   var formData = new FormData(form);

    //   axios.post('{{route("admin.settings.update")}}',formData).then(function (response) {
    //         toastr.success('Updated');
    //       //  location.reload();

    //         }).catch(function (e) {
    //             console.log(formData);
    //         });
      });
      
      
CKEDITOR.replace('editor1', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});
CKEDITOR.replace('editor2', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});
CKEDITOR.replace('editor3', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});
CKEDITOR.replace('editor4', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});
CKEDITOR.replace('editor5', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});
CKEDITOR.replace('editor6', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});
CKEDITOR.replace('editor7', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});

    </script>

@endsection