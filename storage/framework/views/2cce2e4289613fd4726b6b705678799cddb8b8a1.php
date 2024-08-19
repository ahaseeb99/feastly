<!--Favicon -->
<link rel="icon" href="<?php echo e(URL::asset('img/brand/favicon.ico')); ?>" type="image/x-icon"/>

<!-- Animate -->
<link href="<?php echo e(URL::asset('css/animated.css')); ?>" rel="stylesheet" />

<!-- Bootstrap 5 -->
<link href="<?php echo e(URL::asset('plugins/bootstrap-5.0.2/css/bootstrap.min.css')); ?>" rel="stylesheet">

<!-- Fonts CDN-->
<link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&family=Red+Hat+Text:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">

<!-- Icons -->
<link href="<?php echo e(URL::asset('css/icons.css')); ?>" rel="stylesheet" />

<!-- P-scrollbar -->
<link href="<?php echo e(URL::asset('plugins/p-scrollbar/p-scrollbar.css')); ?>" rel="stylesheet" />

<!-- Simplebar -->
<link href="<?php echo e(URL::asset('plugins/simplebar/css/simplebar.css')); ?>" rel="stylesheet">

<!-- Tippy -->
<link href="<?php echo e(URL::asset('plugins/tippy/scale-extreme.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('plugins/tippy/material.css')); ?>" rel="stylesheet" />

<!-- Toastr -->
<link href="<?php echo e(URL::asset('plugins/toastr/toastr.min.css')); ?>" rel="stylesheet" />
<link href="<?php echo e(URL::asset('plugins/awselect/awselect.min.css')); ?>" rel="stylesheet" />

<!-- Font Awesome 6 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>

<?php echo $__env->yieldContent('css'); ?>

<!-- All Styles -->
<link href="<?php echo e(URL::asset('css/app.css')); ?>" rel="stylesheet" />

<style>
#back-to-top svg{
    position: relative;
    top: 10px;
}
    #main-wrapper .minimize-navbar ul li.nav-item a.active {
        color: #DABDC6 !important;
    }
    #steps-wrapper .steps-box:hover {
        box-shadow: none !important;
    }
    .navbar-brand {
        width: 220px;
    }
</style>



	
<?php /**PATH /home/u960948325/domains/feastly.co/public_html/resources/views/layouts/header.blade.php ENDPATH**/ ?>