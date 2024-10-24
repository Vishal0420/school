
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin_style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sendEmail.css'); ?>">
    <title>Admin Dashboard</title>
    <style>
        
       
    
    </style>
</head>
<body>
    
<!--======================SESSION FOR ADMIN==================================-->
<?php
    if (!$this->session->userdata('id')){
            redirect('admin_controller/login');
    }   
    ?>
<!--==========================HEADER AND NAVIGATIONS===============================================-->

    <?php $this->load->view('admin/header'); ?>
    <div class="container">
       <?php $this->load->view('admin/left_nav'); ?>
       
<!--==========================MAIN SECTION===============================================-->
       
    <div class="content">
    <h2>Compose Email</h2>

    <form id="emailForm" action="<?= base_url('admin_controller/send_mail'); ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
                <label for="emailAddresses">Email Addresses:</label>
                <input type="text" id="emailAddresses" name="email" placeholder="Enter email addresses separated by commas">
                <span style="color:red;">
                <?= form_error('email'); ?>
                </span>
            </div>
            <div class="form-group">
                <label for="emailSubject">Subject:</label>
                <input type="text" id="emailSubject" name="subject" placeholder="Enter email subject">
                <span style="color:red;">
                <?= form_error('subject'); ?>
                </span>
            </div>
            <div class="form-group">
                <label for="emailContent">Email Content:</label>
                <textarea id="emailContent" name="content" placeholder="Enter your email content"></textarea>
                <span style="color:red;">
                <?= form_error('content'); ?>
                <span style="color:red;">
            </div>
            <div class="form-group">
                <label for="attachment">Attachment:</label>
                <input type="file" id="attachment" name="attachment">
            </div>
            <div class="form-group">
                <button type="submit">Send</button>
                <button type="button" class="cancel" onclick="cancelEmail()">Cancel</button>
            </div>
        </form>
    </div>

    <script>
        function cancelEmail() {
            document.getElementById('emailForm').reset();
        }
    </script>
   
</body>
</html>
