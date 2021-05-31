<?php
session_start();
require "connection.php";


if(isset($_SESSION['myuser'])){
$user=$_SESSION['myuser'];
$q="select * from newregistrations where email='$user'";
$r=mysqli_query($con,$q);

}else{
  header('Location:login.php');
}
?>

 
<?php  
include 'header.php';
include 'Navbar.php';
include 'usersidebar.php';
?>

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Student Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Student Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <div class="container">
    <div class="table-responsive" style="background-color: #F0F0F0;box-shadow: 0px 0px 1px 10px #888888; border-radius: 10px; padding-bottom: 30px;">
      <br>
      <table width="100%" id="cost_list">
        <tbody>
          <?php
        
          while ($row=mysqli_fetch_assoc($r)) {
          
            ?>
          
          <tr>
            <td class="thead" style="padding-left: 20px;">Name</td>
            <td class="tbody">:&nbsp;&nbsp;<?php echo $row['fname']." ".$row['lname']; ?></td>
          </tr>
          <tr>
            <td class="thead" style="padding-left: 20px;">Cateogry</td>
            <td class="tbody">:&nbsp;&nbsp; <?php echo $row['cateogry']; ?></td>
          </tr>
          <tr>
            <td class="thead" style="padding-left: 20px;">Qualification</td>
            <td class="tbody">:&nbsp;&nbsp; <?php echo $row['qualification']; ?></td>
          </tr>
          <tr>
            <td class="thead" style="padding-left: 20px;">Collage</td>
            <td class="tbody">:&nbsp;&nbsp; <?php echo $row['college']; ?></td>
          </tr>
          <tr>
            <td class="thead" style="padding-left: 20px;">Date of Birth</td>
            <td class="tbody">:&nbsp;&nbsp; <?php echo $row['dob']; ?></td>
          </tr>
          <tr>
            <td class="thead" style="padding-left: 20px;">Father Name</td>
            <td class="tbody">:&nbsp;&nbsp;<?php echo $row['gadnname']; ?></td>
          </tr>
          <tr>
            <td class="thead" style="padding-left: 20px;">Father Phone No.</td>
            <td class="tbody">:&nbsp;&nbsp; <?php echo $row['gadnphonno']; ?></td>
          </tr>
          <tr>
            <td class="thead" style="padding-left: 20px;">Phone No.</td>
            <td class="tbody">:&nbsp;&nbsp; <?php echo $row['phoneno']; ?></td>
          </tr>
          <tr>
            <td class="thead" style="padding-left: 20px;">Email Address</td>
            <td class="tbody">:&nbsp;&nbsp; <?php echo $row['email']; ?></td>
          </tr>
          <tr>
            <td class="thead" style="padding-left: 20px;">Address</td>
            <td class="tbody">:&nbsp;&nbsp; <?php echo $row['address']; ?></td>
          </tr>
          <tr>
            <td class="thead" style="padding-left: 20px;">Course</td>
            <td class="tbody">:&nbsp;&nbsp; <?php echo $row['course']; ?></td>
          </tr>

        </tbody>
      <?php } ?>
      </table>
    </div>
  </div>




</div>


      
<?php include 'foote.php'; ?>