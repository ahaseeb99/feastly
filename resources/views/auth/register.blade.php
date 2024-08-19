@extends('layouts.auth')

@section('css')
	<!-- Data Table CSS -->
	<link href="{{URL::asset('plugins/awselect/awselect.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
    @if (config('frontend.maintenance') == 'on')			
        <div class="container h-100vh">
            <div class="row text-center h-100vh align-items-center">
                <div class="col-md-12">
                    <img src="{{ URL::asset('img/files/maintenance.png') }}" alt="Maintenance Image">
                    <h2 class="mt-4 font-weight-bold">{{ __('We are just tuning up a few things') }}.</h2>
                    <h5>{{ __('We apologize for the inconvenience but') }} <span class="font-weight-bold text-info">{{ config('app.name') }}</span> {{ __('is currenlty undergoing planned maintenance') }}.</h5>
                </div>
            </div>
        </div>
    @else
        @if (config('settings.registration') == 'enabled')
            <div class="container-fluid h-100vh ">
                <div class="row login-background justify-content-center">
                    <div class="col-md-6 col-sm-12" id="login-responsive"> 
                        <div class="row justify-content-center">
                            <div class="col-lg-7 mx-auto">
                                <div class="card-body pt-8">

                                    <div class="dropdown header-locale" id="frontend-local-login">
                                        <a class="icon" data-bs-toggle="dropdown">
                                            <span class="fs-12 mr-4"><i class="fa-solid text-black fs-16 mr-2 fa-globe"></i>{{ ucfirst(Config::get('locale')[App::getLocale()]['code']) }}</span>
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
                                    
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf                                
                                        
                                        <h3 class="text-center login-title mb-8">{{__('Sign Up to')}} <span class="text-info"><a href="{{ url('/') }}">{{ config('app.name') }}</a></span></h3>

                                        @if (config('settings.oauth_login') == 'enabled')
                                            <div class="divider">
                                                <div class="divider-text text-muted">
                                                    <small>{{__('Continue With Your Social Media Account')}}</small>
                                                </div>
                                            </div>

                                            <div class="social-logins-box text-center">
                                                @if(config('services.facebook.enable') == 'on')<a href="{{ url('/auth/redirect/facebook') }}" class="social-login-button" id="login-facebook"><i class="fa-brands fa-facebook mr-2 fs-16"></i>{{ __('Sign In with Facebook') }}</a>@endif
                                                @if(config('services.twitter.enable') == 'on')<a href="{{ url('/auth/redirect/twitter') }}" class="social-login-button" id="login-twitter"><i class="fa-brands fa-twitter mr-2 fs-16"></i>{{ __('Sign In with Twitter') }}</a>@endif	
                                                @if(config('services.google.enable') == 'on')<a href="{{ url('/auth/redirect/google') }}" class="social-login-button" id="login-google"><i class="fa-brands fa-google mr-2 fs-16"></i>{{ __('Sign In with Google') }}</a>@endif	
                                                @if(config('services.linkedin.enable') == 'on')<a href="{{ url('/auth/redirect/linkedin') }}" class="social-login-button" id="login-linkedin"><i class="fa-brands fa-linkedin mr-2 fs-16"></i>{{ __('Sign In with Linkedin') }}</a>@endif	
                                            </div>

                                            <div class="divider">
                                                <div class="divider-text text-muted">
                                                    <small>{{ __('or register with email') }}</small>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="input-box mb-4">                             
                                            <label for="name" class="fs-12 font-weight-bold text-md-right">{{ __('Full Name') }}</label>
                                            <input id="name" type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" autocomplete="off" autofocus placeholder="{{ __('First and Last Names') }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror                            
                                        </div>

                                        <div class="input-box mb-4">                             
                                            <label for="email" class="fs-12 font-weight-bold text-md-right">{{ __('Email Address') }}</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="off"  placeholder="{{ __('Email Address') }}" required>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror                            
                                        </div>

                                        <div class="input-box mb-4">                             
                                            <label for="country" class="fs-12 font-weight-bold text-md-right">{{ __('Country') }}</label>
                                            <select id="user-country" name="country" data-placeholder="{{ __('Select Your Country') }}" required>	
                                                <option value="">Select a country...</option>
      
                            <option value="Andorra">Andorra</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                  
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bhutan">Bhutan</option>
                
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Cabo Verde">Cabo Verde</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Canada">Canada</option>
                            <option value="Chile">Chile</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
        
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Eswatini">Eswatini</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guatemala">Guatemala</option>
     
                            <option value="Guyana">Guyana</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
      
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Ivory Coast">Ivory Coast</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lesotho">Lesotho</option>
    
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                          
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
            
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Romania">Romania</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
    
                            <option value="Seychelles">Seychelles</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="South Korea">South Korea</option>
                            <option value="Spain">Spain</option>
    
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Ukraine">Ukraine</option>
    
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City">Vatican City</option>
           
                            <option value="Zambia">Zambia</option>								
                                            </select>
                                            @error('country')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror                            
                                        </div>

                                        <div class="input-box">                            
                                            <label for="password-input" class="fs-12 font-weight-bold text-md-right">{{ __('Password') }}</label>
                                            <input id="password-input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off" placeholder="{{ __('Password') }}">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $message }}
                                                </span>
                                            @enderror                            
                                        </div>

                                        <div class="input-box">
                                            <label for="password-confirm" class="fs-12 font-weight-bold text-md-right">{{ __('Confirm Password') }}</label>                       
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off" placeholder="{{ __('Confirm Password') }}">                        
                                        </div>

                                        <div class="form-group mb-3">  
                                            <div class="d-flex">                        
                                                <label class="custom-switch">
                                                    <input type="checkbox" class="custom-switch-input" name="agreement" id="agreement" {{ old('remember') ? 'checked' : '' }} required>
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description fs-10 text-muted"> I confirm that I have read <a href="{{ route('terms') }}" class="text-info">{{__('Terms and Conditions')}}</a> {{__('and')}} <a href="{{ route('privacy') }}" class="text-info">Privacy Notice</a></span>
                                                </label>   
                                            </div>
                                        </div>

                                        <input type="hidden" name="recaptcha" id="recaptcha">

                                        <div class="text-center">
                                            <div class="form-group mb-0">                        
                                                <button type="submit" class="btn btn-primary font-weight-bold login-main-button">{{ __('Sign Up') }}</button>              
                                            </div>                        
                                        
                                            <p class="fs-10 text-muted pt-3 mb-0">{{ __('Already have an account?') }}</p>
                                            <a href="{{ route('login') }}"  class="fs-12 font-weight-bold special-action-sign">{{ __('Sign In') }}</a>                                             
                                        </div>
                                    </form>
                                </div> 
                            </div>      
                             <p style="text-align: center; opacity: 0.4; margin: 20px;font-size: 12px;width: 300px;">NextGenAI s.r.o. | 21477116 |
Osadní 869/32, Holešovice, 170 00 Prague 7</p>

<style>
    .text-info {
    color: #DABDC6 !important;
}
.btn-primary {
background: #DABDC6 !important;
border-color: #DABDC6 !important;
}
</style>
                        </div>
                    </div>
                        
                    <div class="col-md-6 col-sm-12 text-center background-special align-middle p-0" id="login-background">
                        <div class="login-bg">
                            <img src="{{ URL::asset('img/frontend/backgrounds/login.webp') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        @else
            <h5 class="text-center pt-9">{{__('New user registration is disabled currently')}}</h5>
        @endif
    @endif
@endsection

@section('js')
	<!-- Awselect JS -->
	<script src="{{URL::asset('plugins/awselect/awselect.min.js')}}"></script>
	<script src="{{URL::asset('js/awselect.js')}}"></script>

    @if (config('services.google.recaptcha.enable') == 'on')
         <!-- Google reCaptcha JS -->
        <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.google.recaptcha.site_key') }}"></script>
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ config('services.google.recaptcha.site_key') }}', {action: 'contact'}).then(function(token) {
                    if (token) {
                    document.getElementById('recaptcha').value = token;
                    }
                });
            });
        </script>
    @endif
   
@endsection
