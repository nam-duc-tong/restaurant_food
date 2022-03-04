<?php
// include constants.php file here
    include('../config/constants.php');
    $id = $_GET['id'];
    // create sql query to delete admin
    $sql = "DELETE FROM tbl_admin WHERE id = $id";
    // execute the query
    $res = mysqli_query($conn,$sql);
    // check whether the query executed successfully or not
if($res==true){
    // query executed successfully and admin deleted
    // echo "Admin deleted"
    // create session variable to display message
    $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully</div>";
    // redirect to manage admin page
    header('location:'.SITEURL.'admin/manage_admin.php');
}
else{
    // failed to delete admin
    // echo "Failed to delete admin";
    $_SESSION['delete'] = "<div class='error'>Failed to delete admin.Try again later</div>";
    header('location: '.SITEURL.'admin/manage_admin.php');
}
// redirect to manage admin page with message (success/error)
?>