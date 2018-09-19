<?php

class Vehicle extends CI_Controller{
	

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
			$this->load->model('vehicle_model');
			$this->user_model->create_vehicle();
			// 	echo "sustomer created";
			// }else{
			// 	echo "something wrong";
			// }
			
		} 


	}

}
?>