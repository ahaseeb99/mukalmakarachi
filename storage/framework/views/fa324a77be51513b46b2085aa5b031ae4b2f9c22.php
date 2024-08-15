
<?php $__env->startSection('title','Contacts'); ?>

<?php $__env->startSection('css'); ?>
  
  <style>
        .dt-buttons button {
          background:white!important;
        }

        .main-container .dropdown-menu {
          position: relative;
          top: 0;
          left: 0;
          z-index: 98;
          display: block;
          float: none;
          min-width: 100%;
          padding: 0px;
          margin: 0px;
          font-size: 1rem;
          color: #3F4254;
          text-align: left;
          list-style: none;
          background-color: #ffffff;
          background-clip: padding-box;
          border: 0 solid rgba(0, 0, 0, 0.15);
          border-radius: 0.42rem;
          -webkit-box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
          box-shadow: 0px 0px 50px 0px rgba(82, 63, 105, 0.15);
        }

        .main-container .dropdown-menu a {
          color: black;
        }
        
  </style>

    <link href="<?php echo e(asset('admin/assets/plugins/custom/datatables/datatables.bundle9cd7.css?v=7.1.5')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('front/css/Jameel.ttf')); ?>" rel="stylesheet" type="text/css" />
    <style>
         .table thead th::after{
        
            display:contents!important;
        }
        
       .table thead th::after{
            position:relative!important;
            left:0px!important;
            margin:0px!important;
            display:none!important;
        }
        
        .table thead th::before{
            position:relative!important;
            margin:0px!important;
           left:0px!important;
           display:contents!important;
        }
        
    </style>
     
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class=" content d-flex flex-column flex-column-fluid" >

      <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
          <div class="d-flex align-items-center flex-wrap mr-2">
            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
              <li class="breadcrumb-item"><a href="<?php echo e(route('admin.home')); ?>" class="text-muted">Dashboard</a></li>
              <li class="breadcrumb-item active"><a href="#" class="text-muted">Contacts</a></li>
            </ul>
          </div>
          <div class="d-flex align-items-center">
           
              </div>
            </div>
      </div>

        <div class=" main-container d-flex flex-column-fluid">
          <div class="container">
            <div class="card card-custom">
               <div class="card-header flex-wrap py-5">
                 <div class="card-title"><h3 class="card-label">Contacts</h3></div>
                 <div class="card-toolbar"></div>
              </div>
              <div class="card-body">
                <div class="table-responsive" >
                <table class=" table table-hover table-checkable" id="my_datatable" style="margin-top: 13px !important">
                  <thead>
                      <tr>
                        <th style="font-size:16px;" class="text-center" > #</th>
                        <th style="font-size:16px;" class="text-center" > Name</th>
                        <th style="font-size:16px;" class="text-center" > Email</th>
                        <th style="font-size:16px;" class="text-center" > Phone</th>
                        <th style="font-size:16px;" class="text-center" > Message</th>
                        <th style="font-size:16px;" class="text-center" > Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>             
                        <tr class="odd gradeX">
                              <td class="0 text-center" ><?php echo e($key + 1); ?></td>
                              <td class="3 text-left"> <?php echo e($item->fname); ?> <?php echo e($item->lname); ?></td>
                              <td class="6 text-left"><?php echo e($item->email); ?></td>
                              <td class="6 text-left"><?php echo e($item->phone); ?></td>
                              <td class="12 text-center"><?php echo e($item->message); ?></td>
                              <td class="16 text-center">
                                    <a data-toggle="modal" data-target="#exampleModal<?php echo e($item->id); ?>"  class="btn btn-sm btn-clean btn-icon" title="Delete"><i class="text-danger la la-trash"></i></a>
                                    <div class="modal fade" id="exampleModal<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog modal-dialog-centered " role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Are You Sure Do You Want To Delete?</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <a href="<?php echo e(route('admin.contacts.delete', $item->id)); ?>"  class="btn btn-primary">Delete</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                              </td>
                        </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                </table>
                </div>
              </div>
            </div>
          </div>
        </div>
</div>


<!-- Button trigger modal -->


<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script src="<?php echo e(asset('admin/assets/plugins/custom/datatables/datatables.bundle9cd7.js?v=7.1.5')); ?>"></script>


<script>
    $(document).ready(function(){

      var table = $('#my_datatable').DataTable({
        colReorder: true,
        rowReorder: true,
        language: {
        searchPlaceholder: "Search"
        },
         ordering: false,
        responsive: false,
        dom: `<'row' <"col-md-6"  > <"col-md-6 text-right " f> <'col-sm-12'tr >><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
      });
      
  });
  </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/admin/contacts/index.blade.php ENDPATH**/ ?>