
<?php $__env->startSection('title','Contact'); ?>

<?php $__env->startSection('css'); ?>
       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <section  class="bread-secton" >
                <h1 class="bread-title" >رابطہ کریں  </h1>
                <p  style="font-size: 20px;" class="py-3 text-center text-white" >آپ کی اس ویب سائٹ کے بارے میں کیا رائے ہے، ہمیں ضرور آگاہ کیجیے۔ رائے کے اظہار کے لیے یہ فارم استعمال کیجیے۔</p>
            </section>


            <section style="padding: 0px!important;" >
                <div class=" container-fluid">
                  <div class="row">
                     <div class="col-lg-6">
                        <iframe width="100%" height="500" style="height:100%" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                     </div>
                     <div class="col-lg-6 p-5 ">
                        <form action="<?php echo e(route('contact_submit')); ?>">
                           <div class="form-section row">
                              <div class="col-md-12">
                                 <input  placeholder="پہلا نام" type="text" name="fname" id="">
                              </div>
                              <div class="col-md-12">
                                 <input  placeholder="آخری نام" type="text" name="lname" id="">
                              </div>
                              <div class="col-md-12">
                                 <input  placeholder="فون نمبر" type="text" name="phone" id="">
                              </div>
                              <div class="col-md-12">
                                 <input  placeholder="ای میل" type="text" name="email" id="">
                              </div>
                              <div class="col-md-12">
                                 <input  placeholder=" میسسیج" type="text" name="message" id="">
                              </div>
                              <div class="col-md-12 text-right " >
                                 <button class="btn" >جمع کروائیے</button>
                              </div>
                           </div>
                        </form>

                        <div class="contact-details"  > 
                            <div class="row p-0 ">
                               <div class="col-lg-4 ">
                                  <span>کال کریں</span>
                                  <i class="fa fa-envelope" ></i> <br>
                                  <p><?php echo e($_settings->phone); ?></p>
                               </div>
                               <div class="col-lg-8 text-right ">
                                  <span>میل</span>
                                  <i class="fa fa-envelope" ></i> <br>
                                  <p><?php echo e($_settings->email); ?></p>
                               </div>
                               <div class="col-lg-12 text-right ">
                                  <span>پتہ</span>
                                  <i class="fa fa-map-marker" ></i> <br>
                                   <p>ایم - 17کتاب مارکیٹ، شاہزیب ٹیرس گلی - 3، اردو بازار کراچی - 74400پاکستان</p>
                               </div>
                            </div>
                         </div>
                     </div>
                  </div>
                </div>
            </section>



<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/mukalma/resources/views/contact.blade.php ENDPATH**/ ?>