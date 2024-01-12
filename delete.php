<?php 
$id = $_GET["id"];
$connect = mysqli_connect("localhost","root","","my_ams_db");
$sql ="DELETE FROM tbl_floor WHERE Floor_id = '$id'";
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