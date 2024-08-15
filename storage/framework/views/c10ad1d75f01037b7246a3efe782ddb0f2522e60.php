
<?php $__env->startSection('title',"Terms"); ?>

<?php $__env->startSection('css'); ?>


     
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <?php echo e($terms->value); ?>

        </div>
    </div>
</div>
           

            


<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>



<script>
    $(document).ready(function() {
        
       
     
    
    	
    
    
    
    
    
    });

</script>
  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/terms.blade.php ENDPATH**/ ?>