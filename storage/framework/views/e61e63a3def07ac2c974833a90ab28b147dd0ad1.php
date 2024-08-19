<?php $__env->startSection('css'); ?>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7 justify-content-center"> 
		<div class="page-leftheader text-center">
			<h4 class="page-title mb-0"><?php echo e(__('New Subscription Plan')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa-solid fa-sack-dollar mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.finance.dashboard')); ?>"> <?php echo e(__('Finance Management')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('admin.finance.plans')); ?>"> <?php echo e(__('Subscription Plans')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('New Subscription Plan')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>						
	<div class="row justify-content-center">
		<div class="col-lg-10 col-md-12 col-sm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Create New Subscription Plan')); ?></h3>
				</div>
				<div class="card-body pt-5">									
					<form action="<?php echo e(route('admin.finance.plan.store')); ?>" method="POST" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>

						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-12">						
								<div class="input-box">	
									<h6><?php echo e(__('Plan Status')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="plan-status" name="plan-status" class="form-select" data-placeholder="<?php echo e(__('Select Plan Status')); ?>:">			
										<option value="active" selected><?php echo e(__('Active')); ?></option>
										<option value="hidden"><?php echo e(__('Hidden')); ?></option>
										<option value="closed"><?php echo e(__('Closed')); ?></option>
									</select>
									<?php $__errorArgs = ['plan-status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('plan-status')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>	
								</div>						
							</div>							
							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Plan Name')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="plan-name" name="plan-name" value="<?php echo e(old('plan-name')); ?>" required>
									</div> 
									<?php $__errorArgs = ['plan-name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('plan-name')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Price')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="cost" name="cost" value="<?php echo e(old('cost')); ?>" required>
									</div> 
									<?php $__errorArgs = ['cost'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('cost')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Currency')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="currency" name="currency" class="form-select" data-placeholder="<?php echo e(__('Select Currency')); ?>:">			
										<?php $__currentLoopData = config('currencies.all'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($key); ?>" <?php if(config('payment.default_system_currency') == $key): ?> selected <?php endif; ?>><?php echo e($value['name']); ?> - <?php echo e($key); ?> (<?php echo $value['symbol']; ?>)</option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
									</select>
									<?php $__errorArgs = ['currency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('currency')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Payment Frequence')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="frequency" name="frequency" class="form-select" data-placeholder="<?php echo e(__('Select Payment Frequency')); ?>:" data-callback="duration_select">		
										<option value="monthly" selected><?php echo e(__('Monthly')); ?></option>
										<option value="yearly"><?php echo e(__('Yearly')); ?></option>
										<option value="lifetime"><?php echo e(__('Lifetime')); ?></option>
									</select>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Featured Plan')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<select id="featured" name="featured" class="form-select" data-placeholder="<?php echo e(__('Select if Plan is Featured')); ?>:">		
										<option value=1><?php echo e(__('Yes')); ?></option>
										<option value=0 selected><?php echo e(__('No')); ?></option>
									</select>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Free Plan')); ?></h6>
									<div class="form-group">							    
										<select id="free-plan" name="free-plan" class="form-select" data-placeholder="<?php echo e(__('Make this plan a Free Plan?')); ?>:">			
											<option value=1><?php echo e(('Yes')); ?></option>
											<option value=0 selected><?php echo e(('No')); ?></option>
										</select>
									</div> 
									<?php $__errorArgs = ['free-plan'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('free-plan')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 						
							</div>

							<div class="col-lg-6 col-md-6 col-sm-12">							
								<div class="input-box">								
									<h6><?php echo e(__('Free Plan Days')); ?></h6>
									<div class="form-group">							    
										<input type="number" class="form-control" id="days" name="days" min=0 value="<?php echo e(old('days')); ?>">
									</div> 
									<?php $__errorArgs = ['days'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('days')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 						
							</div>
						</div>

						<div class="card special-shadow border-0" id="payment-gateways">
							<div class="card-body">
								<h6 class="fs-12 font-weight-bold mb-5"><i class="fa fa-bank text-info fs-14 mr-1 fw-2"></i><?php echo e(__('Payment Gateways Plan IDs')); ?></h6>

								<div class="row">								
									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('PayPal Plan ID')); ?> <span class="text-danger">(<?php echo e(__('Required for Paypal')); ?>) <i class="ml-2 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('You have to get Paypal Plan ID in your Paypal account. Refer to the documentation if you need help with creating one')); ?>."></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control" id="paypal_gateway_plan_id" name="paypal_gateway_plan_id" value="<?php echo e(old('paypal_gateway_plan_id')); ?>">
											</div> 
											<?php $__errorArgs = ['paypal_gateway_plan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('paypal_gateway_plan_id')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Stripe Product ID')); ?> <span class="text-danger">(<?php echo e(__('Required for Stripe')); ?>) <i class="ml-2 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('You have to get Stripe Product ID in your Stripe account. Refer to the documentation if you need help with creating one')); ?>."></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control" id="stripe_gateway_plan_id" name="stripe_gateway_plan_id" value="<?php echo e(old('stripe_gateway_plan_id')); ?>">
											</div> 
											<?php $__errorArgs = ['stripe_gateway_plan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('stripe_gateway_plan_id')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Paystack Plan Code')); ?> <span class="text-danger">(<?php echo e(__('Required for Paystack')); ?>) <i class="ml-2 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('You have to get Paystack Plan ID in your Paystack account. Refer to the documentation if you need help with creating one')); ?>."></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control" id="paystack_gateway_plan_id" name="paystack_gateway_plan_id" value="<?php echo e(old('paystack_gateway_plan_id')); ?>">
											</div> 
											<?php $__errorArgs = ['paystack_gateway_plan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('paystack_gateway_plan_id')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Razorpay Plan ID')); ?> <span class="text-danger">(<?php echo e(__('Required for Razorpay')); ?>) <i class="ml-2 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('You have to get Razorpay Plan ID in your Razorpay account. Refer to the documentation if you need help with creating one')); ?>."></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control" id="razorpay_gateway_plan_id" name="razorpay_gateway_plan_id" value="<?php echo e(old('razorpay_gateway_plan_id')); ?>">
											</div> 
											<?php $__errorArgs = ['razorpay_gateway_plan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('razorpay_gateway_plan_id')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Flutterwave Plan ID')); ?> <span class="text-danger">(<?php echo e(__('Required for Flutterwave')); ?>) <i class="ml-2 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('You have to get Flutterwave Plan ID in your Flutterwave account. Refer to the documentation if you need help with creating one')); ?>."></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control" id="flutterwave_gateway_plan_id" name="flutterwave_gateway_plan_id" value="<?php echo e(old('flutterwave_gateway_plan_id')); ?>">
											</div> 
											<?php $__errorArgs = ['flutterwave_gateway_plan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('flutterwave_gateway_plan_id')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Paddle Plan ID')); ?> <span class="text-danger">(<?php echo e(__('Required for Paddle')); ?>) <i class="ml-2 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('You have to get Paddle Plan ID in your Paddle account. Refer to the documentation if you need help with creating one')); ?>."></i></span></h6>
											<div class="form-group">							    
												<input type="text" class="form-control" id="paddle_gateway_plan_id" name="paddle_gateway_plan_id" value="<?php echo e(old('paddle_gateway_plan_id')); ?>">
											</div> 
											<?php $__errorArgs = ['paddle_gateway_plan_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('paddle_gateway_plan_id')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>
								</div>
							</div>						
						</div>

						<div class="card mt-6 mb-7 special-shadow border-0">
							<div class="card-body">
								<h6 class="fs-12 font-weight-bold mb-5"><i class="fa-solid fa-box-circle-check text-info fs-14 mr-1 fw-2"></i><?php echo e(__('Included Features')); ?></h6>

								<div class="row">
									<div class="col-lg-12 col-md-12 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Words included in the Plan')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span> <span class="text-muted ml-3">(<?php echo e(__('Renewed Monthly')); ?>)</span></h6>
											<div class="form-group">							    
												<input type="number" class="form-control" id="words" name="words" value="<?php echo e(old('words')); ?>" required>
												<span class="text-muted fs-10"><?php echo e(__('Each text generation task counts output words created')); ?>. <?php echo e(__('Set as -1 for unlimited words')); ?>.</span>
											</div> 
											<?php $__errorArgs = ['words'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('words')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Characters included in the Plan')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span> <span class="text-muted ml-3">(<?php echo e(__('Renewed Monthly')); ?>)</span></h6>
											<div class="form-group">							    
												<input type="number" class="form-control" id="characters" name="characters" value="<?php echo e(old('characters')); ?>" required>
												<span class="text-muted fs-10"><?php echo e(__('For AI Voiceover feature')); ?>. <?php echo e(__('Set as -1 for unlimited characters')); ?>.</span>
											</div> 
											<?php $__errorArgs = ['characters'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('characters')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-12 col-md-12 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Minutes included in the Plan')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span> <span class="text-muted ml-3">(<?php echo e(__('Renewed Monthly')); ?>)</span></h6>
											<div class="form-group">							    
												<input type="number" class="form-control" id="minutes" name="minutes" value="<?php echo e(old('minutes')); ?>" required>
												<span class="text-muted fs-10"><?php echo e(__('For AI Speech to Text feature')); ?>. <?php echo e(__('Set as -1 for unlimited minutes')); ?>.</span>
											</div> 
											<?php $__errorArgs = ['minutes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('minutes')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Total Dalle Images Included in the Plan')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span> <span class="text-muted ml-3">(<?php echo e(__('Renewed Monthly')); ?>)</span></h6>
											<div class="form-group">							    
												<input type="number" class="form-control" id="dalle-images" name="dalle-images" value="<?php echo e(old('dalle-images')); ?>">
												<span class="text-muted fs-10"><?php echo e(__('Valid for all image sizes')); ?>. <?php echo e(__('Set as -1 for unlimited images')); ?>.</span>
											</div> 
											<?php $__errorArgs = ['dalle-images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('dalle-images')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Total Stable Diffusion Images Included in the Plan')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span> <span class="text-muted ml-3">(<?php echo e(__('Renewed Monthly')); ?>)</span></h6>
											<div class="form-group">							    
												<input type="number" class="form-control" id="sd-images" name="sd-images" value="<?php echo e(old('sd-images')); ?>">
												<span class="text-muted fs-10"><?php echo e(__('Valid for all image sizes')); ?>. <?php echo e(__('Set as -1 for unlimited images')); ?>.</span>
											</div> 
											<?php $__errorArgs = ['sd-images'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('sd-images')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('OpenAI Model for All Template Results')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<select id="default-model-user" name="model" class="form-select" data-placeholder="<?php echo e(__('Select OpenAI Model Type')); ?>:">								
												<option value="gpt-3.5-turbo"><?php echo e(__('GPT 3.5 Turbo')); ?></option>
												<option value="gpt-3.5-turbo-16k"><?php echo e(__('GPT 3.5 Turbo')); ?> (<?php echo e(__('16K')); ?>)</option>
												<option value="gpt-4"><?php echo e(__('GPT 4')); ?> (<?php echo e(__('8K')); ?>)</option>
												<option value="gpt-4-32k"><?php echo e(__('GPT 4')); ?> (<?php echo e(__('32K')); ?>)</option>
												<option value="gpt-4-1106-preview"><?php echo e(__('GPT 4 Turbo')); ?> (<?php echo e(__('Preview')); ?>)</option>
												<option value="gpt-4-0125-preview"><?php echo e(__('GPT 4 Turbo')); ?> (<?php echo e(__('gpt-4-0125-preview')); ?>)</option>
												<option value="gpt-4-vision-preview"><?php echo e(__('GPT 4 Turbo with Vision')); ?> (<?php echo e(__('Preview')); ?>)</option>
												<?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($model->model); ?>"><?php echo e($model->description); ?> (Fine Tune Model)</option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('OpenAI Model for All AI Chats')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<select id="default-model-chat-user" name="chat-model" class="form-select" data-placeholder="<?php echo e(__('Select OpenAI Model Type')); ?>:">		
												<option value="gpt-3.5-turbo" selected><?php echo e(__('GPT 3.5 Turbo')); ?></option>
												<option value="gpt-3.5-turbo-16k"><?php echo e(__('GPT 3.5 Turbo')); ?> (<?php echo e(__('16K')); ?>)</option>
												<option value="gpt-4"><?php echo e(__('GPT 4')); ?> (<?php echo e(__('8K')); ?>)</option>
												<option value="gpt-4-1106-preview"><?php echo e(__('GPT 4 Turbo')); ?> (<?php echo e(__('Preview')); ?>)</option>
												<option value="gpt-4-0125-preview"><?php echo e(__('GPT 4 Turbo')); ?> (<?php echo e(__('gpt-4-0125-preview')); ?>)</option>
												<option value="gpt-4-vision-preview"><?php echo e(__('GPT 4 Turbo with Vision')); ?> (<?php echo e(__('Preview')); ?>)</option>
												<?php $__currentLoopData = $models; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
													<option value="<?php echo e($model->model); ?>"><?php echo e($model->description); ?> (Fine Tune Model)</option>
												<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Template Categories Access')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<select id="templates" name="templates" class="form-select" data-placeholder="<?php echo e(__('Set Templates Access')); ?>">
												<option value="all" selected><?php echo e(__('All Templates')); ?></option>																																										
												<option value="free"><?php echo e(__('Only Free Templates')); ?></option>																																										
												<option value="standard"> <?php echo e(__('Up to Standard Templates')); ?></option>		
												<option value="professional"> <?php echo e(__('Up to Professional Templates')); ?></option>																																																												
												<option value="premium"> <?php echo e(__('Up to Premium Templates')); ?> (<?php echo e(__('All')); ?>)</option>																																																												
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Chat Categories Access')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<select id="chats" name="chats" class="form-select" data-placeholder="<?php echo e(__('Set AI Chat Type Access')); ?>">
												<option value="all"><?php echo e(__('All Chat Types')); ?></option>
												<option value="free"><?php echo e(__('Only Free Chat Types')); ?></option>																																											
												<option value="standard"> <?php echo e(__('Up to Standard Chat Types')); ?></option>
												<option value="professional"> <?php echo e(__('Up to Professional Chat Types')); ?></option>
												<option value="premium"> <?php echo e(__('Upto Premium Chat Types')); ?> (<?php echo e(__('All')); ?>)</option>																																																														
											</select>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Max Allowed Words Limit for All Text Results')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('OpenAI will treat this limit as a stop marker. i.e. If you set it to 500, openai will try to stop as it will create a text with 500 tokens, but it can also ignore it on some cases')); ?>."></i></h6>
											<div class="form-group">							    
												<input type="number" class="form-control" id="tokens" name="tokens" value="<?php echo e(old('tokens')); ?>" required>
											</div> 
											<?php $__errorArgs = ['tokens'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('tokens')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">							
										<div class="input-box">								
											<h6><?php echo e(__('Number of Team Members')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('Define how many team members a user is allowed to create under this subscription plan')); ?>."></i></h6>
											<div class="form-group">							    
												<input type="number" class="form-control" id="team-members" name="team-members" min=0 value="<?php echo e(old('team-members')); ?>" required>
											</div> 
											<?php $__errorArgs = ['team-members'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
												<p class="text-danger"><?php echo e($errors->first('team-members')); ?></p>
											<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
										</div> 						
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Image Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="image-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Voiceover Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="voiceover-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Speech to Text Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="whisper-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Chat Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="chat-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Code Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="code-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Personal OpenAI API Usage Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="personal-openai-api" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>
		
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Personal Stable Diffusion API Usage Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="personal-sd-api" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Article Wizard Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="wizard-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Vision Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="vision-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Chat Image Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="chat-image-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI File Chat Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="file-chat-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Internet Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="internet-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Web Chat Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="chat-web-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Smart Editor Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="smart-editor-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Rewriter Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="rewriter-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Image to Video Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="video-image-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Voice Clone Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="voice-clone-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Sound Studio Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="sound-studio-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Plagiarism Checker Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="plagiarism-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('AI Content Detector Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="detector-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Personal Custom AI Chat Bot Creation Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="personal-chat-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Personal Custom Template Creation Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="personal-template-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="input-box">
											<h6><?php echo e(__('Brand Voice Feature')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
											<div class="form-group mt-3">
												<label class="custom-switch">
													<input type="checkbox" name="brand-voice-feature" class="custom-switch-input">
													<span class="custom-switch-indicator"></span>
												</label>
											</div>
										</div>
									</div>

									<div class="row">

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="input-box">
												<h6><?php echo e(__('OpenAI Image Engine')); ?> <i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('Make sure that AI Image Feature is Enabled first and also that this AI Image vendor is enabled in your Davinci Settings page')); ?>."></i></h6>
												<select id="dalle-image-engine" name="dalle-image-engine" class="form-select">
													<option value='none' selected><?php echo e(__('Not Allowed')); ?></option>
													<option value='dall-e-2'><?php echo e(__('Dalle 2')); ?></option>
													<option value='dall-e-3'> <?php echo e(__('Dalle 3')); ?></option>																															
													<option value='dall-e-3-hd'> <?php echo e(__('Dalle 3 HD')); ?></option>																																																															
												</select>
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="input-box">
												<h6><?php echo e(__('Stable Diffusion Image Engine')); ?> <i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('Make sure that AI Image Feature is Enabled first and also that this AI Image vendor is enabled in your Davinci Settings page')); ?>."></i></h6>
												<select id="sd-image-engine" name="sd-image-engine" class="form-select">
													<option value='none' selected><?php echo e(__('Not Allowed')); ?></option>	
													<option value='stable-diffusion-v1-6'><?php echo e(__('Stable Diffusion v1.6')); ?></option>																															
													<option value='stable-diffusion-xl-beta-v2-2-2'> <?php echo e(__('Stable Diffusion v2.2.2-XL Beta')); ?></option>																															
													<option value='stable-diffusion-xl-1024-v0-9'> <?php echo e(__('SDXL v0.9')); ?></option>																															
													<option value='stable-diffusion-xl-1024-v1-0'> <?php echo e(__('SDXL v1.0')); ?></option>																																																														
												</select>
											</div>
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">							
											<div class="input-box">								
												<h6><?php echo e(__('Maximum Allowed CSV File Size')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('Set the maximum CSV file size limit that subscriber is allowed to process')); ?>."></i></h6>
												<div class="form-group">							    
													<input type="number" class="form-control" min="0.1" step="0.1" id="chat-csv-file-size" name="chat-csv-file-size" value="<?php echo e(old('chat-csv-file-size')); ?>">
													<span class="text-muted fs-10"><?php echo e(__('Maximum Size limit is in Megabytes (MB)')); ?>.</span>
												</div> 
												<?php $__errorArgs = ['chat-csv-file-size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('chat-csv-file-size')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 						
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">							
											<div class="input-box">								
												<h6><?php echo e(__('Maximum Allowed PDF File Size')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('Set the maximum PDF file size limit that subscriber is allowed to process')); ?>."></i></h6>
												<div class="form-group">							    
													<input type="number" class="form-control" min="0.1" step="0.1" id="chat-pdf-file-size" name="chat-pdf-file-size" value="<?php echo e(old('chat-pdf-file-size')); ?>">
													<span class="text-muted fs-10"><?php echo e(__('Maximum Size limit is in Megabytes (MB)')); ?>.</span>
												</div> 
												<?php $__errorArgs = ['chat-pdf-file-size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('chat-pdf-file-size')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 						
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">							
											<div class="input-box">								
												<h6><?php echo e(__('Maximum Allowed Word File Size')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('Set the maximum Word file size limit that subscriber is allowed to process')); ?>."></i></h6>
												<div class="form-group">							    
													<input type="number" class="form-control" min="0.1" step="0.1" id="chat-word-file-size" name="chat-word-file-size" value="<?php echo e(old('chat-word-file-size')); ?>">
													<span class="text-muted fs-10"><?php echo e(__('Maximum Size limit is in Megabytes (MB)')); ?>.</span>
												</div> 
												<?php $__errorArgs = ['chat-word-file-size'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('chat-word-file-size')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 						
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">							
											<div class="input-box">								
												<h6><?php echo e(__('Maximum Allowed Created Voice Clones')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('Set the number of voice clones that user can create')); ?>."></i></h6>
												<div class="form-group">							    
													<input type="number" class="form-control" min="0" id="voice_clone_number" name="voice_clone_number" value="<?php echo e(old('voice_clone_number')); ?>">
												</div> 
												<?php $__errorArgs = ['voice_clone_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('voice_clone_number')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 						
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">							
											<div class="input-box">								
												<h6><?php echo e(__('Total Scan tasks for AI Plagiarism Checker')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
												<div class="form-group">							    
													<input type="number" class="form-control" min="0" id="plagiarism-pages" name="plagiarism-pages" value="<?php echo e(old('plagiarism-pages')); ?>">
												</div> 
												<?php $__errorArgs = ['plagiarism-pages'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('plagiarism-pages')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 						
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">							
											<div class="input-box">								
												<h6><?php echo e(__('Total Scan tasks for AI Content Decoder')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
												<div class="form-group">							    
													<input type="number" class="form-control" min="0" id="detector-pages" name="detector-pages" value="<?php echo e(old('detector-pages')); ?>">
												</div> 
												<?php $__errorArgs = ['detector-pages'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('detector-pages')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 						
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">							
											<div class="input-box">								
												<h6><?php echo e(__('Image/Video/Voiceover Results Storage Period')); ?> <span class="text-muted">(<?php echo e(__('In Days')); ?>)</span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('After set days file results will be deleted via CRON task')); ?>."></i></h6>
												<div class="form-group">							    
													<input type="number" class="form-control" id="file-result-duration" name="file-result-duration" value="<?php echo e(old('file-result-duration')); ?>">
													<span class="text-muted fs-10"><?php echo e(__('Set as -1 for unlimited storage duration')); ?>.</span>
												</div> 
												<?php $__errorArgs = ['file-result-duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('file-result-duration')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 						
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">							
											<div class="input-box">								
												<h6><?php echo e(__('Generated Text Content Results Storage Period')); ?> <span class="text-muted">(<?php echo e(__('In Days')); ?>)</span><i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('After set days results will be deleted from database via CRON task')); ?>."></i></h6>
												<div class="form-group">							    
													<input type="number" class="form-control" id="document-result-duration" name="document-result-duration" value="<?php echo e(old('document-result-duration')); ?>">
													<span class="text-muted fs-10"><?php echo e(__('Set as -1 for unlimited storage duration')); ?>.</span>
												</div> 
												<?php $__errorArgs = ['document-result-duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
													<p class="text-danger"><?php echo e($errors->first('document-result-duration')); ?></p>
												<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
											</div> 						
										</div>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="input-box">
												<h6><?php echo e(__('Supported AI Voiceover Vendors')); ?> <i class="ml-3 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('Only listed TTS voices of the listed vendors will be available for the subscriber. Make sure to include respective vendor API keys in the Davinci settings page.')); ?>."></i></h6>
												<select class="form-select" id="voiceover-vendors" name="voiceover_vendors[]" data-placeholder="<?php echo e(__('Choose Voiceover vendors')); ?>" multiple>
													<option value='aws'><?php echo e(__('AWS')); ?></option>																															
													<option value='azure'> <?php echo e(__('Azure')); ?></option>																															
													<option value='gcp'> <?php echo e(__('GCP')); ?></option>																															
													<option value='openai'> <?php echo e(__('OpenAI')); ?></option>																															
													<option value='elevenlabs'> <?php echo e(__('ElevenLabs')); ?></option>																																																														
												</select>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>

						<div class="row mt-6">
							<div class="col-12">
								<div class="input-box">	
									<h6><?php echo e(__('Primary Heading')); ?> <span class="text-muted">(<?php echo e(__('Optional')); ?>)</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control" id="primary-heading" name="primary-heading" value="<?php echo e(old('primary-heading')); ?>">
									</div>
								</div>
							</div>
						</div>

						<div class="row mt-6">
							<div class="col-lg-12 col-md-12 col-sm-12">	
								<div class="input-box">	
									<h6><?php echo e(__('Plan Features')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span> <span class="text-danger ml-3">(<?php echo e(__('Comma Seperated')); ?>)</span></h6>							
									<textarea class="form-control" name="features" rows="10"><?php echo e(old('features')); ?></textarea>
									<?php $__errorArgs = ['features'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('features')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>	
								</div>											
							</div>
						</div>
						

						<!-- ACTION BUTTON -->
						<div class="border-0 text-right mb-2 mt-1">
							<a href="<?php echo e(route('admin.finance.plans')); ?>" class="btn btn-cancel mr-2"><?php echo e(__('Cancel')); ?></a>
							<button type="submit" class="btn btn-primary"><?php echo e(__('Create')); ?></button>							
						</div>				

					</form>					
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>
	<script>
		$("#voiceover-vendors").select2({
			theme: "bootstrap-5",
			containerCssClass: "select2--small",
			dropdownCssClass: "select2--small",
		});

		 function duration_select(value) {
			if (value == 'lifetime') {
				$('#payment-gateways').css('display', 'none');
			} else {
				$('#payment-gateways').css('display', 'block');
			}
		 }
	</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u960948325/domains/feastly.co/public_html/resources/views/admin/finance/plans/create.blade.php ENDPATH**/ ?>