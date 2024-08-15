
<?php $__env->startSection('title','Orders'); ?>

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
    <link href="<?php echo e(asset('admin/assets/plugins/datatable/buttons.css')); ?>" rel="stylesheet" type="text/css" />
     
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
                      <li class="breadcrumb-item">
                        <a href="<?php echo e(route('admin.home')); ?>" class="text-muted">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active">
                         <a href="<?php echo e(route('admin.orders.index')); ?>" class="text-muted">Orders</a>
                      </li>
                    </ul>
                  </div>
                  <div class="d-flex align-items-center">
                
                  </div>
              </div>
            </div>
          
          <div class="d-flex flex-column-fluid mb-4">
              <div class="container">
                <div class="card card-custom">
                  <div class="card-body">
                    <form method="get" action="<?php echo e(route('admin.orders.search')); ?>" >
                        <div class="row align-items-center">  
                             <div class="py-2 col-lg-4">
                                <label class="col-form-label">Customer</label>
                                <select class="form-control" name="scustomer" autocomplete="off">
        					       <option value="all" > Select   </option>
            					      <?php $__currentLoopData = Con::getUsersWhereNotIn(['super-admin']); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            					       <option <?php if(isset($scustomer) && $scustomer == $customer->id): ?> <?php echo e('selected'); ?> <?php endif; ?> value="<?php echo e($customer->id); ?>" > <?php echo e($customer->name); ?></option>
            					      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        				        </select>
                            </div>
                            
                             <div class="py-2 col-lg-4">
                                  <label class="col-form-label">Status</label>
                                  <select class="form-control" name="sstatus" autocomplete="off">
                                    <option value="all" > Select  </option>
                                    <option <?php if(isset($sstatus) && $sstatus == 'pending' ): ?> <?php echo e('selected'); ?> <?php endif; ?> value="pending"> Pending</option>
                                    <option <?php if(isset($sstatus) && $sstatus == 'canceled' ): ?> <?php echo e('selected'); ?> <?php endif; ?> value="canceled"> Cancel</option>
                                    <option <?php if(isset($sstatus) && $sstatus == 'approved' ): ?> <?php echo e('selected'); ?> <?php endif; ?> value="approved"> Approve</option>
                                    <option <?php if(isset($sstatus) && $sstatus == 'processing' ): ?> <?php echo e('selected'); ?> <?php endif; ?> value="processing"> Processing</option>
                                    <option <?php if(isset($sstatus) && $sstatus == 'delivered' ): ?> <?php echo e('selected'); ?> <?php endif; ?> value="delivered"> Delivered</option>
                                    <option <?php if(isset($sstatus) && $sstatus == 'completed' ): ?> <?php echo e('selected'); ?> <?php endif; ?> value="delivered"> Completed</option>
                                  </select>
                             </div>
                                
                            <div class="py-2 col-lg-4">
                                <label class="col-form-label">Payment Status</label>
                                <select class="form-control" name="pstatus" autocomplete="off">
        					      <option value="all" > Select   </option>
        					      <option <?php if(isset($pstatus) && $pstatus == '1' ): ?> <?php echo e('selected'); ?> <?php endif; ?>  value="1">Paid</option>
        					      <option <?php if(isset($pstatus) && $pstatus == '0' ): ?> <?php echo e('selected'); ?> <?php endif; ?> value="0">Unpaid</option>
        				        </select>
                            </div>
                            
                            <div class="py-2 col-md-10 ">
                                <div class="input-daterange input-group" id="kt_datepicker">
                                  <input autocomplete="off" <?php if(isset($sstart)): ?> value="<?php echo e(date('m/d/Y', strtotime($sstart))); ?>" <?php endif; ?>  type="text" class="form-control datatable-input" name="sstart" placeholder="From" data-col-index="5">
                                  <div class="input-group-append">
                                    <span class="input-group-text">
                                      <i class="la la-ellipsis-h"></i>
                                    </span>
                                  </div>
                                  <input autocomplete="off" <?php if(isset($send)): ?> value="<?php echo e(date('m/d/Y', strtotime($send))); ?>" <?php endif; ?> type="text" class="form-control datatable-input" name="send" placeholder="To" data-col-index="5">
                                </div>
                            </div>
                                  
                            <div class="col-lg-2 text-right ">
                               <button type="submit" class="w-100 btn btn-primary" >Search</button>
                            </div>
                        </div>
                      </form>
                    </div>
                 </div>
             </div>
        </div>
    

        <div class=" main-container d-flex flex-column-fluid">
          <div class="container">
            <div class="card card-custom">
                 <div class="card-header flex-wrap py-5">
                    <div class="card-title"><h3 class="card-label">Orders</h3></div>
                    <div class="card-toolbar"></div>
                </div>
              <div class="card-body">
                 <div class="table-responsive" >
                <table class=" table table-hover table-checkable" id="my_datatable" style="margin-top: 13px !important">
                  <thead>
                      <tr>
                            <th style="font-size:16px;" class="text-center" > Order ID</th>
                            <th style="font-size:16px;" class="text-center" > Date</th>
                            <th style="font-size:16px;" class="text-center" > Customer Name</th>
                            <th style="font-size:16px;" class="text-center" > Status</th>
                            <th style="font-size:16px;" class="text-center" > Payment Status</th>
                            <th style="font-size:16px;" class="text-center" > Total</th>
                            <th style="font-size:16px;" class="text-center" > Actions</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $gtotal = 0;  ?>
                    
                    <?php $__currentLoopData = $modules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                       <?php $gtotal += $item->total;  ?>
                        <tr class="odd gradeX">
                           <td class=" text-center" >#<?php echo e($item->id); ?></td>
                           <td class=" text-center"><?php echo e($item->date->format('d-m-Y')); ?></td>
                           <td class=" text-center"> <?php echo e($item->user->name); ?> </td>
                           <td class=" text-center"><?php echo e(ucwords($item->status)); ?></td>
                           <td class=" text-center"> <?php if($item->payment_status): ?> <?php echo e('Paid'); ?> <?php else: ?> <?php echo e('UnPaid'); ?>  <?php endif; ?></td>
                           <td class=" text-center"><?php echo e(number_format($item->total,2)); ?> Rs</td>
                           <td class=" text-center">
                                <a href="<?php echo e(route('admin.orders.edit', $item->id)); ?>" class="btn btn-sm btn-clean btn-icon" title="Edit"><i class="text-success la la-edit"></i></a>
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
                                        <a href="<?php echo e(route('admin.orders.delete', $item->id)); ?>"  class="btn btn-primary">Delete</a>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </td>
                       </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <tfoot>
                        <tr>
                            <th class="text-center" >Grand Total  </th>
                            <th colspan="4" style="text-align:right"></th>
                            <td class="text-center" ><?php echo e(number_format($gtotal,2)); ?> Rs </td>
                            <th class="text-center" > </th>
                        </tr>
                  </tfoot>
                </table>
                </div>
                <!--end: Datatable-->
              </div>
            </div>
          </div>
          <!--end::Container-->
        </div>
</div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>

<script src="<?php echo e(asset('admin/assets/plugins/custom/datatables/datatables.bundle9cd7.js?v=7.1.5')); ?>"></script>


<script>
    $(document).ready(function(){

          $('#kt_datepicker').datepicker({
               todayHighlight: true,
               templates: {
               leftArrow: '<i class="la la-angle-left"></i>',
               rightArrow: '<i class="la la-angle-right"></i>',
              },
    	  });

  
          var table = $('#my_datatable').DataTable({
            colReorder: true,
            rowReorder: true,
            language: {
        searchPlaceholder: "Search"
        },
         ordering: false,
            responsive: true,
            dom: `<'row' <"col-md-6"  > <"col-md-6 text-right " f> <'col-sm-12'tr >><'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,
          });
      

   });
  
 </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/admin/orders/index.blade.php ENDPATH**/ ?>