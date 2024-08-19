@extends('layouts.frontend')

@section('css')
    <link href="{{URL::asset('plugins/slick/slick.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('plugins/slick/slick-theme.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('plugins/aos/aos.css')}}" rel="stylesheet" />
    <link href="{{URL::asset('plugins/animatedheadline/jquery.animatedheadline.css')}}" rel="stylesheet" />
@endsection
<style>
#prices-wrapper .tabs-menu-body .card .prepaid-plan .prepaid-currency-sign {
         font-family: 'Poppins' !important;
color: #000 !important;
color: black !important;
}  .brand-img {
        width: 220px;
    }
#prices-wrapper {
    background: #ffeff4 !important;
    padding-top: 0 !important;
}
#info-banner .container .info-box .info-img img {
    display: none;
}
#prices-wrapper .card {
    border: none;
    background: white;
}
#prices-wrapper .card .plan-title {
        font-family: 'Red Hat Text', sans-serif !important;
        color: #000 !important;
        text-transform: uppercase;
}
#prices-wrapper .card .plan-cost {
    color: black;
     font-family: 'Poppins' !important;
color: #000 !important;
}
.pbd_info-box-wrapper {
    display: flex !important;
    flex-direction: row !important;
    justify-content: space-between !important;
    align-items: center !important;
    row-gap: 30px !important;
    max-width: 100% !important;
    width: 100% !important;
    margin: auto !important;
    flex-wrap: wrap !important;
    overflow: visible !important;
    margin-top: 60px !important;
}
#info-banner .container .info-box .info-text p {
     font-family: 'Poppins' !important;
    font-weight: 400 !important;
    font-size: 18px !important;
    line-height: 150% !important;
    letter-spacing: 0.02em !important;
    color: #ffffff !important;
    margin-bottom: 0 !important;
}
.review-card-scroll .hori-between-div .horizontal-div .reviewer-portrait {
    display: none;
}
.review-card-scroll .hori-between-div .horizontal-div .reviewer-name {
        font-family: 'Red Hat Text', sans-serif;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 32px;
    color: black !important;
}
.review-card-scroll .hori-between-div .horizontal-div .reviewer-title {
    color: black;
}

.review-card-scroll .review-text {
    color: black;
    font-weight: 100;
}

#info-banner .container .info-box {
    background-color: transparent !important;
    box-shadow: none !important;
    display: flex !important;
    flex-direction: column-reverse !important;
    row-gap: 30px !important;
    max-width: 350px !important;
    width: 100%;
    box-shadow: 10px 10px 10px #b2b2b226 !important;
    padding: 49px !important;
    background: #101010 !important;
    height: 449px !important;
    row-gap: 0 !important;
    border-radius: 50px !important;
} 
#prices-wrapper .card {
        height: 564px;
}
#info-banner .container .info-box .info-text h4 {
    font-family: 'Red Hat Text', sans-serif;
    font-weight: 600;
    font-size: 24px;
    line-height: 150%;
    letter-spacing: 0.02em;
    color: #ffffff;
    margin-bottom: 10px;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 32px;
    margin-bottom: 24px;
    line-height: 33px;
}
#info-banner .container {
    overflow: visible;
}
#info-banner .container .title h3, #prices-wrapper .title h3, #reviews-wrapper .title h3, #faq-wrapper .title h3 {
    color: #000000;
    font-family: 'Red Hat Text', sans-serif;
    font-weight: 700;
    font-size: 72px;
    line-height: 100%;
    letter-spacing: 0.02em;
    text-shadow: 0px 8px 80px rgba(0, 0, 0, 0.2);
    margin: 0;
    font-family: 'Red Hat Text', sans-serif;
    text-transform: uppercase;
    font-weight: bold;
}
.pbd_info-box-wrapper {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    row-gap: 30px;
    max-width: 100%;
    width: 100% !important;
    margin: auto;
    flex-wrap: wrap;
    overflow: visible;
}
    .ah-headline.slide b {
        font-family: 'Red Hat Text', sans-serif;
        font-size: 36px;
        font-weight: normal;
    }
    .btn-frontend-scroll-effect span {
        top: -2px;
        font-size: 16px;
    }
    #prices-wrapper .card:hover, #prices-wrapper .card:focus {
        background-color: white !important;
    }
    .btn-primary-frontend {
        width: 300px;
        color: white !important;
    }
    .tabs-menu-body .card .prepaid-plan .plan-cost-wrapper {
        text-align: center;
    }
    .tabs-menu-body .card .prepaid-plan p {
         font-family: 'Poppins', sans-serif;
                font-weight: 100;
    }
    #prices-wrapper .card .plan-cost {
        font-size: 32px;
        font-weight: normal;
    }
    #steps-wrapper {
        background: #ffeff4;
    }
    .row .title p {
    color: #000000;
                font-family: 'Poppins', sans-serif;
                font-weight: 100;

    }
    #main-wrapper .text-container p {
        margin-bottom: 2em !important;
    }
    #steps-wrapper .steps-box .step-number-big p {
        position: relative;
        top: -38px;
        left: -119px;
            font-family: 'Poppins';
        text-transform: uppercase;
        display: none;
    }
    #steps-wrapper .steps-box .step-description p {
        text-align: center;
        max-width: none !important;
            font-family: 'Poppins';
    }
    #steps-wrapper .step-number-big {
            height: 250px;
    }
    #steps-wrapper .steps-box .step-title h2 {
    text-transform: uppercase;
    text-align: center;
    color: #253646;
    }
</style>

<script type="module" src="cookieconsent-config.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/orestbida/cookieconsent@3.0.1/dist/cookieconsent.css">

