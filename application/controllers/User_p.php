<?php
	class User_p extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('User_p_m');
			date_default_timezone_set("Asia/kolkata");
			$this->load->library('session');
		}
		public function s_u_ins(){
			$this->load->view('user/u_ins');
		}
		public function a_creat_a(){
			$grcsp=$this->input->post('g-recaptcha-response');

			$n=$this->input->post('name');
			$u=$this->input->post('username');
			$e=$this->input->post('email');
			$m=$this->input->post('mobileno');
			$w=$this->input->post('whatsappno');
			$gen=$this->input->post('gender');
			$dddd=$this->input->post('date');

			$gnameid=$this->input->post('gameid');
			$rgid=$this->input->post('gid');

			$p=$this->input->post('password');

			$u_ot=mt_rand(100000,999999);


			if(isset($grcsp)){
				$captcha=$this->input->post('g-recaptcha-response');
			}else{
				$captcha=false;
			}
			if(!$captcha){
	
			}else{
				$secret   = '6LfssZYbAAAAABBJVepZZ_TssA_HXy-sEmxAXYR_';
				$response = file_get_contents(
					"https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
				);
				// use json_decode to extract json response
				
				$response = json_decode($response);
			
				if ($response->success === false) {
					//Do something with error
				}
			}
			if ($response->success==true && $response->action >= "validate_captcha") {
				
			$config = Array( 
				'protocol' => 'smtp', 
				'smtp_host' => 'ssl://smtp.googlemail.com', 
				'smtp_port' => 465, 
				'smtp_user' => 'examspaper.official@gmail.com', 
				'smtp_pass' => 'albpofiudmlpacou', ); 
			  
				$this->load->library('email', $config); 
				$this->email->set_newline("\r\n");
				$this->email->from('examspaper.official@gmail.com','TheGameWin');
				$this->email->to($e);
				$this->email->subject('OTP '.$u_ot); 
				$this->email->message("Hi ".$n." \r\n TheGameWin  OTP - ".$u_ot);
				if (!$this->email->send()) {
				  show_error($this->email->print_debugger()); }
				else {
			$pasw = password_hash($p, PASSWORD_BCRYPT);
			
			$stat="deactive";
			$t_d=date('d-m-y h:i:s A');
			$u_ar = array(
				'u_name' =>$n ,
				'use_name' =>$u ,
				'use_email' =>$e ,
				'u_mobil_no' =>$m ,
				'u_whatsapp' => $w,
				'gender'=>$gen,
				'u_passwor' => $pasw,
				'u_otp'=>$u_ot,
				'u_status'=>$stat,
				'user_ban'=>'active',
				'l_date'=>$t_d,
				'dob'=>$dddd,
			);
			$mgame=array(
				"user_email"=>$e,
				"gamename_id"=>$gnameid,
				"my_game_id"=>$rgid,
			);
			$emaiarr=array(
				"useremail"=>$e,
			);
			$addBank=$this->User_p_m->addbank($emaiarr,$e);
			$this->User_p_m->add_mtygame($mgame);
			$mod_data=$this->User_p_m->in_acc($u_ar,$e);

			if ($mod_data==true) {
				$uid=$this->session->userdata('userIId');
					redirect(base_url().'verification/'.$uid);
				//redirect(base_url()."myAccount");
			}else{
				?>
				<script type="text/javascript">
					alert("email alrady");
					window.location.replace("<?php echo base_url(); ?>sign-up");
				</script>
				<?php
			}}
			}else{
				redirect(base_url()."sing-up");
			}


		}
		public function log_user(){
			$un=$this->input->post('email');
			$pass=$this->input->post('password');

			$pageurlredirect=$this->input->post('topurl');
			$find_d=$this->User_p_m->log($un,$pass,$pageurlredirect);

			   if ($find_d == false) {
             ?>
	           <script>
	             alert("invalid email & password");
	             window.location = '<?php echo $pageurlredirect  ?>';
	            </script>
              <?php
	          }else{
	          	redirect("$pageurlredirect");
	          }
		
		}


	public function log_ou(){
		$this->session->unset_userdata("usr_id");
		$this->session->unset_userdata("us_name");
		$this->session->unset_userdata("usr_email");
		$this->session->unset_userdata("usr_mobileno");
		
	    redirect(base_url());
	}
	


	//ADMIN
	public function admin_view(){
		$this->load->view('admin/login_admin');
	}

	public function adminAct(){
		$grcsp=$this->input->post('g-recaptcha-response');
		$gmail=$this->input->post('email');
		$pass=$this->input->post('password');
		if(isset($grcsp)){
			$captcha=$this->input->post('g-recaptcha-response');
		}else{
			$captcha=false;
		}
		if(!$captcha){

		}else{
			$secret   = '6LfssZYbAAAAABBJVepZZ_TssA_HXy-sEmxAXYR_';
			$response = file_get_contents(
				"https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
			);
			// use json_decode to extract json response
			
			$response = json_decode($response);
		
			if ($response->success === false) {
				//Do something with error
			}
		}
		if ($response->success==true && $response->action >= "validate_captcha") {
			$logtime=date('m/d/Y h:i:s a', time());
			$ip= $_SERVER['REMOTE_ADDR'];
			$w=array(
				"login_time"=>$logtime,
				"login_ip"=>$ip,
			);
			$mod_data=$this->User_p_m->loginAdmmin($gmail,$pass,$w);
			if ($mod_data!=false) {
				redirect(base_url()."admin/admin");
			}else{
				?>
				<script type="text/javascript">
					alert("Wrong email");
					window.location.replace("<?php echo base_url(); ?>admin-login");
				</script>
				<?php
			}
		}else{
			redirect(base_url()."admin-login");
		}
	}

	public function log_admin(){
		$uid=$this->session->userdata('adminid');
		if(isset($uid)){
			$tim=date('m/d/Y h:i:s a', time());
			$w=array(
				"log_out_time"=>$tim,
			);
			$this->User_p_m->updLogout($uid,$w);
		}
		$this->session->unset_userdata("adminid");
		$this->session->unset_userdata("adminname");
		$this->session->unset_userdata("adminemail");
		
	    redirect(base_url('admin-login'));
	}
	public function otp_page($user_id){
		$this->session->unset_userdata("userIId");
		$data=$this->User_p_m->verooo($user_id);
		$w=array(
			'row'=>$data,
		);
		
		$this->load->view('otp_ver',$w);
	}
	public function actOtp(){
		$grcsp=$this->input->post('g-recaptcha-response');

		$iid=$this->input->post('id');
		$ootpp=$this->input->post('otp');
		$act="active";




		if(isset($grcsp)){
			$captcha=$this->input->post('g-recaptcha-response');
		}else{
			$captcha=false;
		}
		if(!$captcha){

		}else{
			$secret   = '6LfssZYbAAAAABBJVepZZ_TssA_HXy-sEmxAXYR_';
			$response = file_get_contents(
				"https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
			);
			// use json_decode to extract json response
			
			$response = json_decode($response);
		
			if ($response->success === false) {
				//Do something with error
			}
		}
		if ($response->success==true && $response->action >= "validate_captcha") {
			$w=array(
				"u_status"=>$act,
			);
			$data=$this->User_p_m->updVer($iid,$ootpp,$w);
			
			 if($data != true){
			 	?>
			 	<script>
			 		alert('wrong OTP');
			 		window.location.replace("<?php echo base_url(); ?>verification/<?php echo $iid; ?>");
			 	</script>
			 	<?php 
			}else{
				redirect(base_url());
			}
		}else{
			
			redirect(base_url());
		}
		
	}
	public function vieForget(){
		$this->load->view('forgot_user');
	}
	public function fUser(){
		$grcsp=$this->input->post('g-recaptcha-response');

		$iid=$this->input->post('email');
		$u_ot=mt_rand(100000,999999);
		if(isset($grcsp)){
			$captcha=$this->input->post('g-recaptcha-response');
		}else{
			$captcha=false;
		}
		if(!$captcha){
			redirect(base_url());
		}else{
			$secret   = '6LfssZYbAAAAABBJVepZZ_TssA_HXy-sEmxAXYR_';
			$response = file_get_contents(
				"https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
			);
			// use json_decode to extract json response
			
			$response = json_decode($response);
		
			if ($response->success === false) {
				//Do something with error
			}
		}
		if ($response->success==true && $response->action >= "validate_captcha") {
			


			$st='deactive';
			$w=array(
				'u_otp'=>$u_ot,
				'u_status'=>$st,
			);
			$this->User_p_m->fOrfEmail($iid,$w);
			$useData=$this->User_p_m->seluUse($iid);
			// $name=$useData[0]->u_name;
			// $name=$useData[0]->u_name;
			// $name=$useData[0]->u_name;


			$config = Array( 
				'protocol' => 'smtp', 
				'smtp_host' => 'ssl://smtp.googlemail.com', 
				'smtp_port' => 465, 
				'smtp_user' => 'examspaper.official@gmail.com', 
				'smtp_pass' => 'albpofiudmlpacou', ); 
			  
				$this->load->library('email', $config); 
				$this->email->set_newline("\r\n");
				$this->email->from('examspaper.official@gmail.com','TheGameWin');
				$this->email->to($useData[0]->use_email);
				$this->email->subject('OTP '.$u_ot); 
				$this->email->message("Hi ".$useData[0]->u_name." \n To Change your Password \n TheGameWin  OTP : ".$u_ot);
				if (!$this->email->send()) {
				  show_error($this->email->print_debugger()); }
				else {



			$uuuuData=array(
				"row"=>$useData,
			);

			$this->load->view('otp_verFpass',$uuuuData);

		}

		}else{
			
			redirect(base_url());
		}
	}

	public function newpass(){
		
		$grcsp=$this->input->post('g-recaptcha-response');

		$iid=$this->input->post('id');
		$ootpp=$this->input->post('otp');
		$act="active";




		if(isset($grcsp)){
			$captcha=$this->input->post('g-recaptcha-response');
		}else{
			$captcha=false;
		}
		if(!$captcha){

		}else{
			$secret   = '6LfssZYbAAAAABBJVepZZ_TssA_HXy-sEmxAXYR_';
			$response = file_get_contents(
				"https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']
			);
			// use json_decode to extract json response
			
			$response = json_decode($response);
		
			if ($response->success === false) {
				//Do something with error
			}
		}
		if ($response->success==true && $response->action >= "validate_captcha") {
			$w=array(
				"u_status"=>$act,
			);
			$data=$this->User_p_m->updVer($iid,$ootpp,$w);
			
			 if($data != true){
			 	?>
			 	<script>
			 		alert('wrong OTP');
			 		window.location.replace("<?php echo base_url(); ?>verification/<?php echo $iid; ?>");
			 	</script>
			 	<?php 
			}else{
				
				$cpdata=array(
					"us_id"=>$iid,
				);



				$this->load->view('newPass',$cpdata);
			}
		}else{
			
			redirect(base_url());
		}
	}
	public function nPass(){
        $id=$this->input->post('id');
        $p=$this->input->post('passrord');
        $pass=password_hash($p, PASSWORD_BCRYPT);
		$w=array(
			'u_passwor'=>$pass,
		);
		$this->User_p_m->updNPass($id,$w);
		?><script>
			alert('you are successfully changed your password');
			window.location.replace("<?php echo base_url();?>");
			
		</script><?php
		
    }

	}
?>