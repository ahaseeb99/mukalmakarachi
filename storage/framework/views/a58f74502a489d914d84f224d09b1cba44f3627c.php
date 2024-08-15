
<?php $__env->startSection('title','All Blogs'); ?>

<?php $__env->startSection('css'); ?>

<style>

 .testimonial-single {
    padding: 0px!important;
    border-radius: 0px 33px;
    overflow: hidden;
}

    .main .widget-title{
          background: #09255f;
          padding: 6px 0px;
          color: white;
          border-radius: 0px 29px;
      }
      
        .sub-title{
          position: relative;
          background: #138fcf;
          padding: 4px 14px;
          font-size: 20px;
          border-radius: 0px 7px 5px 0px;
          top: -3px;
          left: -296px;
          
      }
      
      .quote-text {
      color: #138FCF!important;
      margin-bottom: 0px;
      margin-top: 0px;
      padding-top: 3px;
  }
  
  .slider-text1 {
      font-size: 34px;
  }
  
   .slider-text2 {
      font-size: 20px;
  }
  
  .date {
      color: black;
      font-size: 16px;
      font-weight: 700;
  }
  
  .testimonial-single img {
    width: 340px;
    height: 340px;
    object-fit: cover;
    object-position: top;
}
      
      
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section  class="bread-secton" >
    <h1 class="bread-title" > بلاگ   </h1>
</section>

<section class="main"  style="padding: 40px 0" >
    
        <div class="container " >
            <div class="row">
                <div class="col-md-4"></div> 
                <div class="col-md-4"></div>
            </div>
            <div id="testimonial-slide3"  class=" row pt-3 pb-5 " style="direction:rtl">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="col-md-4 my-4 " >
                    <div class="shadow  text-center testimonial-single">
                        <img class="w-100" src="<?php echo e(asset($blogs->thumbnail)); ?>" />
                        <a class="d-block pt-3 py-1" href="<?php echo e(route('tweet',$blogs->slug)); ?>" >
                            <p class="quote-text">  <span class="slider-text2"><?php echo e($blogs->title); ?></span>
                                <span class="slider-text1"> </span>
                            </p>
                        </a>
                        <span class="pb-3 d-block date"><?php echo e($blogs->date->format('Y-m-d')); ?> </span>
                     </div>
                </div>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
            </div>
        </div>
  
</section>
      
<?php $__env->stopSection(); ?>




<?php $__env->startSection('js'); ?>

        <script>
           $(document).ready(function(){


            }); 
        </script>

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/tweets.blade.php ENDPATH**/ ?>