<?php session_start();
require "./conn.php";
if($_POST['action'])
{
$action=$_POST['action'];
if($action=="Add")
{
        if($_POST['validity'] && $_POST['type'])
        {
            $reg_no=$_POST['reg_no'];
            $validity=$_POST['validity'];
            $type=$_POST['type'];
           
        //Sql Query for Sing In...
        $sql="insert into tbl_card(reg_no,validity,type) values('$reg_no','$validity','$type')";

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
            if( $_POST['card_no'] && $_POST['validity'] && $_POST['type'])
            {
                $id= $_POST['card_no'];
                $validity=$_POST['validity'];
                $type=$_POST['type'];

    
                
            //Sql Query for Sing In...
            $sql="update tbl_card set validity='$validity',type='$type' where card_no='$id'";
    
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