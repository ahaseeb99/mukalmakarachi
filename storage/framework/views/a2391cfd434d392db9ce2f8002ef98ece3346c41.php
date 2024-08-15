
<?php $__env->startSection('title',$item->title); ?>

<?php $__env->startSection('css'); ?>

<style>
    .con{
        
        padding: 8px;
        text-align: center;
        margin: 11px;
        border-radius: 0px 25px;
        background: #F5F5F5;
        
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
        left: -201px;
        
    }
    
    .column{
        border-radius: 10px 14px;
        border-bottom: 1px solid #eceaea ;
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        padding-bottom: 5px;
        
    }  

.be-comment-block {
    margin-bottom: 50px !important;
    border: 1px solid #edeff2;
    border-radius: 2px;
    padding: 50px 70px;
    border:1px solid #ffffff;
}

.comments-title {
    font-size: 16px;
    color: #262626;
    margin-bottom: 15px;
}

.be-img-comment {
    width: 60px;
    height: 60px;
    float: left;
    margin-bottom: 15px;
}

.be-ava-comment {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}

.be-comment-content {
    margin-left: 80px;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
}

.be-comment-name {
    font-size: 13px;
}

.be-comment-content a {
    color: #383b43;
}

.be-comment-content span {
    display: inline-block;
    width: 49%;
    margin-bottom: 15px;
}

.be-comment-time {
    text-align: right;
}

.be-comment-time {
    font-size: 11px;
    color: #b4b7c1;
}

.be-comment-text {
    font-size: 13px;
    line-height: 18px;
    color: #7a8192;
    display: block;
    background: #f6f6f7;
    border: 1px solid #edeff2;
    padding: 15px 20px 20px 20px;
}
    
</style>
       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

        <section  class="bread-secton" >
            <h1 class="bread-title" > <?php echo e($item->title); ?> </h1>
        </section>
        <section class="main" style="padding: 40px 0">
            <div class="container ">
               <div class="row">
                   <div class="col-md-3">
                       
                       <div class="shadow-sm  my-3 widget">
                           <div class="widget-title">
                              <div>
                                <h1 style="font-size: 32px;" class="text-white"><span class="sub-title">تمام</span> حالیہ اصناف</h1>
                              </div>
                           </div>
                           
                           <?php $__currentLoopData = Con::blog_cat($item->category_id); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="column  container">
                               <a href="<?php echo e(route('blog',$itemss->slug)); ?>" >
                                <div class="row">
                                    <div class="col-10 text-right">
                                        <h1 style="font-size: 23px;color: black;" class="m-0"> <?php echo e($itemss->title); ?> </h1>
                                        <span style="color: #5E5E5E;font-size: 22px">  مصنف : <?php echo e($itemss->author->title); ?></span>
                                    </div>
                                    <div class="col-2 align-self-center p-0">
                                        <img class="d-block" style="width: 40px;border-radius: 11px;" src="<?php echo e(asset($item->thumbnail)); ?>" />
                                    </div>
                                </div>
                              </a>
                            </div>    
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                       </div>
                       
                   </div>
                   
                   <div class="col-md-9">
                        <div class="container-fluid text-right ">
                            
                          <h1> <?php echo e($item->category->title); ?> - <?php echo e($item->title); ?></h1>
                           <div>
                               <span style="padding-right: 10px;font-size:17px;font-weight:bold;"> <?php echo e($item->author->title); ?>

                                 <i style="color:#138FCF;font-size: 24px;padding-left: 10px;padding-right: 10px;" class="fa fa-calendar-check-o" aria-hidden="true"></i>
                               </span>
                               <span style="font-size:17px;font-weight:bold;"> <?php echo e($item->date->format('Y-m-d')); ?>

                                <i style="color:#138FCF;font-size: 24px;padding-left: 10px;" class="fa fa-user" aria-hidden="true"></i></span>
                               
                           </div>
                             <span class="" style="background: #138fcf;padding: 4px 11px;color: white;border-radius: 0px 12px;">
                                 
                                 <a target="_blank" class="text-white" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo e(url('/')); ?>/blog/<?php echo e($item->slug); ?>">
                                      <i class="fa fa-facebook"></i>
                                      </a>
                                 <a target="_blank" class="text-white" href="https://twitter.com/intent/tweet?text=my share text&amp;url=<?php echo e(url('/')); ?>/blog/<?php echo e($item->slug); ?>">
                                     <i class="fa fa-twitter"></i>
                                 </a>
                             </span>
                             
                             <img class="pt-3 w-100" src="<?php echo e(asset($item->thumbnail)); ?>" />
                             <div class="div">
                                 <?php echo $item->des; ?>

                             </div>
                          
                             <?php if(auth()->guard()->check()): ?>
                             <h3 class="text-left">Comments - <span style="font-size:20px;">User is solely responsible for his/her words</span> </h3>
                            
                             <div class="comments text-left">
                                 
                                 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
                                    <div class="container">
                                    <div class="be-comment-block">
                                    	<div class="be-comment">
                                    	    <?php $__currentLoopData = $reviews->->where('status',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    		<div class="be-img-comment">	
                                    			<img src="<?php if($review->user->image != null): ?> <?php echo e(asset($review->user->image)); ?> <?php else: ?> <?php echo e('https://coderzlab.com/avatar_4.png'); ?> <?php endif; ?>" alt="" class="be-ava-comment">
                                    		</div>
                                    		<div class="be-comment-content">
                                    				<span class="be-comment-name">
                                    					<?php echo e($review->user->name); ?>

                                    					</span>
                                    				<span class="be-comment-time">
                                    					<i class="fa fa-clock-o"></i>
                                    				<?php echo e($review->created_at->diffForHumans()); ?>

                                    				</span>
                                    
                                    			<p class="be-comment-text"> <?php echo e($review->body); ?></p>
                                    		</div>
                                    		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    	</div>
                                    </div>
                                    </div>
                                 
                                 <form action="<?php echo e(route('review.add')); ?>">
                                    <input type="hidden" name="type" value="asnaf" >
                                    <input type="hidden" name="id" value="<?php echo e($item->id); ?>" >
                                    <textarea required  name="comment" class="w-100"></textarea>
                                    <button type="submit" class="btn" style="background:#0A265F;color:white">Add Comment</button>
                                 </form>
                                 
                             </div>     

                             <?php else: ?>
                             <h3 class="text-left">Comments - 
                                 <span style="font-size:20px;">Please Login First <a href="<?php echo e(route('login')); ?>" class="text-primary">Click Here</a> </span> </h3>
                             <?php endif; ?>
                            

                        </div>
                   </div>
               </div>

                    </div>
        </section>
  
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/mukalma/resources/views/blog.blade.php ENDPATH**/ ?>