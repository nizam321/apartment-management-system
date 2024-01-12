<?php 
// $con = mysqli_connect("localhost","root","","my_ams_db");

//  $floor_no = $_POST["Floor_no"];
//  $beanch_id =$_POST["Branch_id"];
//  $date = $_POST["date"];

//  $sql = "INSERT INTO tbl_floor(Floor_no, branch_id, Added_date) VALUES ('$floor_no','$beanch_id','$date',)";
 
// $result = mysqli_query($con,$sql);




// Database connect
$connect = mysqli_connect("localhost","root","","my_ams_db");

// save for database data
$floor_no = $_POST["floor_no"];
$branch_id = $_POST["branch_id"];
$date = $_POST["date"];


 $sql = "INSERT INTO tbl_floor(Floor_no, branch_id, Added_date) VALUES ('$floor_no', '$branch_id', '$date')";
 $result = mysqli_query($connect,$sql);
 

 if($result) {
    echo header("Location:floor_list.php");
} else {
    echo "error";
}
// Datdbase close
if($connect){
    mysqli_close($connect);
}


?>