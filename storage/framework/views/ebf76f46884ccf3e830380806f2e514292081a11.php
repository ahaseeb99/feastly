<?php $__env->startSection('css'); ?>
	<!-- Data Table CSS -->
	<link href="<?php echo e(URL::asset('plugins/datatable/datatables.min.css')); ?>" rel="stylesheet" />
	<!-- Sweet Alert CSS -->
	<link href="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>
<?php $__env->startSection('page-header'); ?>
<!-- PAGE HEADER -->
<div class="page-header mt-5-7 justify-content-center">
	<div class="page-leftheader text-center">
		<h4 class="page-title mb-0"><?php echo e(__('Custom Chat Assistant')); ?></h4>
		<ol class="breadcrumb mb-2">
			<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-microchip-ai mr-2 fs-12"></i><?php echo e(__('User')); ?></a></li>
			<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(route('user.chat')); ?>"> <?php echo e(__('AI Chats')); ?></a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="#"> <?php echo e(__('Custom Chat Assistant')); ?></a></li>
		</ol>
	</div>
</div>
<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>	
	<div class="row justify-content-center">
		<div class="col-lg-9 col-md-12 col-sm-12">
			<div class="card border-0">	
				<div class="card-header">
					<h3 class="card-title"><i class="fa-solid fa-microchip-ai mr-2 text-primary"></i><?php echo e(__('Custom Chat Generator')); ?></h3>
					<a href="<?php echo e(route('user.chat')); ?>" class="btn btn-cancel ripple" style="margin-left: auto"><?php echo e(__('Back to AI Chats')); ?></a>
				</div>			
				<div class="card-body pt-5 pb-0 pl-6 pr-6">
					<form class="w-100" action="<?php echo e(route('user.chat.custom.store')); ?>" method="POST" enctype="multipart/form-data">
						<?php echo csrf_field(); ?>

						<div class="row justify-content-center">					  
							<div class="col-sm-12 col-md-12">
							  	<div class="input-box mb-4">
									<label class="form-label fs-12 font-weight-semibold"><?php echo e(__('Select Chat Assistant Avatar')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></label>
									<div class="input-group file-browser" id="create-new-chat">									
										<input type="text" class="form-control border-right-0 browse-file" placeholder="<?php echo e(__('Minimum 60px by 60px image')); ?>" readonly>
										<label class="input-group-btn">
											<span class="btn btn-primary special-btn">
											<?php echo e(__('Browse')); ?> <input type="file" name="logo" style="display: none;" accept=".jpg, .png, .webp">
											</span>
										</label>
									</div>
									<?php $__errorArgs = ['logo'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('logo')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
							  	</div>
							</div>				
						</div>
						
						<div class="col-md-12 col-sm-12 mt-2 mb-4 pl-0">
							<div class="form-group">
							  	<label class="custom-switch">
									<input type="checkbox" name="activate" class="custom-switch-input" checked>
									<span class="custom-switch-indicator"></span>
									<span class="custom-switch-description"><?php echo e(__('Activate Chat Assistant')); ?></span>
							  	</label>
							</div>
						</div>
						  
						<div class="row">
							<div class="col-md-6 col-sm-12">													
							  	<div class="input-box">								
									<h6 class="fs-12"><?php echo e(__('Chat Assistant Name')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
										<?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('name')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div> 
							  	</div> 
							</div>

							<div class="col-md-6 col-sm-12">													
								<div class="input-box">								
								  <h6 class="fs-12"><?php echo e(__('Chat Assistant Role Description')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
								  <div class="form-group">							    
									  <input type="text" class="form-control <?php $__errorArgs = ['sub_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="sub_name" name="sub_name" value="<?php echo e(old('sub_name')); ?>" placeholder="<?php echo e(__('Finance Expert')); ?>">
									  <?php $__errorArgs = ['sub_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										  <p class="text-danger"><?php echo e($errors->first('sub_name')); ?></p>
									  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								  </div> 
								</div> 
						  	</div>
						
							<div class="col-md-6 col-sm-12">													
							  	<div class="input-box">								
									<h6 class="fs-12"><?php echo e(__('Chat Assistant Welcome Message')); ?> <span class="text-muted">(<?php echo e(__('Optional')); ?>)</span></h6>
									<div class="form-group">							    
										<input type="text" class="form-control <?php $__errorArgs = ['character'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="character" name="character" placeholder="<?php echo e(__('Hey there! Let me help you with your finance questions today...')); ?>" value="<?php echo e(old('character')); ?>">
										<?php $__errorArgs = ['character'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
											<p class="text-danger"><?php echo e($errors->first('character')); ?></p>
										<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
									</div> 
							  	</div> 
							</div>

							<div class="col-md-6 col-sm-12">
								<div class="input-box">
								  	<h6 class="fs-12"><?php echo e(__('Chat Assistant Group')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
								  	<select id="group" name="group" class="form-control">
										<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<option value="<?php echo e($category->code); ?>"><?php echo e(__($category->name)); ?></option>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>																																																													
								  	</select>
								</div>
							</div>
  
							<div class="col-sm-12">								
							  	<div class="input-box">								
								<h6 class="fs-12 mb-2 font-weight-semibold"><?php echo e(__('Instructions')); ?> <span class="text-required"><i class="fa-solid fa-asterisk"></i></span></h6>
								<div class="form-group">
									<div id="field-buttons"></div>							    
									<textarea type="text" rows=8 class="form-control <?php $__errorArgs = ['instructions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-danger <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="instructions" name="instructions" placeholder="<?php echo e(__('Explain in details what AI Chat Assistant needs to do...')); ?>" required><?php echo e(old('instructions')); ?></textarea>
									<?php $__errorArgs = ['instructions'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
										<p class="text-danger"><?php echo e($errors->first('instructions')); ?></p>
									<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
								</div> 
							  	</div> 
							</div>	

							<div class="col-md-6 col-sm-12 mt-2 mb-4 pl-0 text-center">
								<div class="form-group">
								  	<label class="custom-switch">
										<input type="checkbox" name="retrieval" class="custom-switch-input">
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description"><?php echo e(__('Enable Knowledge Retrieval Tool')); ?> <i class="ml-1 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('Knowledge Retrieval Tool must be enabled if you want Chat Assistant to consider your uploaded file or let upload a file during chat')); ?>"></i></span>
								  	</label>
								</div>
							</div>

							<div class="col-md-6 col-sm-12 mt-2 mb-4 pl-0 text-center">
								<div class="form-group">
								  	<label class="custom-switch">
										<input type="checkbox" name="code" class="custom-switch-input">
										<span class="custom-switch-indicator"></span>
										<span class="custom-switch-description"><?php echo e(__('Enable Code Enterpreter Tool')); ?></span>
								  	</label>
								</div>
							</div>
							
							<div class="col-sm-12 col-md-12">
								<div class="input-box">
								  	<label class="form-label fs-12 font-weight-semibold"><?php echo e(__('File Access')); ?> <span class="text-muted">(<?php echo e(__('Optional')); ?>)</span> <i class="ml-1 text-dark fs-13 fa-solid fa-circle-info" data-tippy-content="<?php echo e(__('Knowledge Retrieval Tool must be enabled if you want Chat Assistant to consider your uploaded file')); ?>"></i></label>
									<div class="input-group file-browser" id="create-new-chat">									
										<input type="text" class="form-control border-right-0 browse-file" placeholder="<?php echo e(__('Include your file for which you want your AI Chat Assistant to have access')); ?>" readonly>
										<label class="input-group-btn">
										<span class="btn btn-primary special-btn">
											<?php echo e(__('Browse')); ?> <input type="file" name="file" style="display: none;" accept=".c, .cpp, .docx, .html, .java, .md, .php, .pptx, .py, .rb, .tex, .css, .js, .gif, .tar, .ts, .xlsx, .xml, .zip, .pdf, .csv, .txt, .json">
										</span>
										</label>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal-footer d-inline">
							<div class="row text-center">
							  	<div class="col-md-12">
									<button type="submit" class="btn btn-primary ripple pl-6 pr-6"><?php echo e(__('Create Chat Assistant')); ?></button>
							  	</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>


		<div class="col-lg-9 col-md-12 col-sm-12 mt-4">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('My Custom Chat Assistants')); ?></h3>
				</div>
				<div class="card-body pt-2">
					<!-- SET DATATABLE -->
					<table id='allTemplates' class='table' width='100%'>
						<thead>
							<tr>							
								<th width="6%"><?php echo e(__('Chat Name')); ?></th>
								<th width="10%"><?php echo e(__('Chat Description')); ?></th>	
								<th width="2%"><?php echo e(__('Status')); ?></th> 									
								<th width="2%"><?php echo e(__('Created On')); ?></th>	    										 						           	
								<th width="4%"><?php echo e(__('Actions')); ?></th>
							</tr>
						</thead>
					</table> <!-- END SET DATATABLE -->
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<script src="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/avatar.js')); ?>"></script>
	<!-- Data Tables JS -->
	<script src="<?php echo e(URL::asset('plugins/datatable/datatables.min.js')); ?>"></script>
	<script type="text/javascript">
		$(function () {

			"use strict";

			let table = $('#allTemplates').DataTable({
				"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
				responsive: {
					details: {type: 'column'}
				},
				"order": [[3, "asc"]],
				language: {
					"emptyTable": "<div><img id='no-results-img' src='<?php echo e(URL::asset('img/files/no-result.png')); ?>'><br><?php echo e(__('No custom chats created yet')); ?></div>",
					"info": "<?php echo e(__('Showing page')); ?> _PAGE_ <?php echo e(__('of')); ?> _PAGES_",
					search: "<i class='fa fa-search search-icon'></i>",
					lengthMenu: '_MENU_ ',
					paginate : {
						first    : '<i class="fa fa-angle-double-left"></i>',
						last     : '<i class="fa fa-angle-double-right"></i>',
						previous : '<i class="fa fa-angle-left"></i>',
						next     : '<i class="fa fa-angle-right"></i>'
					}
				},
				pagingType : 'full_numbers',
				processing: true,
				serverSide: true,
				ajax: "<?php echo e(route('user.chat.custom')); ?>",
				columns: [					
					{
						data: 'custom-name',
						name: 'custom-name',
						orderable: true,
						searchable: true
					},				
					{
						data: 'description',
						name: 'description',
						orderable: true,
						searchable: true
					},	
					{
						data: 'custom-status',
						name: 'custom-status',
						orderable: true,
						searchable: true
					},						
					{
						data: 'updated-on',
						name: 'updated-on',
						orderable: true,
						searchable: true
					},									
					{
						data: 'actions',
						name: 'actions',
						orderable: false,
						searchable: false
					},
				]
			});


			// ACTIVATE TEMPLATE
			$(document).on('click', '.activateButton', function(e) {

				e.preventDefault();

				var formData = new FormData();
				formData.append("id", $(this).attr('id'));
				formData.append("type", $(this).attr('type'));

				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: 'custom/activate',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data == 'success') {
							Swal.fire('<?php echo e(__('Chat Assistant Activated')); ?>', '<?php echo e(__('Chat assistant has been activated successfully')); ?>', 'success');
							$("#allTemplates").DataTable().ajax.reload();
						} else {
							Swal.fire('<?php echo e(__('Chat Assistant Already Active')); ?>', '<?php echo e(__('Selected chat assistant is already activated')); ?>', 'warning');
						}      
					},
					error: function(data) {
						Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
					}
				})

			});


			// DEACTIVATE TEMPLATE
			$(document).on('click', '.deactivateButton', function(e) {

				e.preventDefault();

				var formData = new FormData();
				formData.append("id", $(this).attr('id'));
				formData.append("type", $(this).attr('type'));

				$.ajax({
					headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
					method: 'post',
					url: 'custom/deactivate',
					data: formData,
					processData: false,
					contentType: false,
					success: function (data) {
						if (data == 'success') {
							Swal.fire('<?php echo e(__('Chat Assistant Deactivated')); ?>', '<?php echo e(__('Chat assistant has been deactivated successfully')); ?>', 'success');
							$("#allTemplates").DataTable().ajax.reload();
						} else {
							Swal.fire('<?php echo e(__('Chat Assistant Already Deactive')); ?>', '<?php echo e(__('Chat assistant is already deactivated')); ?>', 'warning');
						}      
					},
					error: function(data) {
						Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
					}
				})

			});


			// DELETE CUSTOM TEMPLATE
			$(document).on('click', '.deleteTemplate', function(e) {

				e.preventDefault();

				Swal.fire({
					title: '<?php echo e(__('Confirm Custom Chat Deletion')); ?>',
					text: '<?php echo e(__('It will permanently delete this custom chat')); ?>',
					icon: 'warning',
					showCancelButton: true,
					confirmButtonText: '<?php echo e(__('Delete')); ?>',
					reverseButtons: true,
				}).then((result) => {
					if (result.isConfirmed) {
						var formData = new FormData();
						formData.append("id", $(this).attr('id'));
						$.ajax({
							headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
							method: 'post',
							url: 'custom/delete',
							data: formData,
							processData: false,
							contentType: false,
							success: function (data) {
								if (data == 'success') {
									Swal.fire('<?php echo e(__('Custom Chat Deleted')); ?>', '<?php echo e(__('Custom chat has been successfully deleted')); ?>', 'success');	
									$("#allTemplates").DataTable().ajax.reload();								
								} else {
									Swal.fire('<?php echo e(__('Custom Chat Delete Failed')); ?>', '<?php echo e(__('There was an error while deleting this custom chat')); ?>', 'error');
								}      
							},
							error: function(data) {
								Swal.fire({ type: 'error', title: 'Oops...', text: 'Something went wrong!' })
							}
						})
					} 
				})
			});
		});

	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u960948325/domains/feastly.co/public_html/resources/views/user/chat/custom/index.blade.php ENDPATH**/ ?>