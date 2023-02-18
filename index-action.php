<?php session_start();
require "./conn.php";
if($_POST['username'] && $_POST['password'])
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
//Sql Query for Sing In...
$sql="select * from tbl_users where username='$username'";

$smt= mysqli_query($conn,$sql);

	if($rs=mysqli_fetch_assoc($smt))
	{
		if(md5($password)==$rs['password'])
		{
			//Creating Session...
			
			$_SESSION['username'] = $rs['username'];
			$_SESSION['name']=$rs['name'];
			$_SESSION['role']=$rs['role'];
			$_SESSION['password']=$rs['password'];
			session_write_close();
			echo "1";
			}
			else
			{
				echo "Password is wrong";
			}
	}

	else
	{
		echo "Username is wrong.";
	}
}
else
{
    echo "Please complete login form";
}


?>