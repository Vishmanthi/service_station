<?php
class User_model extends CI_Model{
	public function login_user($username,$password){
		$this->db->where('username',$username);
		$result=$this->db->get('users');
		$db_password=$result->row(2)->password;
		if(password_verify($password,$db_password)){
			return $result->row(0)->id;
		}else{
			return false;
		}


	}
	public function create_customer(){
		$encripted_pass=password_hash($this->input->post('password'),PASSWORD_BCRYPT);

		$data=array(
			'first_name'=>$this->input->post('first_name'),
			'last_name'=>$this->input->post('first_name'),
			'nic'=>$this->input->post('nic'),
			'phone'=>$this->input->post('first_name'),
			'email'=>$this->input->post('first_name'),
			'address'=>$this->input->post('first_name')
			// 'username'=>$this->input->post(),
			// 'password'=>$encripted_pass
		);
		$insert_data=$this->db->insert('customer',$data);
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

	public function find_customer(){
		$this->db->where('nic',$this->input->post('nic'));
		$result=$this->db->get('customer');
		return $result;
	}
	
}
 
?>