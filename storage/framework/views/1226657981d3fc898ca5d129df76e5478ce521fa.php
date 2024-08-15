
<?php $__env->startSection('title',"مصنفین"); ?>

<?php $__env->startSection('css'); ?>

<style>
    
    #team-slide1 .testimonial-item-single {
    overflow: hidden;
}
    
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <section  class="bread-secton" >
        <h1 class="bread-title" >مصنفین  </h1>
    </section>

    <section  style="padding: 40px 0" >
        <div class="container " >
            <div class="row" >
                <div class="col-md-4"></div> 
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <form action="<?php echo e(route('authors.search')); ?>">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                            <button style="border-color: #CACDD3;border-right: 0px;" class="btn btn-outline-secondary" type="submit"><i class="icon icon-search"></i></button>
                            </div>
                            <input value="<?php if(isset($search)): ?> <?php echo e($search); ?> <?php endif; ?>" required name="s"   placeholder="سرچ کریں"  style="font-size: 19px;border-left: 0px;height: 41px;border-color: #CACDD3;" type="text" class="form-control text-right "  aria-describedby="basic-addon1">
                        </div>
                      </form>
                </div>
            </div>


            <div id="team-slide1" class=" row pt-3 pb-5 " style="direction:rtl;">
                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 my-4 ">
                    <div class="shadow testimonial-item-single text-center ">
                      <a style="color: black"  href="<?php echo e(route('author',$item->slug)); ?>" >
                         <img class="w-100" src="<?php echo e(asset($item->thumbnail)); ?>" alt="" />
                         <p class="quote-text"><span style="font-size: 39px;" class="slider-text1" > <?php echo e($item->title); ?> </span></p>
                       </a>
                     </div>
                </div>     
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
                <div class="col-12">
                    <hr style="height: 2px" >
                </div>
            </div>
        </div>
</section>


      
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/mukalma/resources/views/authors.blade.php ENDPATH**/ ?>