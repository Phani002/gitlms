<?php

class User extends CI_controller
{



    function index(){

        $this->load->model('User_model');
        $users = $this->User_model->all();
        $data = array();
        $data['users']= $users;

        $this->load->view('templates/header');
        $this->load->view('list',$data);
        $this->load->view('templates/footer');

    }

    function create()
    {

        $this->load->model('User_model');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if($this->form_validation->run() == false){
            $this->load->view('templates/header');
            $this->load->view('create');
            $this->load->view('templates/footer');
        }
        
        else
        {
            $formArray = array();
            $formArray['first_name'] = $this->input->post('name');
            $formArray['middle_name'] = $this->input->post('email');
            $formArray['last_name'] = $this->input->post('dob');
            $formArray['dob'] = $this->input->post('pass');
            $formArray['email'] = $this->input->post('pass');
            $formArray['password'] = $this->input->post('pass');           
            $this->User_model->create($formArray);
            $this->session->set_flashdata('sucess','Record addes successfully');
            redirect(base_url().'index.php/user/index');
        }

    }


    function edit($userid) 
    {
        $this->load->model('User_model');
        $user = $this->User_model->getUser($userid);
        $data = array();
        $data['user'] = $user;

        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');

        if($this->form_validation->run() == false){
        $this->load->view('templates/header');
        $this->load->view('edit',$data);
        $this->load->view('templates/footer');
    }

    else
    {
        $formArray = array();
        $formArray['name'] = $this->input->post('name');
        $formArray['email'] = $this->input->post('email');
        $formArray['dob'] = $this->input->post('dob');
        $formArray['password'] = $this->input->post('pass');
        $this->User_model->updateUser($userid,$formArray);
        $this->session->set_flashdata('sucess','Record addes successfully');
        redirect(base_url().'index.php/user/index');
    }


}

    function delete($userid) 
    {
        $this->load->model('User_model');
        $user = $this->User_model->getUser($userid);
        if(empty($user))
        {
            $this->session->set_flashdata('failure','Record not found');
            redirect(base_url().'index.php/user/index');
        }

        $this->User_model->deleteUser($userid);
        $this->session->set_flashdata('success','Record deleted successfully');
        redirect(base_url().'index.php/user/index');
    } 


}
 

?>

