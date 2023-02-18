<?php
include "./conn.php";
if($_POST['id'])
{
$id = $_POST['id'];
$validity = $_POST['validity'];
$type = $_POST['type'];

$sql = "update tbl_card set validity='$validity',type='$type' where card_no='$id' ";
$res = mysqli_query($conn,$sql);
if($res){
    header('location:cards.php');
}
else{
    echo "Not Inserted Data".mysqli_error($conn);
}
}
?>