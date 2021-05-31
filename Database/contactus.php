<?php  
require "connection.php";
if(isset($_POST['sendmessage']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$sub=$_POST['subject'];
	$msg=$_POST['message'];

	$query="insert into contactus (name,email,phoneno,subject,message) values('$name','$email','$phoneno','$sub','$msg')";
	$c=mysqli_query($con,$query);
	header('location:/Skill_Camp/AdminLTE/Templet/emp.php');
}
?>