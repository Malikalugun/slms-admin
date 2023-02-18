<?php session_start();
require "./conn.php";
if($_POST['action'])
{
$action=$_POST['action'];
if($action=="Return")
{
        if($_POST['cardno'] && $_POST['bookid'])
        {
            $cardno=$_POST['cardno'];
            $bookid=$_POST['bookid'];
    

            $tcode=$bookid."/".$cardno.date('Y/m/d');

        //Update Card Status
        $sql="update tbl_card set status='active' where card_no='$cardno'";
        mysqli_query($conn,$sql);

        //Update Book Quantity
        $sql="update tbl_book_master set quantity=quantity+1 where book_id=$bookid";
        mysqli_query($conn,$sql);
            
        // Inserting transaction
        $sql="insert into tbl_transaction(transaction_id,type,card_no,book_id) values('$tcode','Return Book','$cardno','$bookid')";

            if(mysqli_query($conn,$sql))
            {
                

                echo "Book Issued successfully...";
            }
            else
            {
                echo "Record not added successfully.Error:".mysqli_error($conn);
            }
        }
        else
        {
            echo "Please complete form";
        }
    }
    

    }
?>