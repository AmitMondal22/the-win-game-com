<?php
	class Product extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('P_mod');
			$this->load->library('session');
			$user_id=$this->session->userdata("adminid");
			if (!isset($user_id)) {
				redirect(base_url()."admin-login");
			}
		}
		public function blank(){
			$this->load->view('admin/blank');
		}
		//product catagory
		public function p_cat(){
			$d=$this->P_mod->pCat();
			$w = array(
				'row' => $d, 
			);
			$this->load->view('admin/p_catagory',$w);
		}
		// select catagory
		public function p_cata(){
			$pc=$this->input->post('p_catagory');
			$w=array(
				'p_catagory'=>$pc,
			);
			$this->P_mod->ins_cata($w);
			redirect(base_url()."admin/add-catagory");
		}
		// select update catagory
		public function upd($c_id){
			$d=$this->P_mod->p_c_upd($c_id);
			$w = array(
				'row' =>$d  
			);
			$this->load->view('admin/update_catagory',$w);

		}
		//update catagory
		public function upd_p_cata(){
			$id=$this->input->post('cat_id');
			$c=$this->input->post('p_catagory');
			
			$w=array(
				'p_catagory'=>$c,
			);
			$this->P_mod->updc_p($id,$w);
			redirect(base_url()."admin/add-catagory");
		}


		// insert product
		public function p_insf(){
			$data=$this->P_mod->listuserTeam();
			$w=array(
				'row'=>$data,
			);
			$this->load->view('admin/ins_product',$w);
		}
		public function ins_gam(){
			$gt=$this->input->post('g_title');
			$gf=$this->input->post('g_price');

			$ab=$this->input->post('about_game');

			$cp=$this->input->post('tot_player');
			$md=$this->input->post('m_date');
			$mt=$this->input->post('m_time');

			$pkp=$this->input->post("kill");
			$pfw=$this->input->post("fwin");
			$psw=$this->input->post("swin");

			$gr=$this->input->post('g_rules');
			$team=$this->input->post('teamid');
			$gm = "deactive";
			$img=array(
				'upload_path'=>'./game_image',
				'allowed_types'=>'png|jpeg|jpg',
				'max_size'=>50000,
				'file_name'=> time(),
			);
			$this->load->library('upload',$img);
			if(!$this->upload->do_upload("banner")){
				echo $this->upload->display_errors();
			}else{
				$fd=$this->upload->data();
				$fn=$fd['file_name'];
				
				$d = array(
					'game_name' =>$gt ,
					'game_fees' => $gf,
					'total_players' =>$cp ,
					'mach_date' => $md,
					'mach_time' =>$mt ,
					'par_kill_percentage'=>$pkp,
					'fwin_percentage'=>$pfw,
					'swin_percentage'=>$psw,
					'gam_ablut'=>$ab,
					'rules_game' =>$gr ,
					'g_banner' => $fn,
					'post_status'=>$gm,
					'team_type_id'=>$team,
				);
				$this->P_mod->ins_game($d);
				redirect(base_url()."admin/all-game");
			}
		}
		//select game
		public function sel_game(){
			$p_data=$this->P_mod->sel_pro();
			
			$pd = array(
				'g_data' =>$p_data , 
				
			);
			$this->load->view('admin/p_select',$pd);
		}
		//delete game
		public function del_p($id){
			$this->P_mod->del_gam($id);
			
			redirect(base_url()."admin/all-game");
		}
		// upd select game
		public function upd_g_s($u_id){
			$gdata=$this->P_mod->sel_gam($u_id);
			$data=$this->P_mod->listuserTeam();
			$sga = array(
				'rowg' =>$gdata ,
				'tdata'=>$data, 
			);
			$this->load->view('admin/upd_game',$sga);
		}
		//update game
		public function act_updgame(){
			$id=$this->input->post('g_id');

			$roname=$this->input->post('rname');
			$rpass=$this->input->post('rpass');

			$gt=$this->input->post('g_title');
			$gf=$this->input->post('g_price');
			$cp=$this->input->post('tot_player');
			$md=$this->input->post('m_date');

			$pkp=$this->input->post("kill");
			$pfw=$this->input->post("fwin");
			$psw=$this->input->post("swin");
			
			$ab=$this->input->post('about_game');
			$mt=$this->input->post('m_time');
			$gr=$this->input->post('g_rules');
			$team=$this->input->post('teamid');
			$img=array(
				'upload_path'=>'./game_image',
				'allowed_types'=>'png|jpeg|jpg',
				'max_size'=>50000,
				'file_name'=> time(),
			);
			$this->load->library('upload',$img);
			if(!$this->upload->do_upload("banner")){
				$fd=$this->upload->data();
				$fn=$fd['file_name'];
				
				$d = array(
					'game_name' =>$gt ,
					'game_fees' => $gf,
					'total_players' =>$cp ,
					'mach_date' => $md,
					'mach_time' =>$mt ,

					'par_kill_percentage'=>$pkp,
					'fwin_percentage'=>$pfw,
					'swin_percentage'=>$psw,

					'gam_ablut'=>$ab,

					'rules_game' =>$gr,
					'roomid'=> $roname,
					'roompassword'=>$rpass,
					'team_type_id'=>$team,

				);
				$this->P_mod->upd_adt($id,$d);
				redirect(base_url()."admin/all-game");
			}else{
				$fd=$this->upload->data();
				$fn=$fd['file_name'];
				
				$d = array(
					'game_name' =>$gt ,
					'game_fees' => $gf,
					'total_players' =>$cp ,
					'mach_date' => $md,
					'mach_time' =>$mt ,

					'par_kill_percentage'=>$pkp,
					'fwin_percentage'=>$pfw,
					'swin_percentage'=>$psw,

					'gam_ablut'=>$ab,
					
					'rules_game' =>$gr ,
					'g_banner' => $fn,
					'roomid'=> $roname,
					'roompassword'=>$rpass,
					'team_type_id'=>$team,
				);
				$this->P_mod->upd_adt($id,$d);
				redirect(base_url()."admin/all-game");
			}
		}
		public function game_upd_id(){
			$gid=$this->input->post('game_id');
			$sta=$this->input->post('updGstatus');
			if($sta=="on"){
				$status="active";
			}else{
				$status="deactive";
			}
			$w=array(
				'post_status'=>$status,
			);
			$this->P_mod->updstatusgame($gid,$w);
			redirect(base_url()."admin/all-game");
		}
		// offers page
		public function of_pag(){
			$game=$this->P_mod->sel_g();
			$w=array(
				"ro"=>$game
			);
			$this->load->view('admin/offe',$w);
		}
		//insert offers
		public function act_off(){
			$g_is=$this->input->post('game');
			$o_n=$this->input->post('off_name');
			$g=$this->input->post('gift');

			$img=array(
				'upload_path'=>'./off_img',
				'allowed_types'=>'png|jpeg|jpg',
				'max_size'=>50000,
				
			);
			
			
			$this->load->library('upload',$img);
			if(!$this->upload->do_upload("off_img")){
				echo $this->upload->display_errors();
			}else{
				$fd=$this->upload->data();
				$fn=$fd['file_name'];
						$ar=array(
						"game_id"=>$g_is,
						"off_name"=>$o_n,
						"gift"=>$g,
						"img"=>$fn,
						);

						$this->P_mod->ins_off($ar);
						redirect(base_url()."admin/list-offers");
			}
		}
		//list offers
		public function se_off(){
			$c_daat=$this->P_mod->al_off();
			$w=array(
				"r"=>$c_daat,
			);
			$this->load->view('admin/select_odd',$w);

		}
		//select upd
		public function sel_offers($off_id){
			$game=$this->P_mod->sel_g();
			
				
			$data=$this->P_mod->sel_off($off_id);
			$w=array(
				"z"=>$data,
				"ro"=>$game,
			);
			$this->load->view('admin/offe-updaet',$w);
		}
		//update offers
		public function upd_off(){
			$id=$this->input->post('offer_id');
			$g_is=$this->input->post('game');
			$o_n=$this->input->post('off_name');
			$g=$this->input->post('gift');

			$img=array(
				'upload_path'=>'./off_img',
				'allowed_types'=>'png|jpeg|jpg',
				'max_size' => 50000,
				
			);
			$this->load->library('upload',$img);
			if(!$this->upload->do_upload("off_img")){
				$ar=array(
					"game_id"=>$g_is,
					"off_name"=>$o_n,
					"gift"=>$g,
				);
				$this->P_mod->upd_off($ar,$id);
			}else{
				$fd=$this->upload->data();
				$fn=$fd['file_name'];

				$ar=array(
					"game_id"=>$g_is,
					"off_name"=>$o_n,
					"gift"=>$g,
					"img"=>$fn,
				);
				$this->P_mod->upd_off($ar,$id);
				redirect(base_url()."admin/list-offers");
			}
		}
		//delete off
		public function off_del($i){
			
			$this->P_mod->of_del($i);
			redirect(base_url()."admin/list-offers");
		}
		public function upd_stat(){
			$oid=$this->input->post('o_id');
			$st=$this->input->post('stat');
			if ($st=="active") {
				$w=array(
					'status'=>"active",
				);
				$this->P_mod->ups_off_stat($w,$oid);
			}else{
				$w=array(
				'status'=>"deactive",
			);
				$this->P_mod->ups_off_stat($w,$oid);
			}
			
			
			redirect(base_url()."admin/list-offers");
		}
		public function gaEntUse($gid){
			$data=$this->P_mod->get_all_user($gid);
			$gtable=$this->P_mod->gDitls($gid);
			$resultData=$this->P_mod->uResult($gid);
			$w=array(
				"ord_data"=>$data,
				"gidd"=>$gid,
				"t_play"=>$gtable,
				"gResult"=>$resultData,
			);
			$this->load->view('admin/applyUser',$w);
		}
		public function addResult(){
			$win = $this->input->post('win');
			$s = $this->input->post('statuspay');

			$gid = $this->input->post('gameid');
			$uid = $this->input->post('userid');
			$oid = $this->input->post('orderid');

			$uupi = $this->input->post('uUpi');
			$uAcc = $this->input->post('uAcc');
			$uIFSC = $this->input->post('uIsc');
			$uHname = $this->input->post('uHname');


			$kp=$this->input->post('kpersent');
			$fwinper=$this->input->post('fwinper');
			$swinp=$this->input->post('swinper');
			
			$gPrice=$this->input->post('gPrice');
			if ($this->input->post('par_kill')) {
				$kpu = $this->input->post('par_kill');
			}else{
				$kpu=0;
			}
			$prizMany=((($gPrice/100)*$kp)*$kpu);
			$galus=$this->P_mod->allguses($gid);
			 
				if ($win=="winners") {
					$tplayer=$galus;
                    $totalmany = $gPrice * $galus ;
                    $winmany= (($totalmany/100)*$fwinper);
				}elseif($win=="runners"){
					$tplayer=$galus;
                    $totalmany = $gPrice * $galus ;
                    $winmany=  (($totalmany/100)*$swinp);
				}else{
					$winmany=0;
				}
				$wmany=$winmany+$prizMany;
			$date = date('m/d/Y h:i:s a', time());

				$w=array(
					"user_i"=> $uid,
					"game_i"=> $gid,
					"pay_id"=> $oid,
					"prize_many"=> $wmany,
					"total_kill"=> $kpu,
					"fWin"=> $winmany,
					"upi"=> $uupi,
					"account"=> $uAcc,
					"ifsc"=> $uIFSC,
					"hname"=> $uHname,
					"ststuaPay"=> $s,
					"date"=> $date,
					"win_text"=>$win,


				);
			$data=$this->P_mod->upd_resu($w,$gid,$uid);
			if ($data==false) {
				?><script>alert("Already Updated");window.location.replace("<?php echo base_url().'admin/all-gemmar/'.$gid; ?>");</script><?php
			}else{
			redirect(base_url()."admin/all-gemmar/".$gid);

			}
			
		}

		public function deleteResult($g_id,$u_id,$ord_id){
			$this->P_mod->del_result($g_id,$u_id,$ord_id);
			redirect(base_url()."admin/all-gemmar/".$g_id);
		}
		


		///serch user
		// public function useactSerch(){

		// }
		public function seUser(){
			$e=$this->input->post('userEmail');
			$data=$this->P_mod->sUse($e);
			$udar=$this->P_mod->uOrdDitels($e);
			$w=array(
				"row"=>$data,
				"tData"=>$udar,
			);
			$this->load->view('admin/user_serch',$w);
		}

		public function userBan(){
			$uid=$this->input->post('use_id');
			$ubs=$this->input->post('u_b_s');
			$oid=$this->input->post('o_id');
			$g_id=$this->input->post('gameid');
			if($ubs=="on"){
				$us="banned";
			}else{
				$us="active";
			}
			$w=array(
				"user_ban"=>$us ,
				"ban_essu"=>$oid,
			);
			$this->P_mod->uban($uid,$w);
			redirect(base_url()."admin/all-gemmar/".$g_id);
		}
		
		public function in_Admin(){
			if($this->session->userdata("adminid") == 1){
			$data=$this->P_mod->selAdminRole();
			$w=array(
				'row'=>$data,
			);
			$this->load->view('admin/admin_ins',$w);
		}
		}


		
		public function insAdmin(){
			if($this->session->userdata("adminid") == 1){

			$n=$this->input->post('name');
			$e=$this->input->post('email');
			$g=$this->input->post('gen');
			$d=$this->input->post('dob');
			$a=$this->input->post('adminRole');
			$p=$this->input->post('passwo');

			$pass=password_hash($p, PASSWORD_BCRYPT);
			
			
			$config = Array( 
				'protocol' => 'smtp', 
				'smtp_host' => 'ssl://smtp.googlemail.com', 
				'smtp_port' => 465, 
				'smtp_user' => 'examspaper.official@gmail.com', 
				'smtp_pass' => 'albpofiudmlpacou', ); 
			  
				$this->load->library('email', $config); 
				$this->email->set_newline("\r\n");
				$this->email->from('examspaper.official@gmail.com', 'TheGameWin');
				$this->email->to($e);
				$this->email->subject(' My mail through codeigniter from localhost '); 
				$this->email->message("password - ".$p);
				if (!$this->email->send()) {
				  show_error($this->email->print_debugger()); }
				else {
					$w=array(
						"admin_name"=>$n,
						"admin_email"=>$e,
						"admin_password"=>$pass,
						"gender"=>$g,
						"dob"=>$d,
						"roll"=>$a,
					);
					$this->P_mod->ins_Admin($w);
					redirect(base_url()."admin/Myemployee");
				}
			}
			
		}
		public function seleAllEmp(){
			if($this->session->userdata("adminid") == 1){

			$data=$this->P_mod->selAllem();
			$r=$this->P_mod->selAdminRole();
			$w=array(
				"row"=>$data,
				"role"=>$r
			);
			$this->load->view('admin/allemp',$w);
		}
		}
		public function updAdmin($id){
			if($this->session->userdata("adminid") == 1){

			$r=$this->P_mod->selAdminRole();
			$dat=$this->P_mod->updadmin($id);
			$w=array(
				"row"=>$r,
				"role"=>$dat
			);
			$this->load->view('admin/updAdmin',$w);
		}
		}
		public function update_AdminUser(){
			if($this->session->userdata("adminid") == 1){

			$admin_id=$this->input->post('admin_id');
			$n=$this->input->post('name');
			$e=$this->input->post('email');
			$g=$this->input->post('gen');
			$d=$this->input->post('dob');
			$a=$this->input->post('adminRole');
			$p=$this->input->post('passwo');
			if ($p != ""){
				echo $p;
			$pass=password_hash($p, PASSWORD_BCRYPT);
			
			
			$config = Array( 
				'protocol' => 'smtp', 
				'smtp_host' => 'ssl://smtp.googlemail.com', 
				'smtp_port' => 465, 
				'smtp_user' => 'examspaper.official@gmail.com', 
				'smtp_pass' => 'albpofiudmlpacou', ); 
			  
				$this->load->library('email', $config); 
				$this->email->set_newline("\r\n");
				$this->email->from('examspaper.official@gmail.com', 'TheGameWin');
				$this->email->to($e);
				$this->email->subject(' My mail through codeigniter from localhost '); 
				$this->email->message("password - ".$p);
				if (!$this->email->send()) {
				  show_error($this->email->print_debugger()); }
				else {
					$w=array(
						"admin_name"=>$n,
						"admin_email"=>$e,
						"admin_password"=>$pass,
						"gender"=>$g,
						"dob"=>$d,
						"roll"=>$a,
					);
					$this->P_mod->inupdaet_admin_user($w,$admin_id);
					redirect(base_url()."admin/Myemployee");
				}
			}else{
				$w=array(
					"admin_name"=>$n,
					"admin_email"=>$e,
					"gender"=>$g,
					"dob"=>$d,
					"roll"=>$a,
				);
				$this->P_mod->inupdaet_admin_user($w,$admin_id);
				redirect(base_url()."admin/Myemployee");
			}
		}
		}


		public function deleteAdmin($id){
			if($this->session->userdata("adminid") == 1){

			if($id!=1){
			$this->P_mod->adminDel($id);
			redirect(base_url()."admin/Myemployee");
			}else{
				redirect(base_url()."admin/Myemployee");
			}
		}
		}



	}

?>