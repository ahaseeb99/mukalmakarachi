

<?php $__env->startSection('title','Authors'); ?>

<?php $__env->startSection('css'); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content d-flex flex-column flex-column-fluid" >  
    <div class="subheader py-2 py-lg-4 subheader-solid" >
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
              <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                <li class="breadcrumb-item">
                  <a href="<?php echo e(route('admin.home')); ?>" class="text-muted">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                   <a href="<?php echo e(route('admin.authors.index')); ?>" class="text-muted">Authors</a>
                </li>
              </ul>
          </div>

          <div class="text-right col-6 ">
               <a href="<?php echo e(route('admin.authors.create')); ?>" class="update_btn btn btn-primary"> Add New </a>
        </div>
      </div>
  </div>    
</div>

  <div class="d-flex flex-column-fluid">
    <div class="container">
      <div class="card card-custom">
        <div class="card-body">
          <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-7 my-2">
            <form enctype="multipart/form-data" method="post" action="<?php echo e(route('admin.authors.update',$module->id)); ?>"  class="form-horizontal">
                <?php echo csrf_field(); ?>
                      <div class="form-body">
                        <div class="form-group row">
                          <div class="col-12">
                              <label style="font-size:16px" class="col-form-label text-lg-right text-left">Title *</label>
                            <input required  name="title" value="<?php echo e($module->title); ?>"  class="title form-control form-control-lg" type="text" >
                            <?php if($errors->has('title')): ?>
                                <div class="error text-danger"><?php echo e($errors->first('title')); ?></div>
                            <?php endif; ?>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <div class="col-12">
                              <label style="font-size:16px" class="col-form-label text-lg-right text-left">Title (English) *</label>
                              <input required  name="english" value="<?php echo e($module->english); ?>"  class="form-control form-control-lg" type="text" >
                              <?php if($errors->has('english')): ?>
                                  <div class="error text-danger"><?php echo e($errors->first('english')); ?></div>
                              <?php endif; ?>
                          </div>
                         </div>
                      
                        <div class="form-group row">
                            <div class="col-12">
                              <label style="font-size:16px" class="col-form-label text-lg-right text-left">Description</label>
                              <textarea name="des" class="form-control" ><?php echo e($module->des); ?></textarea>
                              <?php if($errors->has('des')): ?>
                                  <div class="error text-danger"><?php echo e($errors->first('des')); ?></div>
                              <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                          <div class="col-lg-12 ">
                               <label style="font-size:16px" class="col-form-label text-lg-right text-left">Thumbnail</label>
                              <div class="input-group">
                                  <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder1" class="btn btn-primary">
                                      <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                  </span>
                                  <input id="thumbnail"  class="form-control" type="text" name="thumbnail" value="<?php echo e($module->thumbnail); ?>" />
                                </div>
                                <img class=" mt-3 d-block"  width="150px" src="<?php echo e(asset($module->thumbnail)); ?>" >
                          </div>
                      </div> 

                        </div>
                         <div class="form-actions">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </div>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end::Container-->
      </div>

  <!--end::Entry-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>

<script>

    $(document).ready(function () {
      $('#lfm').filemanager('file');
    });
    
</script>

<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/admin/authors/edit.blade.php ENDPATH**/ ?>