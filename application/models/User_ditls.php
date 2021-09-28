<?php 
	class User_ditls extends CI_Model{
		
		public function myOrd($uemail){
			$this->db->select('user.use_email,game_table.*,payment.*')->from('payment')->join('user','user.use_email=payment.user_name')->join('game_table','payment.game_id=game_table.id')->where('user.use_email',$uemail);
			$this->db->order_by("payment.pay_id",'desc');
			$odat=$this->db->get();
			return $r=$odat->result();

		}
		public function odinf($payid){
			$this->db->select('user.use_email,game_table.*,payment.*')->from('payment')->join('user','user.use_email=payment.user_name')->join('game_table','payment.game_id=game_table.id')->where('payment.pay_id',$payid);
			
			$odat=$this->db->get();
			return $r=$odat->result();
		}
		public function paySta($oder_id){
			$user=$this->session->userdata('usr_id');
			$this->db->where('pay_id',$oder_id);
			$this->db->where('user_i',$user);
			$q=$this->db->get('result');
			return $r=$q->result();	
		}
		public function myacc($u_id){
			$this->db->select('user.*,game_id.*,game.*')->from('user')->join('game_id','game_id.user_email=user.use_email')->join('game','game_id.gamename_id=game.game_id')->where('user.use_email',$u_id);
			$q=$this->db->get();
			return $r=$q->result();
		}

		public function agame(){
			$q=$this->db->get('game');
			return $r=$q->result();
		}

		public function upduser($dat,$u_em){
			$this->db->where('use_email',$u_em);
			$this->db->update('user',$dat);
		}
		public function upd_gd($data,$u_em){
			$this->db->where('user_email',$u_em);
			$this->db->update('game_id',$data);

		}
		public function updFi($data,$ue){
			$this->db->where('user_email',$ue);
			$this->db->update('game_id',$data);
			
		}
		public  function upi_upd($upi,$u_em){
			$this->db->where('useremail',$u_em);
			$this->db->update('usr_bank',$upi);
		}
		public  function bnk_upd($bank,$u_em){
			$this->db->where('useremail',$u_em);
			$this->db->update('usr_bank',$bank);
		}
		public function getBank($em){
			$this->db->where('useremail',$em);
			$q=$this->db->get("usr_bank");
			return $r=$q->result();
		}


	}



 ?>