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
            <h1>New Registrations</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Registrations</li>
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
                <h3 class="card-title">New Registrations</h3>
              </div>
             <div class="card-body">
               <div class="table">
    	         <form method="POST" action="/Skill_Camp/AdminLTE/Database/newregistrationsp.php">
    	         	<label>Personal Detail &nbsp;<i class="fa fa-male"></i></label>
    	         	<div class="row">
    	         		<div class="col-md-6">
    	         			First Name:
    	         			<input type="text" name="firstname" class="form-control" required>
    	         		</div>
    	         		<div class="col-md-6">
    	         			Last Name:
    	         			<input type="text" name="lastname" class="form-control" required>
    	         		</div>
    	         	</div>
    	         	<br>
    	         	<div class="row">
    	         		<div class="col-md-6">
    	         			Cateogry:
    	         		<select name="cateogry" class="form-control" required>
    	         			<option value="general"> General</option>
    	         			<option value="obc">Obc</option>
    	         			<option value="sc">Sc</option>
    	         			<option value="st">St</option>
    	         		</select>
    	         		</div>
    	         		<div class="col-md-6">
    	         			Qualification:
    	         			<input type="text" name="qualification" class="form-control" required>
    	         		</div>
                    </div>
                    <br>

    	         	<div class="row">
    	         		<div class="col-md-6">
    	         			College:
    	         			<input type="text" name="college" class="form-control" required>
    	         		</div>
    	         		<div class="col-md-6">
    	         			DOB:
    	         			<input type="date" name="dob" class="form-control" required>
    	         		</div>
    	         	</div>
    	         	<br>
    	         	<label>Gaurdian Detail &nbsp;<i class="fa fa-tags"></i></label>
    	         	<div class="row">
    	         		<div class="col-md-6">
    	         			Gaurdian Name:
    	         			<input type="text" class="form-control" name="fathername" required>
    	         		</div>
    	         		<div class="col-md-6">
    	         			Gaurdian Phone no.:
    	         			<input type="number" class="form-control" name="gphoneno" required>
    	         		</div>
    	         	</div>
    	         	<br>
    	         	<label> Contact Detail &nbsp;<i class="fa fa-bars"></i></label>
    	         	<div class="row">
    	         		<div class="col-md-6">
    	         			Contact No. :
    	         			<input type="number" class="form-control" name="phoneno" required>
    	         		</div>
    	         		<div class="col-md-6">
    	         			Email Address :
    	         			<input type="email" class="form-control" name="email" required>
    	         		</div>
    	         	</div>
    	         		<br>

    	         		<div class="row">
    	         		<div class="col-md-6">
    	         			Address:
    	         			<input type="text" name="address" class="form-control"></input>
    	         		</div>
                        <div class="col-md-6">
                            courses:
                            <select name="courses" class="form-control" required>
                                <option value="c">C</option>
                                <option value="c++">C++</option>
                                <option value="java">Java</option>
                                <option value="python">python</option>
                            </select>
                        </div>
    	         		
    	         	</div>  
                    <br>
                    <div class="row">
                        
                        <div class="col-md-6">
                            Select image:
                            <input type="file" name="img" id="img" accept="image/*" >
                        </div>
                    </div>
             </div>
             
             <div class="card-footer text-center text-muted">
               <button type="submit" class="btn btn-primary" name="registrations" id="registrations">Registrations</button>
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




