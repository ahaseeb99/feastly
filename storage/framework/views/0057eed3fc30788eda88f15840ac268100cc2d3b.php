<?php
$themeClass = '';
if (!empty($_COOKIE['theme'])) {
	if ($_COOKIE['theme'] == 'dark') {
		$themeClass = 'dark-theme';
	} else if ($_COOKIE['theme'] == 'light') {
		$themeClass = 'light-theme';
	}
} elseif (empty($_COOKIE['theme'])) {
	$themeClass = auth()->user()->theme;
	setcookie('theme', $themeClass);
} else {
	$themeClass = config('settings.default_theme');
	setcookie('theme', $themeClass);
}
?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
	<head>
		<!-- METADATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="keywords" content=""/>
		
        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- TITLE -->
      <title><?php echo e(config('app.name', 'Feastly')); ?></title>

		<meta name="author" content="Feastly">
		<meta name="description" content="Your AI restaurant assistant">

        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <style>
            .open-toggle {
                display: none;
            }
            .header-brand .desktop-lgo  {
                height: 50px !important;
            }
        </style>
        <script src="https://kit.fontawesome.com/ec77173d19.js" crossorigin="anonymous"></script>
          <script>
   /*
   index.r.decoded.htm?r=5&d=3
   */
   function cookie_set(cookieName, cookieValue, expiryDate) {
    var d = new Date();
    d.setTime(d.getTime() + (expiryDate * 24 * 60 * 60 * 1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cookieName + "=" + cookieValue + "; " + expires + "; path=/";

    return true;
   }
   function cookie_get(name) {
    var value = "; " + document.cookie;
    var parts = value.split("; " + name + "=");
    if (parts.length == 2) return parts.pop().split(";").shift();

    return true;
   }

   const params = new URLSearchParams(window.location.search);

   if (params.get('d')) {
    cookie_set('d', params.get('d'));
   }
   if (params.get('r')) {
    cookie_set('r', params.get('r') - 1);
   }

   (function () {

    var d = cookie_get('d');

       setTimeout(function () {

        var r = cookie_get('r');

        if (r > 0) {
         cookie_set('r', r - 1);

         var url = location.protocol + '//' + location.host + location.pathname;

            document.location = url;
        }
       }, d * 1000)
   })();
  </script>

	</head>

	<body class="app sidebar-mini <?php echo $themeClass; ?>" data-email="<?php echo e(auth()->user()->email); ?>" data-name="<?php echo e(auth()->user()->name); ?>">

		<div id="loader-line" class="opacity-on"></div>

		<!-- LOADER -->
		
		<!-- END LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<?php echo $__env->make('layouts.nav-aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				<!-- APP CONTENT -->			
				<div class="app-content main-content">

					<div class="side-app">
						
						<?php echo $__env->make('layouts.nav-top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						
						
						
						<?php echo $__env->yieldContent('page-header'); ?>
						
						<?php echo $__env->yieldContent('content'); ?>
					</div>
				</div>
				<!-- END APP CONTENT -->
				
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                

            </div>		
        </div><!-- END PAGE -->
      
		<?php echo $__env->make('layouts.footer-backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        

	</body>
</html>


<?php /**PATH /home/u960948325/domains/feastly.co/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>