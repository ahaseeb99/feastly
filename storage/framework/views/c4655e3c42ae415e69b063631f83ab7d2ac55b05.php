<?php $__env->startSection('css'); ?>
	<!-- Data Table CSS -->
	<link href="<?php echo e(URL::asset('plugins/datatable/datatables.min.css')); ?>" rel="stylesheet" />
	<!-- Sweet Alert CSS -->
	<link href="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"> <?php echo e(__('Features Section')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('admin.dashboard')); ?>"><i class="fa fa-globe mr-2 fs-12"></i><?php echo e(__('Admin')); ?></a></li>
				<li class="breadcrumb-item" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('Frontend Management')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(url('#')); ?>"> <?php echo e(__('Features Section')); ?></a></li>
			</ol>
		</div>
		<div class="page-rightheader">
			<a href="<?php echo e(route('admin.settings.feature.create')); ?>" class="btn btn-primary mt-1"><?php echo e(__('Create New Feature')); ?></a>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>						
	<div class="row">
		<div class="col-lg-12 col-md-12 col-xm-12">
			<div class="card border-0">
				<div class="card-header">
					<h3 class="card-title"><?php echo e(__('Features List')); ?></h3>
				</div>
				<div class="card-body pt-2">
					<!-- SET DATATABLE -->
					<table id='dataTable' class='table' width='100%'>
							<thead>
								<tr>
									<th width="10%"><?php echo e(__('Title')); ?></th>	
									<th width="20%"><?php echo e(__('Description')); ?></th>																		
									<th width="5%"><?php echo e(__('Image')); ?></th>
									<th width="5%"><?php echo e(__('Status')); ?></th>
									<th width="5%"><?php echo e(__('Actions')); ?></th>
								</tr>
							</thead>
					</table> <!-- END SET DATATABLE -->
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<!-- Data Tables JS -->
	<script src="<?php echo e(URL::asset('plugins/datatable/datatables.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('plugins/sweetalert/sweetalert2.all.min.js')); ?>"></script>
	<script type="text/javascript">
		$(function () {

			"use strict";

			// INITILIZE DATATABLE
			var table = $('#dataTable').DataTable({
				"lengthMenu": [[25, 50, 100, -1], [25, 50, 100, "All"]],
				responsive: true,
				colReorder: true,
				"order": [[ 0, "asc" ]],
				language: {
					"emptyTable": "<div><?php echo e(__('No feature created yet')); ?></div>",
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
				ajax: "<?php echo e(route('admin.settings.feature')); ?>",
				columns: [		
					{
						data: 'title',
						name: 'title',
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
						data: 'custom-image',
						name: 'custom-image',
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
						data: 'actions',
						name: 'actions',
						orderable: false,
						searchable: false
					},
				]
			});

			
			// DELETE 
			$(document).on('click', '.deleteButton', function(e) {

				e.preventDefault();

				Swal.fire({
					title: '<?php echo e(__('Confirm Feature Deletion')); ?>',
					text: '<?php echo e(__('It will permanently delete this feature')); ?>',
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
							url: 'features/delete',
							data: formData,
							processData: false,
							contentType: false,
							success: function (data) {
								if (data == 'success') {
									Swal.fire('<?php echo e(__('Feature Deleted')); ?>', '<?php echo e(__('Feature has been successfully deleted')); ?>', 'success');	
									$("#dataTable").DataTable().ajax.reload();								
								} else {
									Swal.fire('<?php echo e(__('Delete Failed')); ?>', '<?php echo e(__('There was an error while deleting this feature')); ?>', 'error');
								}      
							},
							error: function(data) {
								Swal.fire('Oops...','Something went wrong!', 'error')
							}
						})
					} 
				})
			});

		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u960948325/domains/feastly.co/public_html/resources/views/admin/frontend/section/feature/index.blade.php ENDPATH**/ ?>