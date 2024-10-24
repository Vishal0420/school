
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
        echo form_open_multipart('admin_controller/edit_notification'); 
        
        ?>

       <?php
       if (!empty($notification)) :
?>
<span style="color:red;">
* all fields are required
</span><br><br>
<label>Logo:</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="logo"  /><!--  -->
    <img src ="<?= base_url($notification->image); ?>" height="100px" width="100px" >
    <input type="hidden" name="fileURL" value="<?= $notification->image; ?>"/>
    <span style="color:red;">
      <?= form_error('logo'); ?>
    </span>
</div>
    <br>

<label>Title:</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="title" value= "<?php echo $notification->title; ?>" /><!--  -->
    <span style="color:red;">
      <?= form_error('title'); ?>
    </span>
</div>
    <br>
    
<label>Notification:</label>
<div class="inpt" style="display:flex;">
    <textarea name="notification"> <?php echo $notification->notification; ?> </textarea>  
    <span style="color:red;">
      <?= form_error('notification'); ?>
    </span>
</div>


<?php else: ?>

    <label>Logo:</label>
<div class="inpt" style="display:flex;">
<input type="file" name="logo" /><!--  -->
    <span style="color:red;">
      <?= form_error('logo'); ?>
    </span>
</div>

    <label>Title:</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="title" /><!--  -->
    <span style="color:red;">
      <?= form_error('title'); ?>
    </span>
</div>
    <br>
    
<label>Notification:</label>
<div class="inpt" style="display:flex;">
    <textarea name="notification"> </textarea>  
    <span style="color:red;">
      <?= form_error('notification'); ?>
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
