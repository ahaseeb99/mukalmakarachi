                                  @can('users.access','none')
                                    <li class = "mdl-menu__item">
                                        <a style="color: rgba(0,0,0,.87);" href="{{route('admin.users.index')}}">
                                            <i class="material-icons">view_list</i>All Users</a>
                                        </li> 
                                    @endcan
                                    
                                    @can('users.create','none')  
                                    <li class = "mdl-menu__item">
                                    <a style="color: rgba(0,0,0,.87);" href="{{route('admin.users.create')}}">
                                        <i class="material-icons">create</i>Create</a>
                                    </li>
                                    @endcan
      
                                    @can('users.view_approved','none')
                                    <li class = "mdl-menu__item">
                                        <a style="color: rgba(0,0,0,.87);" href="{{route('admin.users.approved')}}"  >
                                           <i class=" mt-2 fa fa-check-square fa-2x"></i>
                                           <span style="position: relative;top:-4px;" class="title">Approved</span>
                                            </a>
                                    </li>
                                   @endcan
                                  
                                    @can('users.view_blocked','none')
                                    <li class = "mdl-menu__item">
                                        <a style="color: rgba(0,0,0,.87);" href="{{route('admin.users.blocked')}}"  >
                                             <i class=" mt-2 fa fa-lock fa-2x"></i>
                                             <span style="position: relative;top:-4px;" class="title">Blocked</span>
                                              </a>
                                    </li>
                                    @endcan
                                    
                                    @can('users.view_pendings','none')
                                      <li class = "mdl-menu__item">
                                        <a style="color: rgba(0,0,0,.87);" href="{{route('admin.users.pendings')}}"  >
                                            <i class=" mt-2 fa fa-share fa-2x"></i><span style="position: relative;top:-4px;" class="title">Pendings</span>
                                             </a>
                                     </li>
                                    @endcan
                                    
                                    @can('users.view_disabled','none')  
                                      <li class = "mdl-menu__item">
                                        <a style="color: rgba(0,0,0,.87);" href="{{route('admin.users.disabled')}}"><i class=" mt-2 fa fa-ban fa-2x"></i><span style="position: relative;top:-4px;" class="title">Disabled</span>
                                        </a>
                                      </li>
                                    @endcan