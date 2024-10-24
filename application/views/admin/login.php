<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Admin Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
   <link rel="stylesheet" href="<?= base_url('assets/css/admin_login.css'); ?>">
    
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="post" action="<?= base_url('admin_controller/login'); ?>">
        <h3>Admin Login</h3>
    
        <label for="username">Username</label>
        <input type="text" name ="admin_id" value = "<?= set_value('admin_id'); ?>" placeholder="Email or Phone" id="username">

        <label for="password">Password</label>
        <input type="password" name ="admin_pswd" placeholder="Password" id="password">

        <button>Log In</button>
        <div class="social">
          <!--<div class="go"><i class="fab fa-google"></i>  Google</div>
          <div class="fb"><i class="fab fa-facebook"></i>  Facebook</div>-->
        </div>
    </form>
</body>
</html>
