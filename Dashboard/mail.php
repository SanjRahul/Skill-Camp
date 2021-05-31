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
$q="select * from contactus";
$r=mysqli_query($con,$q);
?>


<?php 
include "header.php";
include "Navbar.php";
include "Sidebar.php";
?>

   
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mail Box</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mail Box</li>
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
                <h3 class="card-title">Mail Box</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                 <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email Address</th>
                      <th>Phone No.</th>
                      <th>Course</th>
                      <th style="width: 400px">Message</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                   <tbody>
                    <?php  
                      $i=0;
                      while($row=mysqli_fetch_assoc($r)){
                      $i=$i+1;
                     ?>
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $row['name']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['phoneno']; ?></td>
                      <td><?php echo $row['subject']; ?></td>
                      <td><?php echo $row['message']; ?></td>
                      <td><button type="button" class="btn btn-success">send</button></td>
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
        </div>
      </div>
    </section>
  </div>
</div>
  <!-- /.content-wrapper -->
  <?php
  include "foote.php";
  ?>

  