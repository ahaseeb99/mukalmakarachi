<!doctype html>
<html class="no-js" lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="icon" href="<?php echo e(asset($_settings->app_fav_icon)); ?>" type="image/x-icon">
	  <meta name="description" content="<?php echo e($_settings->app_meta); ?>">
      <meta name="keywords" content="<?php echo e($_settings->app_keywords); ?>">
      <meta name="author" content="<?php echo e($_settings->app_name); ?>">
      
      <!-- CSRF Token -->
          <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
          <meta name="path" content="<?php echo e(env('APP_URL')); ?>">
      <!-- CSRF Token -->
    
     <title> <?php echo $__env->yieldContent('title'); ?> - <?php echo e($_settings->app_name); ?></title>

     <link rel="stylesheet" href="<?php echo e(asset('front/css/bootstrap.min.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('front/css/font-awesome.min.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('front/css/icon-font.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('front/css/animate.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('front/css/owl.carousel.min.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('front/css/owl.theme.default.min.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('front/css/colorbox.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('front/css/style.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('front/css/responsive.css')); ?>">
     <link rel="stylesheet" href="<?php echo e(asset('front/css/demo.css')); ?>">
     
     <link rel="icon" type="image/png" href="<?php echo e(asset('front/assets/img/favicon.png')); ?>">
     <link rel="stylesheet" src="<?php echo e(asset('css/app.css')); ?>" />
     <link rel="stylesheet" src="<?php echo e(asset('imp/plugins/toast/toast.css')); ?>" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" /> 
    <style>
    
    .top-bar {
    padding: 15px 0px;
}

.bread-secton {
    padding: 50px 0px;
}
        .header-desktop .site-navigation.navdown {
    padding: 12px 0px;
}
        .toast-title {
          font-weight: bold;
        }
        
        .footer-light .widget-title {
    background: transparent;
}

