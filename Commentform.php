<?php
session_start();
// connect to the database
include "connection.php";

// REGISTER USER
if (isset($_POST['submit'])) {
  
    $username = mysqli_real_escape_string($db, $_POST['name']);
    $comm = mysqli_real_escape_string($db, $_POST['com']);
    $user_check_query1 = "SELECT * FROM postjob WHERE Id='$id'";
    $user_check_query2 = "SELECT * FROM postjobprivate WHERE Id='$id'";
    $result1 = mysqli_query($db, $user_check_query1);
    $result2 = mysqli_query($db, $user_check_query2);
    $row1= mysqli_fetch_assoc($result1);
    $row2= mysqli_fetch_assoc($result2);
if(mysqli_num_rows($result1)>0)
{
    $private=0;
   $query = "INSERT INTO comments(Cus_Name,Comments,com_job,private_job) VALUES('$username','$comm','$id','$private')";
  mysqli_query($db, $query);
 }
 else{
   $com=0;
   $query = "INSERT INTO comments(Cus_Name,Comments,com_job,private_job) VALUES('$username','$comm','$com','$id')";
  mysqli_query($db, $query);
 }
 }  ?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/login_style.css">
	<title>Post a Job</title>
	<style>
		/* set entire body that is webpage */
body{
	background: #383a3d;
	padding-top: 25vh;	
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
	</style>

</head>
<body style="background-image: url('pics/.JPG');">
	<section class="container-fluid">
		<!-- row and justify-content-center class is used to place the form in center -->
		<section class="row justify-content-center">
		  <section class="col-12 col-sm-6 col-md-4">
			<form class="form-container" action="Commentform.php" method="post">
			<div class="form-group">
			  <h4 class="text-center font-weight-bold">Post Comment</h4>
			  <label for="InputName1">Name</label>
			   <input type="text" class="form-control" id="InputComName" name="name" aria-describeby="nameHelp" placeholder="Enter your Name">
            </div>
            <label for="InputJobName1">Comment</label>
            <input type="text" class="form-control" id="InputJobName" aria-describeby="nameHelp" name="com" placeholder="Enter your Comment">
            </div>
          <br>
			<button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
			
			</form>
		  </section>
		</section>
	  </section>
	   <!-- html code -->
         	   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>