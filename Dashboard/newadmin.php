<?php  
session_start();
if(isset($_SESSION['myuser']))
{
  $user=$_SESSION['myuser'];
}
else
{
  header('Location:Adminlogin.php');
}
?>


<?php  
include 'header.php';
include 'Navbar.php';
include 'Sidebar.php';
?>


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Admin</li>
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
                <h3 class="card-title">New Admin</h3>
              </div>
             <div class="card-body">
               <div class="table">
    	         <form method="post" action="/Skill_Camp/AdminLTE/Database/adminp.php">
    	         	<label>Personal Detail &nbsp;<i class="fa fa-male"></i></label>
    	         	<div class="row">
    	         		<div class="col-md-6">
    	         			Admin Name:
    	         			<input type="text" name="adminname" class="form-control" required>
    	         		</div>
    	         		<div class="col-md-6">
    	         			Password:
    	         			<input type="password" name="password" class="form-control" required>
    	         		</div>
    	         	</div>
             <div class="card-footer text-center text-muted">
               <button type="submit" class="btn btn-primary" name="newadmin" id="newadmin">New Admin</button>
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



<?php  
include 'foote.php';
?>