<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="<?php echo e(Con::settings()->app_meta); ?>" />
        <meta name="author" content="<?php echo e(Con::settings()->app_name); ?>" />
        
        <title>Login - <?php echo e(Con::settings()->app_name); ?></title>
    
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <meta name="path" content="<?php echo e(env('APP_URL')); ?>">
        
        <link rel="icon" href="<?php echo e(asset(Con::settings()->app_fav_icon)); ?>" type="image/x-icon">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <link href="<?php echo e(asset('admin/assets/plugins/global/plugins.bundle9cd7.css?v=7.1.5')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/assets/plugins/custom/prismjs/prismjs.bundle9cd7.css?v=7.1.5')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/assets/css/style.bundle9cd7.css?v=7.1.5')); ?>" rel="stylesheet" type="text/css" />

        <style>
            .create_form input {
                background: white!important;
            }

        </style>
    </head>
        <body  class="align-self-center">
                    <div class="m-auto container-fluid ">      
                        <div class="row ">
                            <div class="m-auto col-sm-6 align-self-center p-5 ">
                                <div  class="login-form login-signin">

                                    <form method="get" action="<?php echo e(route('admin.login.submit')); ?>" class="create_form px-5 form">
                                        <div class=" text-center pb-13 pt-lg-0 pt-5">
                                            <img  src="<?php echo e(asset(Con::settings()->app_logo)); ?>" >
                                            <h3 class="py-2 text-center font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome to <?php echo e($_settings->app_name); ?></h3>
                                        </div>

                                        <div class="form-group">
                                            <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                            <input value="<?php echo e(old('email')); ?>" class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="email" autocomplete="off" />
                                            <?php if($errors->has('email')): ?>
                                                <span class="mt-3 text-danger"><?php echo e($errors->first('email')); ?></span>    
                                            <?php endif; ?>

                                        </div>

                                        <div class="form-group">
                                            <div class="d-flex justify-content-between mt-n5">
                                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                            </div>
                                            <input  class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="password" name="password" autocomplete="off" />
                                            <?php if($errors->has('password')): ?>
                                                <span class="mt-3 text-danger"><?php echo e($errors->first('password')); ?></span>    
                                            <?php endif; ?>
                                        </div>

                                        <div class=" text-center pb-lg-0 pb-5">
                                            <button type="submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script src="<?php echo e(asset('admin/assets/plugins/global/plugins.bundle9cd7.js?v=7.1.5')); ?>"></script>
                    <script src="<?php echo e(asset('js/app.js')); ?>" ></script>
                    
                    <?php echo $__env->make('admin.components.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
            </body>
</html>
<?php /**PATH /home/mukalama/public_html/resources/views/admin/auth/login.blade.php ENDPATH**/ ?>