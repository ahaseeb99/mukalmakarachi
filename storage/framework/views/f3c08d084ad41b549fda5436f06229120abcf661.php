
<?php $__env->startSection('title','Blogs'); ?>

<?php $__env->startSection('css'); ?>

<style>
    .con{
        
        padding: 8px;
        text-align: center;
        margin: 11px;
        border-radius: 0px 25px;
        background: #F5F5F5;
        
    }
    
    .widget-title{
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
        left: -201px;
        
    }
    
    .column{
        border-radius: 10px 14px;
        border-bottom: 1px solid #eceaea ;
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        padding-bottom: 5px;
        
    }  
    
</style>
       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

        <section  class="bread-secton" >
            <h1 class="bread-title" > اصناف </h1>
        </section>

        <section  style="padding: 40px 0" >
            <div class="container " >
            <div class="row" >
                <div class="col-md-3" >
                    
                    <div class="shadow-sm  my-3 widget" >
                        <div class="widget-title" >
                            <div>
                                <h1 style="font-size: 32px;" class="text-white"><span class="sub-title" >تمام</span> حالیہ اصناف</h1>
                            </div>
                        </div>
                        
                        <?php $__currentLoopData = Con::blogs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="column  container" >
                            <a href="<?php echo e(route('blog',$item->slug)); ?>" >
                                <div class="row" >
                                    <div class="col-10 text-right" >
                                        <h1  style="font-size: 23px;color: black;" class="m-0"   > <?php echo e($item->title); ?> </h1>
                                        <span style="color: #5E5E5E;font-size: 22px" ><?php echo e($item->category->title); ?> : <?php echo e($item->author->title); ?> </span>
                                    </div>
                                    <div class="col-2 align-self-center p-0" >
                                            <img class="d-block"  style="width: 40px;border-radius: 11px;"  src="<?php echo e(asset($item->thumbnail)); ?>"  />
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>
                    
                        <div class="shadow-sm my-3 widget" >
                        <div class="widget-title" >
                            <div>
                                <h1 style="font-size: 32px;" class="text-white" ><span class="sub-title" >تمام</span> مصنفین </h1>
                                
                            </div>
                        </div>
                        <?php $__currentLoopData = Con::authors(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="column container" >
                                <a href="<?php echo e(route('author',$item->slug)); ?>" >
                                    <div class="row" >
                                        <div class="col-10 text-right" >
                                                <h1  style="font-size: 23px;color: black;" class="m-0" ><?php echo e($item->title); ?></h1>
                                        </div>
                                        <div class="col-2 align-self-center p-0" >
                                                <img class="d-block"  style="width: 40px;border-radius: 11px;"  src="<?php echo e(asset($item->thumbnail)); ?>"  />
                                        </div>
                                    </div>
                                </a>
                            </div>    
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                
                <div class="col-md-9" >
                        <div class="container-fluid" >
                            <div class="row" >
                                <?php $__currentLoopData = Con::blog_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-3" >
                                    <div class="con shadow p-3 mb-5  "  >
                                         <a href="<?php echo e(route('blogs.category',$item->slug)); ?>" > <h1><?php echo e($item->title); ?></h1></a>
                                    </div>          
                                </div>      
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                </div>
            </div>
            </div>
    </section>
  
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/mukalma/resources/views/blogs.blade.php ENDPATH**/ ?>