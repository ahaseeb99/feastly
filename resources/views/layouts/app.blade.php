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
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<!-- METADATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="" name="description">
		<meta content="" name="author">
		<meta name="keywords" content=""/>
		
        <!-- CSRF TOKEN -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- TITLE -->
      <title>{{ config('app.name', 'Feastly') }}</title>

		<meta name="author" content="Feastly">
		<meta name="description" content="Your AI restaurant assistant">

        @include('layouts.header')
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

	<body class="app sidebar-mini <?php echo $themeClass; ?>" data-email="{{ auth()->user()->email }}" data-name="{{ auth()->user()->name }}">

		<div id="loader-line" class="opacity-on"></div>

		<!-- LOADER -->
		{{-- <div id="preloader" >
			<img src="{{URL::asset('img/svgs/preloader.gif')}}" alt="loader">           
			<a href="https://probdone.com" target="_blank" style="opacity:0;font-size:0.1px;color:transparent;">Probdone</a>
		</div> --}}
		<!-- END LOADER -->

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				@include('layouts.nav-aside')

				<!-- APP CONTENT -->			
				<div class="app-content main-content">

					<div class="side-app">
						
						@include('layouts.nav-top')
						
						{{-- @include('layouts.flash') --}}
						
						@yield('page-header')
						
						@yield('content')
					</div>
				</div>
				<!-- END APP CONTENT -->
				
                @include('layouts.footer')                

            </div>		
        </div><!-- END PAGE -->
      
		@include('layouts.footer-backend')        

	</body>
</html>


