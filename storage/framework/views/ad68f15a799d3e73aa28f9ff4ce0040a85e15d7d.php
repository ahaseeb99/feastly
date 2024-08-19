<?php $__env->startSection('page-header'); ?>
	<!-- PAGE HEADER -->
	<div class="page-header mt-5-7">
		<div class="page-leftheader">
			<h4 class="page-title mb-0"><?php echo e(__('Subscription Plans')); ?></h4>
			<ol class="breadcrumb mb-2">
				<li class="breadcrumb-item"><a href="<?php echo e(route('user.dashboard')); ?>"><i class="fa-solid fa-box-circle-check mr-2 fs-12"></i><?php echo e(__('User')); ?></a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="<?php echo e(route('user.plans')); ?>"> <?php echo e(__('Pricing Plans')); ?></a></li>
			</ol>
		</div>
	</div>
	<!-- END PAGE HEADER -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>	
	<div class="card border-0 pt-2">
		<div class="card-body">			
			
			<?php if($monthly || $yearly || $prepaid || $lifetime): ?>

		

			

				<div class="tabs-menu-body">
					<div class="tab-content">

						<?php if($prepaid): ?>
							<div class="tab-pane <?php if((!$monthly && $prepaid) && (!$yearly && $prepaid)): ?> active <?php else: ?> '' <?php endif; ?>" id="prepaid">

								<?php if($prepaids->count()): ?>
													
									<div class="row justify-content-md-center">
									
										<?php $__currentLoopData = $prepaids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prepaid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>																			
											<div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
												<div class="price-card pl-3 pr-3 pt-2 mb-6">
													<div class="card p-4 pl-5 prepaid-cards <?php if($prepaid->featured): ?> price-card-border <?php endif; ?>">
														<?php if($prepaid->featured): ?>
															<span class="plan-featured-prepaid"><?php echo e(__('Most Popular')); ?></span>
														<?php endif; ?>
														<div class="plan prepaid-plan">
															<div class="plan-title"><?php echo e($prepaid->plan_name); ?> </div>
															<div class="plan-cost-wrapper mt-2 text-center mb-3 p-1"><span class="plan-cost">€<?php if(config('payment.decimal_points') == 'allow'): ?> <?php echo e(number_format((float)$prepaid->price, 2)); ?> <?php else: ?> <?php echo e(number_format($prepaid->price)); ?> <?php endif; ?></span><span class="prepaid-currency-sign text-muted"><?php echo e($prepaid->currency); ?></span></div>
															<p class="fs-12 mb-3 text-muted"><?php echo e(__('Included Credits')); ?></p>	
															<div class="credits-box">
																<?php if($prepaid->words != 0): ?> <p class="fs-12 mt-2 mb-0"><i class="fa-solid fa-check fs-14 mr-2 text-success"></i> <?php echo e(__('Credits Included')); ?>: <span class="ml-2 font-weight-bold text-primary"><?php echo e(number_format($prepaid->words)); ?></span></p><?php endif; ?>
																 
															</div>
															<div class="text-center action-button mt-2 mb-2">
																<a href="#" class="btn mt-4 btn-primary-pricing choose-plan-btn" 
																
																data-price="<?php echo e(number_format((float)$prepaid->price, 2)); ?>" data-words-count="<?php echo e(number_format($prepaid->words)); ?>"
																
																data-plan-id="<?php echo e(number_format($prepaid->id)); ?>"><?php echo e(__('Select Package')); ?></a> 
															</div>																								                                                                          
														</div>							
													</div>	
												</div>							
											</div>										
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>						

									</div>

								<?php else: ?>
									<div class="row text-center">
										<div class="col-sm-12 mt-6 mb-6">
											<h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No Prepaid plans were set yet')); ?></h6>
										</div>
									</div>
								<?php endif; ?>

							</div>			
						<?php endif; ?>	
						
						
					<div class="tab-pane active" id="custom">
    <div class="row justify-content-md-center">
        <div class="col-lg-4 col-md-6 col-sm-12" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" data-aos-duration="400">
            <div class="price-card pl-3 pr-3 pt-2 mb-6">
                <div class="card p-4 pl-5 prepaid-cards">
                    <div class="plan prepaid-plan">
                        <div class="plan-title">Custom</div>
                        <div class="plan-cost-wrapper mt-2 text-center mb-3 p-1">
                            <span class="plan-cost">from €0.99</span>
                            <span class="prepaid-currency-sign text-muted">EUR</span>
                        </div>
                        <p class="fs-12 mb-3 text-muted">Any amount of credits</p>
                        <div class="credits-box">
                            <p class="fs-12 mt-2 mb-0">
                                <svg class="svg-inline--fa fa-check fs-14 mr-2 text-success" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"></path></svg>
                                Credits Included: <span class="ml-2 font-weight-bold text-primary"><span id="wordCountDisplay">100</span>
