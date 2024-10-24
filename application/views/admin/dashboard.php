<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin_style.css'); ?>">
    <title>Admin Dashboard</title>
    <style>
         
         .box {
    width: calc(20% - 20px); /* 20% width for 5 boxes in a row with 10px margin between them */
    height: 100px; /* Adjust as needed */
    background-color: #ccc;
    margin: 15px 5px; /* Margin between boxes */
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box; /* Include padding and border in the width */
}


/*-----------------------INQUIRY INDICATOR--------------------------------*/
.red-dot {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 20px;
    height: 20px;
    background-color: red;
    border-radius: 50%;
    margin-left: 5px;
    color: white;
    font-size: 12px;
}


    

    </style>
</head>
<body>

    <?php $this->load->view('admin/header'); ?>
    
    <div class="container">
    <?php $this->load->view('admin/left_nav'); ?>

<!--======================SESSION FOR ADMIN==================================-->
<?php
    if (!$this->session->userdata('id')){
            redirect('admin_controller/login');
    }   
    ?>
<!--=========================================================================-->

        <div class="box">
            <a href=" <?= base_url('admin_controller/edit_home'); ?>">Edit Home Page</a>
        </div>

        <div class="box">

        <a href="<?= base_url('admin_controller/review') ?>" >User Inquiry 
        <?php if ($unrepliedCount > 0): ?>
            <span class="red-dot"><?= $unrepliedCount ?></span>
        <?php endif; ?>
        </a>
        <!--<a href="<?php # echo base_url('admin_controller/review') ?>" >Inquiry </a>-->
            </div>

        <div class="box">
        <a href="<?= base_url('admin_controller/email_section'); ?>" >
                Send email 
            </a>
            </div>

<!--
        <div class="box">
        <a href="<?php #base_url('admin_controller/show_videos'); ?>" >
                Total Video Articles: <?php #$videos; ?>
            </a>
        </div>    
    </div>
-->    
</body>
</html>
