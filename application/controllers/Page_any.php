<?php
	class Page_any extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->database();
			$this->load->model('H_md');
			$this->load->library('session');
		}
		public function m_page(){
			$data=$this->H_md->all_p();
			$of=$this->H_md->sel_off();
			$w = array(
				'g_data' =>$data ,
				'of_ban'=>$of, 
			);
			$this->load->view('home',$w);
		}
		// public function game_pag($id){
  //           $uemai=$this->session->userdata('usr_email');
  //           if(isset($uemai)){
  //               $this->H_md->ord($uemai,$id);
  //           }
		// 	$this->load->view('gams');
		// }
		public function selpro($id){
            $games_id=$id;
            $uemai=$this->session->userdata('usr_email');
             if(isset($uemai)){
                 $odit=$this->H_md->ord($uemai,$id);
                 $m=$this->H_md->sel_g($id);
                 $galus=$this->H_md->allguse($id);
                $w=array(
                    'row' => $m,
                    'odit'=>$odit,
                    'abc'=>$games_id,
                    'gamcount'=> $galus,
                );
                $this->load->view('gams',$w);
             }else{
                $galus=$this->H_md->allguse($id);
                $m=$this->H_md->sel_g($id);
                $w=array(
                    'row' => $m,
                    'gamcount'=> $galus,
                    'abc'=>$games_id,
                );
                $this->load->view('gams',$w);
             }
			
			
			
		}
        public function realDataChangeGame($idallgamedata){
            //$idallgamedata=$this->input->post('game_id');
            
            $uemai=$this->session->userdata('usr_email');
            
             if(isset($uemai)){
               
                 $galus=$this->H_md->twoallguse($idallgamedata);
                 
                // $w=array(
                   
                //     'gamssscount'=> $galus,
                // );
                echo json_encode($galus);
              }
			
			
        }

		public function cr_acc(){
            $gams=$this->H_md->gtab('');
            $w=array(
                "grow"=>$gams,
            );
			$this->load->view('c_account',$w);
		}
		public function vlist(){
			$api_key='AIzaSyDd9q2mCOtgw8seNRLkVu-Gwprav3Dx2fg';
            $api_url='https://www.googleapis.com/youtube/v3/';
            $chnnelId='UCO-GxJ_FerL-njiv8mw3fNQ';
            $w=array(
                'part' => 'snippet,contentDetails,statistics',
                'id' => $chnnelId,
                'key' => $api_key,
            );
            $urlc=$api_url.'channels?'.http_build_query($w);
            $channel_D = json_decode(file_get_contents($urlc),true);
             // echo "<pre>";
             // print_r($channel_D);
             // exit;
             $title = $channel_D['items'][0]['snippet']['title'];
            $thumbnails = $channel_D['items'][0]['snippet']['thumbnails']['medium']['url'];

            $subscriberCoun =$channel_D['items'][0]['statistics']['hiddenSubscriberCount'];

            $videoCount = $channel_D['items'][0]['statistics']['videoCount'];
                $viewCount = $channel_D['items'][0]['statistics']['viewCount'];



            $varr = array(
            'part' => 'snippet,contentDetails',
            'playlistId' => $channel_D['items'][0]['contentDetails']['relatedPlaylists']['uploads'],
            'key' => $api_key,
            'maxResults'=>"50000",
            );
            $urlv=$api_url.'playlistItems?'.http_build_query($varr);

            $video_D = json_decode(file_get_contents($urlv),true);
            // echo "<pre>";
            // print_r($video_D);
            // exit;
             $p_data = $video_D['items'];
            $w=array(
                
                "all_video"=>$p_data,
            );
			$this->load->view('yvideo',$w);
		}
		public function ov($vid){
			$api_key='AIzaSyDd9q2mCOtgw8seNRLkVu-Gwprav3Dx2fg';
            $api_url='https://www.googleapis.com/youtube/v3/';
            $chnnelId='UCO-GxJ_FerL-njiv8mw3fNQ';
            $w=array(
                'part' => 'snippet,contentDetails,statistics',
                'id' => $chnnelId,
                'key' => $api_key,
            );
            $urlc=$api_url.'channels?'.http_build_query($w);
            $channel_D = json_decode(file_get_contents($urlc),true);
             // echo "<pre>";
             // print_r($channel_D);
             // exit;
             $title = $channel_D['items'][0]['snippet']['title'];
            $thumbnails = $channel_D['items'][0]['snippet']['thumbnails']['medium']['url'];

            $subscriberCoun =$channel_D['items'][0]['statistics']['hiddenSubscriberCount'];

            $videoCount = $channel_D['items'][0]['statistics']['videoCount'];
                $viewCount = $channel_D['items'][0]['statistics']['viewCount'];



            $varr = array(
            'part' => 'snippet,contentDetails',
            'playlistId' => $channel_D['items'][0]['contentDetails']['relatedPlaylists']['uploads'],
            'key' => $api_key,
            'maxResults'=>"50000",
            );
            $urlv=$api_url.'playlistItems?'.http_build_query($varr);

            $video_D = json_decode(file_get_contents($urlv),true);
            // echo "<pre>";
            // print_r($video_D);
            // exit;
             $p_data = $video_D['items'];
            $w=array(
                "vi"=>$vid,
                "all_video"=>$p_data,
            );
			$this->load->view('oneVideo',$w);
		}
        public function resul(){
            $data=$this->H_md->reGame();
            $w=array(
                'ddd'=>$data,
            );
            $this->load->view('result_game',$w);
        }
        public function all_win($game_id){
            $data=$this->H_md->selwiner($game_id);
            $w=array(
                'row'=>$data,
            );
            $this->load->view('all_winsrs',$w);
        }
        public function abou(){
            $this->load->view('about');
        }
        public function ter(){
            $this->load->view('terms');
        }
        public function er(){
            $this->load->view('erreo');
        }
	}

?>