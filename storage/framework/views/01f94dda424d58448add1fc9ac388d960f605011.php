
<?php $__env->startSection('title',$item->title); ?>

<?php $__env->startSection('css'); ?>

	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('front/js/export/style.css')); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('front/js/export/ipages.min.css')); ?>">
	
	<style>
	    
	 
        
        .login-modal{
            
            position: absolute;
            top: 159px;
            z-index: 3;
        }
        
        .register-form input {
            width: 100%;
            margin: 7px 0px;
            text-align: right;
            color: black;
            font-weight: 700;
        }
	    
	</style>
     
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

            <div id="flipbook" style="min-height:600px;" data-book-engine="onepageswipe" ></div>
        
        <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form class="login-form text-right" >
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" style="    border-radius: 25px;">
                      <div class="modal-header" style="direction:rtl">
                        <h5 class="modal-title" id="exampleModalLongTitle">لاگ ان</h5>
                        <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                           <div class="form-group">
                                <input  name="email" required type="email" class=" form-control" aria-describedby="emailHelp" placeholder="آپ کا ای میل">
                          </div>
                          <div class="form-group">
                                <input   name="password" required type="password" class="form-control" placeholder="پاس ورڈ">
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-primary data-register ">Register</button>
                        <button style="background:#06194F;" type="submit" class=" text-white btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
              </form>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <form class="register-form text-right" >
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content" style="    border-radius: 25px;">
                      <div class="modal-header" style="direction:rtl">
                        <h5 style="font-size: 29px;font-weight: 700;" class="modal-title" id="exampleModalLongTitle">رجسٹریشن</h5>
                        <button type="button" class="close m-0" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-right ">
                          <div class="form-group">
                                <input  name="name" required type="text" class="text-right form-control"  placeholder="آپ کا نام">
                          </div>
                          <div class="form-group">
                                <input  name="email" required type="email" class="text-right form-control"  placeholder="پ کا ای میل">
                          </div>
                          <div class="form-group">
                                <input  name="phone" required type="text" class="text-right form-control" placeholder="فون">
                          </div>
                          <div class="form-group">
                                <input   name="password" required type="password" class="text-right form-control" placeholder="پاس ورڈ">
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-primary data-login">Login</button>
                        <button style="background:#06194F;" type="submit" class=" text-white btn btn-primary">Submit</button>
                      </div>
                    </div>
                  </div>
              </form>
            </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<!--<script type="text/javascript" src="assets/js/jquery.min.js"></script>-->
<script type="text/javascript" src="<?php echo e(asset('front/js/export/pdf.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('front/js/export/jquery.ipages.min.js')); ?>"></script>

<script>
$(document).ready(function() {
    
   
     
    $('.data-login').click(function(){
               
        $('#exampleModalCenter1').modal('hide'); 
        $('#exampleModalCenter').modal('show'); 
       
      
    });
    
     $('.data-register').click(function(){
               
        $('#exampleModalCenter').modal('hide'); 
        $('#exampleModalCenter1').modal('show'); 
       
      
    });
    
   
    
       
   $('.login-form').submit(function(e){
       
       e.preventDefault();
       var data = $(this).serializeArray().reduce(function(obj, item) {
                obj[item.name] = item.value;
                return obj;
        }, {});
        
        
        $.ajax({
                url:"<?php echo e(env('APP_URL')); ?>/login_ajax", 
                method:'get',
                data:data,
                dataType: "json",
                success: function(result){
                    
                   toastr.success(result.message);
                   location.reload();
              },
              error: function(e){
                   toastr.warning(e.responseJSON.message);
              }
              
         });
           
   });
   
   
   
   $('.register-form').submit(function(e){
       
       e.preventDefault();
       var data = $(this).serializeArray().reduce(function(obj, item) {
                obj[item.name] = item.value;
                return obj;
        }, {});
       
       
        $.ajax({
                url:"<?php echo e(env('APP_URL')); ?>/register_ajax", 
                method:'get',
                data:data,
                dataType: "json",
                success: function(result){
                    
                  toastr.success(result.message);
                  $('#exampleModalCenter1').modal('hide'); 
                  $('#exampleModalCenter').modal('show'); 
                  
                 
              },
              error: function(e){
                  toastr.warning(e.responseJSON.message);
              }
              
         });
           
   });
    
    
       
       
       
       
       
       
       
       
       
       
       
       
       
      <?php if(Auth::check()): ?>
          
          let pp = null; 
          
          <?php else: ?>
          
          let pp = <?php echo e($_settings->freepdf); ?>; 
           
           
      <?php endif; ?>
    
    //let pp = 3;
    

	var options = {
		responsive:true,
		autoFit:true,
		autoHeight: false,
		bookmarks: [],
		padding:{
			top:30,
			left:10,
			right:10,
			bottom:70
		},
		pdfUrl: '<?php echo e(asset($item->pdf)); ?>',
		pdfAutoCreatePages: true,
		pdfBookSizeFromDocument: true,
		zoom:1,
		toolbarControls: [
			{type:'share',        active:false},
			{type:'sound',        active:true, optional: false},
			{type:'outline',      active:true},
			{type:'thumbnails',   active:false},
			{type:'gotofirst',    active:false},
			{type:'prev',         active:true},
			{type:'pagenumber',   active:true},
			{type:'next',         active:true},
			{type:'gotolast',     active:false},
			{type:'zoom-in',      active:false},
			{type:'zoom-out',     active:false},
			{type:'zoom-default', active:false},
			{type:'optional',     active:false},
			{type:'download',     active:false, optional: false},
			{type:'fullscreen',   active:true, optional: false},
		],
	};
	

	$('#flipbook').ipages(options);
	

	// Events
	$('#flipbook').on('ipages:ready', function(e, plugin) {	
		console.log('event:ready');
		
		
		

            if(pp != null){
                
		    	//$('.ipgs-pagenumber-label').hide();
    			$('.ipgs-pagenumber-label').on('DOMSubtreeModified',function(){
    				let currenttext = $(this).text();
    				if(currenttext != ''){
    					let result = parseInt(currenttext.charAt(currenttext.length1));
    					
    					if(result > pp){
    					    $('#exampleModalCenter').modal('show');
    					}
    
    				}
    			});
			
            }
				
		    
		    if(pp != null){
		          
    			$('.ipgs-book:eq(0)').children().each(function(idx, li) {
    				if(idx >= pp){
    					$(this).remove();
    				}
    			});

		    }

	});
	




		// $('#flipbook').on('ipages:showpage', function(e, plugin, page) {
		//     //console.log('event:showpage [' + page + ']');
		// 	//console.log(page);
		// });
		
		// $('#flipbook').on('ipages:hidepage', function(e, plugin, page) {
		//      //console.log('event:hidepage [' + page + ']');
		// });


});

</script>
  

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/mukalma/resources/views/item-pdf.blade.php ENDPATH**/ ?>