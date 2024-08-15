    <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
        <div class="brand flex-column-auto" id="kt_brand">
            <a href="<?php echo e(route('home')); ?>" class="brand-logo">
                <img style="max-width:150px;" alt="Logo" src="<?php echo e(asset($_settings->app_big_logo)); ?>" />
            </a>
            <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                <span class="svg-icon svg-icon svg-icon-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                            <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                        </g>
                    </svg>
                </span>
            </button>
        </div>
        <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
            <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
                <ul class="menu-nav">
                    
                    <li class="menu-item <?php echo e((request()->segment(2) == 'home') ? 'menu-item-active' : ''); ?>" aria-haspopup="true">
                        <a href="<?php echo e(route('admin.home')); ?>" class="menu-link">
                            <i class="menu-icon  fas fa-home"></i>
                            <span class="menu-text">Dashboard</span>
                        </a>
                    </li>
                        
                    <li class="menu-item <?php echo e((request()->segment(2) == 'users') ? 'menu-item-active' : ''); ?>" aria-haspopup="true" data-menu-toggle="hover">
                        <a href="<?php echo e(route('admin.users.index')); ?>" class="menu-link ">
                            <i class="menu-icon  fas fa-users"></i>
                            <span class="menu-text">Users</span>
                        </a>
                    </li>
                          
                    <li class="menu-item <?php echo e((request()->segment(2) == 'categories') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                        <a href="<?php echo e(route('admin.categories.index')); ?>" class="menu-link ">
                                <i class="menu-icon fas fa-address-book"></i>
                                <span class="menu-text">Books Categories</span>
                        </a>
                    </li>

                    <li class="menu-item <?php echo e((request()->segment(2) == 'authors') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                        <a href="<?php echo e(route('admin.authors.index')); ?>" class="menu-link ">
                            <i class="menu-icon fas fa-user"></i>
                            <span class="menu-text">Authors</span>
                        </a>
                    </li>

                    <li class="menu-item <?php echo e((request()->segment(2) == 'books') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                        <a href="<?php echo e(route('admin.books.index')); ?>" class="menu-link ">
                                <i class="menu-icon fas fa-book"></i>
                                <span class="menu-text">Books</span>
                        </a>
                    </li>

                    <li class="menu-item <?php echo e((request()->segment(2) == 'magazines') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                        <a href="<?php echo e(route('admin.magazines.index')); ?>" class="menu-link ">
                                <i class="menu-icon fas fa-book-open"></i>
                                <span class="menu-text">Magzines</span>
                        </a>
                    </li>
                    

                <li class="menu-item <?php echo e((request()->segment(2) == 'orders') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route('admin.orders.index')); ?>" class="menu-link ">
                        <i class="menu-icon fas fa-cart-plus"></i>
                        <span class="menu-text">Orders</span>
                    </a>
                </li> 
                
                <li class="menu-item <?php echo e((request()->segment(2) == 'tweets') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route('admin.tweet.index')); ?>" class="menu-link ">
                        <i class="menu-icon fab fa-blogger"></i>
                        <span class="menu-text">Blogs</span>
                    </a>
                </li> 

                <li class="menu-item <?php echo e((request()->segment(2) == 'video-categories') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route("admin.video-categories.index")); ?>" class="menu-link ">
                        <i class="menu-icon fas fa-photo-video"></i>
                        <span class="menu-text">Videos Category</span>
                    </a>
                </li>

                <li class="menu-item <?php echo e((request()->segment(2) == 'videos') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route("admin.videos.index")); ?>" class="menu-link ">
                        <i class="menu-icon fab fa-youtube"></i>
                        <span class="menu-text">Videos</span>
                    </a>
                </li>
 
                <li class="menu-item <?php echo e((request()->segment(2) == 'blog-categories') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route("admin.blog-categories.index")); ?>" class="menu-link ">
                        <i class="menu-icon fas fa-people-arrows"></i>
                        <span class="menu-text">Asnaf Categories</span>
                    </a>
                </li>

                <li class="menu-item <?php echo e((request()->segment(2) == 'blogs') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route("admin.blogs.index")); ?>" class="menu-link ">
                         <i class="menu-icon fas fa-pen-alt"></i>
                         <span class="menu-text">Asnaf</span>
                    </a>
                </li>

                <li class=" menu-item <?php echo e((request()->segment(2) == 'reviews') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route('admin.reviews.index')); ?>" class="menu-link ">
                            <i class="menu-icon fas fa-comments"></i>
                            <span class="menu-text">Comments</span>
                    </a>
                </li>

                <li class="menu-item <?php echo e((request()->segment(2) == 'filemanager') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route('admin.filemanager.index')); ?>" class="menu-link ">
                            <i class="menu-icon  fas fa-folder-open"></i>
                            <span class="menu-text">FileManager</span>
                    </a>
                </li>
                
                <li class="menu-item <?php echo e((request()->segment(2) == 'news_later') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route('admin.news_later')); ?>" class="menu-link ">
                            <i class="menu-icon  fas fa-mail-bulk"></i>
                            <span class="menu-text">Newsletter</span>
                    </a>
                </li>

                <li class="menu-item <?php echo e((request()->segment(3) == 'general') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route('admin.settings.general')); ?>" class="menu-link ">
                            <i class="menu-icon fas fa-tools"></i>
                            <span class="menu-text">Settings</span>
                    </a>
                </li>
                
                <li class=" menu-item <?php echo e((request()->segment(3) == 'customizations') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route('admin.settings.customizations')); ?>" class="menu-link ">
                            <i class="menu-icon fab fa-500px"></i>
                            <span class="menu-text">Customization</span>
                    </a>
                </li>
                
                <li class="menu-item <?php echo e((request()->segment(2) == 'contacts') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route('admin.contacts.index')); ?>" class="menu-link ">
                            <i class="menu-icon far fa-address-book"></i>
                            <span class="menu-text">Contacts</span>
                    </a>
                </li>
                
            
                <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="<?php echo e(route('logout')); ?>" class="menu-link ">
                            <i class="menu-icon fas fa-sign-out-alt"></i>
                            <span class="menu-text">Logout</span>
                    </a>
                </li>

                 <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('settings.modules')): ?>
                        <li class="d-none menu-item <?php echo e((request()->segment(2) == 'modules') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                             <a href="<?php echo e(route('admin.modules.index')); ?>" class="menu-link ">
                                <i class="menu-icon  fas fa-edit"></i>
                                <span class="menu-text">Modules</span>
                             </a>
                        </li>        
                <?php endif; ?>
                        
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('settings.custom_modules')): ?>
                    
                        <?php $__currentLoopData = Con::modules(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="d-none menu-item <?php echo e((request()->segment(3) == $item->plural) ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                                 <a href="<?php echo e(route('admin.posts.index',$item->plural)); ?>" class="menu-link ">
                                    <i class="menu-icon <?php echo e($item->icon); ?>"></i>
                                    <span class="menu-text"><?php echo e($item->plural); ?></span>
                                 </a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    <?php endif; ?>
                    
        
                        
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('settings.create')): ?>
                        <li class="d-none menu-item <?php echo e((request()->segment(3) == 'all') ? 'menu-item-active' : ''); ?>  " aria-haspopup="true" data-menu-toggle="hover">
                        <a href="<?php echo e(route('admin.settings.index')); ?>" class="menu-link ">
                                <i class="menu-icon  fas fa-edit"></i>
                                <span class="menu-text">Create</span>
                            </a>
                        </li>
                    <?php endif; ?>
                            
                </ul>
            </div>
        </div>
    </div><?php /**PATH /home/mukalama/public_html/resources/views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>