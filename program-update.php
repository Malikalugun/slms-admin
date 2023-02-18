<?php
include "./conn.php";
if($_POST['program_id'])
{
$id = $_POST['program_id'];
$name = $_POST['txtName'];
$department = $_POST['txtDepartment'];
$incharge = $_POST['txtIncharge'];
$sql = "update tbl_product set name = '$name',department='$department',incharge='$incharge' where program_id='$id' ";
$res = mysqli_query($conn,$sql);
if($res){
    header('location:product.php');
}
else{
    echo "Not Inserted Data".mysqli_error($conn);
}
}
?>