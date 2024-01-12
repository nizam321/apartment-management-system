<?php 
// Database connect
$connect = mysqli_connect("localhost","root","","my_ams_db");

// save for database data
$id = $_POST["id"];
$floor_no = $_POST["floor_no"];
$branch_id = $_POST["branch_id"];
$date = $_POST["date"];
$sql ="UPDATE tbl_floor SET Floor_no = '$floor_no', branch_id = '$branch_id', Added_date = '$date' WHERE Floor_id='$id'";
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