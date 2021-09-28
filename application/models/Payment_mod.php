<?php 
class Payment_mod extends CI_Model{

	public function payment_proc($data){
		$this->db->insert('payment',$data);

		$insert_id = $this->db->insert_id();
		$this->session->set_userdata('OID',$insert_id);

	}
	public function pay_upd($data){
		$pay_id=$this->session->userdata('OID');
		$this->db->where('pay_id ',$pay_id);
		$this->db->update('payment',$data);

	}
}


 ?>