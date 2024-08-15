                    @can($type->slug.'.all','none')
                     <li class = "mdl-menu__item">
                        <a style="color: rgba(0,0,0,.87);" href="{{route('admin.post.index',$type->id)}}">
                      <i class="material-icons">view_list</i> @lang('actions.published') {{$type->name}}</a>
                    </li>
                    @endcan
                    
                    @can($type->slug.'.manage_status','none')
                    <li class = "mdl-menu__item">
                        <a style="color: rgba(0,0,0,.87);" href="{{route('admin.post.status',['id' => $type->id,'status' => 'pending'])}}">
                       <i class="material-icons">av_timer</i> @lang('actions.pending') {{$type->name}}</a>
                    </li> 
                    @endcan
                
                   @can($type->slug.'.manage_status','none')
                    <li class = "mdl-menu__item">
                        <a style="color: rgba(0,0,0,.87);" href="{{route('admin.post.status',['id' => $type->id,'status' => 'draft'])}}">
                       <i class="material-icons">drafts</i> @lang('actions.draft') {{$type->name}}</a>
                    </li> 
                   @endcan
                    
                     @can($type->slug.'.create','none')
                     <li class = "mdl-menu__item">
                        <a style="color: rgba(0,0,0,.87);" href="{{route('admin.post.create',$type->id)}}">
                      <i class="material-icons">create</i> @lang('actions.create') {{$type->name}}</a>
                    </li> 
                    @endcan
                    
                    @can($type->slug.'.category_all','none')
                     <li class = "mdl-menu__item">
                        <a style="color: rgba(0,0,0,.87);" href="{{route('admin.categories.index',$type->id)}}">
                       <i class="material-icons">view_list</i>  @lang('bread.all_categories')</a>
                    </li> 
                    @endcan
                    
                    
                    @can($type->slug.'.category_create','none')
                    <li class = "mdl-menu__item">
                        <a style="color: rgba(0,0,0,.87);" href="{{route('admin.categories.create',$type->id)}}">
                       <i class="material-icons">create</i> @lang('bread.create_categories')</a>
                    </li> 
                    @endcan
                    
               
                    