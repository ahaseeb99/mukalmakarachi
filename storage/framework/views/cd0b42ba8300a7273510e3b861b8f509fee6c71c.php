
<?php $__env->startSection('title','Magazines'); ?>

<?php $__env->startSection('css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid">
            <div class="row">
              <div class="col-6">
                  <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                      <li class="breadcrumb-item">
                      <a href="<?php echo e(route('admin.home')); ?>" class="text-muted">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active">
                        <a href="<?php echo e(route('admin.magazines.index')); ?>" class="text-muted">Magazines</a>
                      </li>
                  </ul>
              </div>
              <div class="text-right col-6 ">
               <a href="<?php echo e(route('admin.magazines.create')); ?>" class="update_btn btn btn-primary"> Add New </a>
              </div>
          </div>
        </div>    
    </div>

    <form enctype="multipart/form-data" method="post" action="<?php echo e(route('admin.magazines.store')); ?>">
      <?php echo csrf_field(); ?>
       
       <div class="container" >
           <div class="row" >
               <div class="col-md-12" >
                        <div class="card card-custom gutter-b">
                            <!--end::Header-->
                            <div class="card-body">
                              <div class="form-group row">
                                
                                <div class="col-lg-6">
                                  <label style="font-size:16px" class="col-form-label">Title (Urdu) * </label>
                                  <input name="title"  class="form-control" type="text" required >
                                   <?php if($errors->has('title')): ?>
                                        <div class="error text-danger"><?php echo e($errors->first('title')); ?></div>
                                   <?php endif; ?>
                                </div>

                                <div class="col-lg-6">
                                  <label style="font-size:16px" class="col-form-label">Title (English) *</label>
                                  <input name="english"  class="form-control" type="text" required >
                                   <?php if($errors->has('english')): ?>
                                        <div class="error text-danger"><?php echo e($errors->first('english')); ?></div>
                                   <?php endif; ?>
                                </div>

                                <div class="col-lg-6">
                                  <label style="font-size:16px" class="col-form-label">Price</label>
                                  <input value="" name="price"  class="form-control" type="number" required >
                                </div>

                                <div class="col-lg-6">
                                  <label style="font-size:16px" class="col-form-label">Pdf Price</label>
                                  <input required value="" name="pdf_price"  class="form-control" type="number"  >
                                </div>
                                
                                <div class="col-md-6">
                                    <label style="font-size:16px" class="col-form-label">Thumbnail</label>
                                    <div class="form-group row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <div class="input-group">
                                                <input id="thumbnail"  class="form-control" type="text" name="thumbnail"  />
                                                <span class="input-group-btn">
                                                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary"> 
                                                    <i class="fa fa-picture-o"></i> Choose </a>
                                                </span>
                                                
                                          </div>
                                        </div>
                                      </div>
                                  </div>
                                </div>

                                <div class="col-md-6">
                                  <label style="font-size:16px" class="col-form-label">PDF</label>
                                  <div class="form-group row">
                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <div class="input-group">
                                              <input id="thumbnail1"  class="form-control" type="text" name="pdf"  />
                                              <span class="input-group-btn">
                                                <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Choose </a>
                                              </span>
                                              
                                        </div>
                                      </div>
                                    </div>
                                </div>
                              </div>

                                <div class="col-12">
                                  <label style="font-size:16px" class="col-form-label" >Description</label>
                                  <textarea  class="form-control" name="des"></textarea>
                                </div>

                            </div>
                          </div>
                        </div>
                        
                  
                        <div class="container text-center"> 
                          <button type="submit" class="btn btn-success" >Submit</button>
                        </div>
               </div>
           </div>
       </div>
        </form>
      </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script src="<?php echo e(asset('admin/assets/js/pages/crud/forms/widgets/select29cd7.js?v=7.1.5')); ?>"></script>

<script>

    $(document).ready(function () {

      $('#lfm').filemanager('file');
      $('#lfm1').filemanager('file');
        
     
  });
      
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/admin/magazines/create.blade.php ENDPATH**/ ?>