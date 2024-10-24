
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin_style.css'); ?>">
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
<!--=========================================================================-->

    <?php $this->load->view('admin/header'); ?>
    <div class="container">
       <?php $this->load->view('admin/left_nav'); ?>
       
    <div class="content">
        <?php 
        
        echo form_open_multipart('admin_controller/edit_adress'); 

        ?>
       <?php
        if (isset($address)) :
    
?>

<label>Title:</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="title" value="<?php echo isset($address->title) ? $address->title : ''  ?>" /><!--  -->
    <span style="color:red;">
      <?= form_error('title'); ?>
    </span>
</div>
    <br>
    
<label>Content:</label>
<div class="inpt" style="display:flex;">
    <textarea name="content"> <?php echo isset($address->content) ? $address->content : '' ?> </textarea> 
    <span style="color:red;">
      <?= form_error('content'); ?>
    </span>
</div>
                
<?php  else: ?>
    <label>Title:</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="title" /><!--  -->
    <span style="color:red;">
      <?php  echo form_error('title'); ?>
    </span>
</div>
    <br>
    
<label>content:</label>
<div class="inpt" style="display:flex;">
    <textarea name="content"> </textarea>  
    <span style="color:red;">
      <?php  echo form_error('description'); ?>
    </span>
</div>
<?php
endif;
?>

    <br>
<div class="action-btn">
    <input type="submit" value="Update" />

    <a href="<?= base_url('admin_controller/edit_home'); ?>" class="btn btn-danger">Cancel</a>
</div>    
    <?= form_close(); ?>
    </div>

    </div>
</body>
</html>
