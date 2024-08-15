
<?php $__env->startSection('title','میگزین اسٹور'); ?>

<?php $__env->startSection('css'); ?>

<style>
    
    .child-container{
        padding-top:10px;
        padding-left: 30px;
        list-style: circle;
    }
    
   .child-container .fa-angle-right:before {
      content: none!important;
    }
     
</style>
       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section  class="bread-secton" >
      <h1 class="bread-title" >  میگزین اسٹور </h1>
    </section>

      <section  style="padding: 40px 0" >
        <div class="container " >
            <div class="row">
                <div class="col-md-4"></div> 
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <form action="<?php echo e(route('magazines.search')); ?>">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <button style="border-color: #CACDD3;border-right: 0px;" class="btn btn-outline-secondary" type="submit"><i class="icon icon-search"></i></button>
                        </div>
                        <input value="<?php if(isset($search)): ?> <?php echo e($search); ?> <?php endif; ?>" required name="s"   placeholder="سرچ کریں"  style="font-size: 19px;border-left: 0px;height: 41px;border-color: #CACDD3;" type="text" class="form-control text-right "  aria-describedby="basic-addon1">
                    </div>
                  </form>
                </div>
            </div>

            <div class="row pt-3 pb-5 ">

                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="col-md-3">
                    <div class="testimonial-item-single text-center ">
                           <a class="a-note" href="<?php echo e(route("item",$item->slug)); ?>" >
                          <img class="w-100" src="<?php echo e(asset($item->thumbnail)); ?>" alt="" />
                          <p class="quote-text">
                                  <span style="font-size: 30px;" class="slider-text1" > <?php echo e($item->title); ?> </span><br>
                                  <span style="font-size: 20px;" class="d-none text-danger slider-text1" > <?php echo e($item->price); ?> Rs </span>
                           </p>

                          <div style="max-width: 173px;"  class="d-none container">
                              <div class="row">
                                  <div class="p-0 col-2">
                                    <a style="color:black" href="<?php echo e(route("item",$item->slug)); ?>" >
                                      <i style="border: 1px solid black;" class="p-1 fa fa-heart-o"></i>
                                    </a>
                                  </div>
                                  <div class="p-0 col-8  ">
                                    <!--<a style="background-color: #138FCF;" href="<?php echo e(route('cart.add',$item->id)); ?>" class="w-100 text-white d-block   ">ADD TO CART</a>-->
                                  </div>
                                  <div class=" p-0 col-2  ">
                                    <a href="<?php echo e(route("item",$item->slug)); ?>" style="color: black;" >
                                       <i style="border: 1px solid black;" class="p-1 fa fa-pencil-square-o"></i>
                                    </a>
                                  </div>
                              </div>
                          </div>
                          </a>
                      </div>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  <div class="col-12">
                      <hr style="height: 2px" >
                      <?php echo e($items->links()); ?>

                  </div>
            </div>
        </div>
      </section>
  
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/mukalma/resources/views/magazines.blade.php ENDPATH**/ ?>