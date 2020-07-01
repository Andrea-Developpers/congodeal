<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealer extends CI_Controller {

 
	private $data = array();


	/**
	 * login_dealer_data()
	 * 
	 * Retourne les données du formulaire
	 * de connexion
	 * @return array
	 */
	private function login_dealer_data() : array
	{
		return array(
			'pseudo' => $this->input->post('pseudo', TRUE),
			'password' => $this->input->post('password', TRUE),
		);
	}

	public function login_dealer()
	{
		$this->form_validation->set_rules('pseudo', 'pseudonyme', 'required');
		$this->form_validation->set_rules('password', 'mot de passe', 'required');
	
		if($this->form_validation->run())
		{
			$this->data['account_already_exist'] = 'Vous posséder déjà un compte, connectez-vous.';
			$result = $this->UserModel->add_user($this->login_dealer_data());
			if($result == TRUE)
			{
				$this->load->view('index', [], FALSE);
			}
			else 
			{
				$this->load->view('login', $this->data, FALSE);
			}
		}
		else 
		{
			$this->load->view('login', $this->data, FALSE);
		}
	}

 
	public function index() 
	{
		$this->load->view('index');
	}

	public function login()
	{
		$this->load->view('dealer/login');
	}
 
	public function register()
	{
		$this->load->view('dealer/register');
	}

	public function profile()
	{
		$this->load->view('dealer/profile');
	}

	public function product() 
	{
		$this->load->view('dealer/product');
	}
}
