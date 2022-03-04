<?php
    include('partials/menu.php');
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food</h1>
    
    <br><br>

    <!-- button to add admin -->
    <a href="<?php echo SITEURL;?>admin/add_food.php" class="btn-primary">Add Food</a>

    <br><br><br>
    <?php
        if(isset($_SESSION['add']))
        {
            echo ($_SESSION['add']);
            unset($_SESSION['add']);
        }
    ?>
           <table class="tbl-full">
               <tr>
                   <th>S.N.</th>
                   <th>Full Name</th>
                   <th>Username</th>
                   <th>Actions</th>
               </tr>
               <tr>
                   <td>1.</td>
                   <td>Tong Duc Nam</td>
                   <td>tongducnam</td>
                   <td>
                        <a href="#" class="btn btn-secondary">Update admin</a>
                        <a href="#" class="btn btn-danger">Delete admin</a>
                    </td>
               </tr> 
               <tr>
                   <td>2.</td>
                   <td>Tong Duc Nam</td>
                   <td>tongducnam</td>
                   <td>
                        <a href="#" class="btn btn-secondary">Update admin</a>
                        <a href="#" class="btn btn-danger">Delete admin</a>
                    </td>
               </tr> 
               <tr>
                   <td>3.</td>
                   <td>Tong Duc Nam</td>
                   <td>tongducnam</td>
                   <td>
                        <a href="#" class="btn btn-secondary">Update admin</a>
                        <a href="#" class="btn btn-danger">Delete admin</a>
                    </td>
               </tr> 
           </table>
    </div>
</div>
<?php
    include('partials/footer.php');
?>