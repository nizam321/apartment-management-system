
<!-- sidebar -->
<?php include('include/sidebar.php')?>
<!-- main header -->
<div class="main">
    <?php include('include/header.php')?>
    <!-- content -->
    <main class="content">
        <div class="container">
            <div class="row">
                
                <?php 
                $connect = mysqli_connect("localhost","root","","my_ams_db");
                $sql = "SELECT * FROM tbl_floor";
                $result = mysqli_query($connect,$sql);
                $data = mysqli_fetch_all($result,MYSQLI_ASSOC); 
                ?>

                <table class="table table-striped table-hover">
                    <tr class="bg-success text-center">
                        <th>Floor id</th>
                        <th>Floor no</th>
                        <th>Branch id</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>

                        <?php foreach($data as $value) {?>
                            <tr class=" text-center">
                                <td><?php echo $value["Floor_id"];?></td>
                                <td><?php echo $value["Floor_no"];?></td>
                                <td><?php echo $value["branch_id"];?></td>
                                <td><?php echo $value["Added_date"];?></td>
                                <td><span><a href="floor_edit.php?id=<?php echo $value["Floor_id"] ; ?>"><i class="fa-solid fa-pen text-muted"></i></a></span> || <span><a href="delete.php?id=<?php echo $value["Floor_id"] ; ?>"><i class="fa-solid fa-trash text-muted"></i></a></span></td>
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


