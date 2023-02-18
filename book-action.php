<?php session_start();
require "./conn.php";
if($_POST['action'])
{
$action=$_POST['action'];
if($action=="Add")
{
        if($_POST['title'] && $_POST['author'] && $_POST['edition'])
        {
            $title=$_POST['title'];
            $author=$_POST['author'];
            $edition=$_POST['edition'];
            $publisher=$_POST['publisher'];
            $subject=$_POST['subject'];
            $quantity=$_POST['quantity'];
            
           
        //Sql Query for Sing In...
        $sql="insert into tbl_book_master(title,author,edition,publisher,subject,quantity) values('$title','$author','$edition','$publisher','$subject','$quantity')";

            if(mysqli_query($conn,$sql))
            {

                echo "Record added successfully...";
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
    else if($action=="Update")
        {
            if($_POST['book_id'] && $_POST['title'] && $_POST['author'] && $_POST['edition'])
            {
                $id = $_POST['book_id'];
                $title=$_POST['title'];
                $author=$_POST['author'];
                $edition=$_POST['edition'];
                $publisher=$_POST['publisher'];
                $subject=$_POST['subject'];
                $quantity=$_POST['quantity'];
              

            //Sql Query for Sing In...
            $sql="update tbl_book_master set title='$title', author='$author', edition='$edition',publisher='$publisher', subject='$subject', quantity='$quantity'where book_id='$id'";
    
                if(mysqli_query($conn,$sql))
                {
    
                    echo "Record updated successfully.";
                }
                else
                {
                    echo "Record not addupdateded successfully.Error:".mysqli_error($conn);
                }
            }
            else
            {
                echo "Please complete form.";
            }
        }

    }
?>