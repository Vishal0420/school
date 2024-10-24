<?php
defined ('BASEPATH') OR exit ('No direct sscript access allowed');

class Admin_model extends CI_Model {

#======================================ADMIN LOGIN==========================================================

    public function login($id, $pswd) {
       
        $query = $this->db->get_where('admin', array('admin_id' => $id, 'admin_pswd' => $pswd));

        if ($query->num_rows() > 0 ) {
            return true; 
        } else {
            return false; 
        }
    }


#=======================================EMAIL SENDING=======================================================

    public function save_mail($to, $sub, $msg, $attachment_path = null) {

        date_default_timezone_set('Asia/Kolkata');
        $created_at = date("Y/m/d H:i:s");
        $this->email->from('vc981942@gmail.com', 'Sarasvati Paradise International Public School');
        $this->email->to($to);
        $this->email->subject($sub);
        $this->email->message($msg);

        if ($attachment_path !== null && file_exists(($attachment_path))) {
            $this->email->attach($attachment_path);
        }

        $data = array(
            'email' => $to,
            'subject' => $sub,
            'content' => $msg,
            'created_at' => $created_at,
            'attachment' => $attachment_path 
        );
        if ($data) {
            if($this->email->send()) {
                $insert = $this->db->insert('email_data', $data);

                if($insert) {
                    return TRUE;
                }   else {
                    echo "Not saved nto DB" ;
                }
                echo "Email send";
            }   else {
                echo "email not send";

            }
        }   else {
            echo "no data found to insert into DB";
        }
      }   

#======================================SLIDER BANNERS==============NOT COMPLETED========================================


    public function banner() {
        $query = $this->db->get('newbanner ');
    
        if ($query->num_rows() > 0) {
            return $query->result();  
        } else {
            return array();
        }
    }

    public function update_banner($id, $banner_path) {
        $data = array(
            'banner' => $banner_path
        );

        $this->db->where('id', $id);
        $this->db->update('newbanner', $data);
    }
    /*
    public function save_banners($uploadedPaths) {
       echo "<pre> UPLOADED PATH IS :<br>";
       print_r($uploadedPaths);
       echo "</pre>";
       exit;
        $this->db->where('id', $banner_id);
        $this->db->set($uploadedPaths);
        $this->db->update('banners');
    /*
         $query = $this->db->last_query();
         echo $query;
         exit;
         *
    }

   */ 
    

#======================================OUR AIMS=============================================================

    public function our_aim() {
        $query = $this->db->get('our_aim');
    
        if ($query->num_rows() > 0) {
            return $query->row();  
        } else {
            return null;
        }
    }

    public function edit_our_aim($title, $description) {
        $data = array(
            'title' => $title,
            'description' => $description
        );

        $this->db->where('id', 1);
        $this->db->update('our_aim', $data);

    }

#=====================================WHY CHOOSE US=========================================================

    public function why_us() {
        $query = $this->db->get('why_chose_us');
        if ($query->num_rows() > 0) {
            return $query->row();
        }   else {
            return null;
        }
    }
    
    public function edit_why_us($title, $description) {
        $data = array(
            'title' => $title,
            'description' => $description
        );
        $this->db->where('id', 1);
        $this->db->update('why_chose_us', $data);
    }

#=====================================EDIT RECENT NOTIFICATIONS=============================================

    public function notification() {
        $query = $this->db->get('recent_notification');
        if ($query->num_rows() > 0 ) {
            return $query->row();
        }   else {
            return null;
        }
    }

    public function edit_notification($data) {
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // exit;
        $this->db->where('id', 1);
        $this->db->update('recent_notification',$data);
        return TRUE;
         
    }

#======================================ACADEMIC ACHIEVEMENTS======================================================================

    public function get_achievement($achievement_id) {
        // Assuming 'achievements' is your table name
        return $this->db->get_where('achievements', ['id' => $achievement_id])->row();
    }

