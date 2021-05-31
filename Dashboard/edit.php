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
require 'connection.php';
$id=$_REQUEST['id'];
$sql="select * from newregistrations where id='$id'";
$r=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($r);
?>



<?php  
include 'header.php';
include 'Navbar.php';
include 'Sidebar.php';
?>
<body>

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>UPDATE</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">UPDATE</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">UPDATE</h3>
              </div>
             <div class="card-body">
               <div class="table">
    	         <form method="post" action="/Skill_Camp/AdminLTE/Database/editp.php">
                    <input type="text" name="id" value="<?php echo $row['id']  ?>" readonly>
    	         	<label>Personal Detail &nbsp;<i class="fa fa-male"></i></label>
    	         	<div class="row">
    	         		<div class="col-md-6">
    	         			First Name:
    	         			<input type="text" name="firstname" value="<?php echo $row['fname'];  ?>" class="form-control" required>
    	         		</div>
    	         		<div class="col-md-6">
    	         			Last Name:
    	         			<input type="text" name="lastname" value="<?php echo $row['lname'];  ?>" class="form-control" required>
    	         		</div>
    	         	</div>
    	         	<br>
    	         	<div class="row">
    	         		<div class="col-md-6">
    	         			Cateogry:
    	         		<select name="cateogry" class="form-control" required>
    	         			<option <?php if($row['cateogry']=='general'){?>selected <?php }?>value="general"> General</option>
    	         			<option <?php if($row['cateogry']=='obc'){?>selected <?php }?>value="obc">Obc</option>
    	         			<option <?php if($row['cateogry']=='sc'){?>selected <?php }?>value="sc">Sc</option>
    	         			<option <?php if($row['cateogry']=='st'){?>selected <?php }?>value="st">St</option>
    	         		</select>
    	         		</div>  	         	
    	         	<div class="col-md-6">
    	         		Qualification:
    	         		<input type="text" name="qualification" value="<?php echo $row['qualification'];?>" class="form-control" required>
    	         	</div>
    	         	</div>
    	         	<br>
    	         	<div class="row">
    	         		<div class="col-md-6">
    	         			College:
    	         			<input type="text" name="college" value="<?php echo $row['college'];?>" class="form-control" required>
    	         		</div>
    	         		<div class="col-md-6">
    	         			DOB:
    	         			<input type="date" name="dob" value="<?php echo $row['dob'];?>" class="form-control" required>
    	         		</div>
    	         	</div>
    	         	<br>
    	         	<label>Gaurdian Detail &nbsp;<i class="fa fa-tags"></i></label>
    	         	<div class="row">
    	         		<div class="col-md-6">
    	         			Gaurdian Name:
    	         			<input type="text" value="<?php echo $row['gadnname'];?>" class="form-control" name="fathername" required>
    	         		</div>
    	         		<div class="col-md-6">
    	         			Gaurdian Phone no.:
    	         			<input type="number" value="<?php echo $row['gadnphonno'];?>" class="form-control" name="gphoneno" required>
    	         		</div>
    	         	</div>
    	         	<br>
    	         	<label> Contact Detail &nbsp;<i class="fa fa-bars"></i></label>
    	         	<div class="row">
    	         		<div class="col-md-6">
    	         			Contact No. :
    	         			<input type="number" value="<?php echo $row['phoneno'];?>" class="form-control" name="phoneno" required>
    	         		</div>
    	         		<div class="col-md-6">
    	         			Email Address :
    	         			<input type="email" value="<?php echo $row['email'];?>" class="form-control" name="email" required>
    	         		</div>
    	         	</div>
    	         		<br>

    	         		<div class="row">
    	         		<div class="col-md-6">
    	         			Address:
    	         			<input type="text" value="<?php echo $row['address'];?>" name="address" class="form-control"></input>
    	         		</div>
    	         		
    	         	</div>  
                    <div class="row">
                        <div class="col-md-6">
                            courses:
                            <select name="courses" class="form-control" required>
                                <option value="c">C</option>
                                <option value="c++">C++</option>
                                <option value="java">Java</option>
                                <option value="python">python</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            Photo:
                            <input type="text" name="qualificaion" class="form-control" >
                        </div>
                    </div>
             </div>
             
             <div class="card-footer text-center text-muted">
               <button type="submit" class="btn btn-primary" name="update" id="update">UPDATE</button>
             </div>
             </form> 
        </div>
     </div>
 </div>
</div>
</div>
</div>
</section>
</div>

             
    
	
</body>
<?php include 'foote.php'; ?>




