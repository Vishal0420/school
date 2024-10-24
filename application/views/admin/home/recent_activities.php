
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

<!--==========================MAIN SECTION===============================================-->
       
    <div class="content">

    <?php echo form_open_multipart('admin_controller/recent_activities'); ?>


      
<span style="color:red;">
* all fields are required
</span><br><br>

<?php
       if (!empty($activities)) :
?>

<label>Title :</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="title" value="<?= $activities->title ?>" required /><!--  -->
    <span style="color:red;">
      <?= form_error('title'); ?>
    </span>
</div>
    <br>
    


<label>Image 1 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img1"  /><!--  -->
    <?php if ($activities->img1): ?>
    <img src="<?= base_url($activities->img1) ?>" alt="Image 1" height="60px"  width="100px" ><br><br>
    <?php endif; ?>
    
    <span style="color:red;">
      <?= form_error('img1'); ?>
    </span>
</div>
    <br>


<label>Image 2 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img2"  /><!--  -->
    <?php if ($activities->img2): ?>
    <img src="<?= base_url($activities->img2) ?>" alt="Image 2" height="60px"  width="100px" ><br><br>
    <?php endif; ?>
    
    <span style="color:red;">
      <?= form_error('img2'); ?>
    </span>
</div>
    <br>


<label>Image 3 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img3"  /><!--  -->
    <?php if ($activities->img3): ?>
    <img src="<?= base_url($activities->img3) ?>" alt="Image 3" height="60px"  width="100px" ><br><br>
    <?php endif; ?>
    
    <span style="color:red;">
      <?= form_error('img3'); ?>
    </span>
</div>
    <br>


<label>Image 4 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img4"  /><!--  -->
    <?php if ($activities->img4): ?>
    <img src="<?= base_url($activities->img4) ?>" alt="Image 4" height="60px"  width="100px" ><br><br>
    <?php endif; ?>
    
    <span style="color:red;">
      <?= form_error('img4'); ?>
    </span>
</div>
    <br>


<label>Image 5 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img5"  /><!--  -->
    <?php if ($activities->img5): ?>
    <img src="<?= base_url($activities->img5) ?>" alt="Image 5" height="60px"  width="100px" ><br><br>
    <?php endif; ?>
    
    <span style="color:red;">
      <?= form_error('img5'); ?>
    </span>
</div>
    <br>


<label>Image 6 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img6"  /><!--  -->
    <?php if ($activities->img6): ?>
    <img src="<?= base_url($activities->img6) ?>" alt="Image 6" height="60px"  width="100px" ><br><br>
    <?php endif; ?>
    
    <span style="color:red;">
      <?= form_error('img6'); ?>
    </span>
</div>
    <br>


<?php else: ?>

    <label>Title :</label>
<div class="inpt" style="display:flex;">
    <input type="text" name="title" /><!--  -->
    <span style="color:red;">
      <?php # form_error('title'); ?>
    </span>
</div>
    <br>


<label>Image 1 :</label>
<div class="inpt" style="display:flex;">
<input type="file" name="img1" /><!--  -->
    <span style="color:red;">
      <?php # form_error('img1'); ?>
    </span>
</div>

    
<label>Image 2 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img2"  /><!--  -->
    <span style="color:red;">
      <?php # form_error('img2'); ?>
    </span>
</div>
    <br>


<label>Image 3 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img3"  /><!--  -->
    <span style="color:red;">
      <?php # form_error('img3'); ?>
    </span>
</div>
    <br>


<label>Image 4 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img4"  /><!--  -->
    <span style="color:red;">
      <?php # form_error('img4'); ?>
    </span>
</div>
    <br>


<label>Image 5 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img5"  /><!--  -->
    <span style="color:red;">
      <?php # form_error('img5'); ?>
    </span>
</div>
    <br>


<label>Image 6 :</label>
<div class="inpt" style="display:flex;">
    <input type="file" name="img6"  /><!--  -->
    <span style="color:red;">
      <?php # form_error('img6'); ?>
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
