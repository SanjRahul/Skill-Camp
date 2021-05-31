<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Account</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="/Skill_Camp/AdminLTE/dist/css/Tempcss/login.css">
  
</head>
<body onload="getsavedcookie();">
	<div class="container box">
     <div class="d-flex justify-content-center">
	     <div class="card text-center" style="width: 30rem;">
           <div class="card-header">
              <h1>Admin Account</h1>
            </div>
            <div class="card-body">
              <form method="post" action="/Skill_Camp/AdminLTE/Database/Adminloginp.php">

                 <div class="input-group mb-3">
                     <div class="input-group-prepend inputgroup">
                        <span class="input-group-text" id="inputGroup-sizing-default"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg>
                        </span>
                     </div>
                     <input type="text" class="input" name="username" id="username" placeholder="User Name" required>
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend inputgroup">
                      <span class="input-group-text" id="inputGroup-sizing-default"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                      <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                      </svg>
                      </span>
                    </div>
                    <input type="password" class="input" name="password" id="password" placeholder="Password" required>
                    <i class="fa fa-eye show" id="show" name="show" value="show" onclick="showpassword()"></i>
                  </div>
                  <div class="row align-items-center remember">
                     <input type="checkbox" name="remember" onclick="setcookie()">Remember Me
                  </div>
              </p>
              <input class="btn btn-primary login_btn" type="submit" name="adminlogin" id="adminlogin" value="Admin Login">
              </form>
            </div>
            <div class="card-footer">
               <div class="d-flex justify-content-center">
                  <a href="#"><span style="color: white;">Forgot your password?</span></a>
                  <br>
                  <a href="userlogin.php">Log In</a>
               </div>
            </div>
          </div>
      </div>
    </div>

	
    <script>
function setcookie(){
  //var x = document.cookie;
  //console.log(x)
    // var username=$('#username').val();
    // var password=$('#password').val();
        var username=   document.getElementById('username').value;
         var password=   document.getElementById('password').value;
    document.cookie = "chuser="+username+";path=http://localhost/jqueryexample/"
    document.cookie = "chpwd="+password+";path=http://localhost/jqueryexample/";
}
function getsavedcookie(){

  console.log(document.cookie);
  var a='chuser';
  var b='chpwd';
  r1=getCookie(a);
  r2=getCookie(b);
  console.log(r1)
  console.log(r2)
  //$('#username').val(r1);
 // $('#password').val(r2);
 document.getElementById('username').value=r1
 document.getElementById('password').value=r2
}
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

 function showpassword(){
    // console.log('ok')
    //var a= document.getElementById('pwd').value;
       var action=document.getElementById('show').value;
        if(action=='show'){
          document.getElementById('password').type='text';
          document.getElementById('show').value='hide';
        }else{
          document.getElementById('password').type='password';
          document.getElementById('show').value='show';
        }
  }

</script>

</script>



	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>




