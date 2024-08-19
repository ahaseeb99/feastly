<?php $__env->startSection('css'); ?>
	<!-- Data Table CSS -->
	<link href="<?php echo e(URL::asset('plugins/awselect/awselect.min.css')); ?>" rel="stylesheet" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(config('frontend.maintenance') == 'on'): ?>			
        <div class="container h-100vh">
            <div class="row text-center h-100vh align-items-center">
                <div class="col-md-12">
                    <img src="<?php echo e(URL::asset('img/files/maintenance.png')); ?>" alt="Maintenance Image">
                    <h2 class="mt-4 font-weight-bold"><?php echo e(__('We are just tuning up a few things')); ?>.</h2>
                    <h5><?php echo e(__('We apologize for the inconvenience but')); ?> <span class="font-weight-bold text-info"><?php echo e(config('app.name')); ?></span> <?php echo e(__('is currenlty undergoing planned maintenance')); ?>.</h5>
                </div>
            </div>
        </div>
    <?php else: ?>
        <?php if(config('settings.registration') == 'enabled'): ?>
            <div class="container-fluid h-100vh ">
                <div class="row login-background justify-content-center">
                    <div class="col-md-6 col-sm-12" id="login-responsive"> 
                        <div class="row justify-content-center">
                            <div class="col-lg-7 mx-auto">
                                <div class="card-body pt-8">

                                    <div class="dropdown header-locale" id="frontend-local-login">
                                        <a class="icon" data-bs-toggle="dropdown">
                                            <span class="fs-12 mr-4"><i class="fa-solid text-black fs-16 mr-2 fa-globe"></i><?php echo e(ucfirst(Config::get('locale')[App::getLocale()]['code'])); ?></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow animated">
                                            <div class="local-menu">
                                                <?php $__currentLoopData = Config::get('locale'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $language): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($lang != App::getLocale()): ?>
                                                        <a href="<?php echo e(route('locale', $lang)); ?>" class="dropdown-item d-flex">
                                                            <div class="text-info"><i class="flag flag-<?php echo e($language['flag']); ?> mr-3"></i></div>
                                                            <div>
                                                                <span class="font-weight-normal fs-12"><?php echo e($language['display']); ?></span>
                                                            </div>
                                                        </a>                                        
                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <form method="POST" action="<?php echo e(route('register')); ?>">
                                        <?php echo csrf_field(); ?>                                
                                        
                                        <h3 class="text-center login-title mb-8"><?php echo e(__('Sign Up to')); ?> <span class="text-info"><a href="<?php echo e(url('/')); ?>"><?php echo e(config('app.name')); ?></a></span></h3>

                                        <?php if(config('settings.oauth_login') == 'enabled'): ?>
                                            <div class="divider">
                                                <div class="divider-text text-muted">
                                                    <small><?php echo e(__('Continue With Your Social Media Account')); ?></small>
                                                </div>
                                            </div>

                                            <div class="social-logins-box text-center">
                                                <?php if(config('services.facebook.enable') == 'on'): ?><a href="<?php echo e(url('/auth/redirect/facebook')); ?>" class="social-login-button" id="login-facebook"><i class="fa-brands fa-facebook mr-2 fs-16"></i><?php echo e(__('Sign In with Facebook')); ?></a><?php endif; ?>
                                                <?php if(config('services.twitter.enable') == 'on'): ?><a href="<?php echo e(url('/auth/redirect/twitter')); ?>" class="social-login-button" id="login-twitter"><i class="fa-brands fa-twitter mr-2 fs-16"></i><?php echo e(__('Sign In with Twitter')); ?></a><?php endif; ?>	
                                                <?php if(config('services.google.enable') == 'on'): ?><a href="<?php echo e(url('/auth/redirect/google')); ?>" class="social-login-button" id="login-google"><i class="fa-brands fa-google mr-2 fs-16"></i><?php echo e(__('Sign In with Google')); ?></a><?php endif; ?>	
                                                <?php if(config('services.linkedin.enable') == 'on'): ?><a href="<?php echo e(url('/auth/redirect/linkedin')); ?>" class="social-login-button" id="login-linkedin"><i class="fa-brands fa-linkedin mr-2 fs-16"></i><?php echo e(__('Sign In with Linkedin')); ?></a><?php endif; ?>	
                                            </div>

                                            <div class="divider">
                                                <div class="divider-text text-muted">
                                                    <small><?php echo e(__('or register with email')); ?></small>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        <div class="input-box mb-4">                             
                                            <label for="name" class="fs-12 font-weight-bold text-md-right"><?php echo e(__('Full Name')); ?></label>
                                            <input id="name" type="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" autocomplete="off" autofocus placeholder="<?php echo e(__('First and Last Names')); ?>">
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <?php echo e($message); ?>

                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                            
                                        </div>

                                        <div class="input-box mb-4">                             
                                            <label for="email" class="fs-12 font-weight-bold text-md-right"><?php echo e(__('Email Address')); ?></label>
                                            <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" autocomplete="off"  placeholder="<?php echo e(__('Email Address')); ?>" required>
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <?php echo e($message); ?>

                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                            
                                        </div>

                                        <div class="input-box mb-4">                             
                                            <label for="country" class="fs-12 font-weight-bold text-md-right"><?php echo e(__('Country')); ?></label>
                                            <select id="user-country" name="country" data-placeholder="<?php echo e(__('Select Your Country')); ?>" required>	
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
                                            <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <?php echo e($message); ?>

                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                            
                                        </div>

                                        <div class="input-box">                            
                                            <label for="password-input" class="fs-12 font-weight-bold text-md-right"><?php echo e(__('Password')); ?></label>
                                            <input id="password-input" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="off" placeholder="<?php echo e(__('Password')); ?>">
                                            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <?php echo e($message); ?>

                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>                            
                                        </div>

                                        <div class="input-box">
                                            <label for="password-confirm" class="fs-12 font-weight-bold text-md-right"><?php echo e(__('Confirm Password')); ?></label>                       
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off" placeholder="<?php echo e(__('Confirm Password')); ?>">                        
                                        </div>

                                        <div class="form-group mb-3">  
                                            <div class="d-flex">                        
                                                <label class="custom-switch">
                                                    <input type="checkbox" class="custom-switch-input" name="agreement" id="agreement" <?php echo e(old('remember') ? 'checked' : ''); ?> required>
                                                    <span class="custom-switch-indicator"></span>
                                                    <span class="custom-switch-description fs-10 text-muted"> I confirm that I have read <a href="<?php echo e(route('terms')); ?>" class="text-info"><?php echo e(__('Terms and Conditions')); ?></a> <?php echo e(__('and')); ?> <a href="<?php echo e(route('privacy')); ?>" class="text-info">Privacy Notice</a></span>
                                                </label>   
                                            </div>
                                        </div>

                                        <input type="hidden" name="recaptcha" id="recaptcha">

                                        <div class="text-center">
                                            <div class="form-group mb-0">                        
                                                <button type="submit" class="btn btn-primary font-weight-bold login-main-button"><?php echo e(__('Sign Up')); ?></button>              
                                            </div>                        
                                        
                                            <p class="fs-10 text-muted pt-3 mb-0"><?php echo e(__('Already have an account?')); ?></p>
                                            <a href="<?php echo e(route('login')); ?>"  class="fs-12 font-weight-bold special-action-sign"><?php echo e(__('Sign In')); ?></a>                                             
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
                            <img src="<?php echo e(URL::asset('img/frontend/backgrounds/login.webp')); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <h5 class="text-center pt-9"><?php echo e(__('New user registration is disabled currently')); ?></h5>
        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
	<!-- Awselect JS -->
	<script src="<?php echo e(URL::asset('plugins/awselect/awselect.min.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('js/awselect.js')); ?>"></script>

    <?php if(config('services.google.recaptcha.enable') == 'on'): ?>
         <!-- Google reCaptcha JS -->
        <script src="https://www.google.com/recaptcha/api.js?render=<?php echo e(config('services.google.recaptcha.site_key')); ?>"></script>
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('<?php echo e(config('services.google.recaptcha.site_key')); ?>', {action: 'contact'}).then(function(token) {
                    if (token) {
                    document.getElementById('recaptcha').value = token;
                    }
                });
            });
        </script>
    <?php endif; ?>
   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u960948325/domains/feastly.co/public_html/resources/views/auth/register.blade.php ENDPATH**/ ?>