
<?php $__env->startSection('title',$item->title); ?>

<?php $__env->startSection('css'); ?>

<style>
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
      
      
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<section  class="bread-secton" >
    <h1 class="bread-title" > <?php echo e($item->title); ?>  </h1>
</section>

<section class="main"  style="padding: 40px 0" >
    
        <div class="container " >
            <div class="row">
                <div class="col-md-4"></div> 
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="widget-title">
                          <div>
                            <h1 style="font-size: 32px;" class="text-white"><span class="sub-title">تمام</span> حال صناف</h1>
                          </div>
                    </div>
                </div>
            </div>
            <?php 
               $items = Con::blogs()->where('author_id',$item->id);
              
            ?>
            <div id="testimonial-slide3"  class=" row pt-3 pb-5 ">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
                <div class="col-md-4 my-4 ">
                    <div class="shadow  text-center ">
                        <img class="w-100" src="<?php echo e(asset($blogs->thumbnail)); ?>" />
                        <a class="d-block pt-3 py-1" href="<?php echo e(route('blog',$blogs->slug)); ?>" >
                            <p class="quote-text">  <span class="slider-text2"><?php echo e($blogs->title); ?></span>
                                <span class="slider-text1"><?php echo e($blogs->category->title); ?> </span>
                            </p>
                        </a>
                        <span class="pb-3 d-block date"><?php echo e($blogs->date->format('Y-m-d')); ?> </span>
                     </div>
                </div>    
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>            
            </div>
        </div>
        
  <?php 
        $posts = Con::books()->where('author_id',$item->id);
   ?>

        <div class="container " >
            <div class="row">
                <div class="col-md-4"></div> 
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="widget-title">
                          <div>
                            <h1 style="font-size: 32px;" class="text-white"><span class="sub-title">تمام</span> حال صناف</h1>
                          </div>
                    </div>
                </div>
            </div>

            <div class="row pt-3 pb-5 ">
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3">
                    <div class="testimonial-item-single text-center ">
                        <a class="a-note" href="<?php echo e(route('item',$item->slug)); ?>">
                         <img class="w-100" src="<?php echo e(asset($item->thumbnail)); ?>" />
                         <p class="quote-text">
                             <span style="font-size: 30px;color:black" class="slider-text1"> <?php echo e($item->title); ?>  </span><br>
                             <span style="font-size: 20px;" class="d-none text-danger slider-text1"> Rs <?php echo e($item->price); ?> </span>
                         </p>
                         <div style="max-width: 173px;" class="d-none container">
                             <div class="row">
                                 <div class="p-0 col-2">
                                    <a  style="color:black" href="<?php echo e(route('cart.add',$item->id)); ?>" >
                                        <i style="border: 1px solid black;" class="p-1 fa fa-heart-o"></i>
                                    </a> 
                                 </div>
                                  <div class="p-0 col-8  ">
                                    <a style="background-color: #138FCF;" href="<?php echo e(route('cart.add',$item->id)); ?>" class="w-100 text-white d-block   ">ADD TO CART</a> 
                                  </div>
                                 <div class=" p-0 col-2  ">
                                    <a  style="color:black" href="<?php echo e(route('item',$item->slug)); ?>" >
                                     <i style="border: 1px solid black;" class="p-1 fa fa-pencil-square-o"></i>
                                    </a>
                                 </div>
                             </div>
                         </div>
                         </a>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/mukalma/resources/views/author.blade.php ENDPATH**/ ?>