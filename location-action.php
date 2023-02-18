<?php session_start();
require "./conn.php";
if($_POST['action'])
{
$action=$_POST['action'];
if($action=="Add")
{
        if($_POST['section'] && $_POST['column_name'])
        {
            $section=$_POST['section'];
            $column_name=$_POST['column_name'];
                        
        //Sql Query for Sing In...
        $sql="insert into tbl_location(section,column_name) values('$section','$column_name')";

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
            if($_POST['location_id'] && $_POST['section'] && $_POST['column_name'])
            {
                $id = $_POST['location_id'];
                $section=$_POST['section'];
                $column_name=$_POST['column_name'];
                

    
                
            //Sql Query for Sing In...
            $sql="update tbl_location set section='$section', column_name='$column_name' where location_id='$id'";
    
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