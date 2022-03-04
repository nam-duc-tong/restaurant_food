<?php
    include ('partials/menu.php');
?>
    <!-- Main Content Section Starts -->
    <div class="main-content">
        <div class="wrapper">
           <h1>Manage Admin</h1>
            <br>
            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];//displaying session message
                    unset($_SESSION['add']);//removing session message
                }
                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];//displaying session message
                    unset($_SESSION['delete']);//removing session message
                }
                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];//displaying session message
                    unset($_SESSION['update']);//removing session message
                }
                if(isset($_SESSION['user-not-found']))
                {
                    echo $_SESSION['user-not-found'];
                    unset($_SESSION['user-not-found']);
                }
                if(isset($_SESSION['pwd-not-match']))
                {
                    echo $_SESSION['pwd-not-match'];
                    unset($_SESSION['pwd-not-match']);
                }
                if(isset($_SESSION['change-pwd']))
                {
                    echo $_SESSION['change-pwd'];
                    unset($_SESSION['change-pwd']);
                }
            ?>
            <br>
           <!-- button to add admin -->
           <button class="btn btn-primary"><a href="add_admin.php" style="color: #fff;text-decoration: none;">Add Admin</a></button>
           <table class="tbl-full">
               <tr>
                   <th>S.N.</th>
                   <th>Full Name</th>
                   <th>Username</th>
                   <th>Actions</th>
               </tr>
             <?php
                // query to get all admin
                $sql = "SELECT * FROM tbl_admin";
                // execute the query
                $res = mysqli_query($conn,$sql);

                // check whether the query is executed of  not 
                if($res==TRUE)
                {
                    // count rows to check whether we have data in database or not 
                    $count= mysqli_num_rows($res);
                    // check the num of rows
                    if($count>0)
                    {
                        $i=1;
                        while($rows = mysqli_fetch_assoc($res))
                        {
                            // using while loop to get all the data from database
                            // and while loop will run as long as we have data in database

                            // get inditidual data
                            $id = $rows['id'];
                            $full_name = $rows['full_name'];
                            $username = $rows['username'];

                            // display the values  in our table
                            ?>
                                <tr>
                                    <td><?php echo $i++;?>.</td>
                                    <td><?php echo $full_name;?></td>
                                    <td><?php echo $username;?></td>
                                    <td>
                                            <a href="<?php echo SITEURL;?>admin/update_password.php?id=<?php echo $id;?>"class="btn-primary">Change Password</a>
                                            <a href="<?php echo SITEURL;?>admin/update_admin.php?id=<?php echo $id;?>" class="btn btn-secondary">Update admin</a>
                                            <a href="<?php echo SITEURL;?>admin/delete_admin.php?id=<?php echo $id;?>" class="btn btn-danger">Delete admin</a>
                                    </td>
                                </tr> 
                            <?php

                        }
                        // we have data in database
                    }
                    else{

                    }
                }
             ?>
           </table>
        </div>
    </div>
    <!-- Main Content Section Ends -->
<?php
    include ('partials/footer.php');
?>