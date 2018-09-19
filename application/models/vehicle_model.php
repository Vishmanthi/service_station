<?php
class Vehicle_model extends CI_Model{
	public function create_vehicle(){
		
		$data=array(
			'veh_reg_no'=>$this->input->post('reg_no'),
			'type'=>$this->input->post('type'),
			'make'=>$this->input->post('make'),
			'model'=>$this->input->post('model'),
			'additional'=>$this->input->post('addi_info')
			
			// 'username'=>$this->input->post(), 
			// 'password'=>$encripted_pass
		);
		$insert_data=$this->db->insert('vehicle',$data);
		$this->db->where('nic',$this->input->post('nic'));
		//$result=$this->db->get('customer');
		$id=$this->db->get('customer')->row(0)->id;
		$d2=array(
			'id'=>$id,
			'username'=>$this->input->post('first_name'),
			'password'=>$encripted_pass

		);
		$insert_data2=$this->db->insert('users',$d2);
		if($insert_data && $insert_data2){
			return true;
		}else{
			return false;
		}
	}
	
}
 
?>