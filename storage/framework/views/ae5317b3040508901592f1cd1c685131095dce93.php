<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Responsive Admin Template" />
        <meta name="author" content="Sunray" />
        <title><?php echo $__env->yieldContent('title'); ?> - <?php echo e($_settings->app_name); ?></title>
    
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
		<meta name="path" content="<?php echo e(env('APP_URL')); ?>">

        <link rel="icon" href="<?php echo e(asset($_settings->app_fav_icon)); ?>" type="image/x-icon">
		 
        <style>
            /*.dataTables_wrapper .dataTable th, .dataTables_wrapper .dataTable td {*/
    
            /*        font-size: 1.25rem !important;*/
            /*            font-weight: 600 !important;*/
            /*    }*/
                
                
            /* devanagari */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 300;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDz8Z11lFc-K.woff2) format('woff2');
                  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
                }
                /* latin-ext */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 300;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDz8Z1JlFc-K.woff2) format('woff2');
                  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                }
                /* latin */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 300;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLDz8Z1xlFQ.woff2) format('woff2');
                  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                }
                /* devanagari */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 400;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrJJbecmNE.woff2) format('woff2');
                  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
                }
                /* latin-ext */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 400;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrJJnecmNE.woff2) format('woff2');
                  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                }
                /* latin */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 400;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiEyp8kv8JHgFVrJJfecg.woff2) format('woff2');
                  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                }
                /* devanagari */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 500;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z11lFc-K.woff2) format('woff2');
                  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
                }
                /* latin-ext */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 500;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z1JlFc-K.woff2) format('woff2');
                  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                }
                /* latin */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 500;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLGT9Z1xlFQ.woff2) format('woff2');
                  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                }
                /* devanagari */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 600;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z11lFc-K.woff2) format('woff2');
                  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
                }
                /* latin-ext */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 600;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z1JlFc-K.woff2) format('woff2');
                  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                }
                /* latin */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 600;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLEj6Z1xlFQ.woff2) format('woff2');
                  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                }
                /* devanagari */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 700;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z11lFc-K.woff2) format('woff2');
                  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
                }
                /* latin-ext */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 700;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z1JlFc-K.woff2) format('woff2');
                  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
                }
                /* latin */
                @font-face {
                  font-family: 'Poppins';
                  font-style: normal;
                  font-weight: 700;
                  src: url(https://fonts.gstatic.com/s/poppins/v15/pxiByp8kv8JHgFVrLCz7Z1xlFQ.woff2) format('woff2');
                  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
                }
                
                
                
                @font-face {
                  font-family: 'urdu';
                  font-style: normal;
                  font-weight: 700;
                  src: url('<?php echo e(asset('front/css/Jameel.ttf')); ?>') format('ttf');
                }
                
                .urdu{
                    font-family:'urdu'!important;
                }
                
                
                
                
                
                .breadcrumb-item {
                    display: -webkit-box;
                    display: -ms-flexbox;
                    display: flex;
                    font-size: 19px;
                }
                            
        </style>
       <!--<link href="<?php echo e(asset('front/css/Jameel.ttf')); ?>" rel="stylesheet" type="text/css" />-->
      
        <!--end::Page Vendors Styles-->
        <link href="<?php echo e(asset('admin/assets/plugins/global/plugins.bundle9cd7.css?v=7.1.5')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/assets/css/style.bundle9cd7.css?v=7.1.5')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/assets/css/themes/layout/header/base/light9cd7.css?v=7.1.5')); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo e(asset('admin/assets/css/themes/layout/aside/dark9cd7.css?v=7.1.5')); ?>" rel="stylesheet" type="text/css" />


        <?php echo $__env->yieldContent('css'); ?>
    </head>
    
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

    <?php echo $__env->make('admin.layouts.mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="d-flex flex-row flex-column-fluid page">
            
            <?php echo $__env->make('admin.layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
               
                <?php echo $__env->make('admin.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>

                <?php echo $__env->make('admin.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!--end::Wrapper-->

    	</div>
        <!--end::Page-->
	</div>

		<script src="<?php echo e(asset('admin/assets/plugins/global/plugins.bundle9cd7.js?v=7.1.5')); ?>"></script>
		<script src="<?php echo e(asset('js/app.js')); ?>" ></script>
		<!--<script src="<?php echo e(asset('imp/plugins/jqueryConfirm/script.js')); ?>" ></script>-->
		
	    <script>
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
            };
		</script>
		
		
		<script> var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
		<script src="<?php echo e(asset('admin/assets/js/scripts.bundle9cd7.js?v=7.1.5')); ?>"></script>
    <script src="<?php echo e(asset('vendor/laravel-filemanager/js/stand-alone-button.js')); ?>"></script>
		
		<?php echo $__env->yieldContent('js'); ?>
		
		<?php echo $__env->make('admin.components.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


			<!--end::Content-->
		</div>
    </body>
</html><?php /**PATH /home/mukalama/public_html/resources/views/admin/layouts/admin.blade.php ENDPATH**/ ?>