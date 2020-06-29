<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dealer extends CI_Controller {
 
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

	public function product() 
	{
		$this->load->view('dealer/product');
	}
}
