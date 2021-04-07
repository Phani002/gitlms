<?php
class Admin extends CI_Model
{
	function validate()
	{
		$arr['email'] = $this->input->post('email');
		$arr['password'] = $this->input->post('password');
		return $this->db->get_where('users',$arr)->row();
	}
}