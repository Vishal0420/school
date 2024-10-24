
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/admin_style.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/sendEmail.css'); ?>">
    <title>Admin Dashboard</title>
    <style>
        .inquiries-section {
            margin-left: 30px;
        }
        button[disabled] {
        color: white; 
        background-color: rgba(0, 0, 0, 0.1); 
        cursor: not-allowed; 
    }
    
    table , th, td{
    padding: 10px; 
} 
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
       

<div class="inquiries-section">
    <h2>Inquiries</h2>
    <?php # if ($newMessagesCount > 0): ?>
        <span class="red-dot"><?php # echo $newMessagesCount; ?></span>
    <?php  # endif; ?>
    <!-- Display inquiries list -->
    <table border = "2" style="background-color:#fffdfd91;">
        <tr>
            <th>Name:</th> 
            <th>Email:</th> 
            <th>Message:</th> 
            <th>Action:</th> 
        </tr>
        <?php foreach ($inquiries as $inquiry): ?>
        <tr>
            <td> <?php echo $inquiry['name']; ?> </td>
            <td> <?php echo $inquiry['email']; ?> </td>
            <td> <?php echo $inquiry['message']; ?> </td>
            <td>
            <?php if (isset($inquiry['reviewed']) && $inquiry['reviewed'] == 1): ?>
            <?php #if ($inquiry['replied'] == 1): ?>
                <!-- If already replied, show disabled button -->
                <button type="button" disabled>Replied</button>
                <?php else: ?>

            <form action="<?php echo base_url('admin_controller/reply'); ?>" method="post">
                <input type="hidden" name="email" value="<?php echo $inquiry['email']; ?>">
                <button type="submit" name="reply_submit">Reply</button>
            </form>
            <?php endif; ?>
            </td>
        </tr>
        <?php endforeach; ?>
        </table>
</div>



   
    </div>
</body>
</html>
