@extends('admin.layouts.admin')
@section('title','Profile')

@section('css')
    
@endsection

@section('content')

<div class="users-container content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
      <div class="container-fluid">
        <div class="row">
              <div class="col-6">
                  <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item"><a href="#" class="text-muted">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#" class="text-muted">Profile</a></li>
                  </ul>
              </div>
            </div>
        </div>    
    </div>


   <!--begin::Entry-->
   <div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">

      <!--begin::Card-->
      <div class="card card-custom gutter-b">
        <div class="card-body">
          <div class="d-flex">
            <!--begin::Pic-->
            <div class="flex-shrink-0 mr-7">
              <div class="symbol symbol-50 symbol-lg-120">
                <img alt="Pic" src="{{asset($user->image)}}" />
              </div>
            </div>
            <!--end::Pic-->
            <!--begin: Info-->
            <div class="flex-grow-1">
              <!--begin::Title-->
              <div class="d-flex align-items-center justify-content-between flex-wrap">
                <!--begin::User-->
                <div class="mr-3">
                  <div class="d-flex align-items-center mr-3">
                    <!--begin::Name-->
                    <a  class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">{{$user->name}}</a>
                    <!--end::Name-->
                  </div>
                  <!--begin::Contacts-->
                  <div class="d-flex flex-wrap my-2">
                  
                    <a  class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                      <span class="text-success svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                        <i class="flaticon2-black-back-closed-envelope-shape text-success mr-5"></i>
                      </span>{{$user->email}}</a>

                    <a  class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                    <span class="text-success svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                      <i class="flaticon-users-1 text-warning mr-5"></i>
                    </span>{{$user->role->name}}</a>

                    <a  class="text-muted font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
                      <span class="text-success svg-icon svg-icon-md svg-icon-gray-500 mr-1">
                        <i class="flaticon2-phone text-danger mr-5"></i>
                      </span>{{$user->mobile}}</a>
                  </div>
                </div>
              </div>
              <div class="d-flex align-items-center flex-wrap justify-content-between">
                <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">{{$user->bio}}</div>
              </div>
              <!--end::Content-->
            </div>
            <!--end::Info-->
          </div>
        </div>
      </div>
      <!--end::Card-->



      <!--begin::Row-->
      <div class="row">
        <div class="col-xl-12">
          <!--begin::Card-->
          <div class="card card-custom gutter-b">
            <!--begin::Header-->
            <div class="card-header card-header-tabs-line">
              <div class="card-toolbar">
                <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-bold nav-tabs-line-3x" role="tablist">
                  
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_1">
                      <span class="nav-icon mr-2"><span class="svg-icon mr-3"><i class="flaticon2-settings text-primary mr-5"></i></span></span>
                      <span class="nav-text">General</span>
                    </a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_2">
                      <span class="nav-icon mr-2"><span class="svg-icon mr-3"><i class="flaticon-placeholder-3 text-danger mr-5"></i></span></span>
                      <span class="nav-text">Address</span>
                    </a>
                  </li>
                  <li class="nav-item mr-3">
                    <a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_3">
                      <span class="nav-icon mr-2"><span class="svg-icon mr-3"><i class="flaticon-businesswoman text-success mr-5"></i></span></span>
                      <span class="nav-text">Account</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body px-0">
              <form class="create_form" enctype="multipart/form-data"  method="post" action="{{route('admin.users.profile.update',$user->id)}}" > 
              @csrf
                
              <div class="tab-content pt-5">
                      <!--begin::Tab Content-->
                      <div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
                        <div class="container">

                          <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">First Name</label>
                            <div class="col-lg-9 col-xl-6">
                              <input name="fname" class="form-control form-control-lg " type="text" value="{{$user->fname}}">
                            </div>
                          </div>
                           <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Last Name</label>
                            <div class="col-lg-9 col-xl-6">
                              <input name="lname" class="form-control form-control-lg " type="text" value="{{$user->lname}}">
                            </div>
                          </div>
                          <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Mobile</label>
                            <div class="col-lg-9 col-xl-6">
                            <input class="form-control form-control-lg " type="text" name="mobile" value="{{$user->mobile}}">
                          </div>
                        </div>
                          <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">National Identity</label>
                            <div class="col-lg-9 col-xl-6">
                            <input name="nic" class="form-control form-control-lg " type="text" value="{{$user->nic}}">
                          </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-xl-3 col-lg-3 col-form-label text-right">Gender</label>
                            <div class="col-lg-9 col-xl-6">
                              <select name="gender" class="form-control" id="exampleSelect1">
                                <option @if($user->gender == 'Male'){{'selected'}} @endif >Male</option>
                                <option @if($user->gender == 'Female'){{'selected'}} @endif >Female</option>
                              </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-xl-3 col-lg-3 col-form-label text-right">Bio</label>
                          <div class="col-lg-9 col-xl-6">
                            <textarea class="form-control" name="bio" cols="30" rows="10">{{$user->bio}}</textarea>
                        </div>
                        </div>
                    
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label text-lg-right">Profile Image:</label>
                            <div class="col-lg-9 ">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                      <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                      </a>
                                    </span>
                                    <input id="thumbnail1"  class="form-control" type="text" name="image" value="{{$user->image}}">
                                  </div>
                                  <img  width="100px" class="pt-2"  src="{{asset($user->image)}}" />
                            </div>
                        </div>

                  </div>
                </div>
                <!--end::Tab Content-->
                <!--begin::Tab Content-->
                <div class="tab-pane" id="kt_apps_contacts_view_tab_2" role="tabpanel">
                  <div class="container">
             
                        <div class="form-group row">
                          <label class="col-xl-3 col-lg-3 col-form-label text-right">Country</label>
                          <div class="col-lg-9 col-xl-6">
                            <input name="country" class="form-control form-control-lg " type="text" value="{{ $user->country }}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-xl-3 col-lg-3 col-form-label text-right">State</label>
                          <div class="col-lg-9 col-xl-6">
                            <input name="state" class="form-control form-control-lg " type="text" value="{{ $user->state }}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-xl-3 col-lg-3 col-form-label text-right">City</label>
                          <div class="col-lg-9 col-xl-6">
                            <input name="city" class="form-control form-control-lg " type="text" value="{{ $user->city }}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-xl-3 col-lg-3 col-form-label text-right">Postal Code</label>
                          <div class="col-lg-9 col-xl-6">
                            <input name="zip" class="form-control form-control-lg " type="text" value="{{ $user->zip }}">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-xl-3 col-lg-3 col-form-label text-right">Street Address 1</label>
                          <div class="col-lg-9 col-xl-6">
                            <input name="address" class="form-control form-control-lg " type="text" value="{{ $user->address }}">
                          </div>
                        </div>
                    </div>
                </div>
              
                <div class="tab-pane" id="kt_apps_contacts_view_tab_3" role="tabpanel">
                  <div class="container">
                    
                    <div class="username form-group row">
                      <label class=" col-xl-3 col-lg-3 col-form-label text-right">Username</label>
                      <div class="col-lg-9 col-xl-6">
                        <input readonly name="username" class="form-control form-control-lg " type="text" value="{{$user->name}}">
                        <span class="text-danger" ></span>
                      </div>
                    </div>

                    <div class="email form-group row">
                      <label class="col-xl-3 col-lg-3 col-form-label text-right">Email</label>
                      <div class="col-lg-9 col-xl-6">
                        <input readonly name="email" class="form-control form-control-lg " type="text" value="{{$user->email}}">
                        <span class="text-danger" ></span>
                      </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-right">Role</label>
                        <div class="col-lg-9 col-xl-6">
                          <input disabled class="form-control form-control-lg" type="text" 
                          value="{{$user->role->name}}">
                        </div>
                    </div>
                    
                    <div class=" form-group row">
                        <label class="col-xl-3 col-lg-3 col-form-label text-right">Status</label>
                        <div class="col-lg-9 col-xl-6">
                          <input disabled class="form-control form-control-lg" type="text" 
                          value="{{$user->status}}">
                        </div>
                    </div>
            
                    <div class="form-group row">
                      <label class="col-xl-3 col-lg-3 col-form-label text-right">Registeration Date</label>
                      <div class="col-lg-9 col-xl-6">
                        <input disabled class="form-control form-control-lg" type="datetime" value="{{ $user->created_at->format('Y-m-d') }}">
                      </div>
                    </div>

            
                  </div>
                 </div>

                    </div>
                 
                     <div class="text-center">
                        <button type="submit" class="btn btn-primary mr-2">Update</button>
                     </div>
                </form>
                  </div>
                  <!--end::Body-->
                </div>
                <!--end::Card-->
              </div>
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <!--end::Entry-->

    
</div>


@endsection


@section('js')
<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle9cd7.js?v=7.1.5')}}"></script>

<script>
    $(document).ready(function(){

    $('#lfm1').filemanager('file');

   //Create Users
   $('.create_form').submit(function (e) { 

         
         let url =`${path}/admin/profile/update/{{$user->id}}`;
          e.preventDefault();
          
          
          var data = $(this).serializeArray().reduce(function(obj, item) {
                obj[item.name] = item.value;
                return obj;
            }, {});

         
                 $.ajax({
                      url:url, 
                      method:'post',
                      data:data,
                      dataType: "json",
                      success: function(result){
                        
                          toastr.success(result.message);
                          $('.username span').text('');
                          $('.email span').text('');
                          location.reload();
                      
                      },
                      error: function(e){
                           
                          // console.log(result);
                         
                            if(e.response.data.errors.username){
                              $('.username span').text(e.response.data.errors.username);
                            }else{
                              $('.username span').text('');
                            }
                
                            if(e.response.data.errors.email){
                              $('.email span').text(e.response.data.errors.email);
                            }else{
                              $('.email span').text('');
                            }
                       
                      }
                  });
       
   });




  });

  </script>

@endsection