<?php
include "./conn.php";
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql="delete from `tbl_card` where card_no='$id'";
    $res = mysqli_query($conn,$sql);
    if($res){
        //echo "delected successfully";
       header('location: cards.php');
    }
    else{
        echo "Sorry ! data not deleted.<br>Error:".mysqli_error($conn);
    }
}
?>