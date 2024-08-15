
<?php $__env->startSection('title','Home'); ?>

<?php $__env->startSection('css'); ?>

<style>
    .my-caorusel img {
        height:390px;
        object-fit: cover;
    object-position: center;
    }
</style>
       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div style="z-index: 0!important;" id="banner" class="owl-carousel my-caorusel">
    <div>  <img class="w-100" src="<?php echo e(asset("front/images/site/banner.jpg")); ?>" /> </div>
    <div>  <img class="w-100" src="<?php echo e(asset("front/images/site/banner.jpg")); ?>" alt=""> </div>
    <div>  <img class="w-100" src="<?php echo e(asset("front/images/site/banner.jpg")); ?>" > </div>
 </div>

      <section style="padding: 8px 0;" >
            <h2  class="text-center heading-title " >
               <img src="<?php echo e(asset('front/images/site/br2.png')); ?>"  /> 
               <span> بلاگ </span>
               <img src="<?php echo e(asset('front/images/site/br2.png')); ?>"  /> 
            </h2>
            <div class="container" >
               <div class="testimonial-slide owl-carousel">
                  <?php $__currentLoopData = Con::tweet(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <div class="testimonial-item-single text-center ">
                        <img class="w-100" src="<?php echo e(asset($item->thumbnail)); ?>"  />
                        <a href="<?php echo e(route('tweet',$item->slug)); ?>" >
                           <p class="quote-text">  <span class="slider-text2 "><?php echo e($item->title); ?> </span>
                           </p>
                           <p class="quote-text my-2"> 
                              <span class="slider-text1" > <?php echo e($item->author->title); ?></span>
                           </p>
                        </a>
                        <span class="date" ><?php echo e($item->date->format("Y-m-d")); ?></span>
                     </div> 
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>

               <div class="py-5 text-center" >
                  <a href="<?php echo e(route('blogs')); ?>" style="background:#06194F" class="custom-btn-1 px-3 py-1 btn btn-primary" >مزیددیکھیں</a>
               </div>
            </div>
      </section>


      <section  style="padding: 8px 0;background-color:#EEEEEE;" >
            <h2  class="text-center heading-title " >
               <img src="<?php echo e(asset('front/images/site/br2.png')); ?>"  /> 
               <span> ویڈیوز  </span>
               <img src="<?php echo e(asset('front/images/site/br2.png')); ?>"  /> 
            </h2>
            <div class="container" >
               <div class="row">
                  <?php $__currentLoopData = Con::videos()->take(2); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
                  <div class="col-md-6">
                     <div class="text-center ">
                        <img class="w-100 showVideo" src="<?php echo e(asset($item->thumbnail)); ?>" data-toggle="modal" data-target="#videoModal"  data-video="<?php echo e($item->video); ?>"/>
                        <p class="quote-text">  
                           <span style="color:black;font-size: 40px;"  class="slider-text2"  ><?php echo e($item->title); ?> </span> <br>
                           <span style="color:#555555;font-size: 18px;"    ><?php echo e($item->category->title); ?> </span>
                        </p>
                     </div> 
                  </div>    
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
               <div class="py-5 text-center" >
                  <a href="<?php echo e(route('videos')); ?>" style="background:#06194F" class="custom-btn-1 px-3 py-1 btn btn-primary" >مزیددیکھیں</a>
               </div>
            </div>
   </section>

   <section class="" style="padding: 8px 0;" >
            <h2  class="text-center heading-title " >
               <img src="<?php echo e(asset('front/images/site/br2.png')); ?>"  /> 
               <span> اصناف </span>
               <img src="<?php echo e(asset('front/images/site/br2.png')); ?>"  /> 
            </h2>
            <div class="container" >
               <div class="testimonial-slide owl-carousel">
                   <?php $__currentLoopData = Con::blogs(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="testimonial-item-single text-center ">
                      <a href="<?php echo e(route('blog',$item->slug)); ?>" >
                     <img class="w-100" src="<?php echo e(asset($item->thumbnail)); ?>"  />
                     <p class="quote-text">  <span class="slider-text2"  ><?php echo e($item->title); ?></span><span class="slider-text1b"><?php echo e($item->author->title); ?></span></p>
                     <span class="date" ><?php echo e($item->date->format('Y-m-d')); ?></span>
                     </a>
                  </div>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </div>
               <div class="py-5 text-center" >
                  <a href="<?php echo e(route('blogs')); ?>" style="background:#06194F" class="custom-btn-1 px-3 py-1 btn btn-primary" >مزیددیکھیں </a>
               </div>
            </div>
   </section>


    <section style="padding: 8px 0;background-color: #EEEEEE" >
        <h2  class="text-center heading-title " >
            <img src="<?php echo e(asset('front/images/site/br2.png')); ?>"  /> 
            <span> مصنفین </span>
            <img src="<?php echo e(asset('front/images/site/br2.png')); ?>"  /> 
        </h2>
        <div class="container" >
            <div id="team-slide1" class=" owl-carousel owl-theme">
               <?php $__currentLoopData = Con::authors(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="shadow testimonial-item-single text-center ">
                  <img class="w-100" src="<?php echo e(asset($item->thumbnail)); ?>"  />
                  <a style="color: #555555" href="<?php echo e(route('author',$item->slug)); ?>"  >
                     <p class="quote-text"><span style="font-size: 33px;" class="slider-text1" > <?php echo e($item->title); ?> </span></p>
                  </a>
              </div>   
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               
            </div>
            <div class="py-5 text-center" >
                <a href="<?php echo e(route('authors')); ?>" style="background:#06194F" class="custom-btn-1 px-3 py-1 btn btn-primary" >مزیددیکھیں</a>
            </div>
        </div>
    </section>


    <section style="padding: 8px 0;" >
        <h2  class="text-center heading-title " > <img src="<?php echo e(asset('front/images/site/br2.png')); ?>"  /> 
        <span> بک اسٹور </span> <img src="<?php echo e(asset('front/images/site/br2.png')); ?>" alt="" /> </h2>
        <div class="container" >
            <div id="book1" class=" owl-carousel owl-theme">
                <?php $__currentLoopData = Con::books(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="testimonial-item-single text-center ">
                     <a class="a-note" href="<?php echo e(route("item",$item->slug)); ?>" >
                    <img class="w-100" src="<?php echo e(asset($item->thumbnail)); ?>"  />
                    <p class="quote-text">
                            <span style="font-size: 30px;" class="slider-text1" > <?php echo e($item->title); ?>  </span><br>
                            <span style="font-size: 20px;" class="d-none text-danger slider-text1" > <?php echo e($item->price); ?> Rs </span>
                    </p>
                    <div style="max-width: 173px;"  class="d-none container">
                        <div class="row">
                        <div class="p-0 col-2">
                           <a style="color: black" href="<?php echo e(route('wish.add',$item->id)); ?>" >
                           <i style="border: 1px solid black;" class="p-1 fa fa-heart-o"></i>
                           </a>
                        </div>
                        <div class="p-0 col-8  ">
                           <a style="background-color: #138FCF;" href="<?php echo e(route('cart.add',$item->id)); ?>" class="w-100 text-white d-block"> ADD TO CART </a> 
                        </div>
                          <div class=" p-0 col-2  ">
                             <a style="color: black" href="<?php echo e(route('item',$item->slug)); ?>" ><i style="border: 1px solid black;" class="p-1 fa fa-pencil-square-o"></i></a>
                           
                          </div>
                        </div>
                    </div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="py-5 text-center" >
                <a href="<?php echo e(route("books")); ?>" style="background:#06194F" class="custom-btn-1 px-3 py-1 btn btn-primary" >مزید کتابیں</a>
            </div>
        </div>
    </section>


    <section style="padding: 8px 0;" >
        <h2  class="text-center heading-title " >
        <img src="<?php echo e(asset('front/images/site/br2.png')); ?>" alt="" /> 
        <span>  میگزین اسٹور </span>
        <img src="<?php echo e(asset('front/images/site/br2.png')); ?>" alt="" /> 
        </h2>

        <div class="container" >
        <div id="book2" class=" owl-carousel owl-theme">
            <?php $__currentLoopData = Con::magazines(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="testimonial-item-single text-center ">
                <a class="a-note" href="<?php echo e(route("item",$item->slug)); ?>" >
                    <img class="w-100" src="<?php echo e(asset($item->thumbnail)); ?>"  />
                    <p class="quote-text">
                        
                        <span style="font-size: 30px;" class="slider-text1" > <?php echo e($item->title); ?>  </span><br>
                        <span style="font-size: 20px;" class="d-none text-danger slider-text1" > <?php echo e($item->price); ?> Rs </span>
                        
                    </p>
                    <div style="max-width: 173px;"  class="d-none container">
                    <div class="row">
                        <div class="p-0 col-2">
                           <a style="color: black" href="<?php echo e(route('wish.add',$item->id)); ?>" >
                           <i style="border: 1px solid black;" class="p-1 fa fa-heart-o"></i>
                           </a>
                        </div>
                        <div class="p-0 col-8  ">
                           <a style="background-color: #138FCF;" href="<?php echo e(route('cart.add',$item->id)); ?>" class="w-100 text-white d-block   ">ADD TO CART</a> </div>
                        <div class=" p-0 col-2  ">
                           <a style="color: black" href="<?php echo e(route('item',$item->slug)); ?>" >
                           <i style="border: 1px solid black;" class="p-1  fa fa-pencil-square-o"></i>
                           </a>
                        </div>
                    </div>
                    </div>
                    </a>
                </div>     
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="py-5 text-center" >
            <a href="<?php echo e(route("magazines")); ?>" style="background:#06194F" class="custom-btn-1 px-3 py-1 btn btn-primary" >مزید میگزین</a>
        </div>
        </div>
    </section>


     <section class="bottom-parralex" style="background-color: #138FCF;" >
        <div class="container">
           <div class="row">
              <div   class="col-md-4">
                 <div class="con" >
                    <span class="number" ><?php echo e(count(Con::blogs())); ?>+</span>
                    <span class="text" >اصناف</span>
                    <span><i class="fa fa-pencil-square-o"></i></span>
                 </div>
                
              </div>
              <div   class="col-md-4">
                 <div class="con" >
                    <span class="number" ><?php echo e(count(Con::magazines())); ?>+</span>
                    <span class="text" >میگزین</span>
                    <span><i class="fa fa-file-text"></i></span>
                 </div>
              </div>
              <div   class="col-md-4">
                 <div class="con" >
                    <span class="number" ><?php echo e(count(Con::books())); ?>+</span>
                    <span class="text" >بک</span>
                    <span><i class="fa fa-book"></i></span>
                 </div>
              </div>
           </div>
        </div>
     </section>

     <section style="padding: 0px!important;" >
         <div class=" container-fluid">
           <div class="row">
              <div class="col-lg-6">
                 <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              </div>
              <div class="col-lg-6 p-md-3 ">
                 <form action="<?php echo e(route('contact_submit')); ?>">
                    <div class="form-section row">
                       <div class="col-md-12">
                          <input  placeholder="پہلا نام" type="text" name="fname" >
                       </div>
                       <div class="col-md-12">
                          <input  placeholder="آخری نام" type="text" name="lname" >
                       </div>
                       <div class="col-md-12">
                          <input  placeholder="فون نمبر" type="text" name="phone" >
                       </div>
                       <div class="col-md-12">
                          <input  placeholder="ای میل" type="text" name="email" >
                       </div>
                       <div class="col-md-12">
                          <input  placeholder=" میسسیج" type="text" name="message" >
                       </div>
                       <div class="col-md-12 text-right " >
                          <button  type="number" class="btn" >جمع کروائیے</button>
                       </div>
                    </div>
                 </form>
                 <div class="contact-details"  > 
                    <div class="row p-0 ">
                       <div class="col-lg-4 text-right">
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

<script>
    $(document).ready(function(){
        
       $("#banner").owlCarousel({
          items: 1,
       });


       $('#team-slide1').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          responsive:{
             0:{
                   items:4
             },
             600:{
                   items:4
             },
             1000:{
                   items:4
             }
          }
       });


       $('#book1').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          responsive:{
             0:{
                   items:2
             },
             900:{
                   items:3
             },
             1000:{
                   items:5
             }
          }
       });

       $('#book2').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          responsive:{
             0:{
                   items:2
             },
             900:{
                   items:3
             },
             1000:{
                   items:5
             }
          }
        });

       
    });
 </script>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/wel.blade.php ENDPATH**/ ?>