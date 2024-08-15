<?php $__env->startSection('title','Filemanager'); ?>

<?php $__env->startSection('css'); ?>
       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>    
		
		<div class="p-0 content d-flex flex-column flex-column-fluid" id="kt_content">
				<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
					<div class=" container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
						<div class="d-flex align-items-center flex-wrap mr-1">
							<div class="d-flex align-items-baseline flex-wrap mr-5">
								<h5 class="text-dark font-weight-bold my-1 mr-5">Filemanager</h5>
							</div>
						</div>
						<div class="d-flex align-items-center">
						</div>
					</div>
				</div>
				
				<iframe src="/laravel-filemanager" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
		</div>
		
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


      
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/admin/filemanager.blade.php ENDPATH**/ ?>