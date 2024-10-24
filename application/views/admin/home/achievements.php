
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

    <?php echo form_open_multipart('admin_controller/update_achievements'); ?>


      
<span style="color:red;">
* all fields are required
</span><br><br>

<?php
       if (!empty($achievement)) :
?>

<label>Title :</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="title" value="<?= $achievement->title ?>" required /><!--  -->
    <span style="color:red;">
      <?= form_error('title'); ?>
    </span>
</div>
    <br>
    

<label>Achievement 1 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img1"  /><!--  -->
    <?php if ($achievement->img1): ?>
    <img src="<?= base_url($achievement->img1) ?>" alt="Image 1" height="60px"  width="100px" ><br><br>
    <?php endif; ?>
    
    <span style="color:red;">
      <?= form_error('img1'); ?>
    </span>
</div>
    <br>


<label>Achievement 2 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img2"  /><!--  -->
    <?php if ($achievement->img2): ?>
    <img src="<?= base_url($achievement->img2) ?>" alt="Image 2" height="60px"  width="100px" ><br><br>
    <?php endif; ?>
    
    <span style="color:red;">
      <?= form_error('img2'); ?>
    </span>
</div>
    <br>


<?php else: ?>

    <label>Title :</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="title" /><!--  -->
    <span style="color:red;">
      <?= form_error('title'); ?>
    </span>
</div>
    <br>


<label>Achievement 1 :</label>
<div class="inpt" style="display:flex;">
<input type="file" name="img1" /><!--  -->
    <span style="color:red;">
      <?= form_error('img1'); ?>
    </span>
</div>

    
<label>Achievement 2 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img2"  /><!--  -->
    <span style="color:red;">
      <?= form_error('img2'); ?>
    </span>
</div>
    <br>
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
