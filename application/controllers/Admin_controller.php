<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {


	public function __construct() {
		parent::__construct();
		#$this->load->library('form_validation');
		#$this->load->library('session');
		$this->load->model('admin_model');
	}
	



	public function index()
	{
		//------------------------SLIDER IMAGES-------------------------------------------//

		$data ['banners'] = $this->admin_model->banner();
		
		//-----------------------OUR AIM SECTION------------------------------------------//

		$data ['our_aim'] = $this->admin_model->our_aim();

		//-----------------------WHY CHOOSE US---------------------------------------------//

		$data ['why_chose_us'] = $this->admin_model->why_us();

		//--------------------------RECENT NOTIFICATIONS-----------------------------------//

		$data ['recent_notification'] = $this->admin_model->notification();

		//--------------------------OUR ACHIEVEMENTS--------------------------------------//

		$achievements = 1;
		$data['achievement'] = $this->admin_model->get_achievement($achievements);

		//-----------------------------RECENT ACTIVITIES----------------------------------//

		$activities_id = 1; 
		$data['activities'] = $this->admin_model->get_activities($activities_id);

		//----------------------------------------------------------------------------------//
		#								FOOTER SECTION

		//---------------------------------WORKING HOURS------------------------------------//

		$data['working_hr'] = $this->admin_model->working_hr();

		//-----------------------------------ADDRESS----------------------------------------//

		$data['address'] = $this->admin_model->adress();

		//-----------------------------CONTACT US----------------------------------------------//

		$data['contactUs'] = $this->admin_model->contactUs();

		//------------------------------FOLLOW US--------------------------------------------//

		#$data['followUs'] = $this->admin_model->followUs();
	


		$this->load->view('website/home', $data);
		
	}
#======================================ADMIN LOGIN=============================================================
	public function login() {
		if($this->form_validation->run('login') == FALSE) {
		$this->load->view('admin/login');
	}	else {
		$id = $this->input->post('admin_id');
		$pswd = $this->input->post('admin_pswd');
		$this->load->model('admin_model');
		$verify = $this->admin_model->login($id , $pswd);

		if ($verify) {
			$this->session->set_userdata('id',$id);
			$this->session->set_flashdata('sucess','Admin logged in sucessfully');
			
			redirect('admin_controller/dashboard');
		}	else {
			$this->session->set_flashdata('error','Admin crediontials did not matched');
			
			redirect('admin_controller/login');
		}
	}	
	}
#======================================ADMIN DASHBOARD=========================================================

	public function dashboard () {
		#$this->load->view('admin/dashboard');
		$data['unrepliedCount'] = $this->admin_model->getUnrepliedInquiriesCount();
    	$this->load->view('admin/dashboard', $data);
	}

#=======================================EDIT HOME==============================================================

	public function edit_home() {
		$this->load->view('admin/home/edit_home');
	}

#====================================EDIT IMAGE SLIDER SECTION===========NOT COMPLETED======================================


	public function slider() {
	    $data['banners'] = $this->admin_model->banner();
	    $this->load->view('admin/home/slide_banner', $data);
	}

	public function save_banners() {
		$config['upload_path'] = './uploads/banners/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$this->load->library('upload', $config);
	
		// Retrieve POST data
		$data = $this->input->post();
	
		// Initialize an array to store updated banners' data
		$updated_banners = array();
	
		// Loop through each banner ID and check if a new banner is uploaded
		for ($i = 1; $i <= 9; $i++) {
			$img_field = 'img' . $i;
	
			if (!empty($_FILES[$img_field]['name'])) {
				if ($this->upload->do_upload($img_field)) {
					// Construct the banner file path
					$banner_path = 'uploads/banners/' . $this->upload->data('file_name');
	
					// Update the banner in the database
					$this->admin_model->update_banner($i, $banner_path);
	
					// Store the updated banner data
					$updated_banners[] = array(
						'id' => $i,
						'banner' => $banner_path
					);
				}
			}
		}
	
		// Print all updated banners data
		
		// Set flash message and redirect
		$this->session->set_flashdata('upload_activities', 'Recent Activities section updated successfully');
		redirect('admin_controller/dashboard');
	
	}
	
	
	/*
		public function save_banners() {
			
				$config['upload_path'] = './uploads/banners/';
				$config['allowed_types'] = 'gif|jpg|jpeg|png';
				$this->load->library('upload', $config);
	
				
				$data = $this->input->post();
				#$banners_id = 1; 
	
			if (!empty($_FILES['img1']['name'])) {
				if ($this->upload->do_upload('img1')) {   
					$data['banner1'] = 'uploads/banners/' . $this->upload->data('file_name');
				}
			} 
	
			
			if (!empty($_FILES['img2']['name'])) {
				if ($this->upload->do_upload('img2')) {
					$data['banner2'] = 'uploads/banners/' . $this->upload->data('file_name');
				}
			}
	
			if (!empty($_FILES['img3']['name'])) {
				if ($this->upload->do_upload('img3')) {
					$data['banner3'] = 'uploads/banners/' . $this->upload->data('file_name');
				} 
			}
	
			if (!empty($_FILES['img4']['name'])) {
				if ($this->upload->do_upload('img4')) {
					$data['banner4'] = 'uploads/banners/' . $this->upload->data('file_name');
				} 
			}
	
			if (!empty($_FILES['img5']['name'])) {
				if ($this->upload->do_upload('img5')) {
					$data['banner5'] = 'uploads/banners/' . $this->upload->data('file_name');
				}
			}
	
			if (!empty($_FILES['img6']['name'])) {
				if ($this->upload->do_upload('img6')) {
					$data['banner6'] = 'uploads/banners/' . $this->upload->data('file_name');
				}
			}

			if (!empty($_FILES['img7']['name'])) {
				if ($this->upload->do_upload('img7')) {
					$data['banner7'] = 'uploads/banners/' . $this->upload->data('file_name');
				}
			}

			if (!empty($_FILES['img8']['name'])) {
				if ($this->upload->do_upload('img8')) {
					$data['banner8'] = 'uploads/banners/' . $this->upload->data('file_name');
				}
			}

			if (!empty($_FILES['img9']['name'])) {
				if ($this->upload->do_upload('img9')) {
					$data['banner9'] = 'uploads/banners/' . $this->upload->data('file_name');
				}
			}
			$model = $this->admin_model->save_banners( $data);	#$banners_id,
			if ($model) {
				$this->session->set_flashdata('upload_activities','Recent Activities section update sucessfully');
				redirect('admin_controller/dashboard');
			}	else {
				$this->session->set_flashdata('upload_activities','Recent Activities section update sucessfully');
				redirect('admin_controller/save_banners');
		}
			
		
		}

	*/

#=======================================OUR AIMS SECTION=======================================================
	public function our_aim() {
		$data['our_aim'] = $this->admin_model->our_aim();
    	$this->load->view('admin/home/our_aim', $data);
	}
	public function edit_our_aim() {
		$title = $this->input->post('title');
		$description = $this->input->post('description');

		if ($this->form_validation->run('our_aim') == FALSE) {
			redirect('admin_controller/our_aim');
		}  else {
			$this->admin_model->edit_our_aim($title, $description);

			$this->session->set_flashdata('aim_updated','Our Aims Section Updated Sucessfully');
			redirect('admin_controller/dashboard');
		}
	}

#=======================================WHY CHOOSE SECTION=====================================================

	public function why_us() {
		$data['why_us'] = $this->admin_model->why_us();
		$this->load->view('admin/home/why_us', $data);
	}
	public function edit_why_us() {
		$title = $this->input->post('title');
		$description = $this->input->post('description');

		if ($this->form_validation->run('why_us') == FALSE) {
			redirect('admin_controller/why_us');
		}	else {
			$this->admin_model->edit_why_us($title, $description);

			$this->session->set_flashdata('why_us','Why Us Section Updated Sucessfully');
			redirect('admin_controller/dashboard');
		}
	}


#========================================RECENT NOTIFICATIONS==================================================

	public function notification() {
		$data['notification'] = $this->admin_model->notification();
		$this->load->view('admin/home/notification',$data);
	}

	public function edit_notification() {
		if ($this->form_validation->run('notification') == FALSE ) {
			$this->load->view('admin/home/notification');
		}	else {

			$config['upload_path'] = './uploads/recent_notification_logo/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			#$config['max_size'] = 1024 * 5;
			#$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->do_upload('logo');
		// if (!$this->upload->do_upload('logo') ) {

		// 	 $error = $this->upload->display_errors();
		// 	 $this->session->set_flashdata('error_rn', $error);
		// 	 redirect('admin_controller/edit_notification');

		// }	else {
			$data = $this->input->post();
			$logo_data = $this->upload->data();
			$logo_path = './uploads/recent_notification_logo/'.$logo_data['file_name'];
			if(empty($logo_data['file_name']))
			{
				$logo_path	=	$data['fileURL'];
			}
			$content = [
				'image' => $logo_path,
				'title' => $data['title'],
				'notification' =>$data['notification']
			];
			
			$send = $this->admin_model->edit_notification($content);
			
			if ($send ) {
			$this->session->set_flashdata('sucess_rn','Recent notification updated sucessfully');
			redirect('admin_controller/dashboard');
		}	else {
			$this->session->set_flashdata('error_rn','Recent notification Not updated ');
			redirect('admin_controller/edit_notification');
		}
	#}
	}	
	}


#==========================================ACADEMIC ACHIEVEMENTS===============================================

	public function edit_achievements() {
	
    	$achievement_id = 1; 
    	$data['achievement'] = $this->admin_model->get_achievement($achievement_id);
    	$this->load->view('admin/home/achievements', $data);
	}

	public function update_achievements() {
   
    	if ($this->form_validation->run('achievements') == FALSE) {
    		$this->edit_achievements();
    	} else {
        
        	$config['upload_path'] = './uploads/academic_achievements/';
        	$config['allowed_types'] = 'gif|jpg|jpeg|png';
        	$this->load->library('upload', $config);

        	$data = $this->input->post();
        	$achievement_id = 1; 

        if (!empty($_FILES['img1']['name'])) {
            
        if ($this->upload->do_upload('img1')) {
                
            $data['img1'] = 'uploads/academic_achievements/' . $this->upload->data('file_name');
        } else {
                
            $error = $this->upload->display_errors();
            $this->session->set_flashdata('error_img1', $error);
            redirect('admin_controller/edit_achievements');
            }
        }

        if (!empty($_FILES['img2']['name'])) {
            
            if ($this->upload->do_upload('img2')) {
                
                $data['img2'] = 'uploads/academic_achievements/' . $this->upload->data('file_name');
            } else {
                
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('error_img2', $error);
                redirect('admin_controller/edit_achievements');
            }
        }

        $this->admin_model->update_achievement($achievement_id, $data);
		$this->session->set_flashdata('upload_achievement','Achievement section update sucessfully');
        
        redirect('admin_controller/dashboard');
    	}
	}

#==========================================Recent Activities===================================================

	public function edit_activities() {

		$activities_id = 1; 
		$data['activities'] = $this->admin_model->get_activities($activities_id);
		$this->load->view('admin/home/recent_activities', $data);
	}

	public function recent_activities() {
        
        	$config['upload_path'] = './uploads/recent_activities/';
        	$config['allowed_types'] = 'gif|jpg|jpeg|png';
        	$this->load->library('upload', $config);

        	$data = $this->input->post();
        	$activities_id = 1; 

        if (!empty($_FILES['img1']['name'])) {
        	if ($this->upload->do_upload('img1')) {   
        	    $data['img1'] = 'uploads/recent_activities/' . $this->upload->data('file_name');
        	} else {
				echo "Error!";
        	    redirect('admin_controller/edit_activities');
        	}
        }

        
        if (!empty($_FILES['img2']['name'])) {
            if ($this->upload->do_upload('img2')) {
                $data['img2'] = 'uploads/recent_activities/' . $this->upload->data('file_name');
            } else { 
				echo "Error!";
                redirect('admin_controller/edit_activities');
            }
        }

		if (!empty($_FILES['img3']['name'])) {
            if ($this->upload->do_upload('img3')) {
                $data['img3'] = 'uploads/recent_activities/' . $this->upload->data('file_name');
            } else { 
				echo "Error!";
                redirect('admin_controller/edit_activities');
            }
        }

		if (!empty($_FILES['img4']['name'])) {
            if ($this->upload->do_upload('img4')) {
                $data['img4'] = 'uploads/recent_activities/' . $this->upload->data('file_name');
            } else { 
				echo "Error!";
                redirect('admin_controller/edit_activities');
            }
        }

		if (!empty($_FILES['img5']['name'])) {
            if ($this->upload->do_upload('img5')) {
                $data['img5'] = 'uploads/recent_activities/' . $this->upload->data('file_name');
            } else { 
				echo "Error!";
                redirect('admin_controller/edit_activities');
            }
        }

		if (!empty($_FILES['img6']['name'])) {
            if ($this->upload->do_upload('img6')) {
                $data['img6'] = 'uploads/recent_activities/' . $this->upload->data('file_name');
            } else { 
				echo "Error!";
                redirect('admin_controller/edit_activities');
            }
        }

        $this->admin_model->update_activities($activities_id, $data);
		$this->session->set_flashdata('upload_activities','Recent Activities section update sucessfully');
        
        redirect('admin_controller/dashboard');
    	
	}

#
#------------------------------------------FOOTER SECTION------------------------------------------------------
#
#==========================================WORKING HOURS===================================================

	public function working_hr() {
		$data['working_hr'] = $this->admin_model->working_hr();
		$this->load->view('admin/home/working_hr',$data);
		
	}

	public function edit_working_hr() {
		
		if (!$this->form_validation->run('workingHr')) {
			#redirect('admin_controller/edit_working_hr');
			$this->working_hr();
			
		}	else {
			
			$title = $this->input->post('title');
			$content = $this->input->post('content');

			$model = $this->admin_model->edit_working_hr($title , $content);
			
			if ($model) {
				$this->session->set_flashdata('working_hr','Working Hours updated sucessfully');
				redirect ('admin_controller/dashboard');
			}	else {
				$this->session->set_flashdata('working_hr','Working Hours not updated!');
				redirect ('admin_controller/edit_working_hr');
			}
		}
	}

#==============================================ADDRESS=====================================================

	public function adress() {
		$data['address'] = $this->admin_model->adress();
		$this->load->view('admin/home/adress', $data);
	}

	public function edit_adress() {
		if ($this->form_validation->run('address') == FALSE) {
			$this->adress();
		}	else {
			$title = $this->input->post('title');
			$content = $this->input->post('content');

			$model = $this->admin_model->edit_adress($title, $content);

			if ($model) {
				$this->session->set_flashdata('adress','Address updated sucessfully');
				redirect ('admin_controller/dashboard');
			}	else {
				$this->session->set_flashdata('adress','Address not updated!');
				redirect ('admin_controller/edit_adress');
			}

		}
	}


#=============================================CONTACT US===================================================

	public function contactUs() {
		$data['contactUs'] = $this->admin_model->contactUs();
		$this->load->view('admin/home/contactUs', $data);
	}

	public function edit_contactUs() {
		if ($this->form_validation->run('contactUs') == FALSE) {
			$this->contactUs();
		}	else {
			$title = $this->input->post('title');
			$content = $this->input->post('content');

			$model = $this->admin_model->edit_contactUs($title, $content);

			if ($model) {
				$this->session->set_flashdata('contactUs','Contact us updated sucessfully');
				redirect ('admin_controller/dashboard');
			}	else {
				$this->session->set_flashdata('contactUs','contact us not updated!');
				redirect ('admin_controller/edit_contactUs');
			}

		}
	}


#==========================================USER INQUIRY==========NOT COMPLETED==============================================

	public function submit_form() {

		$name = $this->input->post('name');
		$mail = $this->input->post('email');
		$msg = $this->input->post('msg');

		if ($this->form_validation->run('inquiry') == FALSE) {
			echo '<script>alert("Not submitted! Try again.");</script>'; 
	        echo '<script>window.location.href="' . base_url('admin_controller') . '";</script>';
		}	else {

			$data = [
				'name' => $name,
				'email' => $mail,
				'message' => $msg,
				'reviewed' => 0
			];
			$this->admin_model->inquiry($data);
			echo '<script> alert("Your query is submitted sucessfully! We can contact you soon."); </script>';
			echo '<script>window.location.href="' . base_url('admin_controller') . '";</script>';		
	}
	}

	public function review() {

	    #$data['newMessagesCount'] = $this->admin_model->getNewMessagesCount();

		$data['inquiries'] = $this->admin_model->getAllInquiries();

	    $this->load->view('admin/inquiry', $data);
	}



	public function reply() {

		$mail = $this->input->post('email');

		$this->session->set_userdata('reply_inquiry', $mail);

		$data ['toEmail'] = $mail;
		$this->load->view('admin/reply_inquiry', $data);
	}
	public function reply_inquiry() {


			$to = $this->session->userdata('reply_inquiry');
			$sub = $this->input->post('subject');
			$content = $this->input->post('content');

			$attachment_path = null; 

			if (!empty($_FILES['attachment']['name'])) {
				$config['upload_path'] = './uploads/reply_mail/';
				$config['allowed_types'] = 'pdf|jpg|jpeg|png';
				$config['max_size'] = 1024 * 5; // 5MB limit 
			
				$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('attachment')) {
				$attachment_data = $this->upload->data();
				$attachment_path = $attachment_data['full_path'];
				
				
			} else {
				$error = $this->upload->display_errors();
	        echo $error;
	        }
		}

		
	$attachment_saved = $this->admin_model->inquiry_mail($to, $sub, $content, $attachment_path);
		if ($attachment_saved == TRUE) {
			$this->session->set_flashdata("inquiry_send","Send sucessfully!");
			redirect('admin_controller/dashboard');
		} else {
			$this->session->set_flashdata("inquiry_send","Not send! Try again.");
			$this->load->view('admin/send_email');
		}

	    redirect('admin_controller/dashboard');
	}

