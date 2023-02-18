<?php
include "./conn.php";
if($_POST['book_id'])
{
$id = $_POST['book_id'];
$title = $_POST['title'];
$author = $_POST['author'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];
$subject = $_POST['subject'];
$quantity = $_POST['quantity'];
$sql = "update tbl_book_master set title = '$title',author='$author',edition='$edition',publisher = '$publisher',subject='$subject',quantity='$quantity' where book_id='$id' ";
$res = mysqli_query($conn,$sql);
if($res){
    header('location:books.php');
}
else{
    echo "Not Inserted Data".mysqli_error($conn);
}
}
?>