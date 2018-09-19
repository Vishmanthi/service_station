<?php

class Users extends CI_Controller{
	public function login(){
		$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
		// echo $this->input->post('username');
		if($this->form_validation->run()==FALSE){
			$data=array(
				'errors'=>validation_errors()
			);
			$this->session->set_flashdata($data);
			redirect('home');
		}else{
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$this->user_model->login_user($username,$password);

		}

	}

	public function register(){
		$this->form_validation->set_rules('first_name','First Name','trim|required');
		$this->form_validation->set_rules('last_name','Last Name','trim|required');
	    $this->form_validation->set_rules('nic','ID Number','trim|required|in_list[10,12]');
		$this->form_validation->set_rules('phone','Phone Number','trim|required|exact_length[10]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email');
		$this->form_validation->set_rules('con_pass','Confirm Password','trim|required|matches[password]');
		if($this->form_validation->run()==False){
           $data=array(
           		'errors'=>validation_errors()
           );
           $this->session->set_flashdata($data);
           redirect('dashboard');

		}else{
			$this->load->model('user_model');
			$this->user_model->create_customer();
			// 	echo "sustomer created";
			// }else{
			// 	echo "something wrong";
			// }
			
		} 


	}

	public function get_customer(){
		$this->user_model->find_customer();

	}

}
?>