<header>
        <div class="topnav">
            <div class="topnav-left">
                <h1>Admin Dashboard</h1>
            </div>
            <div class="mid" style ="color:white;margin-right: 60px;">
            <?php 
            if ($login_error = $this->session->flashdata('sucess')) :
                echo $login_error;
            endif;
            
            if ($aim_updated = $this->session->flashdata('aim_updated')) : 
                     echo $aim_updated; 
             endif; 
             
             if ($why_us = $this->session->flashdata('why_us')) : 
                echo $why_us; 
            endif;

            if ($sucess_rn = $this->session->flashdata('sucess_rn')) :
                echo $sucess_rn;
            endif;

            if ($error_rn = $this->session->flashdata('error_rn')) : 
                echo $error_rn; 
            endif;
            
            if ($b_added = $this->session->flashdata('b-added')) :
                echo $b_added;
            endif;

            if ($b_error = $this->session->flashdata('b-error')) :
                echo $b_error;
            endif;

            if ($error_aa = $this->session->flashdata('error_aa')) :
                echo $error_aa;
            endif;

            
            if ($upload_achievement = $this->session->flashdata('upload_achievement')) :
                echo $upload_achievement;
            endif;


            if ($mail_send = $this->session->flashdata('mail_send')) :
                echo $mail_send;
            endif;

            if ($mail_not_send = $this->session->flashdata('mail_not_send')) :
                echo $mail_not_send;
            endif;

            if ($upload_activities = $this->session->flashdata('upload_activities')) :
                echo $upload_activities;
            endif;

            
            if ($working_hr = $this->session->flashdata('working_hr')) :
                echo $working_hr;
            endif;

            if ($adress = $this->session->flashdata('adress')) :
                echo $adress;
            endif;

            if ($adress = $this->session->flashdata('contactUs')) :
                echo $adress;
            endif;

            if ($inquiry_send = $this->session->flashdata('inquiry_send')) :
                echo $inquiry_send;
            endif;

            if ($added = $this->session->flashdata('added')) :
                echo $added;
            endif;
                   
             ?>
            </div>
            <div class="topnav-right">
                <a href="<?= base_url('admin_controller/logout'); ?>" class="logout-btn">Logout</a>
            </div>
        </div>
            
    </header>