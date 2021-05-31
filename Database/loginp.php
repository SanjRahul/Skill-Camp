<?php  
session_start();
require "connection.php";
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];

	$q="select * from newregistrations where email='$username' and phoneno='$password'";
	
	$r=mysqli_query($con,$q);

	

	if(mysqli_num_rows($r)>0)
	{
		$_SESSION['myuser']=$username;
		header('Location:/Skill_Camp/AdminLTE/Dashboard/dashboard.php');
	}
	else
	{
		header('Location:emp.php');
	}
}
else
{
	header('Location:Adminlogin.php');
}







?>