
<?php $__env->startSection('title','404'); ?>

<?php $__env->startSection('css'); ?>
       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

      <section class="error-section">
        <div class="container">
            <div class="error-all-info">
            <div class="text">
            <h1>404</h1>
            <p>we are sorry for the inconvinience! please try again later...</p>
            </div>
            <div class="custom-button">
            <a href="<?php echo e(route('home')); ?>" class="custom-btn">
            back to home
            </a>
            </div>
            <div class="image">
            <img src="<?php echo e(asset('front/assets/img/404.png')); ?>" alt="Image">
            </div>
          </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/errors/404.blade.php ENDPATH**/ ?>