.testimonial-item-single {
     box-shadow: none;
}
        
        .toast-message {
          -ms-word-wrap: break-word;
          word-wrap: break-word;
        }
        
        .toast-message a,.toast-message label {
          color: #ffffff;
        }
        
        .toast-message a:hover {
          color: #cccccc;
          text-decoration: none;
        }
        
        .toast-close-button {
          position: relative;
          right: -0.3em;
          top: -0.3em;
          float: right;
          font-size: 20px;
          font-weight: bold;
          color: #ffffff;
          -webkit-text-shadow: 0 1px 0 #ffffff;
          text-shadow: 0 1px 0 #ffffff;
          opacity: 0.8;
          -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
          filter: alpha(opacity=80);
        }
        
        .toast-close-button:hover,
        .toast-close-button:focus {
          color: #000000;
          text-decoration: none;
          cursor: pointer;
          opacity: 0.4;
          -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
          filter: alpha(opacity=40);
        }
        

        button.toast-close-button {
          padding: 0;
          cursor: pointer;
          background: transparent;
          border: 0;
          -webkit-appearance: none;
        }
        
        .toast-top-center {
          top: 0;
          right: 0;
          width: 100%;
        }
        
        .toast-bottom-center {
          bottom: 0;
          right: 0;
          width: 100%;
        }
        
        .toast-top-full-width {
          top: 0;
          right: 0;
          width: 100%;
        }
        
        .toast-bottom-full-width {
          bottom: 0;
          right: 0;
          width: 100%;
        }
        
        .toast-top-left {
          top: 12px;
          left: 12px;
        }
        
        .toast-top-right {
          top: 12px;
          right: 12px;
        }
        
        .toast-bottom-right {
          right: 12px;
          bottom: 12px;
        }
        
        .toast-bottom-left {
          bottom: 12px;
          left: 12px;
        }
        
        #toast-container {
          position: fixed;
          z-index: 999999;
          pointer-events: none;
          /*overrides*/
        }
        
        #toast-container * {
          -moz-box-sizing: border-box;
          -webkit-box-sizing: border-box;
          box-sizing: border-box;
        }
        
        #toast-container > div {
          position: relative;
          pointer-events: auto;
          overflow: hidden;
          margin: 0 0 6px;
          padding: 15px 15px 15px 50px;
          width: 300px;
          -moz-border-radius: 3px 3px 3px 3px;
          -webkit-border-radius: 3px 3px 3px 3px;
          border-radius: 3px 3px 3px 3px;
          background-position: 15px center;
          background-repeat: no-repeat;
          -moz-box-shadow: 0 0 12px #999999;
          -webkit-box-shadow: 0 0 12px #999999;
          box-shadow: 0 0 12px #999999;
          color: #ffffff;
          opacity: 0.8;
          -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=80);
          filter: alpha(opacity=80);
        }
        
        #toast-container > :hover {
          -moz-box-shadow: 0 0 12px #000000;
          -webkit-box-shadow: 0 0 12px #000000;
          box-shadow: 0 0 12px #000000;
          opacity: 1;
          -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=100);
          filter: alpha(opacity=100);
          cursor: pointer;
        }
        
        #toast-container > .toast-info {
          background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGwSURBVEhLtZa9SgNBEMc9sUxxRcoUKSzSWIhXpFMhhYWFhaBg4yPYiWCXZxBLERsLRS3EQkEfwCKdjWJAwSKCgoKCcudv4O5YLrt7EzgXhiU3/4+b2ckmwVjJSpKkQ6wAi4gwhT+z3wRBcEz0yjSseUTrcRyfsHsXmD0AmbHOC9Ii8VImnuXBPglHpQ5wwSVM7sNnTG7Za4JwDdCjxyAiH3nyA2mtaTJufiDZ5dCaqlItILh1NHatfN5skvjx9Z38m69CgzuXmZgVrPIGE763Jx9qKsRozWYw6xOHdER+nn2KkO+Bb+UV5CBN6WC6QtBgbRVozrahAbmm6HtUsgtPC19tFdxXZYBOfkbmFJ1VaHA1VAHjd0pp70oTZzvR+EVrx2Ygfdsq6eu55BHYR8hlcki+n+kERUFG8BrA0BwjeAv2M8WLQBtcy+SD6fNsmnB3AlBLrgTtVW1c2QN4bVWLATaIS60J2Du5y1TiJgjSBvFVZgTmwCU+dAZFoPxGEEs8nyHC9Bwe2GvEJv2WXZb0vjdyFT4Cxk3e/kIqlOGoVLwwPevpYHT+00T+hWwXDf4AJAOUqWcDhbwAAAAASUVORK5CYII=") !important;
        }
        
        #toast-container > .toast-error {
          background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAHOSURBVEhLrZa/SgNBEMZzh0WKCClSCKaIYOED+AAKeQQLG8HWztLCImBrYadgIdY+gIKNYkBFSwu7CAoqCgkkoGBI/E28PdbLZmeDLgzZzcx83/zZ2SSXC1j9fr+I1Hq93g2yxH4iwM1vkoBWAdxCmpzTxfkN2RcyZNaHFIkSo10+8kgxkXIURV5HGxTmFuc75B2RfQkpxHG8aAgaAFa0tAHqYFfQ7Iwe2yhODk8+J4C7yAoRTWI3w/4klGRgR4lO7Rpn9+gvMyWp+uxFh8+H+ARlgN1nJuJuQAYvNkEnwGFck18Er4q3egEc/oO+mhLdKgRyhdNFiacC0rlOCbhNVz4H9FnAYgDBvU3QIioZlJFLJtsoHYRDfiZoUyIxqCtRpVlANq0EU4dApjrtgezPFad5S19Wgjkc0hNVnuF4HjVA6C7QrSIbylB+oZe3aHgBsqlNqKYH48jXyJKMuAbiyVJ8KzaB3eRc0pg9VwQ4niFryI68qiOi3AbjwdsfnAtk0bCjTLJKr6mrD9g8iq/S/B81hguOMlQTnVyG40wAcjnmgsCNESDrjme7wfftP4P7SP4N3CJZdvzoNyGq2c/HWOXJGsvVg+RA/k2MC/wN6I2YA2Pt8GkAAAAASUVORK5CYII=") !important;
        }
        
        #toast-container > .toast-success {
          background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAADsSURBVEhLY2AYBfQMgf///3P8+/evAIgvA/FsIF+BavYDDWMBGroaSMMBiE8VC7AZDrIFaMFnii3AZTjUgsUUWUDA8OdAH6iQbQEhw4HyGsPEcKBXBIC4ARhex4G4BsjmweU1soIFaGg/WtoFZRIZdEvIMhxkCCjXIVsATV6gFGACs4Rsw0EGgIIH3QJYJgHSARQZDrWAB+jawzgs+Q2UO49D7jnRSRGoEFRILcdmEMWGI0cm0JJ2QpYA1RDvcmzJEWhABhD/pqrL0S0CWuABKgnRki9lLseS7g2AlqwHWQSKH4oKLrILpRGhEQCw2LiRUIa4lwAAAABJRU5ErkJggg==") !important;
        }
        
        #toast-container > .toast-warning {
          background-image: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAGYSURBVEhL5ZSvTsNQFMbXZGICMYGYmJhAQIJAICYQPAACiSDB8AiICQQJT4CqQEwgJvYASAQCiZiYmJhAIBATCARJy+9rTsldd8sKu1M0+dLb057v6/lbq/2rK0mS/TRNj9cWNAKPYIJII7gIxCcQ51cvqID+GIEX8ASG4B1bK5gIZFeQfoJdEXOfgX4QAQg7kH2A65yQ87lyxb27sggkAzAuFhbbg1K2kgCkB1bVwyIR9m2L7PRPIhDUIXgGtyKw575yz3lTNs6X4JXnjV+LKM/m3MydnTbtOKIjtz6VhCBq4vSm3ncdrD2lk0VgUXSVKjVDJXJzijW1RQdsU7F77He8u68koNZTz8Oz5yGa6J3H3lZ0xYgXBK2QymlWWA+RWnYhskLBv2vmE+hBMCtbA7KX5drWyRT/2JsqZ2IvfB9Y4bWDNMFbJRFmC9E74SoS0CqulwjkC0+5bpcV1CZ8NMej4pjy0U+doDQsGyo1hzVJttIjhQ7GnBtRFN1UarUlH8F3xict+HY07rEzoUGPlWcjRFRr4/gChZgc3ZL2d8oAAAAASUVORK5CYII=") !important;
        }
        
        #toast-container.toast-top-center > div,
        #toast-container.toast-bottom-center > div {
          width: 300px;
          margin-left: auto;
          margin-right: auto;
        }
        
        #toast-container.toast-top-full-width > div,
        #toast-container.toast-bottom-full-width > div {
          width: 96%;
          margin-left: auto;
          margin-right: auto;
        }
        
        .toast {
          background-color: #030303;
        }
        
        .toast-success {
          background-color: #51a351;
        }
        
        .toast-error {
          background-color: #bd362f;
        }
        
        .toast-info {
          background-color: #2f96b4;
        }
        
        .toast-warning {
          background-color: #f89406;
        }
        
        .toast-progress {
          position: absolute;
          left: 0;
          bottom: 0;
          height: 4px;
          background-color: #000000;
          opacity: 0.4;
          -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
          filter: alpha(opacity=40);
        }
        
        /*Responsive Design*/
        @media  all and (max-width: 240px) {
          #toast-container > div {
            padding: 8px 8px 8px 50px;
            width: 11em;
          }
        
        #toast-container .toast-close-button {
            right: -0.2em;
            top: -0.2em;
          }
        }
        
        @media  all and (min-width: 241px) and (max-width: 480px) {
            
          #toast-container > div {
            padding: 8px 8px 8px 50px;
            width: 18em;
          }
          #toast-container .toast-close-button {
            right: -0.2em;
            top: -0.2em;
          }
          
        }
        
        @media  all and (min-width: 481px) and (max-width: 768px) {
          
          #toast-container > div {
            padding: 15px 15px 15px 50px;
            width: 25em;
          }
        }
        
        
      .dashboard_nav a {
         font-weight: 900;
         font-size: 16px;
         font-family: lato,sans-serif;
         text-transform: capitalize;
         color:#393D72;
      }

    </style>
    
    <?php echo $__env->yieldContent('css'); ?>

