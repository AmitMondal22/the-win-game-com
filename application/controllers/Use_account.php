<?php  
class Use_account extends CI_Controller{
	
	public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('Payment_mod');
			$this->load->model('User_ditls');

			date_default_timezone_set("Asia/kolkata");
			$this->load->library('session');
			$user_id=$this->session->userdata("usr_id");
			if (!isset($user_id)) {
				redirect(base_url());
			}
	}


	public function add_sop(){
		$amt=$this->input->post('amt');
		$u_name=$this->input->post('name');
		$gid=$this->input->post('game_id');
	    $payment_status="pending";
	    $added_on=date('m/d/Y h:i:s a', time());
	    if($amt!="" && $gid!=""){
	    $w=array(
	    	'price'=>$amt,
	    	'user_name'=>$u_name,
	    	'game_id'=>$gid,
	    	'payment_satatus'=>$payment_status,
	    	'payment_date'=>$added_on,
	    );
	    $this->Payment_mod->payment_proc($w);
	}
	$oid=$this->session->userdata('OID');
	    if(isset($_POST['payment_id']) && isset($oid)){
    	$payment_id=$this->input->post('payment_id');
    	$payment_status='complete';
    	$w=array(
    		'rz_payment_id'=>$payment_id,
    		'payment_satatus'=>$payment_status,
    	);
    	$this->Payment_mod->pay_upd($w);

		$this->session->unset_userdata("OID");

}


	}




	public function my_order(){
		$uid=$this->session->userdata('usr_email');
		$odara=$this->User_ditls->myOrd($uid);
		$w=array(
			"row"=>$odara,
		);
		$this->load->view('myOrde',$w);
	}
	public function ord_view($pay_id){
		$oinfodata=$this->User_ditls->odinf($pay_id);
		$resu=$this->User_ditls->paySta($pay_id);
		$w = array(
			'row' => $oinfodata,
			'results'=>$resu, 
		);
		$this->load->view('one_order',$w);
	}

	public function macc(){
		$uid=$this->session->userdata('usr_email');
		$data=$this->User_ditls->myacc($uid);
		$uem=$this->session->userdata('usr_email');
		$gm=$this->User_ditls->agame();
		$bankDit=$this->User_ditls->getBank($uem);
		$w=array(
			"urow"=>$data,
			"allgame"=>$gm,
			"bnk"=>$bankDit,
		);
		$this->load->view('myAcc',$w);
	}

	public function updus(){
		$uem=$this->input->post('email');
		$n=$this->input->post('name');
		$m=$this->input->post('mob');
		$wh=$this->input->post('wp');
		$g=$this->input->post('gend');

		$gn=$this->input->post('gname');
		$gid=$this->input->post('gameid');
		$w=array(
			"u_name"=>$n,
			"gender"=>$g,
			"u_mobil_no"=>$m,
			"u_whatsapp"=>$wh,

		);
		$wo=array(
			"gamename_id"=>$gn,
			"my_game_id"=>$gid,
		);

		$this->User_ditls->upduser($w,$uem);
		$this->User_ditls->upd_gd($wo,$uem);
		redirect(base_url()."myAccount");
	}
	public function updFId(){
		$uem=$this->input->post('uemail');
		$ffid=$this->input->post('fFr');
		$sfid=$this->input->post('sFr');
		$tfid=$this->input->post('tFr');
		$date=date('m/d/Y h:i:s a', time());
		$w=array(
			"fFrindId"=>$ffid,
			"sFrindId"=>$sfid,
			"tFrindId"=>$tfid,
			"date"=>$date,
		);
		$this->User_ditls->updFi($w,$uem);
		redirect(base_url()."myAccount");
	}
	public function updBank(){
		$uem=$this->input->post('uemail');
		$upi=$this->input->post('upiid');
		$acc=$this->input->post('bankAccNo');
		$ifsc=$this->input->post('ifscCode');
		$holname=$this->input->post('holName');
		$date=date('m/d/Y h:i:s a', time());
		$up=array(
			"uPi"=>$upi,

		);
		$ban=array(
			"accountNo"=>$acc,
			"iFSC"=>$ifsc,
			"holderName"=>$holname,
			"date"=>$date,
		);
		$this->User_ditls->upi_upd($up,$uem);
		$this->User_ditls->bnk_upd($ban,$uem);
		redirect(base_url()."myAccount");


	}
	

}

?>