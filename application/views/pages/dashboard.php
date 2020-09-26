<div class="main-content">

	<section class="section">
		<div class="section-header section-header-custom">
			<h1>Dashboard</h1>
		</div>

		<div class="section-body">
      <div class="row ">

				<div class="col-12 ">
					<div class="dash-user-row">
											<!-- <li class="media">
                        <img alt="image" class="mr-3 rounded-circle" width="40" src="assets/img/avatar/avatar-3.png">
                        <div class="media-body">
                          <div class="media-title"><span class="username"><?php if (isset($username)) {echo $username;}?></span></div>
                          <div class="text-job text-muted">Welcome</div>
                        </div>
                      </li> -->
						<!-- <span class="username"><?php if (isset($username)) {echo $username;}?></span><br>
						Welcome -->
					</div>
				</div>
      </div>

      <div class="row account-summary-row ">

				<div class="col-lg-3">
					<div class="summary-box">
						<li class="media">
							<img alt="image" class="mr-3 text-white" width="50" src="assets/img/png/012-increase.png">
							<div class="media-body">
								<div class="media-title" style="color:white; font-weight: bold;">Total Investment</div>
								<div class="text-job" style="color:white; font-weight: bold;">
									<?php if (isset($total_deposit)) {echo $total_deposit;}?>
								</div>
							</div>
						</li>
					</div>
        </div>

				<div class="col-lg-3">
					<div class="summary-box">
						<li class="media">
							<img alt="image" class="mr-3 text-white" width="50" src="assets/img/png/009-money.png">
							<div class="media-body">
								<div class="media-title" style="color:white; font-weight: bold;">Last Investment</div>
								<div class="text-job" style="color:white; font-weight: bold;">
									<?php if (isset($last_deposit)) {echo $last_deposit;}?>
								</div>
							</div>
						</li>
					</div>
        </div>

				<div class="col-lg-3">
					<div class="summary-box">
						<li class="media">
							<img alt="image" class="mr-3 text-white" width="50" src="assets/img/png/026-money bag.png">
							<div class="media-body">
								<div class="media-title" style="color:white; font-weight: bold;">Total Withdraw</div>
								<div class="text-job" style="color:white; font-weight: bold;">
									<?php if (isset($total_withdrawals)) {echo $total_withdrawals;}?>
								</div>
							</div>
						</li>
					</div>
        </div>

				<div class="col-lg-3">
					<div class="summary-box">
						<li class="media">
							<img alt="image" class="mr-3 text-white" width="50" src="assets/img/png/003-money.png">
							<div class="media-body">
								<div class="media-title" style="color:white; font-weight: bold;">Last Withdraw</div>
								<div class="text-job" style="color:white; font-weight: bold;">
									<?php if (isset($last_withdrawal)) {echo $last_withdrawal;}?>
								</div>
							</div>
						</li>
					</div>
        </div>
      </div>

      <div class="row summary-2-row">
				<div class="col-12">
					<div class="card shadow">
						<div class="card-header">
							<h4>Summary</h4>
						</div>
						<div class="card-body">
							<div class="row">

								<div class="col-md-4">
									<div class="summary-box-2">
										<li class="media">
											<img alt="image" class="mr-3 text-white" width="50" src="assets/img/icon (3).png">
											<div class="media-body">
												<div class="text-job" style="font-weight: bold;">Account Balance</div>
												<div class="media-title" style="font-weight: bold;">
													<?php if (isset($account_balance)) {echo $account_balance;}?>
												</div>
											</div>
										</li>
									</div>
								</div>

								<div class="col-md-4">
									<div class="summary-box-2">
										<li class="media">
											<img alt="image" class="mr-3 text-white" width="50" src="assets/img/icon (8).png">
											<div class="media-body">
												<div class="text-job" style="font-weight: bold;">Active Deposit</div>
												<div class="media-title" style="font-weight: bold;">
														<?php if (isset($active_deposit)) {echo $active_deposit;}?>
												</div>
											</div>
										</li>
									</div>
								</div>

								<div class="col-md-4">
									<div class="summary-box-2">
										<li class="media">
											<img alt="image" class="mr-3 text-white" width="50" src="assets/img/icon (5).png">
											<div class="media-body">
												<div class="text-job" style="font-weight: bold;">Total Earned</div>
												<div class="media-title" style="font-weight: bold;">
													<?php if (isset($total_growth)) {echo $total_growth;}?>
												</div>
											</div>
										</li>
									</div>
								</div>

								<div class="col-md-4">
									<div class="summary-box-2">
										<li class="media">
											<img alt="image" class="mr-3 text-white" width="50" src="assets/img/icon (6).png">
											<div class="media-body">
												<div class="text-job" style="font-weight: bold;">Pending Withdraw</div>
												<div class="media-title" style="font-weight: bold;">
														<?php if (isset($pending_withdrawals)) {echo $pending_withdrawals;}?>
													</div>
											</div>
										</li>
									</div>
								</div>

								<div class="col-md-4">
									<div class="summary-box-2">
										<li class="media">
											<img alt="image" class="mr-3 text-white" width="50" src="assets/img/icon (1).png">
											<div class="media-body">
												<div class="text-job" style="font-weight: bold;">Last Withdraw</div>
												<div class="media-title" style="font-weight: bold;">
													<?php if (isset($last_withdrawal)) {echo $last_withdrawal;}?>
												</div>
											</div>
										</li>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
      </div>

      <div class="row">
        <div class="col-lg-12 affiliate-row">
          <div class="card affiliate-program-card shadow">
            <div class="card-body">

							<div class="row">
								<div class="col-lg-6">
									<li class="media">
										<img alt="image" class="mr-3 text-white" width="80" src="assets/img/png/039-shake hands.png">
										<div class="media-body">
											<div class="media-title" style="color: white; font-weight: bold;">REFERRALS LINK</div>
											<div class="text-job" style="color: white; font-weight: bold;">Share your referral link on social networks, share with friends and earn passive income with us.</div>
										</div>
									</li>
								</div>

								<div class="col-lg-6 text-center">
									<a class="affiliate-alert" id="referral-link" href="my/ref/<?php echo $referral_code; ?>">
										<input type="text" value="https://investor-oceanenergy.com/my/ref/<?php echo $referral_code; ?>" readonly id="link" class="span12"
														style="width: 100%;
															height: 30px;
															text-align: center;
													    background: transparent;
													    border: 1px solid white;
															border-radius: 20px;
													    cursor: pointer;
															color: white;
															margin: 10px;
															padding "/>
									</a>
									<br>
									<button type="button" class="btn btn-info btn-sm" onclick="copyToClipboard('#link')"
									style="
										width: 50px;
										text-align: center;
										background: white;
										border-radius: 20px;
										border: 0px;
										color: #F7C86C;">
							    	Copy
									</button>
								</div>

							</div>

            </div>
          </div>
        </div>
      </div>
		<?php $this->load->view('pages/prefooter');?>

<script type="text/javascript">
	function copyToClipboard(element) {
	    $(element).select();
	    document.execCommand("copy");
	}
</script>
