<?php
    // authorization _ access control
    // check whether the user is logger in or not
    if(!isset($_SESSION['user']))
    {
        // user is not logged in 
        // redirect to login page with message
        $_SESSION['no-login-message'] = "<div class='error' style='text-align:center;'>Please login to access Admin Panel.</div>";
        // redirect to login page
        header('location:'.SITEURL.'admin/login.php');
    }
?>