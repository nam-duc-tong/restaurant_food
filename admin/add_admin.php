<?php
    include('partials/menu.php');
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br><br>
        <?php
            if(isset($_SESSION['add'])) //checking whether the session is set or not 
            {
                echo $_SESSION['add'];//display the session  message if set
                unset($_SESSION['add']);//remove session message
            }
        ?>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Fullname: </td>
                    <td>
                        <input type="text" name="full_name" placeholder="Enter Your Name">
                    </td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td>
                        <input type="text" name="username" placeholder="Enter Your Username">
                    </td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td>
                        <input type="text" name="password" placeholder="Enter Your Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn btn-primary">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php
    include('partials/footer.php');
?>
<?php
    //process the value from form and save
    // check whether the submit button is clicked or not

    if(isset($_POST['submit'])){
        // button clicked
        // echo "Button Clicked";
        // Get The data from form
        $fullname = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        // sql query to save the data into database

        $sql = "
           INSERT INTO tbl_admin SET full_name = '$fullname',username = '$username',password = '$password'
        ";
        // 3. Executing Query and saving data into database
        $res = mysqli_query($conn,$sql) or die(mysqli_error());

        // 4.check whether the (Query is executed) data is inserted or not and display appropriate message
        if($res==TRUE){
            // data inserted successfully
            // echo "data Inserted successfully";
            $_SESSION['add'] = "<div class='success'>Admin Added Successfully</div>";
            // redirect page to manage admin
            header("location:".SITEURL.'admin/manage_admin.php');
        }
        else{
            // failed into insert data
            // echo "fail to insert data";
            $_SESSION['add'] = "<div class='error'>Failed to add admin</div>";
            // redirect page to add admin page
            header("location:".SITEURL.'admin/add_admin.php');
        }
    }

?>