</span>
                            </p>
                        </div>
                        <div class="range-slider mt-4 mb-4">
                            <input type="range" min="100" max="100000" value="100" class="slider" id="wordCountSlider" style="width: 100%">
                        </div>
                        <div class="text-center action-button mt-2 mb-2">
                            <a href="#" class="btn btn-primary-pricing choose-plan-btn" id="choosePlanButton" data-price="0.99" data-plan-id="custom" data-words-count="100">Choose pack for €0.99</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

		    
					</div>
				</div>
			
			<?php else: ?>
				<div class="row text-center">
					<div class="col-sm-12 mt-6 mb-6">
						<h6 class="fs-12 font-weight-bold text-center"><?php echo e(__('No Subscriptions or Prepaid plans were set yet')); ?></h6>
					</div>
				</div>
			<?php endif; ?>

		</div>
	</div>
<?php $__env->stopSection(); ?>

<div id="addressModal" class="modal" tabindex="-1" role="dialog" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.4); z-index: 9999;">
  <div class="modal-dialog" role="document" style="position: relative; margin: auto; top: 50%; transform: translateY(-50%); max-width: 800px;">
    <div class="modal-content" style="background-color: #fff; padding: 20px; border-radius: 5px;">
      <div class="modal-header" style="display: block !important; padding: 10px; ">
        <h5 class="modal-title" style="margin-bottom: 20px;">Address Details</h5>
        <p style="margin-bottom: 24px">Just one last thing, we need to take your address details before we can proceed to the payment</p>
        <button type="button" id="close-pay-modal" data-dismiss="modal" aria-label="Close" style="background: none; border: none; font-size: 24px; cursor: pointer;top: 10px; right: 10px;position: absolute;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 20px;">
        <form id="addressForm" style="grid-column: 1 / -1;">
          <div style="display: flex;">
            <div style="flex-grow: 1; margin-right: 20px;">
              <div class="input-box mb-4">
                <label for="address1" class="fs-12 font-weight-bold text-md-right">Address</label>
                <input id="address1" type="text" class="form-control" name="address1" autocomplete="off" placeholder="123 Main St" required>
              </div>
              <div class="input-box mb-4">
                <label for="city" class="fs-12 font-weight-bold text-md-right">City</label>
                <input id="city" type="text" class="form-control" name="city" autocomplete="off" placeholder="London" required>
              </div>
              <div class="input-box mb-4">
                <label for="state" class="fs-12 font-weight-bold text-md-right">County</label>
                <input id="state" type="text" class="form-control" name="state" autocomplete="off" placeholder="Greater London" required>
              </div>
            </div>
            <div style="flex-grow: 1;">
              <div class="input-box mb-4">
                <label for="zipCode" class="fs-12 font-weight-bold text-md-right">Postcode</label>
                <input id="zipCode" type="text" class="form-control" name="zipCode" autocomplete="off" placeholder="SW1A 1AA" required>
              </div>
              <div class="input-box mb-4">
                <label for="country" class="fs-12 font-weight-bold text-md-right">Country</label>
                              <select id="country" name="country" class="form-control" style="border: 1px solid #efefef; border-radius: 10px;width: 100%" required="">
                    <option value="">Select a country...</option>
                
                    <option value="AD">Andorra</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BT">Bhutan</option>
                
                    <option value="BW">Botswana</option>
                    <option value="BR">Brazil</option>
                    <option value="BN">Brunei</option>
                    <option value="CV">Cabo Verde</option>
                    <option value="KH">Cambodia</option>
                    <option value="CA">Canada</option>
                    <option value="CL">Chile</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                
                    <option value="CR">Costa Rica</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="TL">East Timor (Timor-Leste)</option>
                    <option value="EC">Ecuador</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="SZ">Eswatini</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GR">Greece</option>
                    <option value="GD">Grenada</option>
                    <option value="GT">Guatemala</option>
                
                    <option value="GY">Guyana</option>
                    <option value="HN">Honduras</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                
                    <option value="IE">Ireland</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="CI">Ivory Coast</option>
                    <option value="JP">Japan</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LV">Latvia</option>
                    <option value="LS">Lesotho</option>
                
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NL">Netherlands</option>
                    <option value="NZ">New Zealand</option>
                
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestine</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="RO">Romania</option>
                    <option value="RW">Rwanda</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                
                    <option value="SC">Seychelles</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="KR">South Korea</option>
                    <option value="ES">Spain</option>
                
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="TW">Taiwan</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TH">Thailand</option>
                    <option value="TG">Togo</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                
                    <option value="TM">Turkmenistan</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UA">Ukraine</option>
                
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VA">Vatican City</option>
                
                    <option value="ZM">Zambia</option>
                </select>

              </div>
            
            </div>
            
          </div>
            <div class="flex" style="display: flex;padding-top: 20px;border-top: 1px solid #efefef;margin-bottom: -20px">
               <div class="input-box mb-4 mr-4">
            <h3 style="font-weight: bold; margin-bottom: 10px;font-size: 14px;">Select Currency</h3>
            <select id="currency" name="currency" class="form-control" style="border: 1px solid #efefef; border-radius: 10px;width: 100%" required>
                  <!-- Options will be populated dynamically -->
                </select>
              </div>
       
                   <div id="paymentMethods" class="mb-4">
            <h3 style="font-weight: bold; margin-bottom: 10px; font-size: 14px;">Select Payment Method</h3>
            <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap;">
              <label style="display: none; align-items: center; cursor: pointer; margin: 5px;">
                <input type="radio" name="paymentMethod" value="blik" style="margin-right: 10px;" required>
                <img src="https://bakeboss.online/public/assets/image/blik.svg" alt="Blik" style="height: 30px;">
              </label>
              <label style="display: flex; align-items: center; cursor: pointer; margin: 5px;">
                <input type="radio" name="paymentMethod" value="eps" style="margin-right: 10px;" required>
                <img src="https://bakeboss.online/public/assets/image/eps.svg" alt="EPS" style="height: 30px;">
              </label>
              <label style="display: flex; align-items: center; cursor: pointer; margin: 5px;">
                <input type="radio" name="paymentMethod" value="mbway" style="margin-right: 10px;" required>
                <img src="https://bakeboss.online/public/assets/image/mb.svg" alt="MB" style="height: 30px;">
              </label>
              <label style="display: flex; align-items: center; cursor: pointer; margin: 5px;">
                <input type="radio" name="paymentMethod" value="multibanco" style="margin-right: 10px;" required>
                <img src="https://bakeboss.online/public/assets/image/mba.svg" alt="MBA" style="height: 30px;">
              </label>
              <label style="display: none; align-items: center; cursor: pointer; margin: 5px;">
                <input type="radio" name="paymentMethod" value="p24" style="margin-right: 10px;" required>
                <img src="https://bakeboss.online/public/assets/image/p_24.svg" alt="P24" style="height: 30px;">
              </label>
            </div>
          </div>
             
              </div>
        </form>
      </div>
      <div class="modal-footer"  style="display: flex;align-items: center;flex-flow: revert;justify-content: space-between;padding-top: 20px;border-top: 1px solid #efefef;">
          <label>
            <input type="checkbox" id="tacCheckbox" required>
            I confirm that I have read and agree to the <a href="https://feastly.co/terms-and-conditions" target="_blank" style="text-decoration: underline;">Terms and Conditions</a> and <a href="https://feastly.co/privacy-policy" target="_blank"  style="text-decoration: underline;">Privacy Notice.</a>

          </label>
        <button class="btn mt-4 btn-primary-pricing" id="submitAddress" type="submit" disabled style="width: 300px">Proceed to payment</button>
      </div>
    </div>
  </div>
