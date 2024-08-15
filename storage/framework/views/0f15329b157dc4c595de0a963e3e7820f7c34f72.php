
<?php $__env->startSection('title','Books'); ?>

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
                        <a href="<?php echo e(route('admin.books.index')); ?>" class="text-muted">Books</a>
                      </li>
                  </ul>
              </div>
              <div class="text-right col-6 ">
                  <a href="<?php echo e(route('admin.books.create')); ?>" class="update_btn btn btn-primary"> Add New </a>
              </div>
          </div>
        </div>    
    </div>

    <form enctype="multipart/form-data" method="post" action="<?php echo e(route('admin.books.update',$module->id)); ?>">
      <?php echo csrf_field(); ?>
       
       <div class="container" >
           <div class="row" >
               <div class="col-md-12" >
                        <div class="card card-custom gutter-b">
                            <!--end::Header-->
                            <div class="card-body">
                              <div class="form-group row">
                                
                                <div class="col-lg-6">
                                    <label style="font-size:16px" class="col-form-label">Title (Urdu)*</label>
                                    <input  name="title" value="<?php echo e($module->title); ?>"  class="form-control" type="text" required >
                                    <?php if($errors->has('title')): ?>
                                    <div class="error text-danger"><?php echo e($errors->first('title')); ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-lg-6">
                                    <label style="font-size:16px" class="col-form-label">Title (English)*</label>
                                    <input  name="english" value="<?php echo e($module->english); ?>" class="form-control" type="text" required >

                                    <?php if($errors->has('english')): ?>
                                    <div class="error text-danger"><?php echo e($errors->first('english')); ?></div>
                                    <?php endif; ?>
                                </div>

                                <div class="col-lg-6">
                                  <label style="font-size:16px" class="col-form-label">Price *</label>
                                  <input name="price" value="<?php echo e($module->price); ?>"  class="form-control" type="number" required >
                                </div>

                                <div class="col-lg-6">
                                  <label style="font-size:16px" class="col-form-label">Pdf Price *</label>
                                  <input name="pdf_price" value="<?php echo e($module->pdf_price); ?>"  class="form-control" type="number" required >
                                </div>

                                <div class="col-md-6">
                                    <label style="font-size:16px" class="col-form-label  ">Thumbnail</label>
                                    <div class="form-group row">
                                      <div class="col-lg-12">
                                        <div class="form-group">
                                          <div class="input-group">
                                                
                                                <input id="thumbnail" value="<?php echo e($module->thumbnail); ?>"  class="form-control" type="text" name="thumbnail"  />
                                                <span class="input-group-btn">
                                                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary"> 
                                                    <i class="fa fa-picture-o"></i> Choose </a>
                                                </span>
                                          </div>
                                          <a class="d-block py-2" href="<?php echo e(asset($module->thumbnail)); ?>" target="_blank" >Download</a>
                                        </div>
                                      </div>
                                  </div>
                                 
                                </div>

                               <div class="col-md-6">
                                  <label style="font-size:16px" class="col-form-label ">PDF</label>
                                  <div class="form-group row">
                                    <div class="col-lg-12">
                                      <div class="form-group">
                                        <div class="input-group">
                                              <input value="<?php echo e($module->pdf); ?>" id="thumbnail1"  class="form-control" type="text" name="pdf"  />
                                              <span class="input-group-btn">
                                                <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="btn btn-primary">
                                                   <i class="fa fa-picture-o"></i> Choose </a>
                                              </span>
                                        </div>
                                        <a class="d-block py-2" href="<?php echo e(asset($module->pdf)); ?>" target="_blank" >Download</a>
                                      </div>
                                    </div>
                                </div>
                              </div>

                                <div class="col-lg-6">
                                  <label style="font-size:16px" class="col-form-label">Author</label>
                                  <select class="form-control"  name="author_id"  autocomplete="off" >
                                    <?php $__currentLoopData = Con::authors(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                          <option <?php if($module->author_id == $author->id): ?> <?php echo e("selected"); ?>  <?php endif; ?> value="<?php echo e($author->id); ?>"><?php echo e($author->title); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                </div>

                                <div class="col-lg-6">
                                  <label style="font-size:16px" class="col-form-label" >Categories</label>
                                  <?php  $parentcat = Con::categories(); ?>
                                  <select class="form-control"  name="category_id"  autocomplete="off" >
                                      <?php $__currentLoopData = $parentcat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option <?php if($module->category_id == $category->id): ?> <?php echo e("selected"); ?>  <?php endif; ?> value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </select>
                                </div>

                                <div class="col-12">
                                  <label style="font-size:16px" class="col-form-label" >Description</label>
                                  <textarea  class="form-control" name="des"><?php echo e($module->des); ?></textarea>
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

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/admin/books/edit.blade.php ENDPATH**/ ?>