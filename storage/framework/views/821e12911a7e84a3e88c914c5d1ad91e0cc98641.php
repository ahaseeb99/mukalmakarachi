
<?php $__env->startSection('title',' بک اسٹور '); ?>

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
  <h1 class="bread-title" > وڈیوز </h1>
</section>

<section  style="padding: 40px 0" >
    <div class="container " >
        <form action="<?php echo e(route('videos.category')); ?>" method="get">
        <div class="row">
         <div class="col-md-4"> </div> 
          <div class="col-md-4">
             <div class="input-group mb-3">
                 <select class="form-control text-right "   style="font-size: 19px;height: 41px;border-color: #CACDD3;" name="video_id" id="">
                    <option value="all">اقسام</option>
                    <?php $__currentLoopData = Con::video_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option <?php if(isset($video_id) && $video_id == $video->id ): ?> <?php echo e('selected'); ?> <?php endif; ?>  value="<?php echo e($video->id); ?>"><?php echo e($video->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </select>
               </div>
           </div>
            <div class="col-md-4">
             <div class="input-group mb-3">
                 <div class="input-group-prepend">
                   <button style="border-color: #CACDD3;border-right: 0px;" class="btn btn-outline-secondary" type="submit"><i class="icon icon-search"></i></button>
                 </div>
                 <input name="s" value="<?php if(isset($search)): ?> <?php echo e($search); ?> <?php endif; ?>" placeholder="سرچ کریں"  style="font-size: 19px;border-left: 0px;height: 41px;border-color: #CACDD3;" type="text" class="form-control text-right "  aria-describedby="basic-addon1">
               </div>
            </div>
        </div>
       </form>
       <div class="row pt-3 pb-5 ">

           <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="text-center ">
                <img class="w-100 showVideo" src="<?php echo e(asset($item->thumbnail)); ?>" data-toggle="modal" data-target="#videoModal"  data-video="<?php echo e($item->video); ?>"/>
                <p class="quote-text"> 
                        <span style="color:black;font-size: 30px;"  class="slider-text2"  ><?php echo e($item->title); ?></span> <br>
                        <span style="font-size: 18px;" ><?php echo e($item->category->title); ?></span>
                </p>
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

 <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half" id="videoEmbed">
              
                </div>
          </div>
        </div>
      </div>
    </div>

  
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script>
    
 
    
    $(document).ready(function(){
     // Upload
     $(document).on('click', '.showVideo', function() {
         if($(this).data('video')){
  	        $('#videoEmbed').html('<iframe class="embed-responsive-item allowfullscreen" src="' + $(this).data('video') + '"/>')
         } else {
             $('#videoEmbed').html('<p>No Video Found</p>')
         }
   });

});
    

</script>

      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/videos.blade.php ENDPATH**/ ?>