@section('menu')
    <div class="row no-gutters">
        <nav class="navbar navbar-expand-lg navbar-light w-100" id="navbar-responsive">
            <a class="navbar-brand" href="{{ url('/') }}"><img id="brand-img"  src="{{ URL::asset('img/brand/logo-white.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse section-links" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link scroll active" href="/#main-wrapper">{{ __('Home') }} <span class="sr-only">(current)</span></a>
                    </li>	
                    @if (config('frontend.features_section') == 'on')
                        <li class="nav-item">
                            <!-- <a class="nav-link scroll" href="#features-wrapper">{{ __('Features') }}</a> -->
                            <a class="nav-link scroll" href="/#info-banner">{{ __('Features') }}</a>
                        </li>
                    @endif	
                    @if (config('frontend.pricing_section') == 'on')
                        <li class="nav-item">
                            <a class="nav-link scroll" href="/#prices-wrapper">{{ __('Pricing') }}</a>
                        </li>
                    @endif							
                    @if (config('frontend.faq_section') == 'on')
                        <li class="nav-item">
                            <a class="nav-link scroll" href="/#faq-wrapper">{{ __('FAQs') }}</a>
                        </li>
                    @endif	
                    @if (config('frontend.blogs_section') == 'on')
                        <li class="nav-item">
                            <a class="nav-link scroll" href="/#blog-wrapper">{{ __('Blogs') }}</a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a class="nav-link scroll pbd_cta-nav" href="https://feastly.co/login">{{ __('Get Started') }}</a>
                        </li>
                </ul>
                @if (Route::has('login'))
                <div id="login-buttons" class="pr-4">
                    <div class="dropdown header-locale" id="frontend-local">
                        <a class="icon" data-bs-toggle="dropdown">
                            <span class="fs-12 mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000" fill="none">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M3.6 9h16.8"></path>
                                    <path d="M3.6 15h16.8"></path>
                                    <path d="M11.5 3a17 17 0 0 0 0 18"></path>
                                    <path d="M12.5 3a17 17 0 0 1 0 18"></path>
                                    </svg>
                                {{ ucfirst(Config::get('locale')[App::getLocale()]['code']) }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                            <div class="local-menu">
                                @foreach (Config::get('locale') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a href="{{ route('locale', $lang) }}" class="dropdown-item d-flex">
                                            <div class="text-info"><i class="flag flag-{{ $language['flag'] }} mr-3"></i></div>
                                            <div>
                                                <span class="font-weight-normal fs-12">{{ $language['display'] }}</span>
                                            </div>
                                        </a>                                        
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>

                    @auth
                        <a href="{{ route('user.dashboard') }}" class="action-button dashboard-button pl-5 pr-5">{{ __('Dashboard') }}</a>
                    @else
                        <a href="{{ route('login') }}" class="" id="login-button">{{ __('Sign In') }}</a>

                        @if (config('settings.registration') == 'enabled')
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-2 action-button register-button pl-5 pr-5">{{ __('Sign Up') }}</a>
                            @endif
                        @endif
                    @endauth
                </div>
            @endif                
            </div>
        </nav>
    </div>
@endsection

@section('content')

        <section id="main-wrapper" style="background: #dabdc5;">
            <video autoplay muted loop id="pbd_home-banner-wrapper">
                <source src="{{ URL::asset('img/pbd_home-banner-wrapper.mp4') }}" type="video/mp4">
                Your browser does not support HTML5 video.
            </video>
            
            <div class="h-100vh justify-center min-h-screen" id="main-background">

                <div class="container h-100vh ">
                    <!-- <div class="row h-100vh vertical-center"> -->
                    <div class="row h-100vh">
                        <div class="col-sm-12 upload-responsive">
                            <div class="text-container text-center" style="margin-top: 15rem;">
                                <!-- <h6 class="mb-4 fs-14" data-aos="fade-up" data-aos-delay="50" data-aos-once="true" data-aos-duration="100"><i class="fa-sharp fa-solid fa-sparkles mr-1"></i> {{ __('Meet') }}, {{ config('app.name') }}</span></h6> -->
                                <h1 data-aos="fade-up" data-aos-delay="100" data-aos-once="true" data-aos-duration="200" style="width: 82%;    font-family: 'Red Hat Text', sans-serif;text-transform: uppercase;
    margin: 0 auto;
    margin-top: -40px;">{{ __('Your AI-Powered Culinary Companion') }}</span></h1>
                                <div class="word-container" data-aos="fade-up" data-aos-delay="150" data-aos-once="true" data-aos-duration="300">
                                    <h1 class="ah-headline" style="">
                                      <span class="ah-words-wrapper text-center">
                                        <b class="is-visible">{{ __('Personalized Recipes') }}</b>
                                        <b>{{ __('Ingredient Optimization') }}</b>
                                        <b>{{ __('Dietary Preference Customization') }}</b>
                                        <b>{{ __('Cooking Skill Adaptation') }}</b>
                                        <b>{{ __('Meal Planning Made Easy') }}</b>
                                        <b>{{ __('Enterprise API Integrations') }}</b>
                                      </span>
                                    </h1>
                                  </div>
                                <p data-aos="fade-up" data-aos-delay="400" data-aos-once="true" data-aos-duration="700">{{ __('Delicious meals, tailored to you and your customers') }}</p>

                                <a href="{{ route('register') }}" class="btn-primary-frontend btn-frontend-scroll-effect mb-2" id="top-main-button"  data-aos="fade-up" data-aos-delay="500" data-aos-once="true" data-aos-duration="800">
                                    <div>
                                        <span>
                                            {{ __('Start Creating for Free') }}
                                            <img src="{{ URL::asset('img/bowl.png') }}" alt="btn-icon" class="icon" style="width: 24px; margin-left:5px;">
                                        </span>
                                        <span>
                                            {{ __('Start Creating for Free') }}
                                            <img src="{{ URL::asset('img/bowl.png') }}" alt="btn-icon" class="icon" style="width: 24px; margin-left:5px;">
                                        </span>
                                    </div>
                                </a>
                                  
                                <!-- <div class="text-center d-flex mx-auto justify-content-center mt-5" data-aos="fade-up" data-aos-delay="600" data-aos-once="true" data-aos-duration="900">
                                    <div class="happy-customers">
                                        <div class="customer-avatars">
                                            <img src="{{ URL::asset('img/frontend/customers/1.png') }}" alt="" class="small-avatar">
                                            <img src="{{ URL::asset('img/frontend/customers/2.png') }}" alt="" class="small-avatar overlap">
                                            <img src="{{ URL::asset('img/frontend/customers/3.png') }}" alt="" class="small-avatar overlap">
                                            <img src="{{ URL::asset('img/frontend/customers/4.png') }}" alt="" class="small-avatar overlap">
                                            <img src="{{ URL::asset('img/frontend/customers/5.png') }}" alt="" class="small-avatar overlap">
                                        </div>
                                        <div>
                                            <span class="fs-12">12,577 {{ __('Happy Customers') }}</span>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>                                
                    </div>           
                </div>

            </div>

            <div class="banner-divider inset-x-0" style="z-index: 9; position: relative; bottom: 17vh;">
                
                <svg width="1920" height="334" viewBox="0 0 1920 334" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 334V11.5C11.9956 131.5 91.0254 180 314.708 200.5C538.39 221 832.635 172.5 941.301 165C1028.23 159 1629.99 52.5 1920 0V334H0Z" fill="#FFEFF4"/>
                </svg>
            </div>
            
            <!-- <div class="container-fluid" id="curve-container">
                <div class="curve-box">
                    <div class="overflow-hidden">
                        <svg class="curve" width="1440" height="105" viewBox="0 0 1440 105" fill="none" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none">
                            <path d="M0 0C240 68.7147 480 103.072 720 103.072C960 103.072 1200 68.7147 1440 0V104.113H0V0Z"></path>
                        </svg>
                    </div>
                </div>
            </div> -->
        </section>


        <!-- SECTION - STEPS
        ========================================================-->
        <section id="steps-wrapper" style="margin-top: -200px; position: relative; z-index: 11">

            <div class="container pt-9 pb-9 text-center" style="padding-bottom: 20px !important;">

                <!-- SECTION TITLE -->
                <div class="row mb-6">
                    <div class="title">
                        <!-- <h3><span>{{ __('How') }} </span>{{ __('Set Your Preferences') }}</h3> -->
                        <h3 style="    font-family: 'Red Hat Text', sans-serif;
    text-transform: uppercase; font-size: 50px;    width: 60%;
    margin: 0 auto;color: #243544; ">{{ __('Unleash Your Culinary Creativity') }}</h3>
                        <p style="font-weight: normal; color: #243544">{{ __('Feastly.co empowers you to explore new culinary horizons with ease, whether you\'re a home cook or a business looking to innovate.') }}</p>
                    </div>
                </div> <!-- END SECTION TITLE --> 
                              
            </div> <!-- END CONTAINER -->

            <div class="container">

                <div class="row">
                    @foreach ($steps as $step)
                        <div class="col-lg-4 col-md-12 col-sm-12 pbd_steps-box-wrapper" data-aos="fade-up" data-aos-delay="{{ 100 * $step->order }}" data-aos-once="true" data-aos-duration="400">
                            <div class="steps-box-wrapper">
                                <div class="steps-box">
                                    <div class="step-number-big">
                                        <p>{{ $step->order }}</p>
                                    </div>
                                    <!-- <div class="step-number">
                                        <h6>{{ __('Step') }} {{ $step->order }}</h6>
                                    </div> -->
                                    <!-- <div class="step-title">
                                        <h2>{{ __($step->title) }}</h2>
                                    </div> -->
                                   <div class="step-title">
                                        <h2>{{ __($step->title) }}</h2>
                                    </div>
                                    <div class="step-description">
                                        <p>{!! __($step->description) !!}</p>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    @endforeach
                </div>

            </div>
            
        </section> <!-- END SECTION STEPS -->
      

        <!-- SECTION - TOOLS
        ========================================================-->
        @if (config('frontend.features_section') == 'on')
            <section id="features-wrapper">

                {!! adsense_frontend_features_728x90() !!}
                
                <div class="container pt-7 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-6">
                        <div class="title">
                            <p class="m-2">{{ __('Discover available AI tools') }}</p>
                            <h3>{{ __('The') }}<span> {{ __('Ultimate Power') }} </span>{{ __('of AI') }}</h3>                        
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                  
                </div> <!-- END CONTAINER -->


                <div class="container">    
                    
                    <div class="row">
    
                        <div class="col-lg-12 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">                
                            <div class="features-nav-menu">
                                <div class="features-nav-menu-inner">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        @foreach ($tools as $tool)
                                            @if ($tool->status)
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link @if ($loop->first) active @endif" id="{{ $tool->tool_code }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $tool->tool_code }}" type="button" role="tab" aria-controls="{{ $tool->tool_code }}" aria-selected="true">{{ __($tool->tool_name) }}</button>
                                                </li>
                                            @endif                                            
                                        @endforeach                                    
                                    </ul>
                                </div>
                            </div>					
                        </div>
                
                        <div class="col-lg-12 col-md-12 col-sm-12 ">
                            <div class="pt-6">
                                <div class="features-panel">
                
                                    <div class="tab-content" id="myTabContent">
                
                                        @foreach ($tools as $tool)

                                            <div class="tab-pane fade  @if ($loop->first) show active @endif" id="{{ $tool->tool_code }}" role="tabpanel" aria-labelledby="{{ $tool->tool_code }}">  
                                                <div class="row features-outer-wrapper">

                                                    <div class="col-lg-6 col-md-6 col-sm-12 pl-6 pr-6 align-middle" data-aos="fade-right" data-aos-delay="200" data-aos-once="true" data-aos-duration="500">                                                    
                                                        <div class="features-inner-wrapper text-center">                                                                   
                                                        
                                                            <div class="feature-title">
                                                                <h6 class="fs-12 mb-5"><i class="fa-solid mr-2 {{ $tool->title_icon }}"></i>{{ __($tool->title_meta) }}</h6>
                                                                <h4 class="mb-5 fs-30">{!! __($tool->title) !!}</h4>                                                            
                                                            </div>	

                                                            <div class="feature-description">
                                                                <p class="mb-6">{!! __($tool->description) !!}</p>
                                                            </div>                                                            
                                                        </div>                                                                                                  						
                                                    </div>	

                                                    <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-delay="300" data-aos-once="true" data-aos-duration="600">
                                                        <div class="feature-image-wrapper">
                                                            <img src="{{ URL::asset($tool->image) }}" alt="">
                                                        </div>
                                                        <div class="feature-footer text-center">
                                                            <p class="fs-12 text-muted">{{ __($tool->image_footer) }}</p>
                                                        </div>
                                                    </div>
                    
                                                </div>	
                                            </div>
                                        @endforeach
                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                
                    </div>            
    
                </div>

            </section>
        @endif
        

        <!-- SECTION - BANNER
        ========================================================-->
        <section id="info-banner">
            <div class="container">
                <!-- SECTION TITLE -->
                <div class="row">
                    <div class="title">
                        <!-- <h3><?php echo e(__('What else is')); ?><span> <?php echo e(__('there?')); ?> </span></h3> -->
                        <h3><?php echo e(__('Features')); ?></h3>
                        <p><?php echo e(__('You need to follow a few simple steps to generate your content. Use the AI and save your time.')); ?></p>
                    </div>
                </div> 
                <!-- END SECTION TITLE -->          

                <!-- <div class="row justify-content-center pl-7 pr-7 pt-1 pb-5"> -->
                    <!-- <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">
                        <div class="info-box">
                            <div class="info-text">
                                <h4><?php echo e(__ ('Advanced')); ?></h4>
                                <h4><?php echo e(__ ('Analytics')); ?></h4>
                                <p><?php echo e(__('Closely monitor and control your AI usage')); ?></p>
                            </div>
                            <div class="info-img text-left w-100">
                                <img src="<?php echo e(URL::asset('img/frontend/customers/extra-monitoring.webp')); ?>" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="500">
                        <div class="info-box ml-3 mr-3 team-wrapper">                            
                            <img src="<?php echo e(URL::asset('img/frontend/customers/extra1.webp')); ?>" alt="" class="team-image-1">
                            <img src="<?php echo e(URL::asset('img/frontend/customers/extra2.webp')); ?>" alt="" class="team-image-2">
                            <img src="<?php echo e(URL::asset('img/frontend/customers/extra3.webp')); ?>" alt="" class="team-image-3">
                            <img src="<?php echo e(URL::asset('img/frontend/customers/extra4.webp')); ?>" alt="" class="team-image-4">
                            
                            <div class="team-text">
                                <h4><?php echo e(__ ('Team')); ?></h4>
                                <h4><?php echo e(__ ('Management')); ?></h4>
                                <p><?php echo e(__('Collaborate with your team to create your desired dream content')); ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12 col-sm-12" data-aos="fade-up" data-aos-delay="300" data-aos-once="true" data-aos-duration="600">
                        <div class="info-box">
                            <div class="info-text">
                                <h4><?php echo e(__ ('Project')); ?></h4>
                                <h4><?php echo e(__ ('Management')); ?></h4>
                                <p><?php echo e(__('Organize your creative projects')); ?></p>
                            </div>
                            <div class="info-img text-left w-100">
                                <img src="<?php echo e(URL::asset('img/frontend/customers/extra-project.webp')); ?>" alt="">
                            </div>
                        </div>
                    </div> -->
                    <div class="pbd_info-box-wrapper">
                        <div class="info-box" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                        <div class="info-text">
                            <h4><?php echo e(__ ('Pantry-Powered Recipes')); ?></h4>
                            <p><?php echo e(__("Make the most of what you have on hand as our AI generates recipes based on the ingredients in your pantry, minimizing waste and saving you time.")); ?></p>
                        </div>
                        <div class="info-img text-left w-100">
                            <img src="<?php echo e(URL::asset('img/pbd_feature-icon-02.svg')); ?>" alt="">
                        </div>
                    </div>

                    <div class="info-box" data-aos="fade-up" data-aos-delay="300" data-aos-once="true" data-aos-duration="600">
                        <div class="info-text">
                            <h4><?php echo e(__ ('Step-by-Step Guidance')); ?></h4>
                            <p><?php echo e(__("From novice to experienced home cook, our adaptive cooking instructions provide the support you need to confidently execute any recipe, learning new techniques along the way.")); ?></p>
                        </div>
                        <div class="info-img text-left w-100">
                            <img src="<?php echo e(URL::asset('img/pbd_feature-icon-03.svg')); ?>" alt="">
                        </div>
                    </div>

                    <div class="info-box" data-aos="fade-up" data-aos-delay="400" data-aos-once="true" data-aos-duration="400">
                        <div class="info-text">
                            <h4><?php echo e(__ ('Ingredient Substitutions')); ?></h4>
                            <p><?php echo e(__("Discover smart ingredient swaps that allow you to create dishes tailored to your needs, accommodating dietary restrictions, allergies, or simply your taste preferences.")); ?></p>
                        </div>
                        <div class="info-img text-left w-100">
                            <img src="<?php echo e(URL::asset('img/pbd_feature-icon-04.svg')); ?>" alt="">
                        </div>
                    </div>

                    <div class="info-box" data-aos="fade-up" data-aos-delay="500" data-aos-once="true" data-aos-duration="400">
                        <div class="info-text">
                            <h4><?php echo e(__ ('Nutritional Insights')); ?></h4>
                            <p><?php echo e(__("Gain a deeper understanding of the nutritional value of your meals, empowering you to make informed choices that support your health and wellness goals.")); ?></p>
                        </div>
                        <div class="info-img text-left w-100">
                            <img src="<?php echo e(URL::asset('img/pbd_feature-icon-05.svg')); ?>" alt="">
                        </div>
                    </div>

                    <div class="info-box" data-aos="fade-up" data-aos-delay="600" data-aos-once="true" data-aos-duration="600">
                        <div class="info-text">
                            <h4><?php echo e(__ ('Shopping List Simplicity')); ?></h4>
                            <p><?php echo e(__("Streamline your grocery shopping experience with automatically generated shopping lists based on your selected recipes, ensuring you have everything you need for a week of delicious meals.")); ?></p>
                        </div>
                        <div class="info-img text-left w-100">
                            <img src="<?php echo e(URL::asset('img/pbd_feature-icon-06.svg')); ?>" alt="">
                        </div>
                    </div>

                    <div class="info-box" data-aos="fade-up" data-aos-delay="700" data-aos-once="true" data-aos-duration="400">
                        <div class="info-text">
                            <h4><?php echo e(__ ('Culinary Inspiration')); ?></h4>
                            <p><?php echo e(__("Expand your culinary horizons with AI-powered suggestions that introduce you to new flavors, techniques, and cuisines from around the world, keeping mealtime exciting and engaging.")); ?></p>
                        </div>
                        <div class="info-img text-left w-100">
                            <img src="<?php echo e(URL::asset('img/pbd_feature-icon-07.svg')); ?>" alt="">
                        </div>
                    </div>

                    <div class="info-box" data-aos="fade-up" data-aos-delay="800" data-aos-once="true" data-aos-duration="400">
                        <div class="info-text">
                            <h4><?php echo e(__ ('Recipe Management Platform')); ?></h4>
                            <p><?php echo e(__("Easily organize, save, and share your favorite recipes within our user-friendly platform, ensuring your culinary creations are always at your fingertips.")); ?></p>
                        </div>
                        <div class="info-img text-left w-100">
                            <img src="<?php echo e(URL::asset('img/pbd_feature-icon-08.svg')); ?>" alt="">
                        </div>
                    </div>

                    <div class="info-box" data-aos="fade-up" data-aos-delay="900" data-aos-once="true" data-aos-duration="600">
                        <div class="info-text">
                            <h4><?php echo e(__ ('AI Cooking Specialists')); ?></h4>
                            <p><?php echo e(__("Chat with our knowledgeable AI cooking specialists for personalized guidance, tips, and answers to all your culinary questions, enhancing your cooking skills and confidence.")); ?></p>
                        </div>
                        <div class="info-img text-left w-100">
                            <img src="<?php echo e(URL::asset('img/pbd_feature-icon-09.svg')); ?>" alt="">
                        </div>
                    </div>

                    <div class="info-box" data-aos="fade-up" data-aos-delay="1000" data-aos-once="true" data-aos-duration="400">
                        <div class="info-text">
                            <h4><?php echo e(__ ('Recipe Image Generation')); ?></h4>
                            <p><?php echo e(__("Visualize your culinary creations before even stepping into the kitchen with our AI-powered recipe image generation, providing inspiration and anticipation for your next meal.")); ?></p>
                        </div>
                        <div class="info-img text-left w-100">
                            <img src="<?php echo e(URL::asset('img/pbd_feature-icon-10.svg')); ?>" alt="">
                        </div>
                    </div>
                </div></div>
                    <div class="pbd_info-img-box-cta" data-aos="fade-up" data-aos-delay="1000" data-aos-once="true" data-aos-duration="400">
                        <img src="<?php echo e(URL::asset('img/pbd_feature-icon-04.png')); ?>" width="100%" alt="">
                    </div>

                  
                </div>
            </div>
        </section>

        <!-- SECTION - TEMPLATES
        ========================================================-->
        <section id="templates-wrapper">

            {!! adsense_frontend_features_728x90() !!}
            

            <div class="container pt-9 text-center">

                <!-- SECTION TITLE -->
                <div class="row mb-6">
                    <div class="title">
                        <p class="m-2">{{ __('Custom Templates') }}</p>
                        <h3><span> {{ __('Unlimited Templates') }} </span>{{ __('to get started') }}</h3>                        
                    </div>
                </div> <!-- END SECTION TITLE --> 
                              
            </div> <!-- END CONTAINER -->

            <div class="container">    
                    
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12" data-aos="zoom-in" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">                
                        <div class="templates-nav-menu">
                            <div class="template-nav-menu-inner">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">{{ __('All Templates') }}</button>
                                    </li>
                                    @foreach ($categories as $category)
                                        @if (strtolower($category->name) != 'other')
                                            <li class="nav-item category-check" role="presentation">
                                                <button class="nav-link" id="{{ $category->code }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $category->code }}" type="button" role="tab" aria-controls="{{ $category->code }}" aria-selected="false">{{ __($category->name) }}</button>
                                            </li>
                                        @endif									
                                    @endforeach	
                                    @foreach ($categories as $category)
                                    @if (strtolower($category->name) == 'other')
                                        <li class="nav-item category-check" role="presentation">
                                            <button class="nav-link" id="{{ $category->code }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $category->code }}" type="button" role="tab" aria-controls="{{ $category->code }}" aria-selected="false">{{ __($category->name) }}</button>
                                        </li>
                                    @endif									
                                @endforeach				
                                </ul>
                            </div>
                        </div>					
                    </div>
            
                    <div class="col-lg-12 col-md-12 col-sm-12 ">
                        <div class="pt-2">
                            <div class="favorite-templates-panel show-templates">
            
                                <div class="tab-content" id="myTabContent">
            
                                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                                        <div class="row templates-panel">
                                            @foreach ($categories as $category)
                                                @if (strtolower($category->name) != 'other')
                                                    <div class="col-12 templates-panel-group @if($loop->first) @else  mt-3 @endif">
                                                        <h6 class="fs-14 font-weight-bold text-muted">{{ __($category->name) }}</h6>
                                                        <h4 class="fs-12 text-muted">{{ __($category->description) }}</h4>
                                                    </div>						
                            
                                                    @foreach ($other_templates as $template)
                                                        @if ($template->group == $category->code)
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                        
                                                                    <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates/original-template') }}/{{ $template->slug }}'">
                                                                        <div class="card-body pt-5">
                                                                            <div class="template-icon mb-4">
                                                                                {!! $template->icon !!}												
                                                                            </div>
                                                                            <div class="template-title">
                                                                                <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                            </div>
                                                                            <div class="template-info">
                                                                                <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                            </div>
                                                                            @if($template->package == 'professional') 
                                                                                <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'free')
                                                                                <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'premium')
                                                                                <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->new)
                                                                                <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                            @endif		
                                                                        </div>
                                                                    </div>
                                                                </div>							
                                                            </div>
                                                        @endif
                                                    @endforeach	
                                                    
                                                    @foreach ($custom_templates as $template)
                                                        @if ($template->group == $category->code)
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                       
                                                                    <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates') }}/{{ $template->slug }}/{{ $template->template_code }}'">
                                                                        <div class="card-body pt-5">
                                                                            <div class="template-icon mb-4">
                                                                                {!! $template->icon !!}												
                                                                            </div>
                                                                            <div class="template-title">
                                                                                <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                            </div>
                                                                            <div class="template-info">
                                                                                <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                            </div>
                                                                            @if($template->package == 'professional') 
                                                                                <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'free')
                                                                                <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'premium')
                                                                                <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->new)
                                                                                <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                            @endif	
                                                                        </div>
                                                                    </div>
                                                                </div>							
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif	
                                            @endforeach		
            
                                            @foreach ($categories as $category)
                                                @if (strtolower($category->name) == 'other')
                                                    <div class="col-12 templates-panel-group @if($loop->first) @else  mt-3 @endif">
                                                        <h6 class="fs-14 font-weight-bold text-muted">{{ __($category->name) }}</h6>
                                                        <h4 class="fs-12 text-muted">{{ __($category->description) }}</h4>
                                                    </div>					
                            
                                                    @foreach ($other_templates as $template)
                                                        @if ($template->group == $category->code)
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                        
                                                                    <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates/original-template') }}/{{ $template->slug }}'">
                                                                        <div class="card-body pt-5">
                                                                            <div class="template-icon mb-4">
                                                                                {!! $template->icon !!}												
                                                                            </div>
                                                                            <div class="template-title">
                                                                                <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                            </div>
                                                                            <div class="template-info">
                                                                                <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                            </div>
                                                                            @if($template->package == 'professional') 
                                                                                <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'free')
                                                                                <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'premium')
                                                                                <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->new)
                                                                                <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                            @endif	
                                                                        </div>
                                                                    </div>
                                                                </div>							
                                                            </div>
                                                        @endif
                                                    @endforeach	
                                                    
                                                    @foreach ($custom_templates as $template)
                                                        @if ($template->group == $category->code)
                                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                                <div class="template">                                                                      
                                                                    <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates') }}/{{ $template->slug }}/{{ $template->template_code }}'">
                                                                        <div class="card-body pt-5">
                                                                            <div class="template-icon mb-4">
                                                                                {!! $template->icon !!}												
                                                                            </div>
                                                                            <div class="template-title">
                                                                                <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                            </div>
                                                                            <div class="template-info">
                                                                                <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                            </div>
                                                                            @if($template->package == 'professional') 
                                                                                <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'free')
                                                                                <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->package == 'premium')
                                                                                <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                            @elseif($template->new)
                                                                                <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                            @endif	
                                                                        </div>
                                                                    </div>
                                                                </div>							
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif	
                                            @endforeach	
                                        </div>	
                                    </div>
            
                                    @foreach ($categories as $category)
                                        <div class="tab-pane fade" id="{{ $category->code }}" role="tabpanel" aria-labelledby="{{ $category->code }}-tab">
                                            <div class="row templates-panel">
                        
                                                @foreach ($other_templates as $template)
                                                    @if ($template->group == $category->code)
                                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                                            <div class="template">                                                                    
                                                                <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates/original-template') }}/{{ $template->slug }}'">
                                                                    <div class="card-body pt-5">
                                                                        <div class="template-icon mb-4">
                                                                            {!! $template->icon !!}												
                                                                        </div>
                                                                        <div class="template-title">
                                                                            <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                        </div>
                                                                        <div class="template-info">
                                                                            <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                        </div>
                                                                        @if($template->package == 'professional') 
                                                                            <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->package == 'free')
                                                                            <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->package == 'premium')
                                                                            <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->new)
                                                                            <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                        @endif	
                                                                    </div>
                                                                </div>
                                                            </div>							
                                                        </div>	
                                                    @endif									
                                                @endforeach		
            
                                                @foreach ($custom_templates as $template)
                                                    @if ($template->group == $category->code)
                                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                                            <div class="template">                                                                   
                                                                <div class="card @if($template->package == 'professional') professional @elseif($template->package == 'premium') premium @elseif($template->favorite) favorite @endif" id="{{ $template->template_code }}-card" onclick="window.location.href='{{ url('user/templates') }}/{{ $template->slug }}/{{ $template->template_code }}'">
                                                                    <div class="card-body pt-5">
                                                                        <div class="template-icon mb-4">
                                                                            {!! $template->icon !!}												
                                                                        </div>
                                                                        <div class="template-title">
                                                                            <h6 class="mb-2 fs-15 number-font">{{ __($template->name) }}</h6>
                                                                        </div>
                                                                        <div class="template-info">
                                                                            <p class="fs-13 text-muted mb-2">{{ __($template->description) }}</p>
                                                                        </div>
                                                                        @if($template->package == 'professional') 
                                                                            <p class="fs-8 btn btn-pro mb-0"><i class="fa-sharp fa-solid fa-crown mr-2"></i>{{ __('Pro') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-pro"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->package == 'free')
                                                                            <p class="fs-8 btn btn-free mb-0"><i class="fa-sharp fa-solid fa-gift mr-2"></i>{{ __('Free') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-free"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->package == 'premium')
                                                                            <p class="fs-8 btn btn-yellow mb-0"><i class="fa-sharp fa-solid fa-gem mr-2"></i>{{ __('Premium') }} @if($template->new) <p class="fs-8 btn btn-new mb-0 btn-new-premium"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</p> @endif</p> 
                                                                        @elseif($template->new)
                                                                            <span class="fs-8 btn btn-new mb-0"><i class="fa-sharp fa-solid fa-sparkles mr-2"></i>{{ __('New') }}</span>
                                                                        @endif	
                                                                    </div>
                                                                </div>
                                                            </div>							
                                                        </div>
                                                    @endif
                                                @endforeach	
                                            </div>
                                        </div>
                                    @endforeach	
                                
            
                                </div>
                                
                                <div class="show-templates-button">
                                    <a href="#">
                                        <span>{{ __('Show More') }} <i class="ml-2 fs-10 fa-solid fa-chevrons-down"></i></span>
                                        <span>{{ __('Show Less') }} <i class="ml-2 fs-10 fa-solid fa-chevrons-up"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            
                </div>
        

            </div>

        </section>


        <!-- SECTION - FEATURES
        ========================================================-->
        <section id="benefits-wrapper">

            <div class="container pt-9"> 
                
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="fade-right" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">                        
                        <div class="title">
                            <p class="m-2">{{ __('Features List') }}</p>
                            <h3><span> {{ __('Only platform') }} </span>{{ __('that you will ever need') }}</h3>     
                            <h6 class="font-weight-normal fs-14 mb-4">{{ __('We have you covered from all AI Text & Audio generation aspects to allow you to focus only on your content creation') }}</h6>                    
                            <a href="{{ route('register') }}" class="btn-primary-frontend-small btn-frontend-scroll-effect mb-2">
                                <div>
                                    <span>{{ __('Try Creating for Free') }}</span>
                                    <span>{{ __('Try Creating for Free') }}</span>
                                </div>
                            </a>
                        </div>                                               
                    </div>

                    @foreach ($features as $feature)
                        <div class="col-lg-4 col-md-6 col-sm-12 mb-5" data-aos="zoom-in" data-aos-delay="{{  (200 * $feature->id)/2 }}" data-aos-once="true" data-aos-duration="500">
                            <div class="benefits-box-wrapper text-center">
                                <div class="benefit-box">
                                    <div class="benefit-image">
                                        <img src="{{ URL::asset($feature->image) }}" alt="">
                                    </div>
                                    <div class="benefit-title">
                                        <h6>{!! __($feature->title) !!}</h6>
                                    </div>
                                    <div class="benefit-description">
                                        <p>{!! __($feature->description) !!}</p>
                                    </div>
                                </div>
                            </div>                        
                        </div> 
                    @endforeach                                       
                </div>
            </div>

        </section>

        <!-- SECTION - IMAGES
        ========================================================-->
        <section id="images-wrapper">

            <div class="container-fluid m-0 pl-0 pr-0">
                <div class="slider-container">
                    <div class="halo"></div>
                    
                        <div class="slider-image-container left-60">
                            <div class="track-horizontal left1">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/78.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/77.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/76.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/75.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/74.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/73.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/72.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/78.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/77.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/76.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/75.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/74.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/73.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/72.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left2">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/71.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/70.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/69.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/68.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/67.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/66.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/65.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/6.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/5.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/71.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/70.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/69.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/68.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/67.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/66.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/65.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/6.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/5.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left3">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/64.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/63.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/62.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/61.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/60.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/59.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/58.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/64.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/63.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/62.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/61.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/60.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/59.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/58.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left4">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/57.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/56.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/55.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/54.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/53.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/52.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/51.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/8.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/7.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/57.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/56.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/55.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/54.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/53.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/52.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/51.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/8.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/7.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left5">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/50.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/49.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/48.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/47.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/46.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/45.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/44.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/10.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/9.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/50.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/49.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/48.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/47.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/46.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/45.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/44.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/10.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/9.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                   
                        <div class="marquee-slider-content">
                            <div class="m-marquee-slider-content bottom"></div>
                            <div class="m-marquee-slider-content"></div>
                            <h2>{{ __('Visualize your ') }} <span class="text-primary">{{ __('Dream') }}</span></h2>
                            <h2 class="mb-6 visualize-responsize">{{ __('Create AI Art and Images with Text') }}</h2>
                            <a href="{{ route('register') }}" target="_blank" class="btn-primary-frontend btn-frontend-scroll-effect mb-2">
                                <div>
                                    <span>{{ __('Start Creating Now') }}</span>
                                    <span>{{ __('Start Creating Now') }}</span>
                                </div>
                            </a>
                            <span class="text-muted fs-12">{{ __('No credit card required') }}</span>
                        </div>
                  
                        <div class="slider-image-container right-60">
                            <div class="track-horizontal left1">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/43.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/42.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/41.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/40.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/39.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/38.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/37.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/43.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/42.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/41.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/40.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/39.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/38.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/37.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left2">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/36.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/35.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/34.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/33.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/32.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/31.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/30.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/36.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/35.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/34.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/33.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/32.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/31.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/30.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left3">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/29.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/28.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/27.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/26.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/25.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/4.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/3.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/2.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/1.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/29.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/28.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/27.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/26.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/25.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/4.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/3.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/2.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/1.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left4">
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/24.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/23.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/22.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/21.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/20.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/19.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/18.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal reversed">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/24.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/23.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/22.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/21.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/20.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/19.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/18.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                            <div class="track-horizontal left5">
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/17.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/16.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/15.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/14.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/13.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/12.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/11.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                                <div class="hero-marquee-inner horizontal">
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/17.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/16.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/15.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/14.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/13.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/12.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                    <div class="div-logo mx-120 rounded-8">
                                        <img src="{{ URL::asset('img/frontend/gallery/11.webp') }}" loading="lazy" alt="" class="rounded-image">
                                    </div>
                                </div>
                            </div>
                        
                    </div>
                    <div class="slider-overlay-top"></div>
                    <div class="slider-overlay-top bottom"></div>
                </div>
            </div>


        </section> <!-- END SECTION BANNER -->


        <!-- SECTION - PRICING
        ========================================================-->
        @if (config('frontend.pricing_section') == 'on')
            <section id="prices-wrapper">

                <div class="container pt-9 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-6">
                        <div class="title">
                            <!-- <h3 class="mb-4"><span> {{ __('Simple') }}</span> {{ __('Pricing') }}, <span>{{ __('Unbeatable') }}</span> {{ __('Value') }}</h3> -->
                            <!-- <h6 class="font-weight-normal fs-14 text-center">{{ __('Subscribe to your preferred Subscription Plan or Top Up your credits and get started') }}</h6> -->
                            <h3 class="mb-4">{{ __('Token packs') }}</h3>
                            <p class="mt-2 mb-2">{{ __("We offer flexible token packs to support your personalized mindfulness journey, whether you're just starting out or seeking to deepen your practice.") }}</p>
                        </div>
                    </div>
                    <!-- END SECTION TITLE --> 
                                  
                </div> <!-- END CONTAINER -->

                <div class="container">
                    
                    <div class="row">
                        <div class="card-body">			
			
                            @if ($monthly || $yearly || $prepaid || $lifetime)
                
                 
                            
                
                                <div class="tabs-menu-body">
                                    <div class="tab-content">
                
                                        @if ($prepaid)
                                            <div class="tab-pane @if ((!$monthly && $prepaid) && (!$yearly && $prepaid)) active @else '' @endif" id="prepaid">
                
                                                @if ($prepaids->count())
                                                                    
                                                    <div class="row justify-content-md-center">
                                                    <div class="col-lg-4 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                            <div class="price-card pl-3 pr-3 pt-2 mb-6">
                                                                <div class="card prepaid-cards ">
                                                                                                                                            <div class="plan prepaid-plan">
                                                                     <div class="plan-title">Starter</div>
                                                                        <div class="plan-cost-wrapper mt-2 mb-3 p-1">€<span class="plan-cost">11.99</span></div>
                                                                        <p class="mb-3" style="
    text-align: center;
    margin-top: -10px;
    margin-bottom: 30px !important;
">Token amount:<strong style="font-size: 20px;
    font-weight: bold;
    margin-left: 10px;
    font-family: Poppins !important;
    color: rgb(0, 0, 0) !important;">10,000</strong></p>	
    
    <p>Included features:</p>
                                                                        <div class="credits-box">
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Quick and Easy Meals</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Ingredient-Based Recipes</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Dietary Preferences</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Meal Planning Basics</p>
                                                                        </div>
                                                                    </div>
                                                                </div>	
                                                            </div>							
                                                        </div>										
                                                    																			
                                                        <div class="col-lg-4 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                            <div class="price-card pl-3 pr-3 pt-2 mb-6">
                                                                <div class="card prepaid-cards ">
                                                                                                                                            <div class="plan prepaid-plan">
                                                                          <div class="plan-title">Pro</div>
                                                                        <div class="plan-cost-wrapper mt-2 mb-3 p-1">€<span class="plan-cost">23.99</span></div>
                                                                        <p class="mb-3" style="
    text-align: center;
    margin-top: -10px;
    margin-bottom: 30px !important;
">Token amount:<strong style="font-size: 20px;
    font-weight: bold;
    margin-left: 10px;
    font-family: Poppins !important;
    color: rgb(0, 0, 0) !important;">30,000</strong></p>	
    
    <p>Included features:</p>
                                  
                                                                        <div class="credits-box">
                                                                            <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> All on Starter</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Culinary Techniques</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Global Cuisine Exploration</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Entertaining and Hosting</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Healthy Eating Habits</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Recipe Customization</p>
                                                                            <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Recipe Image generation</p>
                                                                        </div>
                                                                    </div>
                                                                </div>	
                                                            </div>							
                                                        </div>	
                                                        
                                                        <div class="col-lg-4 col-md-6 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                            <div class="price-card pl-3 pr-3 pt-2 mb-6">
                                                                <div class="card prepaid-cards ">
                                                                                                                                            <div class="plan prepaid-plan">
                                                                        <div class="plan-title">Elite</div>
                                                                        <div class="plan-cost-wrapper mt-2 mb-3 p-1">€<span class="plan-cost">35.99</span></div>
                                                                        <p class="mb-3" style="
    text-align: center;
    margin-top: -10px;
    margin-bottom: 30px !important;
">Token amount:<strong style="font-size: 20px;
    font-weight: bold;
    margin-left: 10px;
    font-family: Poppins !important;
    color: rgb(0, 0, 0) !important;">50,000</strong></p>	
    
    <p>Included features:</p>
                                                                        <div class="credits-box">
                                                                            <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> All on Pro</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Professional Recipe Development</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Culinary Masterclasses</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Food Business Management</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com -->Food Content Creation</p>
                                                                             <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Personalized Culinary Coaching

</p><p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> API Access

</p>
                                                                        </div>
                                                                    </div>
                                                                </div>	
                                                            </div>							
                                                        </div>
                                                        </div>
                                                    					
                <div class="col-lg-12 col-md-12 col-sm-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="price-card pl-3 pr-3 pt-2 mb-6">
                                                                    <div class="card prepaid-cards " style="height: auto !important;">
                                                                                                                                                <div class="plan prepaid-plan">
                                                                            <div class="plan-title">Custom </div>
                                                                            <div class="plan-cost-wrapper mt-2 mb-3 p-1"><span class="plan-cost"> from 0.99 </span><span class="prepaid-currency-sign">EUR</span></div>
                                                                            <div class="credits-box">
                                                                                 <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com -->Select only features you need</p>                                                                                                                                                                   <p class="mt-2 mb-0"><svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg><!-- <i class="fa-solid fa-check fs-14 mr-2 text-success"></i> Font Awesome fontawesome.com --> Any amount of tokens</p>																							
                                                                                                                                                   </div>
                                                                            <!-- <div class="text-center action-button mt-2 mb-2">
                                                                                <a href="https://feastly.co/register" class="btn btn-primary-pricing">Select Package</a> 
                                                                            </div> -->
                                                                        </div>
                                                                    </div>	
                                                                </div>							
                                                            </div>
                                                    </div>
                
                                                @else
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center">{{ __('No Prepaid plans were set yet') }}</h6>
                                                        </div>
                                                    </div>
                                                @endif
                
                                            </div>
                                        @endif	
                
                                        @if ($monthly)	
                                            <div class="tab-pane @if (($monthly && $prepaid) || ($monthly && !$prepaid) || ($monthly && !$yearly)) active @else '' @endif" id="monthly_plans">
                
                                                @if ($monthly_subscriptions->count())		
                
                                                    <div class="row justify-content-md-center">
                
                                                        @foreach ( $monthly_subscriptions as $subscription )																			
                                                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="pt-2 ml-2 mr-2 h-100 prices-responsive">
                                                                    <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card @if ($subscription->featured) price-card-border @endif">
                                                                        @if ($subscription->featured)
                                                                            <span class="plan-featured">{{ __('Most Popular') }}</span>
                                                                        @endif
                                                                        <div class="plan">			
                                                                            <div class="plan-title">{{ $subscription->plan_name }}</div>	
                                                                            <p class="plan-cost mb-5">																					
                                                                                @if ($subscription->free)
                                                                                    {{ __('Free') }}
                                                                                @else
                                                                                    {!! config('payment.default_system_currency_symbol') !!}@if(config('payment.decimal_points') == 'allow'){{ number_format((float)$subscription->price, 2) }} @else{{ number_format($subscription->price) }} @endif<span class="fs-12 text-muted"><span class="mr-1">/</span> {{ __('per month') }}</span>
                                                                                @endif   
                                                                            </p>                                                                         
                                                                            <div class="text-center action-button mt-2 mb-5">
                                                                                <a href="{{ route('register') }}" class="btn btn-primary-pricing">{{ __('Subscribe Now') }}</a>                                               														
                                                                            </div>
                                                                            <p class="fs-12 mb-3 text-muted">{{ __('Included Features') }}</p>																		
                                                                            <ul class="fs-12 pl-3">		
                                                                                @if ($subscription->words == -1)
                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('words / month') }}</span></li>
                                                                                @else	
                                                                                    @if($subscription->words != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->words }}</span> <span class="plan-feature-text">{{ __('words / month') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.image_feature_user') == 'allow')
                                                                                    @if ($subscription->images == -1)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('images / month') }}</span></li>
                                                                                    @else
                                                                                        @if($subscription->images != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->images }}</span> <span class="plan-feature-text">{{ __('images / month') }}</span></li> @endif
                                                                                    @endif																	
                                                                                @endif
                                                                                @if (config('settings.whisper_feature_user') == 'allow')
                                                                                    @if ($subscription->minutes == -1)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('minutes / month') }}</span></li>
                                                                                    @else
                                                                                        @if($subscription->minutes != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->minutes }}</span> <span class="plan-feature-text">{{ __('minutes / month') }}</span></li> @endif
                                                                                    @endif																	
                                                                                @endif
                                                                                @if (config('settings.voiceover_feature_user') == 'allow')
                                                                                    @if ($subscription->characters == -1)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('characters / month') }}</span></li>
                                                                                    @else
                                                                                        @if($subscription->characters != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->characters }}</span> <span class="plan-feature-text">{{ __('characters / month') }}</span></li> @endif
                                                                                    @endif																	
                                                                                @endif
                                                                                    @if($subscription->team_members != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->team_members }}</span> <span class="plan-feature-text">{{ __('team members') }}</span></li> @endif
                                                                                
                                                                                @if (config('settings.chat_feature_user') == 'allow')
                                                                                    @if($subscription->chat_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Chats Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.image_feature_user') == 'allow')
                                                                                    @if($subscription->image_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Images Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.voiceover_feature_user') == 'allow')
                                                                                    @if($subscription->voiceover_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Voiceover Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.whisper_feature_user') == 'allow')
                                                                                    @if($subscription->transcribe_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Speech to Text Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.code_feature_user') == 'allow')
                                                                                    @if($subscription->code_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Code Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if($subscription->team_members) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('Team Members Option') }}</span></li> @endif
                                                                                @foreach ( (explode(',', $subscription->plan_features)) as $feature )
                                                                                    @if ($feature)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> {{ $feature }}</li>
                                                                                    @endif																
                                                                                @endforeach															
                                                                            </ul>																
                                                                        </div>					
                                                                    </div>	
                                                                </div>							
                                                            </div>										
                                                        @endforeach
                
                                                    </div>	
                                                
                                                @else
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center">{{ __('No Subscriptions plans were set yet') }}</h6>
                                                        </div>
                                                    </div>
                                                @endif					
                                            </div>	
                                        @endif	
                                        
                                        @if ($yearly)	
                                            <div class="tab-pane @if (($yearly && $prepaid) && ($yearly && !$prepaid) && ($yearly && !$monthly)) active @else '' @endif" id="yearly_plans">
                
                                                @if ($yearly_subscriptions->count())		
                
                                                    <div class="row justify-content-md-center">
                
                                                        @foreach ( $yearly_subscriptions as $subscription )																			
                                                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="pt-2 ml-2 mr-2 h-100 prices-responsive">
                                                                    <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card @if ($subscription->featured) price-card-border @endif">
                                                                        @if ($subscription->featured)
                                                                            <span class="plan-featured">{{ __('Most Popular') }}</span>
                                                                        @endif
                                                                        <div class="plan">			
                                                                            <div class="plan-title">{{ $subscription->plan_name }}</div>																						
                                                                            <p class="plan-cost mb-5">
                                                                                @if ($subscription->free)
                                                                                    {{ __('Free') }}
                                                                                @else
                                                                                    {!! config('payment.default_system_currency_symbol') !!}@if(config('payment.decimal_points') == 'allow'){{ number_format((float)$subscription->price, 2) }} @else{{ number_format($subscription->price) }} @endif<span class="fs-12 text-muted"><span class="mr-1">/</span> {{ __('per year') }}</span>
                                                                                @endif    
                                                                            </p>                                                                            
                                                                            <div class="text-center action-button mt-2 mb-5">
                                                                                <a href="{{ route('register') }}" class="btn btn-primary-pricing">{{ __('Subscribe Now') }}</a>                                               														
                                                                            </div>
                                                                            <p class="fs-12 mb-3 text-muted">{{ __('Included Features') }}</p>																	
                                                                            <ul class="fs-12 pl-3">		
                                                                                @if ($subscription->words == -1)
                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('words / month') }}</span></li>
                                                                                @else	
                                                                                    @if($subscription->words != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->words }}</span> <span class="plan-feature-text">{{ __('words / month') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.image_feature_user') == 'allow')
                                                                                    @if ($subscription->images == -1)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('images / month') }}</span></li>
                                                                                    @else
                                                                                        @if($subscription->images != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->images }}</span> <span class="plan-feature-text">{{ __('images / month') }}</span></li> @endif
                                                                                    @endif																	
                                                                                @endif
                                                                                @if (config('settings.whisper_feature_user') == 'allow')
                                                                                    @if ($subscription->minutes == -1)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('minutes / month') }}</span></li>
                                                                                    @else
                                                                                        @if($subscription->minutes != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->minutes }}</span> <span class="plan-feature-text">{{ __('minutes / month') }}</span></li> @endif
                                                                                    @endif																	
                                                                                @endif
                                                                                @if (config('settings.voiceover_feature_user') == 'allow')
                                                                                    @if ($subscription->characters == -1)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('characters / month') }}</span></li>
                                                                                    @else
                                                                                        @if($subscription->characters != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->characters }}</span> <span class="plan-feature-text">{{ __('characters / month') }}</span></li> @endif
                                                                                    @endif																	
                                                                                @endif
                                                                                    @if($subscription->team_members != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->team_members }}</span> <span class="plan-feature-text">{{ __('team members') }}</span></li> @endif
                                                                                
                                                                                @if (config('settings.chat_feature_user') == 'allow')
                                                                                    @if($subscription->chat_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Chats Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.image_feature_user') == 'allow')
                                                                                    @if($subscription->image_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Images Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.voiceover_feature_user') == 'allow')
                                                                                    @if($subscription->voiceover_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Voiceover Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.whisper_feature_user') == 'allow')
                                                                                    @if($subscription->transcribe_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Speech to Text Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.code_feature_user') == 'allow')
                                                                                    @if($subscription->code_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Code Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if($subscription->team_members) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('Team Members Option') }}</span></li> @endif
                                                                                @foreach ( (explode(',', $subscription->plan_features)) as $feature )
                                                                                    @if ($feature)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> {{ $feature }}</li>
                                                                                    @endif																
                                                                                @endforeach															
                                                                            </ul>																
                                                                        </div>					
                                                                    </div>	
                                                                </div>							
                                                            </div>											
                                                        @endforeach
                
                                                    </div>	
                                                
                                                @else
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center">{{ __('No Subscriptions plans were set yet') }}</h6>
                                                        </div>
                                                    </div>
                                                @endif					
                                            </div>
                                        @endif	
                                        
                                        @if ($lifetime)
                                            <div class="tab-pane @if ((!$monthly && $lifetime) && (!$yearly && $lifetime)) active @else '' @endif" id="lifetime">

                                                @if ($lifetime_subscriptions->count())                                                    
                                                    
                                                    <div class="row justify-content-md-center">
                                                    
                                                        @foreach ( $lifetime_subscriptions as $subscription )																			
                                                            <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
                                                                <div class="pt-2 ml-2 mr-2 h-100 prices-responsive">
                                                                    <div class="card p-5 mb-4 pl-7 pr-7 h-100 price-card @if ($subscription->featured) price-card-border @endif">
                                                                        @if ($subscription->featured)
                                                                            <span class="plan-featured">{{ __('Most Popular') }}</span>
                                                                        @endif
                                                                        <div class="plan">			
                                                                            <div class="plan-title">{{ $subscription->plan_name }}</div>
                                                                            <p class="plan-cost mb-5">
                                                                                @if ($subscription->free)
                                                                                    {{ __('Free') }}
                                                                                @else
                                                                                    {!! config('payment.default_system_currecy_symbol') !!}@if(config('payment.decimal_points') == 'allow'){{ number_format((float)$subscription->price, 2) }} @else{{ number_format($subscription->price) }} @endif<span class="fs-12 text-muted"><span class="mr-1">/</span> {{ __('for lifetime') }}</span>
                                                                                @endif	
                                                                            </p>																				
                                                                            <div class="text-center action-button mt-2 mb-5">
                                                                                <a href="{{ route('register') }}" class="btn btn-primary-pricing">{{ __('Subscribe Now') }}</a>                                               														
                                                                            </div>
                                                                            <p class="fs-12 mb-3 text-muted">{{ __('Included Features') }}</p>																	
                                                                            <ul class="fs-12 pl-3">		
                                                                                @if ($subscription->words == -1)
                                                                                    <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('words / month') }}</span></li>
                                                                                @else	
                                                                                    @if($subscription->words != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->words }}</span> <span class="plan-feature-text">{{ __('words / month') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.image_feature_user') == 'allow')
                                                                                    @if ($subscription->images == -1)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('images / month') }}</span></li>
                                                                                    @else
                                                                                        @if($subscription->images != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->images }}</span> <span class="plan-feature-text">{{ __('images / month') }}</span></li> @endif
                                                                                    @endif																	
                                                                                @endif
                                                                                @if (config('settings.whisper_feature_user') == 'allow')
                                                                                    @if ($subscription->minutes == -1)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('minutes / month') }}</span></li>
                                                                                    @else
                                                                                        @if($subscription->minutes != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->minutes }}</span> <span class="plan-feature-text">{{ __('minutes / month') }}</span></li> @endif
                                                                                    @endif																	
                                                                                @endif
                                                                                @if (config('settings.voiceover_feature_user') == 'allow')
                                                                                    @if ($subscription->characters == -1)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ __('Unlimited') }}</span> <span class="plan-feature-text">{{ __('characters / month') }}</span></li>
                                                                                    @else
                                                                                        @if($subscription->characters != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->characters }}</span> <span class="plan-feature-text">{{ __('characters / month') }}</span></li> @endif
                                                                                    @endif																	
                                                                                @endif
                                                                                    @if($subscription->team_members != 0) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="font-weight-bold">{{ $subscription->team_members }}</span> <span class="plan-feature-text">{{ __('team members') }}</span></li> @endif
                                                                                
                                                                                @if (config('settings.chat_feature_user') == 'allow')
                                                                                    @if($subscription->chat_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Chats Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.image_feature_user') == 'allow')
                                                                                    @if($subscription->image_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Images Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.voiceover_feature_user') == 'allow')
                                                                                    @if($subscription->voiceover_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Voiceover Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.whisper_feature_user') == 'allow')
                                                                                    @if($subscription->transcribe_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Speech to Text Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if (config('settings.code_feature_user') == 'allow')
                                                                                    @if($subscription->code_feature) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('AI Code Feature') }}</span></li> @endif
                                                                                @endif
                                                                                @if($subscription->team_members) <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <span class="plan-feature-text">{{ __('Team Members Option') }}</span></li> @endif
                                                                                @foreach ( (explode(',', $subscription->plan_features)) as $feature )
                                                                                    @if ($feature)
                                                                                        <li class="fs-14 mb-3"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> {{ $feature }}</li>
                                                                                    @endif																
                                                                                @endforeach															
                                                                            </ul>																
                                                                        </div>					
                                                                    </div>	
                                                                </div>							
                                                            </div>											
                                                        @endforeach					

                                                    </div>

                                                @else
                                                    <div class="row text-center">
                                                        <div class="col-sm-12 mt-6 mb-6">
                                                            <h6 class="fs-12 font-weight-bold text-center">{{ __('No lifetime plans were set yet') }}</h6>
                                                        </div>
                                                    </div>
                                                @endif

                                            </div>	
                                        @endif	
                                    </div>
                                </div>
                            
                            @else
                                <div class="row text-center">
                                    <div class="col-sm-12 mt-6 mb-6">
                                        <h6 class="fs-12 font-weight-bold text-center">{{ __('No Subscriptions or Prepaid plans were set yet') }}</h6>
                                    </div>
                                </div>
                            @endif

                                <div style="display: flex;margin: 0 auto;  align-items: center;  gap: 5px !important;  font-size: .75rem;  color: rgb(0 42 64 / 0.6); max-width: 305px;  justify-content: center;">
                                    <p style="margin: 0 !important;    margin: 0 !important;
    font-size: 14px;
    position: relative;
    top: 2px;
    margin-right: 15px !important;">Pay securely with</p>
                                    <img src="https://feastly.co/img/mc.png" alt="Master Card" style="width: 65px;" />
                                     <img src="https://feastly.co/img/visa.png" alt="Visa"  style="width: 65px;"/>

                                </div>

                            <!-- <div class="text-center">
                                <p class="mb-0 mt-2"><i class="fa-solid fa-shield-check text-success mr-2"></i><span class="text-muted fs-12">{{ __('PCI DSS Compliant') }}</span></p>
                            </div> -->
                
                        </div>
                    </div>
                
                </div>
        
            </section>
        @endif


         <!-- SECTION - BANNER
        ========================================================-->
        <section id="banner-wrapper">

            <div class="container">

                <!-- SECTION TITLE -->
                <div class="mb-7 text-center">

                    <h6>{{ __('Join the 10.000+ Companies trusting') }} {{ config('app.name') }}</h6>

                </div> <!-- END SECTION TITLE -->

                <div class="row" id="partners">
                            
                    <div class="partner" data-aos="flip-down" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-1.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div>    
                    
                    <div class="partner" data-aos="flip-down" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-2.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="300" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-3.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="400" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-4.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="500" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-5.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="600" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-6.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 

                    <div class="partner" data-aos="flip-down" data-aos-delay="600" data-aos-once="true" data-aos-duration="400">					
                        <div class="partner-image d-flex">
                            <div>
                                <img src="{{ URL::asset('img/frontend/logos/logo-3.svg') }}" alt="partner">
                            </div>
                        </div>	
                    </div> 
                </div>
            </div>

        </section> <!-- END SECTION BANNER -->


        <!-- SECTION - REVIEWS
        ========================================================-->
        @if (config('frontend.reviews_section') == 'on')
            <section id="reviews-wrapper">

                <div class="container text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-6">
                        <div class="title">
                            <!-- <h3 class="mb-4"><span> {{ __('Simple') }}</span> {{ __('Pricing') }}, <span>{{ __('Unbeatable') }}</span> {{ __('Value') }}</h3> -->
                            <!-- <h6 class="font-weight-normal fs-14 text-center">{{ __('Subscribe to your preferred Subscription Plan or Top Up your credits and get started') }}</h6> -->
                            <h3 class="mb-4" style="color: #000000;">{{ __('Testimonials') }}</h3>    
                            <p class="mt-2 mb-2" style="color: #43371F;">{{ __("Transforming culinary experiences, one user at a time") }}</p>
                             <a href="https://www.trustpilot.com/review/feastly.co" target="_blank">
                                <div>
                                 
                                    <!-- <span class="fs-12" data-aos="fade-up" data-aos-delay="900" data-aos-once="true" data-aos-duration="1300">{{ __('No credit card required') }}</span> -->
                                    <img src="{{ URL::asset('img/trustpilot.png') }}" alt="btn-icon" class="pbd_review-icon" data-aos="fade-up" data-aos-delay="400" data-aos-once="true" data-aos-duration="700" style="max-width: 400px; width:100%; position: relative; z-index: 10">
                                </div>
                                </a>
                        </div>
                    </div>
                    <!-- END SECTION TITLE -->

                </div> 
                <!-- END CONTAINER -->

                <div class="container">

                    @if ($review_exists)
                        <div class="reviews-card-wrapper">                               
                            <div class="review-list-wrapper">
                                <div class="reviews-list">
                                    
                                    @foreach ($reviews as $review) 
                                        @if ($review->row == 'first')
                                            <div class="review-card-scroll w-inline-block">
                                                <div class="hori-between-div">
                                                    <div class="horizontal-div mb-4">
                                                        <img src="{{ URL::asset($review->image_url) }}" loading="lazy" class="reviewer-portrait">
                                                        <div>
                                                            <div class="reviewer-name">{{ __($review->name) }}</div>
                                                            <div class="reviewer-title">{{ __($review->position) }}</div>
                                                        </div>                                                        
                                                        <div class="reviewer-star">
                                                            <span class="fs-11 mr-1">{{ $review->rating }}</span><i class="fa-solid fa-star fs-9 text-yellow"></i>
                                                        </div>                                              
                                                    </div>                                    
                                                </div>
                                                <p class="review-text"><i class="fa-solid fa-quote-left mr-2"></i>{{ __($review->text) }}<i class="fa-solid fa-quote-right ml-2"></i></p>
                                            </div>
                                        @endif                                        
                                    @endforeach

                                </div>
                               
                            </div>

                            @if ($review_second_exists)
                                <div class="review-list-wrapper second">
                                    <div class="reviews-list">
                                        @foreach ($reviews as $review) 
                                            @if ($review->row == 'second')
                                                <div class="review-card-scroll w-inline-block">
                                                    <div class="hori-between-div">
                                                        <div class="horizontal-div mb-4">
                                                            <img src="{{ URL::asset($review->image_url) }}" loading="lazy" class="reviewer-portrait">
                                                            <div>
                                                                <div class="reviewer-name">{{ __($review->name) }}</div>
                                                                <div class="reviewer-title">{{ __($review->position) }}</div>
                                                            </div>
                                                            <div class="reviewer-star">
                                                                <span class="fs-11 mr-1">{{ $review->rating }}</span><i class="fa-solid fa-star fs-9 text-yellow"></i>
                                                            </div> 
                                                        </div>                                    
                                                    </div>
                                                    <p class="review-text"><i class="fa-solid fa-quote-left mr-2"></i>{{ __($review->text) }}<i class="fa-solid fa-quote-right ml-2"></i></p>
                                                </div>
                                            @endif                                        
                                        @endforeach
                                    </div>
                                    <div class="reviews-list">
                                        @foreach ($reviews as $review) 
                                            @if ($review->row == 'second')
                                                <div class="review-card-scroll w-inline-block">
                                                    <div class="hori-between-div">
                                                        <div class="horizontal-div mb-4">
                                                            <img src="{{ URL::asset($review->image_url) }}" loading="lazy" class="reviewer-portrait">
                                                            <div>
                                                                <div class="reviewer-name">{{ __($review->name) }}</div>
                                                                <div class="reviewer-title">{{ __($review->position) }}</div>
                                                            </div>
                                                            <div class="reviewer-star">
                                                                <span class="fs-11 mr-1">{{ $review->rating }}</span><i class="fa-solid fa-star fs-9 text-yellow"></i>
                                                            </div> 
                                                        </div>                                    
                                                    </div>
                                                    <p class="review-text"><i class="fa-solid fa-quote-left mr-2"></i>{{ __($review->text) }}<i class="fa-solid fa-quote-right ml-2"></i></p>
                                                </div>
                                            @endif                                        
                                        @endforeach
                                    </div>
                                </div>
                            @endif                           
                            
                        </div>
                    @else
                        <div class="row text-center">
                            <div class="col-sm-12 mt-6 mb-6">
                                <h6 class="fs-12 font-weight-bold text-center">{{ __('No customer reviews were published yet') }}</h6>
                            </div>
                        </div>
                    @endif

                </div>


            </section> <!-- END SECTION BANNER -->
        @endif


        <!-- SECTION - FAQ
        ========================================================-->
        @if (config('frontend.faq_section') == 'on')
            <section id="faq-wrapper">   

                <div class="container pt-9 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-7">
                        <div class="title">
                            <h3 class="mb-4" style="color: #000000;">{{ __('FAQ') }}</h3>
                            <p class="mt-2 mb-2" style="color: #43371F;">{{ __('You need to follow a few simple steps to generate your content. Use the AI and save your time.') }}</p>
                            <!-- <h3 class="mb-4"><span> {{ __('Got Questions?') }} </span>{{ __('We have you covered') }}</h3>  -->
                            <!-- <h6 class="font-weight-normal fs-14 text-center">{{ __('We are always here to provide full support and clear any doubts that you might have') }}</h6>                         -->
                        </div>
                    </div> 
                    <!-- END SECTION TITLE --> 
                                  
                </div> 
                <!-- END CONTAINER -->

               <div class="container">
    <div class="row pbd_border-rad">
        @if ($faq_exists)
            <div id="accordion" data-aos="fade-left" data-aos-delay="200" data-aos-once="true" data-aos-duration="700">
                @foreach ($faqs as $faq)
                    <div class="col-lg-12 col-md-12 col-sm-12 pbd_faq-start">
                        <div class="card">
                            <div class="card-header" id="heading{{ $faq->id }}">
                                <h5 class="mb-0">
                                    <span class="text-left btn btn-link faq-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $faq->id }}" aria-expanded="false" aria-controls="collapse-{{ $faq->id }}">
                                        {{ __($faq->question) }}
                                    </span>
                                </h5>
                            </div>
                            <div id="collapse-{{ $faq->id }}" class="collapse" aria-labelledby="heading{{ $faq->id }}" data-bs-parent="#accordion">
                                <div class="card-body">
                                    {!! __($faq->answer) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row text-center">
                <div class="col-sm-12 mt-6 mb-6">
                    <h6 class="fs-12 font-weight-bold text-center">{{ __('No FAQ answers were published yet') }}</h6>
                </div>
            </div>
        @endif
    </div>        
</div>
        
            </section> <!-- END SECTION FAQ -->
        @endif


        <!-- SECTION - BLOGS
        ========================================================-->
        @if (config('frontend.blogs_section') == 'on')
            <section id="blog-wrapper">

                <div class="container pt-9 text-center">

                    <!-- SECTION TITLE -->
                    <div class="row mb-7">
                        <div class="title">
                            <p class="m-2">{{ __('Stay up to Date') }}</p>
                            <h3>{{ __('Our Latest') }} <span>{{ __('Blogs') }}</span></h3>                        
                        </div>
                    </div> <!-- END SECTION TITLE --> 
                                  
                </div> <!-- END CONTAINER -->

                <div class="container">

                    @if ($blog_exists)
                        
                        <!-- BLOGS -->
                        <div class="row" id="blogs">
                            @foreach ( $blogs as $blog )
                            <div class="blog" data-aos="zoom-in" data-aos-delay="100" data-aos-once="true" data-aos-duration="400">			
                                <div class="blog-box">
                                    <div class="blog-img">
                                        <a href="{{ route('blogs.show', $blog->url) }}"><img src="{{ URL::asset($blog->image) }}" alt="Blog Image"></a>
                                        <span>{{ $blog->created_by }}</span>
                                    </div>
                                    <div class="blog-info mt-0">
                                        <h6 class="blog-date text-left mt-1 mb-4">{{ date('F j, Y', strtotime($blog->created_at)) }}</h6>
                                        <h5 class="blog-title fs-20 text-left mb-4"><a href="{{ route('blogs.show', $blog->url) }}">{{ __($blog->title) }}</a></h5>  
                                        <h6><a href="{{ route('blogs.show', $blog->url) }}">{{ __('Read More') }}</a> <i class="fa-solid fa-chevrons-right"></i></h6>                                   
                                    </div>
                                </div>                        
                            </div> 
                            @endforeach
                        </div> 
                        

                        <!-- ROTATORS BUTTONS -->
                        <div class="blogs-nav">
                            <a class="blogs-prev"><i class="fa fa-chevron-left"></i></a>
                            <a class="blogs-next"><i class="fa fa-chevron-right"></i></a>                                
                        </div>

                    @else
                        <div class="row text-center">
                            <div class="col-sm-12 mt-6 mb-6">
                                <h6 class="fs-12 font-weight-bold text-center">{{ __('No blog articles were published yet') }}</h6>
                            </div>
                        </div>
                    @endif

                    <div class="text-center blog-all mt-6">
                        <a href="#">{{ __('Show more') }} <i class="fa-solid fa-chevrons-right fs-10"></i></a>
                    </div>

                </div> <!-- END CONTAINER -->

                {!! adsense_frontend_blogs_728x90() !!}
                
            </section> <!-- END SECTION BLOGS -->
        @endif
@endsection

@section('curve')
    <div class="container-fluid d-none" id="curve-container">
        <div class="curve-box">
            <div class="overflow-hidden">
                <svg class="curve" preserveAspectRatio="none" width="1440" height="86" viewBox="0 0 1440 86" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 85.662C240 29.1253 480 0.857 720 0.857C960 0.857 1200 29.1253 1440 85.662V0H0V85.662Z"></path>
                </svg>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{URL::asset('plugins/slick/slick.min.js')}}"></script>  
    <script src="{{URL::asset('plugins/aos/aos.js')}}"></script> 
    <script src="{{URL::asset('plugins/animatedheadline/jquery.animatedheadline.min.js')}}"></script> 
    <script src="{{URL::asset('js/frontend.js')}}"></script>  
    <script type="text/javascript">
		$(function () {

            $('.word-container').animatedHeadline({
                animationType: "slide",
                animationDelay: 2500,
                barAnimationDelay: 3800,
                barWaiting: 800,
                lettersDelay: 50,
                typeLettersDelay: 150,
                selectionDuration: 500,
                typeAnimationDelay: 1300,
                revealDuration: 600,
                revealAnimationDelay: 1500
            });

            AOS.init();

		});    
    </script>
@endsection
        
        
       
        
       
    

