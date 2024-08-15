
<?php $__env->startSection('title','رجسٹریشن / لاگ ان'); ?>

<?php $__env->startSection('css'); ?>
       
     <style>
     
        .blog-content ul{
           margin-left: 14px;
           list-style: disc;
          }
          
        .blog .title{
          color:#393D72;
         }
          
     </style>
     
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
      
             <section  class=" bread-secton " >
                  <h1 class="bread-title" > رجسٹریشن / لاگ ان</h1>
             </section>
             
             <section  style="padding: 40px 0" >
               <div class="container " >
                  <div class="row pt-3 pb-5 ">
                     <div class="col-md-6">
                        <div class="shadow-lg login-form  card">
                             <form class="" action="<?php echo e(route('register_submit')); ?>" >
                                  <h5 class="card-title text-center ">رجسٹریشن</h5>
                                  <input type="text" required name="name" placeholder="آپ کا نام"  />
                                  <input type="email" required name="email" placeholder="آپ کا ای میل"  />
                                  <input type="text"  name="phone" placeholder="فون" type="text"  />
                                  <input type="phone" required  name="password" placeholder="پاس ورڈ"  />
                                  <div class="text-center" >
                                    <button type="submit" class="btn-my" >جمع کروائیے</button>
                                  </div>
                              </form>
                         </div>
                     </div>
                     <div class="col-md-6">
                        <div class="shadow-lg login-form  card">
                              <form action="<?php echo e(route('login_submit')); ?>" >
                                       <h5 class="card-title text-center ">لاگ ان</h5>
                                       <input required name="email" placeholder="آپ کا ای میل" type="email"  />
                                       <input required name="password" placeholder="پاس ورڈ" type"password"  />
                                     <div style="margin-top: 92px;" class="text-center" >
                                        <button type="submit" class="btn-my" >جمع کروائیے</button>
                                     </div>
                              </form>
                         </div>
                     </div>       
                  </div>
               </div>
           </section>
           
           
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/mukalma/resources/views/login.blade.php ENDPATH**/ ?>