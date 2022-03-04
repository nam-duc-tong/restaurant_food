<?php

    // Include constants.php for SITEURL
    include('../config/constants.php');
    // 1. destory the session data
    session_destroy();//unsets $_SESSION['unset']
    // 2. redirect to login page
    header('location:'.SITEURL.'admin/login.php');
?>