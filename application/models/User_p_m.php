<?php  
	class User_p_m extends CI_Model{
	
	public function in_acc($uar,$email){
        $this->db->where('use_email',$email);
        $d=$this->db->get('user');
        $r=$d->result();
        if (count($r)>0) {
            return false;
           
        }else{
            $this->db->insert('user',$uar);
            $insert_id = $this->db->insert_id();
		    $this->session->set_userdata('userIId',$insert_id);
             return true;
        }
		
	}
    public function addbank($dat,$em){
        $this->db->where('useremail',$em);
        $d=$this->db->get('usr_bank');
        $r=$d->result();
        if (!count($r)>0) {
            $this->db->insert('usr_bank',$dat);
           
        }
    }
	public function log($u_n,$password,$topurl){
        
		 	$this->db->where('use_email',$u_n);
            $q=$this->db->get('user');
            $r=$q->result();
             if(count($r)>0){
                $stat=$r[0]->u_status;
                $ban=$r[0]->user_ban;

                if($stat == 'active'&&$ban=="active"){
                 $password_hash = $r[0]->u_passwor;
                     if(password_verify($password, $password_hash)){
                          $this->session->set_userdata("usr_id",$r[0]->us_id);
                          $this->session->set_userdata('us_name',$r[0]->u_name);
                          $this->session->set_userdata('usr_email',$r[0]->use_email);
                          $this->session->set_userdata('usr_mobileno',$r[0]->u_mobil_no);
                          

                          redirect("$topurl");
                         
                     } else {
                         return false;
                     }

                    }else {
                        return false;
                    }
                

                
             }
	}
    public function add_mtygame($data){
        $this->db->insert('game_id',$data);
    }
    public function loginAdmmin($g,$p,$data){
        $this->db->where('admin_email',$g);
            $q=$this->db->get('admin');
            $r=$q->result();
             if(count($r)>0){
                $password_hash = $r[0]->admin_password;
                
                     if(password_verify($p, $password_hash)){

                        $this->session->set_userdata("adminid",$r[0]->admin_id);
                        $this->session->set_userdata('adminname',$r[0]->admin_name);
                        $this->session->set_userdata('adminemail',$r[0]->admin_email);

                        $this->db->where('admin_email',$g);
                        $this->db->update('admin',$data);

                        return true;
                     }else{
                        return false;
                     }
             }
    }

    public function updLogout($uid,$data){
        $this->db->where('admin_id',$uid);
        $this->db->update('admin',$data);
    }
    public function verooo($uid){
        $this->db->where('us_id', $uid);
        $q=$this->db->get('user');
        return $r=$q->result();
        
    }
    public function updVer($i_id,$o_otpp,$data){
        $this->db->where('us_id',$i_id);
        $this->db->where('u_otp',$o_otpp);
        $q=$this->db->get('user');
        $r=$q->result();

        if(count($r)>0){
            
                $this->db->where('us_id',$i_id);
                $this->db->where('u_otp',$o_otpp);
                $this->db->update('user',$data);
                return true;
            
        }else{
            return false;
        }
        
    }
    public function fOrfEmail($eiid,$data){
        $this->db->where('use_email',$eiid);
        $this->db->update('user',$data);
    }
    public function seluUse($uiid){
        $this->db->where('use_email',$uiid);
        $q=$this->db->get('user');
        return $r=$q->result();
    }
    public function updNPass($uid,$data){
        $this->db->where('us_id',$uid);
        $this->db->update('user',$data);
    }
}


?>