<?php
    // start session
    session_start();

    // Execute Query and Save Data in Database
    
    define('SITEURL','http://localhost/restautant_food/');

    define('LOCALHOST','localhost');

    define('DB_USERNAME','root');

    define('DB_PASSWORD','');

    define('DB_NAME','food_order');

    $conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD) or die(mysqli_error());

    $db_select = mysqli_select_db($conn,DB_NAME) or die(mysqli_error());
?>