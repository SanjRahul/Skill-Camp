<?php  
session_start();
if(isset($_SESSION['myuser']))
{
  $user=$_SESSION['myuser'];
}
else
{
  header('Location:/Skill_Camp/AdminLTE/Login/Adminlogin.php');
}
?>



<?php  
require "connection.php";
$s="select *from newregistrations";
$a=mysqli_query($con,$s);
?>

<?php
include 'header.php';
include "Navbar.php";
include "Sidebar.php";
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Students</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">All Students</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Students</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Cateogry</th>
                      <th>Qualification</th>
                      <th>Collage</th>
                      <th>Date of Birth</th>
                      <th>Grdn Name</th>
                      <th>Grdn PhNo.</th>
                      <th>Cont No.</th>
                      <th>Email Add</th>
                      <th>Address</th>
                      <th>Course</th>
                      <th colspan="2" align="center">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                   <?php  
                     $i=0;
                     while ($row=mysqli_fetch_assoc($a)){
                     	$i=$i+1;
                   ?>
                   <tr>
                   	<td><?php echo $i; ?></td>
                    <td><?php echo $row['fname']." ".$row['lname'];?></td>                  
                   	<td><?php echo $row['cateogry']; ?></td>
                   	<td><?php echo $row['qualification']; ?></td>
                   	<td><?php echo $row['college']; ?></td>
                   	<td><?php echo $row['dob']; ?></td>
                   	<td><?php echo $row['gadnname']; ?></td>
                    <td><?php echo $row['gadnphonno']; ?></td>
                   	<td><?php echo $row['phoneno']; ?></td>
                   	<td><?php echo $row['email']; ?></td>
                   	<td><?php echo $row['address']; ?></td>
                   	<td><?php echo $row['course']; ?></td>
                    <td><a href="/Skill_Camp/AdminLTE/Dashboard/edit.php?id=<?php echo $row['id'];?>"><i class="fa fa-eye"></i></a></td>
                    <td><a href="/Skill_Camp/AdminLTE/Database/delete.php?id=<?php echo $row['id'];?>"><i class="fa fa-trash"></i></i></a></td>
                   </tr>
                  </tbody>
              <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->
        </div>
 
</section>
</div>
</div>
</section>
</div>




<?php
include 'foote.php';
?>


