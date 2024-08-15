
@extends('admin.layouts.admin')
@section('title','General')

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
                            <a class="nav-link active" data-toggle="tab" href="#general">Site</a>
                        </li>
                          <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#address">Address</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#social">Social Links</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " data-toggle="tab" href="#payment">Payment Methods</a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link " data-toggle="tab" href="#pages">Pages</a>-->
                        <!--</li>-->
                    </ul>
                </div>
                <form class="form setting_form" method="post" enctype="multipart/form-data" action="{{route('admin.settings.update')}}" 
                id="form-builder"  >
                @csrf
                 <div class="card-body">
                        <div class="tab-content pt-3">
                            <div class="tab-pane active " id="general">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">App Name:</label>
                                    <div class="col-lg-9 ">
                                       <input type="text"  name="app_name" data-required="1" value="{{$_settings->app_name}}" class="form-control input-height" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Meta Description:</label>
                                    <div class="col-lg-9 ">
                                       <input type="text"  name="app_meta"  value="{{$_settings->app_meta}}" class="form-control input-height" /> 
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Description:</label>
                                    <div class="col-lg-9 ">
                                      <textarea name="description"  class="form-control input-height" >{{$_settings->description}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Copyright Details:</label>
                                    <div class="col-lg-9 ">
                                       <input type="text"  name="app_copyright" data-required="1"  value="{{$_settings->app_copyright}}" class="form-control input-height" /> 
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Keywords:</label>
                                    <div class="col-lg-9">
                                        <textarea  name="app_keywords" class="form-control" cols="5" rows="2">{{$_settings->app_keywords}}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Fav Icon:</label>
                                    <div class="col-lg-9 ">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="lfm2" data-input="thumbnail2" data-preview="holder2" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Choose
                                              </a>
                                            </span>
                                            <input id="thumbnail2"  class="form-control" type="text" name="app_fav_icon" value="{{$_settings->app_fav_icon}}">
                                          </div>
                                          <img  width="50px" class="pt-2"  src="{{asset($_settings->app_fav_icon)}}" />

                                    
                                    </div>
                                </div>


                               <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Logo:</label>
                                    <div class="col-lg-9 ">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Choose
                                              </a>
                                            </span>
                                            <input id="thumbnail"  class="form-control" type="text" name="app_logo" value="{{$_settings->app_logo}}" >
                                          </div>
                                          <img id="holder" width="100px" class="pt-2"  src="{{asset($_settings->app_logo)}}" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Site Logo:</label>
                                    <div class="col-lg-9 ">
                                        <div class="input-group">
                                            <span class="input-group-btn">
                                              <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                                                <i class="fa fa-picture-o"></i> Choose
                                              </a>
                                            </span>
                                            <input id="thumbnail1"  class="form-control" type="text" name="app_big_logo" value="{{$_settings->app_big_logo}}">
                                          </div>
                                          <img  width="100px" class="pt-2"  src="{{asset($_settings->app_big_logo)}}" />
                                    </div>
                                </div>

                        </div>

                         <div class="tab-pane" id="address">
                            
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Email:</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="email"   value="{{$_settings->email}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                  <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Phone:</label>
                                    <div class="col-lg-9 col-xl-4">
                                        <input type="text"   name="phone"   value="{{$_settings->phone}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Country</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="country"   value="{{$_settings->country}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">State / Provence</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="state"   value="{{$_settings->state}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">City / Town</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="city"   value="{{$_settings->city}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Postal Code :</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="postal"   value="{{$_settings->postal}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Street Address</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="street_address"   value="{{$_settings->street_address}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                  <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Footer1</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="footer1"   value="{{$_settings->footer1}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                  <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Footer2</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="footer2"   value="{{$_settings->footer2}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                  <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Footer3</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="footer3"   value="{{$_settings->footer3}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                  <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Number Of Pages For Unauthorized</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="freepdf"   value="{{$_settings->freepdf}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                            </div>
                            
                            <!--social link-->
                            
                            <div class="tab-pane" id="social">
                            
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Facebook:</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="facebook"   value="{{$_settings->facebook}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                  <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Twitter:</label>
                                    <div class="col-lg-9">
                                        <input type="text"   name="twitter"   value="{{$_settings->twitter}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">WhatsApp</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="whatsapp"   value="{{$_settings->whatsapp}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Instagram</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="instagram"   value="{{$_settings->instagram}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                                 <div class="form-group row">
                                    <label class="col-lg-3 col-form-label text-lg-right">Flip</label>
                                    <div class="col-lg-9 ">
                                        <input type="text"   name="flip"   value="{{$_settings->flip}}" class="form-control input-height" /> 
                                    </div>
                                 </div>
                                 
                            </div>
                            <!--social link-->
                            
                               <div class="tab-pane  " id="payment">
                                   
                                <div class="form-group row">
                                        <div class="col-lg-12">
                                            <h6>Cash on Delivery </h6>
                                        </div>
                                        <div class="col-lg-2 ">
                                             <label class="col-form-label text-lg-right">Enable:</label>
                                             <select name="cash_status" class="form-control" >
                                                 <option @if($_settings->cash_status == 'on' ) {{'selected'}} @endif >on</option>
                                                 <option @if($_settings->cash_status == 'off' ) {{'selected'}} @endif >off</option>
                                             </select>
                                        </div>
                                        <div class="col-lg-10 ">
                                             <label class="col-form-label text-lg-right">Description:</label>
                                            <input value="{{$_settings->cash_des}}" type="text" name="cash_des" class="form-control input-height" /> 
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col-lg-12 ">
                                            <h6>Bank Transfer</h6>
                                        </div>
                                        <div class="col-lg-2 ">
                                             <label class="col-form-label text-lg-right">Enable:</label>
                                             <select name="bank_status" class="form-control" >
                                                 <option @if($_settings->bank_status == 'on' ) {{'selected'}} @endif >on</option>
                                                 <option @if($_settings->bank_status == 'off' ) {{'selected'}} @endif >off</option>
                                             </select>
                                        </div>
                                        <div class="col-lg-3 ">
                                             <label class="col-form-label text-lg-right">Bank Name:</label>
                                            <input type="text" name="bank_name" value="{{$_settings->bank_name}}" class="form-control input-height" /> 
                                        </div>
                                        <div class="col-lg-3 ">
                                             <label class="col-form-label text-lg-right">Account Number:</label>
                                            <input type="text" name="bank_account" value="{{$_settings->bank_account}}" class="form-control input-height" /> 
                                        </div>
                                        <div class="col-lg-4 ">
                                             <label class="col-form-label text-lg-right">IBAN:</label>
                                            <input type="text" name="bank_des" value="{{$_settings->bank_iban}}" class="form-control input-height" /> 
                                        </div>
                                        <div class="col-lg-12 ">
                                             <label class="col-form-label text-lg-right">Description:</label>
                                            <input type="text" name="bank_des" value="{{$_settings->bank_des}}" class="form-control input-height" /> 
                                        </div>
                                </div>
                            
                                <div class="form-group row">
                                        <div class="col-lg-12 ">
                                            <h6>Skrill</h6>
                                        </div>
                                        <div class="col-lg-2 ">
                                             <label class="col-form-label text-lg-right">Enable:</label>
                                             <select class="form-control" >
                                                 <option>on</option>
                                                 <option>off</option>
                                             </select>
                                        </div>
                                        <div class="col-lg-3 ">
                                             <label class="col-form-label text-lg-right">Client:</label>
                                            <input type="text" class="form-control input-height" /> 
                                        </div>
                                        <div class="col-lg-3 ">
                                             <label class="col-form-label text-lg-right">Secret:</label>
                                            <input type="text" class="form-control input-height" /> 
                                        </div>
                                        <div class="col-lg-4 ">
                                             <label class="col-form-label text-lg-right">Description:</label>
                                            <input type="text" class="form-control input-height" /> 
                                        </div>
                                </div>
                             </div>
                             <!--  <div class="tab-pane  " id="pages">-->
                                   
                             <!--   <div class="form-group row">-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <h6>Terms </h6>-->
                             <!--           </div>-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <textarea id="editor1" value="{{$_settings->terms_condition}}" rows="7" name="terms" class="form-control input-height" >{{$_settings->terms_condition}}</textarea>-->
                             <!--           </div>-->
                             <!--   </div>-->
                             <!--   <div class="form-group row">-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <h6>Payment Method </h6>-->
                             <!--           </div>-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <textarea id="editor2" value="{{$_settings->payment_method}}" rows="7" name="payment_method" class="form-control input-height" >{{$_settings->payment_method}}</textarea>-->
                             <!--           </div>-->
                             <!--   </div>-->
                             <!--   <div class="form-group row">-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <h6>Shipping guide </h6>-->
                             <!--           </div>-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <textarea id="editor3" value="{{$_settings->shipping_guide}}" rows="7" name="shipping_guide" class="form-control input-height" >{{$_settings->shipping_guide}}</textarea>-->
                             <!--           </div>-->
                             <!--   </div>-->
                             <!--   <div class="form-group row">-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <h6>Location page </h6>-->
                             <!--           </div>-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <textarea id="editor4" value="{{$_settings->location_page}}" rows="7" name="location_page" class="form-control input-height" >{{$_settings->location_page}}</textarea>-->
                             <!--           </div>-->
                             <!--   </div>-->
                             <!--   <div class="form-group row">-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <h6>Estimated delivery </h6>-->
                             <!--           </div>-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <textarea id="editor5" value="{{$_settings->estimated_delivery}}" rows="7" name="estimated_delivery" class="form-control input-height" >{{$_settings->estimated_delivery}}</textarea>-->
                             <!--           </div>-->
                             <!--   </div>-->
                             <!--   <div class="form-group row">-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <h6>Shipping Policy </h6>-->
                             <!--           </div>-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <textarea id="editor6" value="{{$_settings->shipping_policy}}" rows="7" name="shipping_policy" class="form-control input-height" >{{$_settings->shipping_policy}}</textarea>-->
                             <!--           </div>-->
                             <!--   </div>-->
                             <!--   <div class="form-group row">-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <h6>Return Policy </h6>-->
                             <!--           </div>-->
                             <!--           <div class="col-lg-12">-->
                             <!--               <textarea  id="editor7" value="{{$_settings->return_policy}}" rows="7" name="return_policy" class="form-control input-height" >{{$_settings->return_policy}}</textarea>-->
                             <!--           </div>-->
                             <!--   </div>-->
                             <!--</div>-->
                    </div>
                </form>
            </div>
            </div>
       </div>

  </div>

</div>
@endsection

@section('js')

   
   
   <script>

        $('#lfm').filemanager('file');
        $('#lfm1').filemanager('file');
        $('#lfm2').filemanager('file');


    $('.update_btn').click(function (e) { 
       
       e.preventDefault();
       let form = $('.setting_form')[0];
       var formData = new FormData(form);
        console.log('sdfsd');
       axios.post('{{route("admin.settings.update")}}',formData).then(function (response) {
            toastr.success('Updated');
            }).catch(function (e) {
                console.log(formData);
            });
       });
       
       


    </script>
    
    <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script>
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