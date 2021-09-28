<?php
	class P_mod extends CI_Model{
		public function __construct(){
			parent::__construct();
			$this->load->database();
		}
		// catagory
		public function ins_cata($data){
			$this->db->insert('pro_cata',$data);

		}
		//list act
		public function pCat(){
			$this->db->from('pro_cata');
			$this->db->order_by("pca_id", "desc");
			$q=$this->db->get();
			return $row=$q->result();
		}
		public function p_c_upd($cid){
			$this->db->where('pca_id',$cid);
			$q=$this->db->get('pro_cata');
			return $r=$q->result();
		}
		public function updc_p($c_id,$data){
			$this->db->where('pca_id',$c_id);
			$this->db->update('pro_cata',$data);
		}
		//end catagory

		// add game
		public function ins_game($data){
			$this->db->insert('game_table',$data);
		}

		//list game
		public function sel_pro(){
			$this->db->from('game_table');
			$this->db->order_by('id','desc');
			$q=$this->db->get();
			return $r=$q->result();
		}
		//delete game
		public function del_gam($f_game){
			$this->db->where('id',$f_game);
			$q=$this->db->get('game_table');
			$r=$q->result();
			foreach ($r as $f) {
				unlink('./game_image/'.$f->g_banner);
			}
			$this->db->where('id',$f_game);
			$this->db->delete('game_table');
		}
		//upd select game
		public function sel_gam($uid){
			$this->db->where('id',$uid);
			$q=$this->db->get('game_table');
			return $r=$q->result();
		}
		//update game
		public function upd_adt($gid,$data){
			$this->db->where('id',$gid);
			$this->db->update('game_table',$data);
		}

		//off page game sel
		public function sel_g(){
			$this->db->from('game_table');
			$this->db->order_by("id", "desc");
			$r=$this->db->get();
			return $q=$r->result();
		}
		//im=nsert offer
		public function ins_off($data){
			$this->db->insert('offers_tab',$data);
		}
		//list offer
		public function al_off(){
			$q=$this->db->select('offers_tab.*,game_table.game_name')->from('offers_tab')->join('game_table','offers_tab.game_id =game_table.id')->order_by('offers_tab.off_id','desc')->get();
			return $r=$q->result();
		}
		//upd select off
		public function sel_off($oid){
			$this->db->where('off_id',$oid);
			$q=$this->db->get("offers_tab");
			return $r=$q->result();
		}
		public function upd_off($data,$offid){
			$this->db->where('off_id',$offid);
			$this->db->update('offers_tab',$data);
		}
		//delete off
		public function of_del($ofid){
			$this->db->where('off_id',$ofid);
			$q=$this->db->get('offers_tab');
			$r=$q->result();
			foreach ($r as $f) {
				unlink('./off_img/'.$f->img);
			}
			$this->db->where('off_id',$ofid);
			$this->db->delete('offers_tab');
		}
		public function ups_off_stat($data,$o_i_d){
			$this->db->where('off_id',$o_i_d);
			$this->db->update('offers_tab',$data);
		}
		public function get_all_user($gm_id){
			$q=$this->db->select('payment.*,user.*,usr_bank.*,game_id.*,game_table.*')->from('payment')->join("user","payment.user_name = user.use_email")->join("usr_bank","user.use_email = usr_bank.useremail")->join("game_id","user.use_email=game_id.user_email")->where("payment.game_id",$gm_id)->join("game_table", "game_table.id = $gm_id")->where('payment.payment_satatus','complete')->order_by('payment.payment_date','asc')->get();
			return $r=$q->result();
		}
		public function gDitls($gamid){
			$this->db->where('id',$gamid);
			$q=$this->db->get('game_table');
			return $r=$q->result();
		}
		public function allguses($gaid){
			$st="complete";	
			$this->db->where('game_id',$gaid);
			$this->db->where('payment_satatus',$st);
			$q=$this->db->get('payment');
			$r=$q->result();
			return count($r);
		}
		public function upd_resu($data,$gid,$u_id){
			$this->db->where('game_i',$gid);
			$this->db->where('user_i',$u_id);
			$q=$this->db->get('result');
			$r=$q->result();
			if(!count($r)>0){
				$this->db->insert("result",$data);
				return true;
			}else{
				return false;
			}
		}

		public function uResult($g_id){
			$this->db->where("game_i",$g_id);
			$q=$this->db->get("result");
			return $r=$q->result();
		}

		public function del_result($gid,$uid,$ordid){
			$this->db->where('game_i',$gid);
			$this->db->where('user_i',$uid);
			$this->db->where('pay_id',$ordid);
			$this->db->delete('result');
		}
		public function sUse($user_e){
			$this->db->select('game_id.*,user.*,game.*')->from('user')->join('game_id','game_id.user_email = user.use_email')->join('game','game_id.gamename_id=game.game_id')->where("user.use_email",$user_e);
			$q=$this->db->get();
			return $r=$q->result();
		}
		public function uOrdDitels($user_e){
			$this->db->select('payment.*,game_table.*,user.*')->from('user')->join('payment','payment.user_name=user.use_email')->join('game_table','game_table.id=payment.game_id')->where('user.use_email',$user_e);
			$this->db->order_by('payment.payment_date','asc');
			$q=$this->db->get();
			return $z=$q->result();
		}

		public function uban($u_id,$data){
			$this->db->where('us_id',$u_id);
			$this->db->update('user',$data);
		}


		public function listuserTeam(){
			$q=$this->db->get('game_team');
			return $r=$q->result();
		}
		public function updstatusgame($g_id,$data){
			$this->db->where('id',$g_id);
			$this->db->update('game_table',$data);
		}
		public function selAdminRole(){
			$q=$this->db->get('admin_role');
			return $r=$q->result();
		}
		public function ins_Admin($data){
			$this->db->insert('admin',$data);
		}
		public function selAllem(){
			$q=$this->db->get('admin');
			return $r=$q->result();
		}
		public function updadmin($admin_id){
			$this->db->where('admin_id',$admin_id);
			$q=$this->db->get('admin');
			return $r=$q->result();
		}
		public function inupdaet_admin_user($data,$adminid){
			$this->db->where('admin_id',$adminid);
			$this->db->update('admin',$data);
		}
		public function adminDel($adminid){
			
			$this->db->where('admin_id',$adminid);
			$this->db->delete('admin');
		}



	}
?>
