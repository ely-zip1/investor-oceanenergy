<div class="main-content">
  <section class="section">
    <div class="section-header section-header-custom">
      <h1>Account Settings</h1>
    </div>
    <div class="section-body">
      <div class="row row-user-details">
        <div class="col-md-6">
          <i>Account name: &nbsp;&nbsp;&nbsp;&nbsp;</i>
            <?php echo $account_name; ?>
        </div>
        <div class="col-md-6">
          <i>Registration date: &nbsp;&nbsp;&nbsp;&nbsp;</i>
          <?php echo $date_registered; ?>
        </div>
        <div class="col-md-6">
          <i>Email address: &nbsp;&nbsp;&nbsp;&nbsp;</i>
          <?php echo $email_address; ?>
        </div>
        <div class="col-md-6">
          <i>Full name: &nbsp;&nbsp;&nbsp;&nbsp;</i>
          <?php echo $full_name; ?>
        </div>
      </div>

      <div class="row">
				<div class="col-lg-12">
					<div class="reset-password">
						<div class="alert alert-success alert-dismissible"
							<?php if(!isset($password_update_success)){echo 'style="display: none;"';} ?>>
							<div class="alert-body">
								<button class="close" data-dismiss="alert">
								<span>×</span>
								</button>
								Password has been updated.
							</div>
						</div>
						<?php echo form_open('account_settings'); ?>
						<!-- <form action="/action_page.php" method="get"> -->
						<div class="form-group">
							<label for="new_password" class="form-label">New Password</label>
							<input type="password" name="new_password"
								class="form-control <?php if(strlen(form_error('new_password')) > 0){echo "is-invalid";} ?>" autofocus>
							<div class="invalid-feedback">
								<?php echo form_error('new_password');?>
							</div>
						</div>
						<div class="form-group">
							<label for="confirm_new_password" class="form-label">Confirm New Password</label>
							<input type="password" name="confirm_new_password" value=""
								class="form-control <?php if(strlen(form_error('confirm_new_password')) > 0){echo "is-invalid";} ?>">
							<div class="invalid-feedback">
								<?php echo form_error('confirm_new_password');?>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary btn-lg rounded-button" name="account_submit" value="reset_password"
								tabindex="4">
							Update
							</button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
      </div>

			<div class="row user-account-form">

				<?php echo form_open('account_settings'); ?>

				<div class="col-lg-12">
					<div class="row">
						<div class="col-12">
							<h2 class="section-title">Bank Account</h2>
							<div class="form-row">
								<div class="form-group col-md-3">
		              <label for="bank_name">Bank Name
		              </label>
		              <input id="bank_name" type="text" value="<?php if(set_value('bank_name','',true) == null){echo $bank_name;}else{ echo set_value('bank_name','',true);}?>"
		                     class="form-control <?php if(strlen(form_error('bank_name')) > 0){echo "is-invalid";} ?>" name="bank_name"
		                     autofocus />
		              <div class="invalid-feedback">
		                <?php echo form_error('bank_name');?>
		              </div>
		            </div>
								<div class="form-group col-md-3">
		              <label for="bank_account_name">Account Name
		              </label>
		              <input id="bank_account_name" type="text" value="<?php if(set_value('bank_account_name','',true) == null){echo $bank_account_name;}else{ echo set_value('bank_account_name','',true);}?>"
		                     class="form-control <?php if(strlen(form_error('bank_account_name')) > 0){echo "is-invalid";} ?>" name="bank_account_name"
		                     autofocus />
		              <div class="invalid-feedback">
		                <?php echo form_error('bank_account_name');?>
		              </div>
		            </div>
								<div class="form-group col-md-3">
		              <label for="bank_account_number">Account Number
		              </label>
		              <input id="bank_account_number" type="text" value="<?php if(set_value('bank_account_number','',true) == null){echo $bank_account_number;}else{ echo set_value('bank_account_number','',true);}?>"
		                     class="form-control <?php if(strlen(form_error('bank_account_number')) > 0){echo "is-invalid";} ?>" name="bank_account_number"
		                     autofocus />
		              <div class="invalid-feedback">
		                <?php echo form_error('bank_account_number');?>
		              </div>
		            </div>
                <div class="form-group col-md-3">
                  <label for="country">Country
                  </label>
                  <select id="country" name="country" class="form-control">
                    <?php if(isset($country_placeholder)){
                      echo $country_placeholder;
                    } ?>
                    <option value=""></option>
                     <option value="Afganistan">Afghanistan</option>
                     <option value="Albania">Albania</option>
                     <option value="Algeria">Algeria</option>
                     <option value="American Samoa">American Samoa</option>
                     <option value="Andorra">Andorra</option>
                     <option value="Angola">Angola</option>
                     <option value="Anguilla">Anguilla</option>
                     <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                     <option value="Argentina">Argentina</option>
                     <option value="Armenia">Armenia</option>
                     <option value="Aruba">Aruba</option>
                     <option value="Australia">Australia</option>
                     <option value="Austria">Austria</option>
                     <option value="Azerbaijan">Azerbaijan</option>
                     <option value="Bahamas">Bahamas</option>
                     <option value="Bahrain">Bahrain</option>
                     <option value="Bangladesh">Bangladesh</option>
                     <option value="Barbados">Barbados</option>
                     <option value="Belarus">Belarus</option>
                     <option value="Belgium">Belgium</option>
                     <option value="Belize">Belize</option>
                     <option value="Benin">Benin</option>
                     <option value="Bermuda">Bermuda</option>
                     <option value="Bhutan">Bhutan</option>
                     <option value="Bolivia">Bolivia</option>
                     <option value="Bonaire">Bonaire</option>
                     <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                     <option value="Botswana">Botswana</option>
                     <option value="Brazil">Brazil</option>
                     <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                     <option value="Brunei">Brunei</option>
                     <option value="Bulgaria">Bulgaria</option>
                     <option value="Burkina Faso">Burkina Faso</option>
                     <option value="Burundi">Burundi</option>
                     <option value="Cambodia">Cambodia</option>
                     <option value="Cameroon">Cameroon</option>
                     <option value="Canada">Canada</option>
                     <option value="Canary Islands">Canary Islands</option>
                     <option value="Cape Verde">Cape Verde</option>
                     <option value="Cayman Islands">Cayman Islands</option>
                     <option value="Central African Republic">Central African Republic</option>
                     <option value="Chad">Chad</option>
                     <option value="Channel Islands">Channel Islands</option>
                     <option value="Chile">Chile</option>
                     <option value="China">China</option>
                     <option value="Christmas Island">Christmas Island</option>
                     <option value="Cocos Island">Cocos Island</option>
                     <option value="Colombia">Colombia</option>
                     <option value="Comoros">Comoros</option>
                     <option value="Congo">Congo</option>
                     <option value="Cook Islands">Cook Islands</option>
                     <option value="Costa Rica">Costa Rica</option>
                     <option value="Cote DIvoire">Cote DIvoire</option>
                     <option value="Croatia">Croatia</option>
                     <option value="Cuba">Cuba</option>
                     <option value="Curaco">Curacao</option>
                     <option value="Cyprus">Cyprus</option>
                     <option value="Czech Republic">Czech Republic</option>
                     <option value="Denmark">Denmark</option>
                     <option value="Djibouti">Djibouti</option>
                     <option value="Dominica">Dominica</option>
                     <option value="Dominican Republic">Dominican Republic</option>
                     <option value="East Timor">East Timor</option>
                     <option value="Ecuador">Ecuador</option>
                     <option value="Egypt">Egypt</option>
                     <option value="El Salvador">El Salvador</option>
                     <option value="Equatorial Guinea">Equatorial Guinea</option>
                     <option value="Eritrea">Eritrea</option>
                     <option value="Estonia">Estonia</option>
                     <option value="Ethiopia">Ethiopia</option>
                     <option value="Falkland Islands">Falkland Islands</option>
                     <option value="Faroe Islands">Faroe Islands</option>
                     <option value="Fiji">Fiji</option>
                     <option value="Finland">Finland</option>
                     <option value="France">France</option>
                     <option value="French Guiana">French Guiana</option>
                     <option value="French Polynesia">French Polynesia</option>
                     <option value="French Southern Ter">French Southern Ter</option>
                     <option value="Gabon">Gabon</option>
                     <option value="Gambia">Gambia</option>
                     <option value="Georgia">Georgia</option>
                     <option value="Germany">Germany</option>
                     <option value="Ghana">Ghana</option>
                     <option value="Gibraltar">Gibraltar</option>
                     <option value="Great Britain">Great Britain</option>
                     <option value="Greece">Greece</option>
                     <option value="Greenland">Greenland</option>
                     <option value="Grenada">Grenada</option>
                     <option value="Guadeloupe">Guadeloupe</option>
                     <option value="Guam">Guam</option>
                     <option value="Guatemala">Guatemala</option>
                     <option value="Guinea">Guinea</option>
                     <option value="Guyana">Guyana</option>
                     <option value="Haiti">Haiti</option>
                     <option value="Hawaii">Hawaii</option>
                     <option value="Honduras">Honduras</option>
                     <option value="Hong Kong">Hong Kong</option>
                     <option value="Hungary">Hungary</option>
                     <option value="Iceland">Iceland</option>
                     <option value="Indonesia">Indonesia</option>
                     <option value="India">India</option>
                     <option value="Iran">Iran</option>
                     <option value="Iraq">Iraq</option>
                     <option value="Ireland">Ireland</option>
                     <option value="Isle of Man">Isle of Man</option>
                     <option value="Israel">Israel</option>
                     <option value="Italy">Italy</option>
                     <option value="Jamaica">Jamaica</option>
                     <option value="Japan">Japan</option>
                     <option value="Jordan">Jordan</option>
                     <option value="Kazakhstan">Kazakhstan</option>
                     <option value="Kenya">Kenya</option>
                     <option value="Kiribati">Kiribati</option>
                     <option value="Korea North">Korea North</option>
                     <option value="Korea Sout">Korea South</option>
                     <option value="Kuwait">Kuwait</option>
                     <option value="Kyrgyzstan">Kyrgyzstan</option>
                     <option value="Laos">Laos</option>
                     <option value="Latvia">Latvia</option>
                     <option value="Lebanon">Lebanon</option>
                     <option value="Lesotho">Lesotho</option>
                     <option value="Liberia">Liberia</option>
                     <option value="Libya">Libya</option>
                     <option value="Liechtenstein">Liechtenstein</option>
                     <option value="Lithuania">Lithuania</option>
                     <option value="Luxembourg">Luxembourg</option>
                     <option value="Macau">Macau</option>
                     <option value="Macedonia">Macedonia</option>
                     <option value="Madagascar">Madagascar</option>
                     <option value="Malaysia">Malaysia</option>
                     <option value="Malawi">Malawi</option>
                     <option value="Maldives">Maldives</option>
                     <option value="Mali">Mali</option>
                     <option value="Malta">Malta</option>
                     <option value="Marshall Islands">Marshall Islands</option>
                     <option value="Martinique">Martinique</option>
                     <option value="Mauritania">Mauritania</option>
                     <option value="Mauritius">Mauritius</option>
                     <option value="Mayotte">Mayotte</option>
                     <option value="Mexico">Mexico</option>
                     <option value="Midway Islands">Midway Islands</option>
                     <option value="Moldova">Moldova</option>
                     <option value="Monaco">Monaco</option>
                     <option value="Mongolia">Mongolia</option>
                     <option value="Montserrat">Montserrat</option>
                     <option value="Morocco">Morocco</option>
                     <option value="Mozambique">Mozambique</option>
                     <option value="Myanmar">Myanmar</option>
                     <option value="Nambia">Nambia</option>
                     <option value="Nauru">Nauru</option>
                     <option value="Nepal">Nepal</option>
                     <option value="Netherland Antilles">Netherland Antilles</option>
                     <option value="Netherlands">Netherlands (Holland, Europe)</option>
                     <option value="Nevis">Nevis</option>
                     <option value="New Caledonia">New Caledonia</option>
                     <option value="New Zealand">New Zealand</option>
                     <option value="Nicaragua">Nicaragua</option>
                     <option value="Niger">Niger</option>
                     <option value="Nigeria">Nigeria</option>
                     <option value="Niue">Niue</option>
                     <option value="Norfolk Island">Norfolk Island</option>
                     <option value="Norway">Norway</option>
                     <option value="Oman">Oman</option>
                     <option value="Pakistan">Pakistan</option>
                     <option value="Palau Island">Palau Island</option>
                     <option value="Palestine">Palestine</option>
                     <option value="Panama">Panama</option>
                     <option value="Papua New Guinea">Papua New Guinea</option>
                     <option value="Paraguay">Paraguay</option>
                     <option value="Peru">Peru</option>
                     <option value="Philippines">Philippines</option>
                     <option value="Pitcairn Island">Pitcairn Island</option>
                     <option value="Poland">Poland</option>
                     <option value="Portugal">Portugal</option>
                     <option value="Puerto Rico">Puerto Rico</option>
                     <option value="Qatar">Qatar</option>
                     <option value="Republic of Montenegro">Republic of Montenegro</option>
                     <option value="Republic of Serbia">Republic of Serbia</option>
                     <option value="Reunion">Reunion</option>
                     <option value="Romania">Romania</option>
                     <option value="Russia">Russia</option>
                     <option value="Rwanda">Rwanda</option>
                     <option value="St Barthelemy">St Barthelemy</option>
                     <option value="St Eustatius">St Eustatius</option>
                     <option value="St Helena">St Helena</option>
                     <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                     <option value="St Lucia">St Lucia</option>
                     <option value="St Maarten">St Maarten</option>
                     <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                     <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                     <option value="Saipan">Saipan</option>
                     <option value="Samoa">Samoa</option>
                     <option value="Samoa American">Samoa American</option>
                     <option value="San Marino">San Marino</option>
                     <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                     <option value="Saudi Arabia">Saudi Arabia</option>
                     <option value="Senegal">Senegal</option>
                     <option value="Seychelles">Seychelles</option>
                     <option value="Sierra Leone">Sierra Leone</option>
                     <option value="Singapore">Singapore</option>
                     <option value="Slovakia">Slovakia</option>
                     <option value="Slovenia">Slovenia</option>
                     <option value="Solomon Islands">Solomon Islands</option>
                     <option value="Somalia">Somalia</option>
                     <option value="South Africa">South Africa</option>
                     <option value="Spain">Spain</option>
                     <option value="Sri Lanka">Sri Lanka</option>
                     <option value="Sudan">Sudan</option>
                     <option value="Suriname">Suriname</option>
                     <option value="Swaziland">Swaziland</option>
                     <option value="Sweden">Sweden</option>
                     <option value="Switzerland">Switzerland</option>
                     <option value="Syria">Syria</option>
                     <option value="Tahiti">Tahiti</option>
                     <option value="Taiwan">Taiwan</option>
                     <option value="Tajikistan">Tajikistan</option>
                     <option value="Tanzania">Tanzania</option>
                     <option value="Thailand">Thailand</option>
                     <option value="Togo">Togo</option>
                     <option value="Tokelau">Tokelau</option>
                     <option value="Tonga">Tonga</option>
                     <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                     <option value="Tunisia">Tunisia</option>
                     <option value="Turkey">Turkey</option>
                     <option value="Turkmenistan">Turkmenistan</option>
                     <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                     <option value="Tuvalu">Tuvalu</option>
                     <option value="Uganda">Uganda</option>
                     <option value="United Kingdom">United Kingdom</option>
                     <option value="Ukraine">Ukraine</option>
                     <option value="United Arab Erimates">United Arab Emirates</option>
                     <option value="United States of America">United States of America</option>
                     <option value="Uraguay">Uruguay</option>
                     <option value="Uzbekistan">Uzbekistan</option>
                     <option value="Vanuatu">Vanuatu</option>
                     <option value="Vatican City State">Vatican City State</option>
                     <option value="Venezuela">Venezuela</option>
                     <option value="Vietnam">Vietnam</option>
                     <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                     <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                     <option value="Wake Island">Wake Island</option>
                     <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                     <option value="Yemen">Yemen</option>
                     <option value="Zaire">Zaire</option>
                     <option value="Zambia">Zambia</option>
                     <option value="Zimbabwe">Zimbabwe</option>
                  </select>

                  <div class="invalid-feedback">
                    <?php echo form_error('country');?>
                  </div>
                </div>
              </div>
						</div>
						<div class="col-md-12 text-right">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-lg rounded-button" name="account_submit" value="bank"
									tabindex="4">
									Update
								</button>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<h2 class="section-title">Bitcoin</h2>
							<div class="form-group">
								<label for="bitcoin_account">Bitcoin Account
								</label>
								<input id="bitcoin_account" type="text" value="<?php if(set_value('bitcoin_account','',true) == null){echo $bitcoin_account;}else{ echo set_value('bitcoin_account','',true);}?>"
											 class="form-control <?php if(strlen(form_error('bitcoin_account')) > 0){echo "is-invalid";} ?>" name="bitcoin_account"
											 autofocus />
								<div class="invalid-feedback">
									<?php echo form_error('bitcoin_account');?>
								</div>
							</div>
							<div class="col-md-12 text-right">
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-lg rounded-button" name="account_submit" value="bitcoin"
										tabindex="4">
										Update
									</button>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<h2 class="section-title">Ethereum</h2>
							<div class="form-group">
								<label for="ethereum_account">Ethereum Account
								</label>
								<input id="ethereum_account" type="text" value="<?php if(set_value('ethereum_account','',true) == null){echo $ethereum_account;}else{ echo set_value('ethereum_account','',true);}?>"
											 class="form-control <?php if(strlen(form_error('ethereum_account')) > 0){echo "is-invalid";} ?>" name="ethereum_account"
											 autofocus />
								<div class="invalid-feedback">
									<?php echo form_error('ethereum_account');?>
								</div>
							</div>
							<div class="col-md-12 text-right">
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-lg rounded-button" name="account_submit" value="ethereum"
										tabindex="4">
										Update
									</button>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<h2 class="section-title">Bitcoin Cash</h2>
							<div class="form-group">
								<label for="bitcoincash_account">Bitcoin Cash Account
								</label>
								<input id="bitcoincash_account" type="text" value="<?php if(set_value('bitcoincash_account','',true) == null){echo $bitcoincash_account;}else{ echo set_value('ethereum_account','',true);}?>"
											 class="form-control <?php if(strlen(form_error('bitcoincash_account')) > 0){echo "is-invalid";} ?>" name="bitcoincash_account"
											 autofocus />
								<div class="invalid-feedback">
									<?php echo form_error('bitcoincash_account');?>
								</div>
							</div>
							<div class="col-md-12 text-right">
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-lg rounded-button" name="account_submit" value="bitcoincash"
										tabindex="4">
										Update
									</button>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<h2 class="section-title">Stellar</h2>
							<div class="form-group">
								<label for="stellar_account">Stellar Account
								</label>
								<input id="stellar_account" type="text" value="<?php if(set_value('stellar_account','',true) == null){echo $stellar_account;}else{ echo set_value('ethereum_account','',true);}?>"
											 class="form-control <?php if(strlen(form_error('stellar_account')) > 0){echo "is-invalid";} ?>" name="stellar_account"
											 autofocus />
								<div class="invalid-feedback">
									<?php echo form_error('stellar_account');?>
								</div>
							</div>
							<div class="col-md-12 text-right">
								<div class="form-group">
									<button type="submit" class="btn btn-primary btn-lg rounded-button" name="account_submit" value="stellar"
										tabindex="4">
										Update
									</button>
								</div>
							</div>
						</div>



					</div>
				</div>


				<?php echo form_close(); ?>
			</div>

    <?php $this->load->view('pages/prefooter'); ?>