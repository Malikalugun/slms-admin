<?php session_start();
require "./conn.php";
if($_POST['action'])
{
$action=$_POST['action'];
if($action=="Add")
{
        if($_POST['name'] && $_POST['department'] && $_POST['incharge'])
        {
            $name=$_POST['name'];
            $department=$_POST['department'];
            $incharge=$_POST['incharge'];

           
            
        //Sql Query for Sing In...
        $sql="insert into tbl_program(name,department,incharge) values('$name','$department','$incharge')";

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
            if($_POST['program_id'] && $_POST['name'] && $_POST['department'] && $_POST['incharge'])
            {
                $id = $_POST['program_id'];
                $name=$_POST['name'];
                $department=$_POST['department'];
                $incharge=$_POST['incharge'];

    
                
            //Sql Query for Sing In...
            $sql="update tbl_program set name='$name', department='$department', incharge='$incharge' where program_id='$id'";
    
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