</head>
<body>
  
    <div class="body-inner">
        <div id="top-bar" class="top-bar">
            <div class="container">
              <div class="row">
                  <div class="col-lg-12 col-md-12 text-lg-right text-md-center">
                      <ul class="top-menu unstyled ">
                        <li><a href="<?php echo e(route('dashboard')); ?>">میرا اکاؤنٹ <i class="fa fa-user"></i> </a></li>
                        <li><a href="<?php echo e(route('wish')); ?>">میرا انتخاب <i class="fa fa-heart-o"></i></a></li>
                        <li><a href="<?php echo e(route('cart')); ?>">چیک آؤٹ <i class="fa fa-cart-plus"></i></a></li>
                        <?php if(Auth::check()): ?>
                          <li><a href="<?php echo e(route('logout')); ?>"> لاگ آوٹ <i class="fa fa-sign-out"></i></a></li>
                        <?php else: ?>
                        <li><a href="<?php echo e(route('login')); ?>">لاگ ان <i class="fa fa-cart-plus"></i> </a></li>
                        <?php endif; ?>
                        
                      </ul>
                  </div>
              </div>
            </div>
          </div>

          <header id="header" class=" header-mobile header-standard">
          <div class="container">
              <div class="row">
                <div class="navbar-header">
                    <div class="logo"> <a href="<?php echo e(route('home')); ?>"><img style="width: 157px;" src="<?php echo e(asset($_settings->app_logo)); ?>" /></a></div>
                </div>
    
                <nav class="navbar navbar-expand-lg ml-auto">
                    <div class="site-nav-inner">
                      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedConten" aria-controls="navbarSupportedConten" aria-expanded="false" aria-label="Toggle navigation">
                          <i class="fa fa-bars" aria-hidden="true"></i>
                      </button>
                      <div id="navbarSupportedConten" class="navbar-collapse navbar-responsive-collapse pull-right collapse" >
                            <ul class="nav navbar-nav">
                                <li class="dropdown active">
                                  <a href="<?php echo e(route("home")); ?>" class="dropdown-toggle" >ہوم  </a>
                                </li>
                                <li class="dropdown">
                                  <a href="<?php echo e(route('tweets')); ?>" class="dropdown-toggle" >بلاگ  </a>
                                </li>
                                <li class="dropdown">
                                  <a href="<?php echo e(route('videos')); ?>" class="dropdown-toggle" > وڈیوز</a>
                                </li>
                                <li class="dropdown">
                                  <a href="<?php echo e(route('blogs')); ?>" class="dropdown-toggle" data-toggle="dropdown">اصناف <i class="fa fa-angle-down"></i></a>
                                  <ul class="dropdown-menu" role="menu">
                                      <?php $__currentLoopData = Con::blog_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <li><a href="<?php echo e(route('blogs.category',$item->slug)); ?>"><?php echo e($item->title); ?></a></li>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                                </li>
                                <li class="dropdown">
                                  <a href="<?php echo e(route('authors')); ?>" class="dropdown-toggle" >مصنفین </a>
                                </li>
                                <li class="dropdown">
                                  <a href="<?php echo e(route('books')); ?>" class="dropdown-toggle" > بک اسٹور </a>
                                </li>
                                <li><a href="<?php echo e(route('magazines')); ?>"> میگزین اسٹور</a></li>
                                <li><a href="<?php echo e(route('contact')); ?>">رابطہ</a></li>
                            </ul>
                      </div>
                    </div>
                </nav>
              </div>
          </div>
        </header>

        <header id="header" class=" header-desktop header">
          <nav class="site-navigation navigation navdown navbar navbar-expand-xl ">
              <div class="container p-0">
                 <div class="w-100 site-nav-inner pull-left">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i style=" font-size: 40px;"  class="fa fa-bars"></i>
                          </button>
                        <div id="navbarSupportedContent" class="collapse navbar-collapse navbar-responsive-collapse p-0 justify-content-center">
                        <ul style=""  class="nav navbar-nav">
                          <li class="dropdown">
                              <a href="<?php echo e(route('contact')); ?>" class="dropdown-toggle" >رابطہ</a>
                          </li>
                          <li class="dropdown ">
                              <a href="<?php echo e(route("magazines")); ?>" class="dropdown-toggle" > میگزین اسٹور</a>
                          </li>
                          <li class="dropdown">
                              <a href="<?php echo e(route("books")); ?>" class="dropdown-toggle" > بک اسٹور       </a>
                          </li>
                          
                          <li class="dropdown">
                              <a href="<?php echo e(route('authors')); ?>" class="dropdown-toggle"  >مصنفین </a>
                          </li>

                          <li class="dropdown">
                              <a href="<?php echo e(route('blogs')); ?>" class="dropdown-toggle"  >اصناف </a>
                              <ul class=" dropdown-menu" role="menu" >
                                   <?php $__currentLoopData = Con::blog_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <li><a href="<?php echo e(route('blogs.category',$item->slug)); ?>"><?php echo e($item->title); ?></a></li>
                                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </ul> 
                          </li>
                          <li class="dropdown">
                              <a href="<?php echo e(route('videos')); ?>"  >  وڈیوز</a>
                          </li>
                          <li class="dropdown">
                              <a href="<?php echo e(route('tweets')); ?>"  >بلاگ </a>
                          </li>
                          <li class="dropdown"><a href="<?php echo e(route("home")); ?>" >ہوم </a></li>
                          <li class="mylogo" ><a class="p-0"  href="<?php echo e(route("home")); ?>"> 
                            <img style="width: 199px;"  src="<?php echo e(asset($_settings->app_logo)); ?>" /></a></li>
                        </ul>
                    </div>
                  </div>
              </div>
          </nav>
        </header>
        
  
    <?php echo $__env->yieldContent('content'); ?>
    

   <footer style="margin-top: 0px;background:#181818" id="footer" class="footer-light">
      <div class="footer-main">
        <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-12 footer-widget">
                  <h3 class="widget-title">رابطے کی تفصیلات </h3>
                    <ul style="list-style: none!important;direction: inherit!important;" class="unstyled">
                      <li>
                          <div class="media">
                            <div class="media-body">
                              <h5 class="mt-0"> فون پر رابطہ </h5>
                                <span> <?php echo e($_settings->footer1); ?> </span>
                            </div>
                            <i style="font-size: 50px;padding-left: 10px;"  class="fa fa-phone" aria-hidden="true"></i>
                          </div>
                      </li>
                      <li>
                          <div class="media">
                            <div class="media-body">
                                <h5 >ویب سائٹ</h5>
                                <span > <?php echo e($_settings->footer2); ?> </span>
                            </div>
                            <i style="font-size: 50px;padding-left: 10px;"  class="fa fa-globe" aria-hidden="true"></i>
                          </div>
                      </li>
                      <li>
                          <div class="media">
                            <div class="media-body">
                                <h5 > نقد</h5>
                                <span > <?php echo e($_settings->footer3); ?> </span>
                            </div>
                            <i style="font-size: 50px;padding-left: 10px;"  class="fa fa-money" aria-hidden="true"></i>
                          </div>
                      </li>  
                    </ul>
                      </div><!-- Our Company end -->
                      <div class="col-lg-3 col-md-12 footer-widget">
                          <h3 class="widget-title">پیمنٹ اینڈ شپنگ</h3>
                          <ul class="unstyled">
                            <li><a href="<?php echo e(route('terms')); ?>"> ٹرم اف یوز</a></li>
                            <li><a href="<?php echo e(route('payment-method')); ?>"> پیمنٹ میتھڈ</a></li>
                            <li><a href="<?php echo e(route('shipping-guide')); ?>"> شپمینٹ گائیڈ</a></li>
                            <li><a href="<?php echo e(route('location')); ?>"> لوکیشن شپ وی </a></li>
                            <li><a href="<?php echo e(route('estimated-delivery')); ?>"> ایسٹیمڈ یلیوری</a></li>
                            <li><a href="<?php echo e(route('shipping-policy')); ?>">شپنگ پالیسی</a></li>
                            <li><a href="<?php echo e(route('return-policy')); ?>">واپسی کی پالیسی </a></li>
                          </ul>
                      </div><!-- Our services end -->
                      <div class="col-lg-3 col-md-12 footer-widget">
                          <h3 class="widget-title">مینیو</h3>
                          <ul class="unstyled">
                            <li><a href="<?php echo e(route('home')); ?>"> ہوم </a></li>
                            <li><a href="<?php echo e(route('blogs')); ?>"> بلاگ </a></li>
                            <li><a href="<?php echo e(route('videos')); ?>"> وڈیوز </a></li>
                            <li><a href="<?php echo e(route('blogs')); ?>">  اصناف </a></li>
                            <li><a href="<?php echo e(route('authors')); ?>">  مصنفین </a></li>
                            <li><a href="<?php echo e(route('books')); ?>">  بک اسٹور </a></li>
                            <li><a href="<?php echo e(route('magazines')); ?>">  میگزین اسٹور </a></li>
                            <li><a href="<?php echo e(route('contact')); ?>">   رابطہ کیجیے </a></li>
                          </ul>
                      </div><!-- Support end -->

                      <div class="col-lg-3 col-md-12 footer-widget">
                          <h3 class="widget-title"> نیوز لیٹر  </h3>
                          <div style="padding-left: 55px;" > 
                            <p >تازہ مطبوعات، تحریروں اور بلاگ کی اطلاع  کے لیے رابطے میں رہیے۔</p>
                            <form action="<?php echo e(route('news_submit')); ?>">
                            <div class="input-group mb-3">
                                <input name="email" style="border:1px solid #2C2F33;background:#2C2F33;padding: 0px;
    font-size: 13px;" type="text" class="form-control" placeholder=" آپ کا ای میل ایڈریس " aria-label=" آپ کا ای میل ایڈریس " aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                  <button class="bg-white btn " type="submit">  جمع کروائیے  </button>
                                </div>
                              </div>
                            </form>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="copyright text-white ">
                <div class="container">
                    <div class="row">
                      <div class="col-md-6"> <?php echo e($_settings->app_copyright); ?> </div>
                      <div class="col-md-6 text-right">
                          <div class="footer-social ">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                          </div>
                      </div>
                    </div>
                </div>
              </div>
          </footer>
    </div>


        <!-- initialize jQuery Library -->
        <script src="<?php echo e(asset('front/js/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('front/js/popper.min.js')); ?>"></script>
        <script src="<?php echo e(asset('front/js/bootstrap.min.js')); ?>"></script>
        <script src="<?php echo e(asset('front/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('front/js/jquery.counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('front/js/custom.js')); ?>"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('imp/plugins/toast/toast.js')); ?>"></script>

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
              }
        </script>

      <?php echo $__env->make('components.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     
        <?php echo $__env->yieldContent('js'); ?>

</body>
</html><?php /**PATH /home/mukalama/public_html/mukalma/resources/views/layouts/app.blade.php ENDPATH**/ ?>