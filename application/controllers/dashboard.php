<?php
class Dashboard extends CI_Controller{
	public function index(){
		// $data['main_view']="admin_dash_view";
		$this->load->view('users/saDashboard');
	}
	// public function homepage(){
	// 	$this->load->view('home_view');
	// }
	public function cus_reg(){
		//$this->load->view('users/saDashboard');
		$this->load->view('users/service_adviser/customer_reg');
	}

	public function veh_reg(){

		$this->load->view('users/service_adviser/vehicle_reg');
	}
	
	 

}
?>