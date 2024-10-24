<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Banners</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/admin_style.css'); ?>">
    <style>
                .newBanner {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between; /* Adjust this as needed */
}

.newBanner .inpt {
  display:flex;
  width: 500px;
  margin-bottom: 20px;
}

/* Optional: To align the input fields and images horizontally */
.newBanner .inpt input[type="file"],
.newBanner .inpt img {
  vertical-align: middle;
  
}

        .image-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .image-container .image-wrapper {
            position: relative;
        }

        .image-container img {
            width: 150px;
            height: 100px;
        }

        .delete-icon {
            position: absolute;
            top: 5px;
            right: 5px;
            cursor: pointer;
            background-color: red;
            color: white;
            padding: 3px;
            display: none;
        }

        .image-wrapper:hover .delete-icon {
            display: block;
        }

        @media only screen and (min-width: 769) and (max-width: 1024px) {
    .newBanner .inpt {
        width: calc(50% - 20px); 
    }
}

@media only screen and (max-width: 480px) {
    .newBanner .inpt {
        width: calc(100% - 20px); /* Single item per row */
    }
}

@media only screen and (min-width: 481px) and (max-width: 768px) {
    .newBanner .inpt {
        width: calc(50% - -200px); /* Two items per row */
    }
}
.delete-btn {
  background-color: #c90707c7;
  color: white;
  border: 1px solid darkred;
  border-radius: 5px;
  padding: 5px 10px;
  box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  transition: background-color 0.3s ease, box-shadow 0.3s ease;
}

.delete-btn:hover {
  background-color: darkred;
  box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
}

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php $this->load->view('admin/header'); ?>
    <div class="container">
        <?php $this->load->view('admin/left_nav'); ?>
        <div class="content">
            <form id="banner_form" method="post" action="<?php  echo base_url('admin_controller/save_banners') ?>" enctype="multipart/form-data"> <!--save_banners-->
                <span style="color:red;">* You can only add 9 images</span><br><br>

                <div class="newBanner">

<?php for ($i = 0; $i <9; $i++): ?>
    <div class="inpt">
        <label class="inptLable">Banner <?php echo $i+1; ?></label>&nbsp;

        <?php 
        ##print_R($banners);die;
        if (!empty($banners[$i])): ?>
            <input type="file" name="img<?php echo $i+1; ?>" /><!--  -->
            &nbsp;<img src="<?php echo base_url($banners[$i]->banner); ?>" alt="Banner <?php echo $i; ?>" height="60px" width="100px">&nbsp;
            <span style="color:red;">
                <button class="delete-btn">Delete</button>
            </span>
        <?php else: ?>
            <input type="file" name="img<?php echo $i; ?>" /><!--  -->
        <?php endif; ?>

    </div>
    <br>
<?php endfor; ?>

</div>
<div class="action-btn">
<input type="submit" value="Update" />
<a href="<?php echo base_url('admin_controller/edit_home'); ?>" class="btn btn-danger">Cancel</a>
</div>


 <!--               
<div class = "newBanner" >

    <div class="inpt" ><!-- style="display:flex;" --
<label class="inptLable">Banner 1</label>&nbsp;
<?php #if ($banner->banner1): ?>
    <input type="file" name="img1"  /><!--  --
    &nbsp;<img src="<?php # echo  base_url($banner->banner1) ?>" alt="Banner 1" height="60px"  width="100px" >&nbsp;
    <span style="color:red;">
      <button class="delete-btn">Delete</button>
    </span>

    <?php # else: ?>
    <input type="file" name="img1"  /><!--  --
    <?php #endif; ?>
</div>
    <br>


    <div class="inpt" ><!-- style="display:flex;" --
<label class="inptLable">Banner 2 </label>&nbsp;
<?php #if ($banner->banner2): ?>
    <input type="file" name="img2"  /><!--  --
    &nbsp;<img src="<?php # echo base_url($banner->banner2) ?>" alt="Banner 2" height="60px"  width="100px" >&nbsp;
    <span style="color:red;">
      <button class="delete-btn">Delete</button>
    </span>

    <?php #else: ?>
    <input type="file" name="img2"  /><!--  --
    <?php # endif; ?> 
</div>
    <br>


    <div class="inpt" ><!-- style="display:flex;" --
