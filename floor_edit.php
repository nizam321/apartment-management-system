
<!-- sidebar -->
<?php include('include/sidebar.php')?>
<!-- main header -->
<div class="main">
    <?php include('include/header.php')?>
    <!-- content -->
        <main class="content">
            <div class="container">
                <div class="row">

                    <h2>Floor Edit</h2>

                    <form method="post" action="floor_edit_save.php">
                        
                        <?php
                        $id= $_GET["id"];
                        $connect = mysqli_connect("localhost","root","","my_ams_db");
                        $sql = "SELECT * FROM tbl_floor WHERE Floor_id='$id'";
                        $result = mysqli_query($connect,$sql);
                        $data = mysqli_fetch_array($result,);
                        ?>

                        <label>Floor no</label>
                        <input type="text" name="floor_no" value="<?php echo $data["Floor_no"]?>" class="form-control">

                        <label>Branch id</label>
                        <input type="number" name="branch_id" value="<?php echo $data["branch_id"]?>" class="form-control">

                        <label>Date</label>
                        <input type="datetime-local" name="date" value="<?php echo $data["Added_date"]?>" class="form-control">


                        <input type="hidden" name="id" value="<?php echo $data["Floor_id"];?>">

                        <input type="submit" value="Save" class="form-control mt-4 bg-success">
                    </form>

                </div>
            </div> 
        </main>
    <!-- theme -->
    <?php include('include/theme.php')?>
    <!-- Footer nav -->
    <?php include('include/footer.php')?>
</body>
