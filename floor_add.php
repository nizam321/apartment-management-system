
<!-- sidebar -->
<?php include('include/sidebar.php')?>
<!-- main header -->
<div class="main">
    <?php include('include/header.php')?>
    <!-- content -->
        <main class="content">
            <div class="container">
                <div class="row">
                    
                    <h2>Floor add</h2>

                    <form method="post" action="floor_add_save.php">
                        <label>Floor no</label>
                        <input type="text" name="floor_no" class="form-control">

                        <label>Branch id</label>
                        <input type="number" name="branch_id" class="form-control">

                        <label>Date</label>
                        <input type="datetime-local" name="date" class="form-control">

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
