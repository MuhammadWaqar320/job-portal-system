<?php include 'connection.php';?>
<?php
session_start();

// $db = mysqli_connect('localhost', 'root', '', 'smajobberoslo');
// initializing variables
// connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'smajobberoslo');
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $mail = mysqli_real_escape_string($db, $_POST['mail']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM admin WHERE admin_name='$mail' AND admin_password='$password'";
  $result = mysqli_query($db, $user_check_query);
  $row= mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result)>0)
  {
    
    header('location:admindash.php');
  }
  else
  {
    echo "<script>window.alert('Sorry you not login')
    </script>"; 
  }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
  <title>Login Form</title>
	<style>
		/* set entire body that is webpage */
body{
	background:  rgb(220, 226, 238);
		
}
/* set form background colour*/
form{
	background: #fff;
}
/* set padding and size of th form */
.form-container{
	border-radius: 10px;
	padding: 30px;
}
.footerDiv {
	background-image: url("img/Fbg.jpg");
	margin-bottom: 15px;
}
.LoginHome:hover
{
    color: black;
}
.bg
{
  background-image: url("img/Timer3.jpg");
}
	</style>

</head>
<body class="bg">
	

	<section class="container-fluid" style="margin-bottom:60px;">
		<!-- row and justify-content-center class is used to place the form in center -->
		<section class="row justify-content-center">
		  <section class="col-12 col-sm-6 col-md-4">
			<form style="margin-top:40px;" class="form-container" action="AdminLoginForm.php" method="post" class="Form" name="LoginPage">
			<div class="form-group">
			  <h4 class="text-center font-weight-bold">Admin Login Form </h4>
			  <label for="InputName1">Name</label>
			   <input type="text" class="form-control" id="InputComName" aria-describeby="nameHelp" placeholder="Enter your name" name="mail" required>
			</div>
			<div class="form-group">
			  <label for="InputPassword1">Password</label>
			  <input type="password" class="form-control" id="InputPassword1" placeholder="Enter your Password" name="password" required>
			</div>
			<button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
	
			</form>
		  </section>
		</section>
	  </section>
	  

      
        
	       	   

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>