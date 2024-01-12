

<?php 
require("admin_login_save.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
    if(isset($_POST["Login"])){
       
        $sql = "SELECT * FROM `admin` WHERE `Admin _email`='$_POST[adminEmail]' AND `Admin _password`='$_POST[adminPassword]'";
        $result = mysqli_query($connect,$sql);
        if(mysqli_num_rows($result)==1){
           session_start();
            $_SESSION['adminLoginId'] = $_POST['adminEmail'];
            header("location:dashboard.php");
        }
        else{
            echo"<script>alert('incorrect Password');</script>";
        }

    }
?>



<div class="form_container p-4 bg-white  card">
    <form class="form-inline" method="post" action="#">
        <h3 class="form_title">Admin Login Panel</h3>
        <h6 class="form_sub_title">Access to our dashboard</h6>
        <div class="form-group mb-3 mt-3">  
            <input type="email" class="form-control" id="email" name="adminEmail" placeholder=" Your E-mail*" required>
        </div>
        <div class="form-group mb-3">
            <input type="password" class="form-control" id="pwd" name="adminPassword" placeholder=" Your Password*" required>
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <div class="mb-3">
        <button type="submit" name="Login" class="btn btn-danger mt-3 form-control">Login</button>
        </div>
        
    </form>
</div>

    
    <script src="bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