<label class="inptLable">Banner 3 </label>&nbsp;
<?php #if ($banner->banner3): ?>
    <input type="file" name="img3"  />
    &nbsp;<img src="<?php  #echo base_url($banner->banner3) ?>" alt="Banner 3" height="60px"  width="100px" >&nbsp;
    <span style="color:red;">
      <button class="delete-btn">Delete</button>
    </span>
    
    <?php #else: ?>
    <input type="file" name="img3"  /><!--  --
    <?php #endif; ?>
</div>
    <br>


    <div class="inpt" ><!-- style="display:flex;" --
<label class="inptLable">Banner 4 </label>&nbsp;
<?php #if ($banner->banner4): ?>
    <input type="file" name="img4"  /><!--  --
    &nbsp;<img src="<?php  #echo base_url($banner->banner4); ?>" alt="Banner 4" height="60px"  width="100px" >&nbsp;
    <span style="color:red;">
      <button class="delete-btn">Delete</button>
    </span>

    <?php #else: ?>
    <input type="file" name="img4"  /><!--  --
    <?php #endif; ?>
</div>
    <br>


    <div class="inpt" ><!-- style="display:flex;" --
<label class="inptLable">Banner 5 </label>&nbsp;
<?php #if ($banner->banner5): ?>
    <input type="file" name="img5"  /><!--  --
    &nbsp;<img src="<?php  #echo base_url($banner->banner5) ?>" alt="Banner 5" height="60px"  width="100px" >&nbsp;
    <span style="color:red;">
      <button class="delete-btn">Delete</button>
    </span>

    <?php #else: ?>
    <input type="file" name="img5"  /><!--  --
    <?php #endif; ?>
</div>
    <br>


    <div class="inpt" ><!-- style="display:flex;" --
<label class="inptLable">Banner 6 </label>&nbsp;
<?php #if ($banner->banner6): ?>
    <input type="file" name="img6"  /><!--  --
    &nbsp;<img src="<?php # echo base_url($banner->banner6) ?>" alt="Banner 6" height="60px"  width="100px" >&nbsp;
    <span style="color:red;">
      <button class="delete-btn">Delete</button>
    </span>

    <?php #else: ?>
    <input type="file" name="img6"  /><!--  --
    <?php #endif; ?>
</div>
    <br>

    <div class="inpt" ><!-- style="display:flex;" --
    <label class="inptLable">Banner 7 </label>&nbsp;
    <?php #if ($banner->banner7): ?>
    <input type="file" name="img7"  /><!--  --
    &nbsp;<img src="<?php # echo base_url($banner->banner7) ?>" alt="Banner 7" height="60px"  width="100px" >&nbsp;
    <span style="color:red;">
      <button class="delete-btn">Delete</button>
    </span>

    <?php #else: ?>
    <input type="file" name="img7"  /><!--  --
    <?php #endif; ?>
</div>
    <br>


    <div class="inpt" ><!-- style="display:flex;" --
<label class="inptLable">Banner 8 </label>&nbsp;
<?php #if ($banner->banner8): ?>
    <input type="file" name="img8"  /><!--  --
    &nbsp;<img src="<?php # echo base_url($banner->banner8) ?>" alt="Banner 8" height="60px"  width="100px" >&nbsp;
    <span style="color:red;">
      <button class="delete-btn">Delete</button>
    </span>

    <?php # else: ?>
    <input type="file" name="img8"  /><!--  --
    <?php #endif; ?>
</div>
    <br>


    <div class="inpt" ><!-- style="display:flex;" --
<label class="inptLable">Banner 9 </label>&nbsp;
<?php # if ($banner->banner9): ?>
    <input type="file" name="img9"  />
    &nbsp;<img src="<?php  #echo base_url($banner->banner9) ?>" alt="Banner 9" height="60px"  width="100px" >&nbsp;
    <span style="color:red;">
      <button class="delete-btn">Delete</button>
    </span>

    <?php #else: ?>
    <input type="file" name="img9"  /><!--  --
    <?php #endif; ?>
</div>
    <br>


</div>
                <div class="action-btn">
                    <input type="submit" value="Update" />
                    <a href="<?php # echo base_url('admin_controller/edit_home'); ?>" class="btn btn-danger">Cancel</a>
                </div>
            </form>
    -->
            <script src="<?php # echo base_url('assets/js/slide_banner.js'); ?>"></script>

            <!--<script>
            
</script>-->
        </div>
    </div>
</body>
</html>
