
<?php $__env->startSection('title','Orders'); ?>

<?php $__env->startSection('css'); ?>

<style>
    .total-details span{
      /*font-size:16px;*/
    }
</style>

<?php $__env->stopSection(); ?>

<?php    ?>

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
                        <a href="<?php echo e(route('admin.orders.index')); ?>" class="text-muted">Orders</a>
                      </li>
                  </ul>
              </div>
              <div class="text-right col-6 ">
          
              </div>
          </div>
        </div>    
    </div>

    <form enctype="multipart/form-data" method="post" action="<?php echo e(route('admin.orders.update',$module->id)); ?>">
      <?php echo csrf_field(); ?>
       
       <div class="container" >
           <div class="row" >
               <div class="col-md-12" >
                        <div class="card card-custom gutter-b">
                            <!--end::Header-->
                            <div class="card-body">
                                <label class="font-size-h3 font-weight-bolder text-dark mb-7">Order Details</label>
                              <div class="form-group row">
                                <div class="col-md-3">
                                      <label style="font-size:16px" class="col-form-label">Order Tracking ID</label>
                                      <input readonly value="<?php echo e($module->tracking_id); ?>" class=" form-control" type="text"  />
                                </div>
                                <div class="col-md-3">
                                      <label style="font-size:16px" class="col-form-label">Customer</label>
                                      <input readonly value="<?php echo e($module->user->name); ?>" class=" form-control" type="text"  />
                                </div>
                                <div class="col-md-3">
                                      <label style="font-size:16px" class="col-form-label">Payment Method</label>
                                      <select name="payment_method" class="form-control">
                                          <option <?php if($module->payment_method == 'cash_on_delivery'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="cash_on_delivery" > Cash On Delivery </option>
                                          <option <?php if($module->payment_method == 'bank'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="bank_transfer" > Bank Transfer </option>
                                          <option <?php if($module->payment_method == 'paypal'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="paypal" > Paypal </option>
                                      </select>
                                </div>
                                <div class="col-md-3">
                                     <label style="font-size:16px" class="col-form-label">Payment Status</label>
                                     <select class="form-control" name="payment_status" autocomplete="off">
                						 <option <?php if($module->payment_status == 0): ?> <?php echo e('selected'); ?> <?php endif; ?> value="0">UnPaid</option>
                						 <option <?php if($module->payment_status == 1): ?> <?php echo e('selected'); ?> <?php endif; ?> value="1">Paid</option>
                					 </select>
                                </div>
                                <div class="col-md-3">
                                  <label style="font-size:16px" class="col-form-label">Order Status</label>
                                  <select class="form-control" name="status" autocomplete="off">
            						 <option  <?php if($module->status == 'pending'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="pending">Pending</option>
            						 <option <?php if($module->status == 'canceled'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="canceled">Cancel</option>
            						 <option <?php if($module->status == 'approved'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="approved"> Approve</option>
            						 <option <?php if($module->status == 'processing'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="processing"> Processing</option>
            						 <option <?php if($module->status == 'delivered'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="delivered">Delivered</option>
                                     <option <?php if($module->status == 'completed'): ?> <?php echo e('selected'); ?> <?php endif; ?> value="completed">Completed</option>
            					  </select>
                                </div>
                                <div class="col-md-3">
                                      <label style="font-size:16px" class="col-form-label">Date</label>
                                      <input readonly  name="date" class=" form-control" type="date" required value="<?php echo e($module->date->format('Y-m-d')); ?>"  />
                                </div>
                            </div>
                          </div>
                     </div>
               </div>
                  <?php
                      $address = unserialize($module->address);
                      $address = (object) $address;
                    ?>
               
               
               
                    <div class="col-md-12" >
                      <div class="card card-custom gutter-b">
                                <div class="card-body">
                                  <label class="font-size-h3 font-weight-bolder text-dark mb-3">Items Details</label>
                                  <hr>
                                  <div class="row" >
                                      <div class="col-12" >
                                          <div class="custom_field" > 
                                            <?php
                                              $orders = unserialize($module->items);
                                              $gtotal = 0;
                                            ?>
                                              <table class="table">
                                                <thead>
                                                  <tr>
                                                    <th style="font-size:16px" scope="col">#</th>
                                                    <th style="font-size:16px" scope="col">Item</th>
                                                    <th style="font-size:16px" >Type</th>
                                                    <th style="font-size:16px" scope="col">Price</th>
                                                    <th style="font-size:16px" scope="col">Quantity</th>
                                                    <th style="font-size:16px" scope="col">Total</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                  <?php
                                                    $gtotal += $item['quantity'] * $item['price'];
                                                  ?>

                                                    <tr>
                                                      <th ><?php echo e($key); ?></th>
                                                      <td><?php echo e($item['title']); ?> (<?php echo e($item['type']); ?>)</td>
                                                      <td><?php echo e($item['tt']); ?></td>
                                                      <td><?php echo e($item['currency']); ?> <?php echo e($item['price']); ?></td>
                                                      <td  ><?php echo e($item['quantity']); ?></td>
                                                      <td><?php echo e($item['currency']); ?> <?php echo e($item['total']); ?></td>
                                                    </tr>
                                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                              </table>         
                                          </div>
                                      </div>
                                  </div>
                                  <hr>
                                      
                                  <div class=" " >
                                    <P class=" px-3 text-right font-weight-bold font-size-h6 mb-3">Total Amount : Rs <?php echo e(number_format($module->total,2)); ?> </P>  
                                  </div>
                            </div>
                      </div>
              </div>

                  <div class="col-md-12" >
                    <div class="my-5 card card-custom">
                        <div class=" card-header flex-wrap border-0 pt-6 pb-0">
                          <div class="card-title">
                            <h3 class="font-size-h3 font-weight-bolder text-dark mb-3">Address Details</h3>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-xl-12 my-2">
                                  <div class="address-details form-body">
                                      <div class="form-group row">
                                            <div class="col-md-3">
                                              <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Full Name</label>
                                              <input readonly name="address[name]" value="<?php echo e($address->name); ?>" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                              <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Email</label>
                                              <input readonly name="address[email]" value="<?php echo e($address->email); ?>" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                              <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Phone</label>
                                              <input readonly name="address[mobile]" value="<?php echo e($address->mobile); ?>" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                            <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Country</label>
                                            <input readonly name="address[country]" value="<?php echo e($address->country); ?>" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                            <label style="font-size:16px" class="col-form-label  text-lg-right text-left">State / Province</label>
                                            <input readonly name="address[state]" value="<?php echo e($address->state); ?>" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                            <label style="font-size:16px" class="col-form-label  text-lg-right text-left">City / Town</label>
                                            <input readonly name="address[city]" value="<?php echo e($address->city); ?>" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-3">
                                            <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Zip / Postal Code</label>
                                            <input readonly name="address[zip]" value="<?php echo e($address->zip); ?>" class="form-control form-control-lg" type="text">
                                          </div>
                                          <div class="col-md-12">
                                            <label style="font-size:16px" class="col-form-label  text-lg-right text-left">Street Address</label>
                                            <input readonly name="address[address]" value="<?php echo e($address->address); ?>" class="form-control form-control-lg" type="text">
                                          </div>
                                      </div>
                                  </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
                
               <div class="col-md-12" >
                   <div class="card card-custom gutter-b">
                        <div class="card-body">
                            <label class="font-size-h3 font-weight-bolder text-dark mb-7">Additional Notes</label>
                          <div class="form-group row">
                            <div class="col-md-12">
                                  <textarea name="additional_note" class="form-control" > <?php echo e($module->additional_note); ?></textarea>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-12" >
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
       
 


      
    
  
  });
      
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/admin/orders/edit.blade.php ENDPATH**/ ?>