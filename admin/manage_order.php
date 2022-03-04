<?php
    include('partials/menu.php');
?>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage Order</h1>
         <!-- button to add admin -->
         <button class="btn btn-primary"><a href="#" style="color: #fff;text-decoration: none;">Add Order</a></button>
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