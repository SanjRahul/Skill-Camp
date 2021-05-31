<?php  
session_start();
require 'connection.php';
if(isset($_POST['adminlogin']))
{
	$adminname=$_POST['username'];
	$password=md5($_POST['password']);

	$q="select * from admin where name='$adminname' and password='$password'";

	$r=mysqli_query($con,$q);



	if(mysqli_num_rows($r)>0)
	{
		$_SESSION['myuser']=$adminname;
		header('Location:/Skill_Camp/AdminLTE/Dashboard/index.php');
	}
	else
	{
		header('Location:Adminlogin.php');
	}
}
else
	{
		header('Location:Adminlogin.php');
	}

?>