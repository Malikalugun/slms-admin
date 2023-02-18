<?php
include "./conn.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql="delete from `tbl_location` where location_id='$id'";
    $res = mysqli_query($conn,$sql);
    if($res){
        //echo "delected successfully";
       header('location:locations.php');
    }
    else{
        echo "Sorry ! data not deleted.<br>Error:".mysqli_error($conn);
    }
}
?>