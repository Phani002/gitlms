<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('login'))
			redirect('login');
	}
	function index()
	{
		$this->load->view('list');
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect('login_logout/login');
	}
}