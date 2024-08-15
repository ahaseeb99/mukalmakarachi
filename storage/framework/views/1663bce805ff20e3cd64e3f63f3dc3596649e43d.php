<?php $__env->startSection('title','Dashboard'); ?>

<?php $__env->startSection('css'); ?>
       
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>    
		
		<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
				<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
					<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
						<div class="d-flex align-items-center flex-wrap mr-1">
							<div class="d-flex align-items-baseline flex-wrap mr-5">
								<h5 style="font-size: 25px;" class="text-dark font-weight-bold my-1 mr-5">Dashboard</h5>
							</div>
						</div>
						<div class="d-flex align-items-center"></div>
					</div>
				</div>
				<div class="container" >
					<div class="row">
						<div class="col-md-2 col-lg-3">
							<!--begin::Stats Widget 13-->
							<div  class="card card-custom bg-danger  card-stretch gutter-b">
								<!--begin::Body-->
								<div class="card-body">
									<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Cart3.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"></rect>
												<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"></path>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="text-inverse-danger font-weight-bolder font-size-h5  mt-5">
										Total Products (<?php echo e(count(Con::items())); ?>)</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Stats Widget 13-->
						</div>
						<div class="col-md-2 col-lg-3">
							<!--begin::Stats Widget 14-->
							<div  class="card card-custom bg-primary  card-stretch gutter-b">
								<!--begin::Body-->
								<div class="card-body">
									<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<path d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
												<path d="M3.5,9 L20.5,9 C21.0522847,9 21.5,9.44771525 21.5,10 C21.5,10.132026 21.4738562,10.2627452 21.4230769,10.3846154 L17.7692308,19.1538462 C17.3034221,20.271787 16.2111026,21 15,21 L9,21 C7.78889745,21 6.6965779,20.271787 6.23076923,19.1538462 L2.57692308,10.3846154 C2.36450587,9.87481408 2.60558331,9.28934029 3.11538462,9.07692308 C3.23725479,9.02614384 3.36797398,9 3.5,9 Z M12,17 C13.1045695,17 14,16.1045695 14,15 C14,13.8954305 13.1045695,13 12,13 C10.8954305,13 10,13.8954305 10,15 C10,16.1045695 10.8954305,17 12,17 Z" fill="#000000"></path>
											</g>
										</svg>

										
										<!--end::Svg Icon-->
									</span>
									<div class="text-inverse-primary font-weight-bolder font-size-h5 mb-2 mt-5">Total Orders (<?php echo e(count(Con::orders())); ?>)</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Stats Widget 14-->
						</div>
						<div class="col-md-2 col-lg-3">
							<!--begin::Stats Widget 15-->
							<div  class="card card-custom bg-info  card-stretch gutter-b">
								<!--begin::Body-->
								<div class="card-body">
									<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<path d="M6,2 L18,2 C19.6568542,2 21,3.34314575 21,5 L21,19 C21,20.6568542 19.6568542,22 18,22 L6,22 C4.34314575,22 3,20.6568542 3,19 L3,5 C3,3.34314575 4.34314575,2 6,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000"></path>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="text-inverse-success font-weight-bolder font-size-h5 mb-2 mt-5">Total Users 
										(<?php echo e(count(Con::getUsersByRoleName(["Customer"]))); ?>)</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Stats Widget 15-->
						</div>
						<div class="col-md-2 col-lg-3">
							<!--begin::Stats Widget 15-->
							<div  class="card card-custom bg-success  card-stretch gutter-b">
								<!--begin::Body-->
								<div class="card-body">
									<span class="svg-icon svg-icon-white svg-icon-3x ml-n1">
										<!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Media/Equalizer.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<path d="M4.875,20.75 C4.63541667,20.75 4.39583333,20.6541667 4.20416667,20.4625 L2.2875,18.5458333 C1.90416667,18.1625 1.90416667,17.5875 2.2875,17.2041667 C2.67083333,16.8208333 3.29375,16.8208333 3.62916667,17.2041667 L4.875,18.45 L8.0375,15.2875 C8.42083333,14.9041667 8.99583333,14.9041667 9.37916667,15.2875 C9.7625,15.6708333 9.7625,16.2458333 9.37916667,16.6291667 L5.54583333,20.4625 C5.35416667,20.6541667 5.11458333,20.75 4.875,20.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
												<path d="M2,11.8650466 L2,6 C2,4.34314575 3.34314575,3 5,3 L19,3 C20.6568542,3 22,4.34314575 22,6 L22,15 C22,15.0032706 21.9999948,15.0065399 21.9999843,15.009808 L22.0249378,15 L22.0249378,19.5857864 C22.0249378,20.1380712 21.5772226,20.5857864 21.0249378,20.5857864 C20.7597213,20.5857864 20.5053674,20.4804296 20.317831,20.2928932 L18.0249378,18 L12.9835977,18 C12.7263047,14.0909841 9.47412135,11 5.5,11 C4.23590829,11 3.04485894,11.3127315 2,11.8650466 Z M6,7 C5.44771525,7 5,7.44771525 5,8 C5,8.55228475 5.44771525,9 6,9 L15,9 C15.5522847,9 16,8.55228475 16,8 C16,7.44771525 15.5522847,7 15,7 L6,7 Z" fill="#000000"></path>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<div class="text-inverse-success font-weight-bolder font-size-h5 mb-2 mt-5">Total Blogs (<?php echo e(count(Con::blogs())); ?>)</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Stats Widget 15-->
						</div>

			<div class="col-md-6">
				<div class="card card-custom card-stretch gutter-b">
					<div class="card-header border-0 pt-7">
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label font-weight-bold font-size-h4 text-dark-75">All Orders</span>
						</h3>
						<div class="card-toolbar">
							<ul class="nav nav-pills nav-pills-sm nav-dark">
								<li class="nav-item ml-0">
									<a class="nav-link py-2 px-4 font-weight-bolder font-size-sm " data-toggle="tab" href="#kt_tab_pane_1_1">Completed</a>
								</li>
								<li class="nav-item">
									<a class="nav-link py-2 px-4 font-weight-bolder font-size-sm active" data-toggle="tab" href="#kt_tab_pane_2_2">Pending</a>
								</li>
							</ul>
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body pt-1">
						<div class="tab-content mt-5" id="myTabLIist18">
							<div class="tab-pane fade " id="kt_tab_pane_1_1" role="tabpanel" aria-labelledby="kt_tab_pane_1_1">
								<div class="form">
									<?php $__currentLoopData = Con::orders()->where('status','completed'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php 
										$products = unserialize($item->items);
									?>
									<div class="table-responsive">
										<table class="table table-borderless table-vertical-center">
											<thead>
												<tr>
													<th class="p-0 w-50px"></th>
													<th class="p-0 min-w-200px"></th>
													<th class="p-0 min-w-100px"></th>
													<th class="p-0 min-w-40px"></th>
												</tr>
											</thead>
											<tbody>
											<tr>
												<th class="pl-0 py-5">
													<div class="symbol symbol-50 symbol-light mr-2">
														<span class="symbol-label">
															<img src="<?php echo e(asset($item->user->image)); ?>" class="h-50 align-self-center" alt="">
														</span>
													</div>
												</th>
												<td class="py-6 pl-0">
													<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg"><?php echo e($item->user->name); ?></a>
													<span class="text-muted font-weight-bold d-block">Products <?php echo e(count($products)); ?></span>
												</td>
												<td class="text-right">
													<span class="text-muted font-weight-bold"><?php echo e($item->date->format("d-m-Y")); ?></span>
												</td>

											    <td class="text-right pr-0">
											<a href="<?php echo e(route("admin.orders.edit",$item->id)); ?>" class="btn btn-icon btn-light btn-sm">
												<span class="svg-icon svg-icon-md svg-icon-success">
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24"></polygon>
															<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
															<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
														</g>
													</svg>
													<!--end::Svg Icon-->
												</span>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>		
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
				
				
				<div class="tab-pane fade active show" id="kt_tab_pane_2_2" role="tabpanel" aria-labelledby="kt_tab_pane_2_2">
					<div class="form">
						<?php $__currentLoopData = Con::orders()->where('status','pending'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php 
							$products = unserialize($item->items);
						?>
						<div class="table-responsive">
							<table class="table table-borderless table-vertical-center">
								<thead>
									<tr>
										<th class="p-0 w-50px"></th>
										<th class="p-0 min-w-200px"></th>
										<th class="p-0 min-w-100px"></th>
										<th class="p-0 min-w-40px"></th>
									</tr>
								</thead>
								<tbody>
							<tr>
								<th class="pl-0 py-5">
									<div class="symbol symbol-50 symbol-light mr-2">
										<span class="symbol-label">
											<img src="<?php echo e(asset($item->user->image)); ?>" class="h-50 align-self-center" alt="">
										</span>
									</div>
								</th>
								<td class="py-6 pl-0">
									<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg"><?php echo e($item->user->name); ?></a>
									<span class="text-muted font-weight-bold d-block">Products <?php echo e(count($products)); ?></span>
								</td>
								<td class="text-right">
									<span class="text-muted font-weight-bold"><?php echo e($item->date->format("d-m-Y")); ?></span>
								</td>

								<td class="text-right pr-0">
											<a href="<?php echo e(route("admin.orders.status",["id" => $item->id,"status" => "completed"])); ?>" class="btn btn-icon btn-light btn-sm">
												<span class="svg-icon svg-icon-md svg-icon-success">
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24"/>
												<path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
												</g>
											</svg>
										</span>
									</a>
									<a href="#" class="btn btn-icon btn-light btn-sm">
										<span class="svg-icon svg-icon-md svg-icon-success">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<polygon points="0 0 24 0 24 24 0 24"></polygon>
													<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
													<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
												</g>
											</svg>
										</span>
									</a>
								</td>
							</tr>
									</tbody>
								</table>
							</div>		
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>


						<div class="col-md-6">
							<div class="card card-custom card-stretch gutter-b">
								<div class="card-header border-0 pt-7">
									<h3 class="card-title align-items-start flex-column">
										<span class="card-label font-weight-bold font-size-h4 text-dark-75">All Comments</span>
									</h3>
									<div class="card-toolbar">
										<ul class="nav nav-pills nav-pills-sm nav-dark">
											<li class="nav-item ml-0">
												<a class="nav-link py-2 px-4 font-weight-bolder font-size-sm " data-toggle="tab" href="#kt_tab_pane_1_14">Approved</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-2 px-4 font-weight-bolder font-size-sm active" data-toggle="tab" href="#kt_tab_pane_2_23">Pending</a>
											</li>
										</ul>
									</div>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-1">
									<div class="tab-content mt-5" id="myTabLIist18">
										<div class="tab-pane fade " id="kt_tab_pane_1_14" role="tabpanel" aria-labelledby="kt_tab_pane_1_14">
											<div class="form">
												<?php $__currentLoopData = Con::reviews()->where('status',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
												<?php 
													
												?>
												<div class="table-responsive">
													<table class="table table-borderless table-vertical-center">
														<thead>
															<tr>
																<th class="p-0 w-50px"></th>
																<th class="p-0 min-w-200px"></th>
																<th class="p-0 min-w-100px"></th>
																<th class="p-0 min-w-40px"></th>
															</tr>
														</thead>
														<tbody>
														<tr>
															<th class="pl-0 py-5">
																<div class="symbol symbol-50 symbol-light mr-2">
																	<span class="symbol-label">
																		<img src="<?php echo e(asset($item->user->image)); ?>" class="h-50 align-self-center" alt="">
																	</span>
																</div>
															</th>
															<td class="py-6 pl-0">
																<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg"><?php echo e($item->user->name); ?></a>
																<span class="text-muted font-weight-bold d-block"><?php echo e($item->body); ?></span>
															</td>
															<td class="text-right">
																<span class="text-muted font-weight-bold"><?php echo e($item->created_at->format("d-m-Y")); ?></span>
															</td>
			
															<td class="text-right pr-0">
														<a href="<?php echo e(route("admin.blogs.edit",$item->blog_id)); ?>" class="btn btn-icon btn-light btn-sm">
															<span class="svg-icon svg-icon-md svg-icon-success">
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
																		<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
														</a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>		
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</div>
							</div>
							
							
							<div class="tab-pane fade active show" id="kt_tab_pane_2_23" role="tabpanel" aria-labelledby="kt_tab_pane_2_23">
								<div class="form">
									<?php $__currentLoopData = Con::reviews()->where('status',0); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									
									<div class="table-responsive">
										<table class="table table-borderless table-vertical-center">
											<thead>
												<tr>
													<th class="p-0 w-50px"></th>
													<th class="p-0 min-w-200px"></th>
													<th class="p-0 min-w-100px"></th>
													<th class="p-0 min-w-40px"></th>
												</tr>
											</thead>
											<tbody>
										<tr>
											<th class="pl-0 py-5">
												<div class="symbol symbol-50 symbol-light mr-2">
													<span class="symbol-label">
														<img src="<?php echo e(asset($item->user->image)); ?>" class="h-50 align-self-center" alt="">
													</span>
												</div>
											</th>
											<td class="py-6 pl-0">
												<a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg"><?php echo e($item->user->name); ?></a>
												<span class="text-muted font-weight-bold d-block"><?php echo e($item->body); ?></span>
											</td>
											<td class="text-right">
												<span class="text-muted font-weight-bold"><?php echo e($item->created_at->format("d-m-Y")); ?></span>
											</td>
			
											<td class="text-right pr-0">
														<a href="<?php echo e(route("admin.reviews.status",["id" => $item->id,"status" => 1])); ?>" class="btn btn-icon btn-light btn-sm">
															<span class="svg-icon svg-icon-md svg-icon-success">
															<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<polygon points="0 0 24 0 24 24 0 24"/>
															<path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
															</g>
														</svg>
													</span>
												</a>
												<a href="<?php echo e(route("admin.blogs.edit",$item->blog_id)); ?>" class="btn btn-icon btn-light btn-sm">
													<span class="svg-icon svg-icon-md svg-icon-success">
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<polygon points="0 0 24 0 24 24 0 24"></polygon>
																<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
																<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
															</g>
														</svg>
													</span>
												</a>
											</td>
										</tr>
												</tbody>
											</table>
										</div>		
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

					</div>    
			    </div>
		</div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>


      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mukalama/public_html/resources/views/admin/Home.blade.php ENDPATH**/ ?>