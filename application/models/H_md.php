<?php 
	class H_md extends CI_Model{
		public function all_p(){
			$this->db->from('game_table');
			$this->db->order_by("id","desc");
			$q=$this->db->get('');
			return $r=$q->result();
		}
		public function sel_off(){
			$q=$this->db->select('offers_tab.*,game_table.*')->from('offers_tab')->join('game_table','offers_tab.game_id =game_table.id')->order_by('offers_tab.off_id','desc')->get();
			return $r=$q->result();
		}
		public function sel_g($pid){
			$this->db->where('id',$pid);
			$q=$this->db->get('game_table');
			return $r=$q->result();
		}
		public function ord($ueem,$gid){
			$this->db->where('user_name',$ueem);
			$this->db->where('game_id',$gid);
			$q=$this->db->get('payment');
			return $r=$q->result();
		}
		public function allguse($gaid){
			$st="complete";	
			$this->db->where('game_id',$gaid);
			$this->db->where('payment_satatus',$st);
			$q=$this->db->get('payment');
			return $r=$q->result();
		}
		public function twoallguse($gaid){
			$st="complete";	
			$this->db->where('game_id',$gaid);
			$this->db->where('payment_satatus',$st);
			$q=$this->db->get('payment');
			$r=$q->result();
			
			return count($r);
		}
		public function gtab(){
			$q=$this->db->get('game');
			return $r=$q->result();
		}
		public function reGame(){
			$this->db->select('result.*,game_table.*')->from('game_table')->join('result','result.game_i=game_table.id')->group_by('result.game_i');
			$this->db->order_by('game_table.id','ASC');
			$q=$this->db->get();
			return $r=$q->result();
		}
		public function selwiner($gameid){
			$this->db->select('user.*,result.*')->from('result')->join('user','user.us_id=result.user_i')->where('result.game_i',$gameid);
			$this->db->order_by('result.prize_many','DESC');
			$q=$this->db->get();
			return $r=$q->result();
		}
	}
 ?>