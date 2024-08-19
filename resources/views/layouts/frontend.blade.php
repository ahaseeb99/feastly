@if (config('frontend.custom_url.status') == 'on')
    <script type="text/javascript">
		window.location.href = "{{ config('frontend.custom_url.link') }}"
	</script>
@else

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<!-- Meta data -->
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="{{ $information['author'] }}">
	    <meta name="keywords" content="{{ $information['keywords'] }}">
	    <meta name="description" content="{{ $information['description'] }}">
		
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Title -->
        <title>{{ $information['title'] }}</title>

		 
        <!--CSS Files -->
        <link href="{{URL::asset('plugins/slick/slick.css')}}" rel="stylesheet">
        <link href="{{URL::asset('plugins/slick/slick-theme.css')}}" rel="stylesheet">

		@include('layouts.header')

		<!--Custom User CSS File -->
		<link href="{{URL::asset($information['css'])}}" rel="stylesheet">

		<!--Google AdSense-->
		{!! adsense_header() !!}

	</head>

	<body class="app sidebar-mini frontend-body {{ Request::path() != '/' ? 'blue-background' : '' }}">

		@if (config('frontend.maintenance') == 'on')
			
			<div class="container h-100vh">
				<div class="row text-center h-100vh align-items-center">
					<div class="col-md-12">
						<img src="{{ URL::asset('img/files/maintenance.png') }}" alt="Maintenance Image">
						<h2 class="mt-4 font-weight-bold">{{ __('We are just tuning up a few things') }}.</h2>
						<h5>{{ __('We apologize for the inconvenience but') }} <span class="font-weight-bold text-info">{{ config('app.name') }}</span> {{ __('is currently undergoing planned maintenance') }}.</h5>
					</div>
				</div>
			</div>
		@else

			<!-- Page -->
			@if (config('frontend.frontend_page') == 'on')
						
				<div class="page">
					<div class="page-main">

						<section id="main-wrapper">
					
							<div class="relative flex items-top justify-center min-h-screen">
				
								<div class="container-fluid fixed-top pl-0 pr-0" id="navbar-container">
									
									@yield('menu')
				
									@include('layouts.flash')
				
								</div>
				
							</div>  
						</section>

						<!-- App-Content -->			
						<div class="main-content">
							<div class="side-app frontend-background">

								@yield('content')

							</div>                   
						</div>
					</div>
				
				</div><!-- End Page -->
			
				<!-- FOOTER SECTION
				========================================================-->
				<footer id="welcome-footer" >

					@yield('curve')

					<!-- FOOTER MAIN CONTENT -->
					<div id="footer" class="container text-center">
<div style="display: flex;margin: 0 auto;  align-items: center;  gap: 5px !important;  font-size: .75rem;  color: rgb(0 42 64 / 0.6); max-width: 305px;  justify-content: center;" id="logos">
                                 
                                    <!--<img src="https://feastly.co/img/mc.png" alt="Master Card" style="width: 65px;">-->
                                    <!-- <img src="https://feastly.co/img/visa.png" alt="Visa" style="width: 65px;">-->
                                        <img src="https://feastly.co/public/img/blik.svg" alt="Blik" style="height: 30px;margin-right: 20px;">
                                                                                                                    <img src="https://feastly.co/public/img/eps.svg" alt="EPS" style="height: 30px;margin-right: 20px;">
                            <img src="https://feastly.co/public/img/mb.svg" alt="MB" style="height: 30px;margin-right: 20px;">
                            <img src="https://feastly.co/public/img/mba.svg" alt="MBA" style="height: 30px;margin-right: 20px;">
                            <img src="https://feastly.co/public/img/prz.svg" alt="prz" style="height: 30px;">
                                                                          
                                     

                                </div>
						<div class="row mb-6 mt-6">
							<div class="col-sm-4" style="text-align: start;">
								<img src="{{ URL::asset('img/brand/logo.png') }}" alt="Brand Logo" style="max-width: 119px; width: 100%;">
								<p style="font-size: 14px; opacity: 0.4">NextGenAI s.r.o. | 21477116 |<br/> Osadní 869/32, Holešovice, 170 00 Prague 7</p>
								<br/>
								<br/>
								<p style="font-size: 14px; opacity: 0.4">For any help please reach out to <a href="mailto:support@feastly.co">support@feastly.co</a></p>
								
								<p>&copy; 2024 All Rights Reserved</p>

							</div>
							<div class="col-sm-8 d-flex justify-content-end">	
							
								<div class="flex mr-6">
								</div>
								<div class="flex mr-6">
									<a class="footer-link" href="{{ route('privacy') }}" >{{ __('Privacy Notice') }}</a>
								</div>						
								<div class="flex mr-6">
									<a class="footer-link" href="{{ route('terms') }}" >{{ __('Terms & Conditions') }}</a>
								</div>
									<div class="flex mr-6">
									<a class="footer-link" href="/cookie-policy" >Cookie Policy</a>
								</div>
												
							</div>
						</div>

						<div class="row">
							<div class="col-sm-12 mb-6 mt-6">
								<!-- <h1>{{ __('Save time. Get Started Now.') }}</h1>
								<h3>{{ __('Unleash the most advanced AI creator') }}</h3>
								<h3>{{ __('and boost your productivity') }}</h3> -->
								<h3>{{ __('Join our community for the latest in AI culinary creations!') }}</h3>
							</div>
						</div>
								
						<div class="row d-none"> 
							<div class="col-sm-12">	
								<div>
									<img src="{{ URL::asset('img/brand/logo-white.png') }}" alt="Brand Logo">									
								</div>

								<div class="mb-7">
									<span class="notification fs-12 mr-2">{{ __('Try for free') }}.</span><span class="notification fs-12">{{ __('No credit card required') }}</span>
								</div>
									
																							
							</div>							
						</div>

						<div class="row d-none"> 
							<div class="col-sm-12 d-flex justify-content-center">	
								<div class="flex mr-6">
									<a class="footer-link" href="/">{{ __('About Us') }}</a>
								</div>	
								<div class="flex mr-6">
									<a class="footer-link" href="{{ route('privacy') }}">{{ __('Privacy Notice') }}</a>
								</div>	
								<div class="flex mr-6">
									<a class="footer-link" href="/cookie-policy">{{ __('Privacy Notice') }}</a>
								</div>		
								<div class="flex mr-6">
									<a class="footer-link" href="{{ route('terms') }}">{{ __('Terms of Service') }}</a>
								</div>	
								@if (config('frontend.contact_section') == 'on')													
									<div class="flex">
										<a class="footer-link" href="{{ route('contact') }}" >{{ __('Contact Us') }}</a>
									</div>
								@endif
								
							</div>
						</div>

					</div> <!-- END CONTAINER-->

			
				</footer> <!-- END FOOTER -->  


			@endif
		
		@endif

		@include('layouts.footer-frontend')

		<!-- Custom User JS File -->
		@if ($information['js'])
			<script src="{{URL::asset($information['js'])}}"></script>
		@endif
		
        <style>
            @media (max-width: 768px) {
    #footer {
        padding: 20px !important;
    }
    #logos img{
        height: 20px !important;
        margin-top: 20px;
    }
}
        </style>
	</body>
</html>

@endif