</div>

<script>
  document.getElementById('tacCheckbox').addEventListener('change', function() {
    document.getElementById('submitAddress').disabled = !this.checked;
  });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
          fetch('https://www.floatrates.com/daily/eur.json')
        .then(response => response.json())
        .then(data => {
            const plnRate = data.pln.rate;
            localStorage.setItem('eurToPlnRate', plnRate);
        })
        .catch(error => console.error('Error fetching currency rates:', error));
        const addressModal = document.getElementById('addressModal');
        const addressForm = document.getElementById('addressForm');
            const currencySelect = document.getElementById('currency');
    const paymentMethodsContainer = document.getElementById('paymentMethods');

        document.getElementById('close-pay-modal').addEventListener('click', function() {
                            addressModal.style.display = 'none';

            
        })
        document.querySelectorAll('.choose-plan-btn').forEach(button => {
            button.addEventListener('click', function() {
                const userEmail = document.body.getAttribute('data-email');
                const userName = document.body.getAttribute('data-name');
                window.price = this.getAttribute('data-price');
                console.log(this.getAttribute('data-price'), window.price)
                window.planId = this.getAttribute('data-plan-id');
                window.wordsCount = this.getAttribute('data-words-count');

                // Show the address modal
                addressModal.style.display = 'block';

                // Handle form submission
                      populateCurrencySelect();
               
            });
        });
        document.getElementById('submitAddress').addEventListener('click', function() {
              const userEmail = document.body.getAttribute('data-email');
               const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked');
                const userName = document.body.getAttribute('data-name');
                    const formData = new FormData(addressForm);
                    const addressData = {
                        first_name: userName,
                        last_name: userName,
                        address1: formData.get('address1'),
                        city: formData.get('city'),
                        state: formData.get('state'),
                                                provider: selectedPaymentMethod.value,
                        zip_code: formData.get('zipCode'),
                        country: formData.get('country'),
                        phone: "12345678",
                        cell_phone: "12345678",
                        email: userEmail,
                        amount: window.price,
                        plan_id: window.planId,
                        words_count: window.wordsCount || ''
                    };

                    fetch('https://feastly-api.vercel.app/api/checkout', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },
                        body: JSON.stringify(addressData)
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.redirectUrl) {
                            window.location.href = data.redirectUrl;
                        }
                    })
                    .catch(error => console.error('Error:', error));
                });
        document.getElementById('wordCountSlider').addEventListener('input', function() {
            const wordCount = parseInt(this.value);
            const price = calculatePrice(wordCount);
            window.price = price;
            document.getElementById('choosePlanButton').textContent = `Choose pack for €${price.toFixed(2)}`;
            document.getElementById('choosePlanButton').setAttribute('data-price', price.toFixed(2));
            document.getElementById('choosePlanButton').setAttribute('data-words-count', wordCount);
            document.getElementById('wordCountDisplay').textContent = `${wordCount.toLocaleString()} `;
        });
  function populateCurrencySelect() {
        const eurPrice = parseFloat(window.price);
        // Assuming you have a way to get the PLN exchange rate
             const plnRate = parseFloat(localStorage.getItem('eurToPlnRate'));

        const plnPrice = eurPrice * plnRate;

        currencySelect.innerHTML = `
            <option value="EUR" selected>€${eurPrice.toFixed(2)} EUR</option>
            <option value="PLN">${plnPrice.toFixed(2)} PLN</option>
        `;

        currencySelect.addEventListener('change', function() {
            updatePaymentMethods(this.value);
        });
    }

    function updatePaymentMethods(currency) {
        const blikOption = paymentMethodsContainer.querySelector('input[value="blik"]').parentElement;
        const p24Option = paymentMethodsContainer.querySelector('input[value="p24"]').parentElement;
        const otherOptions = paymentMethodsContainer.querySelectorAll('input:not([value="blik"]):not([value="p24"])');

        if (currency === 'EUR') {
            blikOption.style.display = 'none';
            p24Option.style.display = 'none';
            otherOptions.forEach(option => {
                option.parentElement.style.display = 'flex';
            });
        } else if (currency === 'PLN') {
            blikOption.style.display = 'flex';
            p24Option.style.display = 'flex';
            otherOptions.forEach(option => {
                option.parentElement.style.display = 'none';
            });
        }
    }

        function calculatePrice(words) {
            // Adjust the formula according to your pricing logic
            // This is a placeholder formula; adjust as necessary to scale up to 1000 euros
            const maxPrice = 1000;
            const minPrice = 0.99;
            const pricePerWord = (maxPrice - minPrice) / (100000 - 100);
            return minPrice + (words - 100) * pricePerWord;
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const successModal = document.getElementById('successModal');

        // Check if the URL contains the success fragment
        if (window.location.hash === '#success') {
            successModal.style.display = 'block';
        }

        // Close the success modal when the close button is clicked
        successModal.querySelector('.close').addEventListener('click', function() {
            successModal.style.display = 'none';
        });

        // Close the success modal when the "Close" button is clicked
        successModal.querySelector('.btn-primary-pricing').addEventListener('click', function() {
            successModal.style.display = 'none';
        });
    });
</script>
<!-- Success Modal -->
    <div id="successModal" class="modal" tabindex="-1" role="dialog" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.4); z-index: 9999;">
        <div class="modal-dialog" role="document" style="position: relative; margin: auto; top: 50%; transform: translateY(-50%); max-width: 500px;">
            <div class="modal-content" style="background-color: #fff; padding: 20px; border-radius: 5px;">
                <div class="modal-header">
                    <h5 class="modal-title">Payment Successful</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background: none; border: none; font-size: 24px; cursor: pointer; position: absolute; top: 10px; right: 10px;">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Congratulations! You have successfully paid for the plan.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn mt-4 btn-primary-pricing" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u960948325/domains/feastly.co/public_html/resources/views/user/plans/index.blade.php ENDPATH**/ ?>