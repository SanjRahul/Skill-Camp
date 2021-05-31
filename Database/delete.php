<?php  
require 'connection.php';
$id=$_REQUEST['id'];
$d="delete from newregistrations where id='$id'";
$r=mysqli_query($con,$d);
header('Location:/Skill_Camp/AdminLTE/Dashboard/allstudent.php');



?>