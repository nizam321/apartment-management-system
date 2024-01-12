
<!-- sidebar -->
<?php include('include/sidebar.php')?>
<!-- main header -->
<div class="main">
    <?php include('include/header.php')?>
    <!-- content -->
    <main class="content mt-3">
        <div class="container">
            <div class="row">
                <h2 class="">Branch</h2>
                <?php 
                $connect = mysqli_connect("localhost","root","","my_ams_db");
                $sql = "SELECT * FROM tblbranch";
                $result = mysqli_query($connect,$sql);
                $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
                ?>
                       
                <table class="table table-striped table-hover">
                    <tr class="bg-danger text-center">
                        <th>Branch id</th>
                        <th>Branch name</th>
                        <th>Branch Email</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($data as $value) {?>
                        <tr class="text-center">
                            <td><?php echo $value["branch_id"];?></td>
                            <td><?php echo $value["branch_name"];?></td>
                            <td><?php echo $value["b_email"];?></td>
                            <td><?php echo $value["b_contact_no"];?></td>
                            <td><?php echo $value["b_address"];?></td>
                            <td><?php echo $value["b_status"];?></td>
                            <td><span><a href="delete.php?id=<?php echo $value["branch_id"] ; ?>"><i class="fa-solid fa-trash text-muted"></i></a></span></td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div> 
    </main>

    <!-- theme -->
    <?php include('include/theme.php')?>
    <!-- Footer nav -->
    <?php include('include/footer.php')?>
            
</body>
