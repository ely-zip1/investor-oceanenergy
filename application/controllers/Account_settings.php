<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Account_settings extends CI_Controller
{
	public function __construct()
        {
            parent::__construct();
						$this->load->model('PackageModel');
						$this->load->model('DepositModel');
						$this->load->model('Members');
						$this->load->model('Deposit_Options');
						$this->load->model('Bank_model');
						$this->load->model('Withdrawal_Mode_model');

            date_default_timezone_set('Asia/Manila');
        }

	public function index()
	{
		$data = array(
			'title' => "Account Settings"
		);
				$data['username'] = $this->session->userdata('username');
				$data['email'] = $this->session->userdata('email');
				$data['fullname'] = $this->session->userdata('fullname');
				$data['date_registered'] = $this->session->userdata('date_registered');

		$member_data = $this->Members->get_member($this->session->username);

		$data['account_name'] = $member_data->username;
		$data['date_registered'] = $member_data->date;
		$data['email_address'] = $member_data->email_address;
		$data['full_name'] = $member_data->full_name;

		$bank = $this->Bank_model->get_per_member_id($member_data->id);

		$data['bank_name'] = $bank->bank_name;

		$data['bank_account_name'] = $bank->account_name;
		$data['bank_account_number'] = $bank->account_number;
		$data['bank_country'] = $bank->country;
		$data['country_placeholder'] = '<option value="'.$bank->country.'">'.$bank->country.'</option>';
		$withdrawal_account = $this->Withdrawal_Mode_model->get_per_member($member_data->id);

		$data['bitcoin_account'] = $withdrawal_account->bitcoin;
		$data['ethereum_account'] = $withdrawal_account->ethereum;
		$data['bitcoincash_account'] = $withdrawal_account->bitcoin_cash;
		$data['stellar_account'] = $withdrawal_account->stellar;


		if(isset($_POST['account_submit'])){
			if($_POST['account_submit'] == 'reset_password'){
				$this->form_validation->set_rules('new_password', 'New Password', 'required|min_length[6]');
				$this->form_validation->set_rules('confirm_new_password', 'Password Confirmation', 'required|min_length[6]|matches[new_password]');
			}
			else if($_POST['account_submit'] == 'bank'){
				$this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
				$this->form_validation->set_rules('bank_account_name', 'Account Name', 'required');
				$this->form_validation->set_rules('bank_account_number', 'Account Number', 'required');
				$this->form_validation->set_rules('country', 'Country', 'required');
			}
			else if($_POST['account_submit'] == 'bitcoin'){
				$this->form_validation->set_rules('bitcoin_account', 'Bitcoin Account', 'required');
			}
			else if($_POST['account_submit'] == 'ethereum'){
				$this->form_validation->set_rules('ethereum_account', 'Ethereum Account', 'required');
			}
			else if($_POST['account_submit'] == 'bitcoincash'){
				$this->form_validation->set_rules('bitcoincash_account', 'Bitcoin Cash Account', 'required');
			}
			else if($_POST['account_submit'] == 'stellar'){
				$this->form_validation->set_rules('stellar_account', 'Stellar Account', 'required');
			}
		}



		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
	    $this->load->view('pages/account_settings', $data);
	    $this->load->view('templates/footer');
		}
		else{
			if($_POST['account_submit'] == 'reset_password'){

				$email = $this->session->email;
				$password = $_POST['new_password'];

				$this->Members->update_password($email, $password);

				if($this->Members->verify_member($this->session->username, $password)){
					$data['password_update_success'] = 'Password updated!';
				}
			}

			if($_POST['account_submit'] == 'bank'){
				$new_bank_details = array(
					'bank_name' => $_POST['bank_name'],
					'account_name' => $_POST['bank_account_name'],
					'account_number' => $_POST['bank_account_number'],
					'member_id' => $member_data->id,
					'country' => $_POST['country']
					);
				$this->Bank_model->update($new_bank_details);
			}
			else if($_POST['account_submit'] == 'bitcoin'){
				$this->Withdrawal_Mode_model->update_bitcoin($member_data->id, $_POST['bitcoin_account']);
			}
			else if($_POST['account_submit'] == 'ethereum'){
				$this->Withdrawal_Mode_model->update_ethereum($member_data->id, $_POST['ethereum_account']);
			}
			else if($_POST['account_submit'] == 'bitcoincash'){
				$this->Withdrawal_Mode_model->update_bitcoincash($member_data->id, $_POST['bitcoincash_account']);
			}
			else if($_POST['account_submit'] == 'stellar'){
				$this->Withdrawal_Mode_model->update_stellar($member_data->id, $_POST['stellar_account']);
			}

			$this->load->view('templates/header', $data);
	    $this->load->view('pages/account_settings', $data);
	    $this->load->view('templates/footer');
		}
  }

}
