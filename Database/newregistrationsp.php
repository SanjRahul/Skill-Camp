<?php
require 'connection.php';
if(isset($_POST['registrations']))
{
	$fname=$_POST['firstname'];
	$lname=$_POST['lastname'];
	$cateogry=$_POST['cateogry'];
	$qualification=$_POST['qualification'];
	$college=$_POST['college'];
	$dob=$_POST['dob'];
	$fathername=$_POST['fathername'];
	$gphoneno=$_POST['gphoneno'];
	$phoneno=$_POST['phoneno'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$courses=$_POST['courses'];

	$query="insert into newregistrations(fname,lname,cateogry,qualification,college,dob,gadnname,gadnphonno,phoneno,email,address,course) values ('$fname','$lname','$cateogry','$qualification','$college','$dob','$fathername','$gphoneno','$phoneno','$email','$address','$courses')";

	$r=mysqli_query($con,$query);
	
	header('location:/Skill_Camp/AdminLTE/Dashboard/index.php');

}
else{
	echo "not insert";
}

?>