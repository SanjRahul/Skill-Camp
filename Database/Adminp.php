<?php  
require 'connection.php';
if(isset($_POST['newadmin']))
{
	$adname=$_POST['adminname'];
	$password=md5($_POST['password']);

	$query="insert into admin (name,password) values('$adname','$password')";
	$r=mysqli_query($con,$query);
	header('Location:/Skill_Camp/AdminLTE/Dashboard/index.php');
}

?>