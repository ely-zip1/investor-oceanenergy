<div class="main-content">

	<section class="section">
		<div class="section-header section-header-custom">
			<h1>Make a Deposit</h1>
		</div>

		<div class="section-body">
			<div class="row ">
			</div>
			<br>
			<div class="row">
				<div class="col-12 col-md-4 col-lg-4 text-white">
					<div class="pricing" style="background: url(assets/img/waves.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
						<div class="pricing-title text-white" style="background:#70CDE3; font-size: 20px;">
							OCEAN ENERGY 12 <br>
							<span>BASIC PLAN</span>
						</div>
						<div class="pricing-padding">
							<div>
								<div class="daily-interest">Daily Interest</div>
								<div class="plan-price">1.25%</div>
							</div>
							<div class="check-mark">
								<i class="fas fa-check"></i>
							</div>
							<div class="plan-detail">
								MINIMUM INVESTMENT
							</div>
							<br>
							<div class="investment-amount" style="background: #70CDE3 !important;">
								$ 150
							</div>
							<br>
							<div class="plan-detail">
								TERM
							</div>
							<br>
							<div class="term-days">
								185 Days
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 col-lg-4 text-white">
					<!-- <div class="pricing pricing-highlight"> -->
					<div class="pricing" style="background: url(assets/img/waves.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
						<div class="pricing-title text-white" style="background:#41C0C0; font-size: 20px;">
							OCEAN ENERGY 35 <br>
							<span>STANDARD PLAN</span>
						</div>
						<div class="pricing-padding">
							<div>
								<div class="daily-interest">Daily Interest</div>
								<div class="plan-price">1.75%</div>
							</div>
							<div class="check-mark">
								<i class="fas fa-check"></i>
							</div>
							<div class="plan-detail">
								MINIMUM INVESTMENT
							</div>
							<br>
							<div class="investment-amount" style="background: #41C0C0 !important;">
								$ 1,500
							</div>
							<br>
							<div class="plan-detail">
								TERM
							</div>
							<br>
							<div class="term-days">
								155 Days
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4 col-lg-4 text-white">
					<div class="pricing" style="background: url(assets/img/waves.jpg); background-position: center; background-size: cover; background-repeat: no-repeat;">
						<div class="pricing-title text-white" style="background:#006C67; font-size: 20px;">
							OCEAN ENERGY 50 <br>
							<span>PREMIER PLAN</span>
							<span></span>
						</div>
						<div class="pricing-padding">
							<div>
								<div class="daily-interest">Daily Interest</div>
								<div class="plan-price">2.25%</div>
							</div>
							<div class="check-mark">
								<i class="fas fa-check"></i>
							</div>
							<div class="plan-detail">
								MINIMUM INVESTMENT
							</div>
							<br>
							<div class="investment-amount" style="background: #006C67 !important;">
								$ 7,500
							</div>
							<br>
							<div class="plan-detail">
								TERM
							</div>
							<br>
							<div class="term-days">
								125 Days
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row deposit-row">
				<div class="col-12">
					<div class="alert account_balance_row text-white" style="background: #41C0C0;">
						<h4>Account Balance: $ <?php echo $account_balance; ?></h4>
					</div>
				</div>
			</div>

			<div class="row row-deposit">

				<div class="col-md-12">
					<?php echo form_open('plans'); ?>
					<div class="form-row">
						<div class="form-group col-md-4 deposit-form">
							<label for="chosen_plan">Choose your Plan</label>
							<select class="form-control" name="chosen_plan">
								<option <?php if ($selected_plan == 'plan1') {
											echo 'selected';
										} ?> value="plan1"><?php echo $plan1; ?></option>
								<option <?php if ($selected_plan == 'plan2') {
											echo 'selected';
										} ?> value="plan2"><?php echo $plan2; ?></option>
								<option <?php if ($selected_plan == 'plan3') {
											echo 'selected';
										} ?> value="plan3"><?php echo $plan3; ?></option>
							</select>
							<div class="invalid-feedback">
								<?php echo form_error('chosen_plan'); ?>
							</div>
						</div>

						<div class="form-group col-md-4 deposit-form">
							<label for="plan_option">Payment Mode</label>
							<select class="form-control" name="plan_payment_mode">
								<option <?php if ($selected_mode == 'mode1') {
											echo 'selected';
										} ?> value="mode1">Bitcoin</option>
								<option <?php if ($selected_mode == 'mode2') {
											echo 'selected';
										} ?> value="mode2">Bitcoin Cash</option>
								<option <?php if ($selected_mode == 'mode3') {
											echo 'selected';
										} ?> value="mode3">Ethereum</option>
								<option <?php if ($selected_mode == 'mode4') {
											echo 'selected';
										} ?> value="mode4">Stellar</option>
								<option <?php if ($selected_mode == 'mode5') {
											echo 'selected';
										} ?> value="mode4">USD Digital</option>
								<option <?php if ($selected_mode == 'mode7') {
											echo 'selected';
										} ?> value="mode7">OE Balance</option>
							</select>
							<div class="invalid-feedback">
								<?php echo form_error('plan_payment_mode'); ?>
							</div>
						</div>

						<!-- <div class="form-group col-md-4  deposit-form">
							<label for="deposit_amount">Amount</label>
							<input type="text" class="deposit-amount form-control <?php if (strlen(form_error('deposit_amount')) > 0) {
																						echo "is-invalid";
																					} ?>" name="deposit_amount" id="deposit-amount" placeholder="$ 0.00" value="<?php set_value('deposit_amount', '', true); ?>">
							<div class="invalid-feedback deposit-error">
								<?php echo form_error('deposit_amount'); ?>
							</div>
						</div> -->

						<div class="form-group col-md-4 deposit-form">
							<label for="deposit_amount">Amount</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">$</span>
								</div>
								<input type="text" class="deposit-amount form-control <?php if (strlen(form_error('deposit_amount')) > 0) {
																							echo "is-invalid";
																						} ?>" name="deposit_amount" id="deposit-amount" placeholder="$ 0.00" value="<?php set_value('deposit_amount', '', true); ?>">
								<!-- <div class="input-group-append">
									<span class="input-group-text">.00</span>
								</div> -->
								<div class="invalid-feedback deposit-error">
									<?php echo form_error('deposit_amount'); ?>
								</div>
							</div>
						</div>

					</div>
				</div>

				<div class="col-md-12">
					<button type="submit" class="rounded-button submit-deposit" name="deposit-submit-button" id="btnSubmit">
						CONFIRM
					</button>
					<?php echo form_close(); ?>
				</div>
			</div>

			<?php $this->load->view('pages/prefooter'); ?>