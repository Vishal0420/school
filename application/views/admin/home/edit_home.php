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
    margin: 5px; /* Margin between boxes */
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box; /* Include padding and border in the width */
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
<div class="boxes">
<!--=========================================================================--
<div class="box">
    <a href="#">Edit Top Menu Bar</a>
</div>
-->
<div class="box">
    <a href="#">Edit Header Nav Bar</a>
</div>

<div class="box">
    <a href="<?= base_url('admin_controller/slider'); ?>">Edit Image Slides</a>
</div>

<div class="box">
    <a href="<?= base_url('admin_controller/our_aim'); ?>">Edit Our Aims</a>
</div>
<br>
<div class="box">
    <a href="<?= base_url('admin_controller/why_us'); ?>">Edit Why Us</a>
</div>


<div class="box">
    <a href="<?= base_url('admin_controller/notification'); ?>">Edit Recent Notifications</a>
</div>


<div class="box">
    <a href="<?=  base_url('admin_controller/edit_achievements'); ?>">Edit Academic Achievements</a>
</div>

<div class="box">
    <a href="<?=  base_url('admin_controller/edit_activities'); ?>">Edit Recent Activities</a>
</div>

<div class="box">
    <a href="<?=  base_url('admin_controller/edit_working_hr'); ?>">Edit Working hours in footer</a>
</div>

<div class="box">
    <a href="<?=  base_url('admin_controller/edit_adress'); ?>">Edit Address in footer</a>
</div>

<div class="box">
    <a href="<?=  base_url('admin_controller/edit_contactUs'); ?>">Edit contact us</a>
</div>

<div class="box">
    <a href="<?= base_url('admin_controller/followUs'); ?>">Edit Follow us links</a>
</div>

<div class="box" style = "margin-right: 61%;">
    <a href="#">Edit copyrights</a>
</div>





</div> 
</div>  
</body>
</html>
