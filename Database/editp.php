<?php
require 'connection.php';
if(isset($_POST['update']))
{
	$id=$_POST['id'];
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

	$u="update newregistrations set fname='$fname',lname='$lname',cateogry='$cateogry',qualification='$qualification',college='$college',dob='$dob',gadnname='$fathername',gadnphonno='$gphoneno',phoneno='$phoneno',email='$email',address='$address',course='$courses' where id='$id'";


	$r=mysqli_query($con,$u);
	header('location:/Skill_Camp/AdminLTE/Dashboard/allstudent.php');

}
else{
	echo "not ";
}

?>