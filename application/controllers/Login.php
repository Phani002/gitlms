<?php

class Login extends CI_controller{

    function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login'))
			redirect('dashboard');
	}

    function index(){

        $this->load->view('templates/header');
        $this->load->view('login_logout/login');
        $this->load->view('templates/footer');
    }  

    function verify()
	{
		$this->load->model('login');
		$check = $this->login->validate();
		if($check)
		{
			$this->session->set_userdata('login','1');
			redirect('dashboard');
		}
		else
		{
			redirect('login');
		}
	}
}

?>