#=========================================FOLLOW US=========================================================

	public function followUs() {
		#$data['followUs'] = $this->admin_model->followUs();
		#$this->load->view('admin/home/followUs', $data);
		$this->load->view('admin/home/followUs');
	}

	public function edit_followUs() {
		if ($this->form_validation->run('followUs') == FALSE) {
			$this->followUs();
		}
		$twitter = $this->input->post('twitter');
		$facebook = $this->input->post('facebook');
		$instagram = $this->input->post('instagram');
		$youtube = $this->input->post('youtube');

		$data = [
			'twitter' => $twitter,
			'facebook' => $facebook,
			'instagram' => $instagram,
			'youtube' => $youtube
		];
		$sent = $this->admin_model->followUs($data);

		if ($sent == TRUE) {
			$this->session->set_flashdata('added','Social Links added sucessfully');
			redirect('admin_controller/dashboard');
		}	else {
			$this->session->set_flashdata('added','Error! Please try again');
			redirect('admin_controller/edit_followUs');
		}

	}




#==========================================SEND EMAIL==========================================================

	public function email_section() {
		$this->load->view('admin/send_email');
	}

	public function send_mail() { 
	
		if($this->form_validation->run('sendMail') == FALSE) {
			#$this->load->view('admin/send_email');
			redirect('admin_controller/email_section');

		} 
			$this->load->view('admin/send_email');
		$to = $this->input->post('email');
		$sub = $this->input->post('subject');
		$msg = $this->input->post('content');

		$attachment_path = null; 

		if (!empty($_FILES['attachment']['name'])) {
			$config['upload_path'] = './uploads/email_attachments/';
			$config['allowed_types'] = 'pdf|jpg|jpeg|png';
			$config['max_size'] = 1024 * 5; // 1MB limit (adjust as needed)
		
			$this->load->library('upload', $config);
		
			if ($this->upload->do_upload('attachment')) {
				$attachment_data = $this->upload->data();
				$attachment_path = $attachment_data['full_path'];
				
				
			} else {
				$error = $this->upload->display_errors();
	        echo $error;
	        }
		}

	$attachment_saved = $this->admin_model->save_mail($to, $sub, $msg, $attachment_path);

		if ($attachment_saved == TRUE) {
			$this->session->set_flashdata("mail_send","Sucessfully saved!");
			redirect('admin_controller/dashboard');
		} else {
			$this->load->view('admin/send_email');
			$this->session->set_flashdata("mail_not_send","Not saved! Try again.");
		}

	    $this->load->view('admin/send_email');
	}


#==========================================ADMIN LOGOUT========================================================

	public function logout() {
		$this->session->sess_destroy();
		$this->session->set_flashdata('success', 'Logged out successfully');
		redirect('admin_controller/login');
	}



#==================================TEST=================================================

	public function test() {

		$this->load->view('admin/home/working_hr');
		

}


}