    public function update_achievement($achievement_id, $data) {
        // Assuming 'achievements' is your table name
        $this->db->where('id', $achievement_id);
        $this->db->update('achievements', $data);
    }

#========================================RECENT ACTIVITIES=======================================================

    public function get_activities($activities_id) {
        // Assuming 'achievements' is your table name
        return $this->db->get_where('recent_activities', ['id' => $activities_id])->row();
    }

    public function update_activities($activities_id, $data) {
        // Assuming 'achievements' is your table name
        $this->db->where('id', $activities_id);
        $this->db->update('recent_activities', $data);
    }

#-----------------------------------------FOOTER SECTION---------------------------------------------------------
#==========================================WORKING HOUR SECTION=================================================

    public function working_hr() {
        $data = $this->db->get('ftr_working_hr',['id' => 1])->row();
        
        if ($data) {
        return $data;
    }    else {
        return null;
    }
    }

    public function edit_working_hr($title , $content) {

        $this->db->where('id',1);
        $data = array(
            'title' => $title,
            'content '=> $content
        );
        $this->db->update ('ftr_working_hr', $data);
        return TRUE;
    }

#=============================================ADDRESS SECTION===================================================

    public function adress() {
        $data = $this->db->get('ftr_adress',['id' => 1])->row();
        
        if ($data) {
        return $data;
    }    else {
        return null;
    }
    }

    public function edit_adress($title, $content) {

        $data = array (
            'title' => $title,
            'content' => $content
        );
        $this->db->where('id' , 1 );
        $this->db->update('ftr_adress', $data);
        return TRUE;
    }

#=============================================CONTACT US SECTION================================================

    public function contactUs() {
        $data = $this->db->get('ftr_contact_us',['id' => 1])->row();

        if ($data) {
        return $data;
    }    else {
        return null;
    }
    }

    public function edit_contactUs($title, $content) {

        $data = array (
            'title' => $title,
            'content' => $content
        );
        $this->db->where('id' , 1 );
        $this->db->update('ftr_contact_us', $data);
        return TRUE;
    }

#============================================USER INQUIRY========================================================

    public function inquiry($data) {

        $this->db->insert('ftr_inquiry', $data);

    }
   /* public function getNewMessagesCount() {
        
        $this->db->where('reviewed', 0); 
        return $this->db->count_all_results('ftr_inquiry');
    }*/
    public function getAllInquiries() {
        return $this->db->get('ftr_inquiry')->result_array();
    }
    #----------------------------------------------------------------------------------------------------------------------------

    public function inquiry_mail($to, $sub, $msg, $attachment_path = null) {

        date_default_timezone_set('Asia/Kolkata');
        $created_at = date("Y/m/d H:i:s");
        $this->email->from('vc981942@gmail.com', 'Sarasvati Paradise International Public School');
        $this->email->to($to);
        $this->email->subject($sub);
        $this->email->message($msg);

        if ($attachment_path !== null && file_exists(($attachment_path))) {
            $this->email->attach($attachment_path);
        }

        $data = array(
            'email' => $to,
            'subject' => $sub,
            'content' => $msg,
            'attachment' => $attachment_path, 
            'send_at' => $created_at
        );
            if($this->email->send()) {
                $insert = $this->db->insert('reply_inquiry', $data);


                if($insert) {
                    $this->db->where('email', $to); 
                    $this->db->update('ftr_inquiry', array('reviewed' => 1));
                    return TRUE;
                }  else {
                    return FALSE;
                }
            }   else {
                return FALSE;
            }   
      }  
      public function getUnrepliedInquiriesCount() {
        $this->db->where('reviewed', 0);
        return $this->db->count_all_results('ftr_inquiry');
    }


#===============================================FOLLOW US========================================================

    public function followUs($data) {
        
        $this->db->insert('followUs', $data);
        return TRUE;
    }
}

?>