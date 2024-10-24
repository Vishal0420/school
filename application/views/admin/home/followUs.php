
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
        
        echo form_open_multipart('admin_controller/edit_followUs'); 

        ?>
       <?php
        #if (isset($followUs)) :
    
        ?>

<label>Twitter:</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="twitter" value="<?php #echo isset($followUs->twitter) ? $followUs->twitter : ''  ?>" /><!--  -->
    <span style="color:red;">
      <?= form_error('twitter'); ?>
    </span>
</div>
    <br>
    
<label>Facebook:</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="facebook" value="<?php #echo isset($address->title) ? $address->title : ''  ?>" /><!--  --> 
    <span style="color:red;">
      <?= form_error('facebook'); ?>
    </span>
</div>
<br>
    
    <label>Instagram:</label>
    <div class="inpt" style="display:flex;">
    <input type="text" name="instagram" value="<?php #echo isset($address->title) ? $address->title : ''  ?>" /><!--  -->
        <span style="color:red;">
          <?= form_error('instagram'); ?>
        </span>
    </div>
    <br>
    
    <label>Youtube:</label>
    <div class="inpt" style="display:flex;">
    <input type="text" name="youtube" value="<?php #echo isset($address->title) ? $address->title : ''  ?>" /><!--  -->
        <span style="color:red;">
          <?= form_error('youtube'); ?>
        </span>
    </div>
<!--             
<?php  #else: ?>
    <label>Twitter:</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="twitter" /><!--  --
    <span style="color:red;">
      <?php  #echo form_error('twitter'); ?>
    </span>
</div>
    <br>
    
    <label>Facebook:</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="facebook" /><!--  --
    <span style="color:red;">
      <?php  #echo form_error('facebook'); ?>
    </span>
</div>
    <br>

    <label>Instagram:</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="instagram" /><!--  --
    <span style="color:red;">
      <?php  #echo form_error('instagram'); ?>
    </span>
</div>
    <br>

    <label>Youtube:</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="youtube" /><!--  --
    <span style="color:red;">
      <?php  #echo form_error('youtube'); ?>
    </span>
</div>
    <br>

-->
<?php
#endif;
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
