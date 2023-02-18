<?php
include "./conn.php";
if($_POST['location_id'])
{
$id = $_POST['location_id'];
$section = $_POST['section'];
$column_name = $_POST['column_name'];

$sql = "update tbl_location set section = '$section',column_name='$column_name'where location_id='$id' ";
$res = mysqli_query($conn,$sql);
if($res){
    header('location:locations.php');
}
else{
    echo "Not Inserted Data".mysqli_error($conn);
}
}
?>