<?php
include "connection.php";
session_start();
// initializing variables
$username = "";
$email    = "";
// connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'smajobberoslo');
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['ComName']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password']);
  $num=mysqli_real_escape_string($db, $_POST['num']);
//   $image = $_FILES['image']['name'];
//   $target = "img/".basename($image);
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM person WHERE name='$username'";
  $user_check_query1 = "SELECT * FROM person WHERE email='$email'";
  $result = mysqli_query($db, $user_check_query);
  $result1 = mysqli_query($db, $user_check_query1);
  $user = mysqli_fetch_assoc($result);
  $user1 = mysqli_fetch_assoc($result1);
  $check=0;
  $Name=$user['name'];
  $mail=$user1['email'];
    if ($user||$user1) 
    { // if user exists
      if(($Name==$username)&&($mail==$email))
      {
        echo "<script>window.alert('Sorry username and email is already exist')
    </script>"; 
        $check=1;
      }
      if($check==0)
      {
        if ($user['name']==$username) {
            echo "<script>window.alert('Sorry username is already exist')
    </script>"; 
            $check=1;
          }
         if ($user1['email']==$email) 
           {
            echo "<script>window.alert('Sorry email is already exist')
    </script>"; 
            $check=1;
           } 
      }
     
    }
    if($check==0)
    {
      $query = "INSERT INTO person(name,email, password,phone) 
  	 VALUES('$username','$email','$password_1','$num')";
	  mysqli_query($db, $query);
	  echo "<script>window.alert('You are registered successfully')
    window.location ='index.php';
    </script>"; 

     }
  // Finally, register user if there are no errors in the form

}
?>
<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/login_style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="cssExternal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet"
		href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.default.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,550,700" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anony
    mous" />
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="stylesheet.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="fontawesome-free-5.10.2-web/css/fontawesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="HandheldFriendly" content="true">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta charset="utf-8" name="keyword" content="12workout,workout,Workout,make your body fit,21 minute challenge" />
        <div id="fb-root"></div>
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5e7e50a6f754400019ae07eb&product=inline-share-buttons" async="async"></script>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/login_style.css">
	<title>Registration Form</title>
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
.LoginHome:hover
{
    color: black;
}
.footerDiv {
	background-image: url("img/Fbg.jpg");
	margin-bottom: 15px;
}
.bg
{
  background-image: url("img/Timer3.jpg");
}
	</style>

</head>
<body class="bg">
	<section >
  <nav class="navbar navbar-expand-sm  HomeNav" style="background-color:rgb(71, 129, 236)">
        <a href="" class="navbar-brand">
            <a href="index.php"> <img src="img/lo.jpg" height="65px" width="200px"></a>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#listCollapse"
            style="background-color:white"><span style="color:black;"><i
                    class="fa fa-bars"></i>Menu</span>
        </button>&nbsp &nbsp
       <!-- navigation bar  -->
        <div id="listCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto " id="nav-ul">
                <li class="nav-item"> <a href="index.php" class="nav-link LoginNav" id="nav-li-a"
                    style="color: white;font-size: 22px;font-family:initial"><span class="LoginHome" ><i class="fa fa-university"></i>
                        Home</span></a> </li>
               
                <li class="nav-item"> <a href="option1.php" class="nav-link LoginNav" id="nav-li-a"
                        style="color:black;font-size: 22px;font-family:initial"><span class="LoginHome"><i class="fa fa-user"></i>
                            Registeration</span></a> </li>
                            <li class="nav-item"> <a href="option.php" class="nav-link LoginNav" id="nav-li-a"
                                style="color:white;font-size: 22px;font-family:initial"><span class="LoginHome"><i class="fa fa-clipboard" aria-hidden="true"></i>
                                    Post Job</span></a> </li>
            </ul>
        </div>
    </nav>
		<!-- row and justify-content-center class is used to place the form in center -->
		<section class="row justify-content-center" style="margin-bottom:60px;margin-top:60px;">
		  <section class="col-12 col-sm-6 col-md-4">
			<form class="form-container" class="forms"  id="login" action="privateRegis.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			  <h4 class="text-center font-weight-bold"> Registration </h4>
			  <label for="InputName1">Name</label>
			   <input type="text" class="form-control" id="InputComName" aria-describeby="nameHelp" placeholder="Enter Company Name" name="ComName"required>
			</div>
			<label for="InputEmail1">Email</label>
			 <input type="email" class="form-control" id="InputEmail1" aria-describeby="emailHelp" placeholder="Enter Email Address" name="email"required>
		  </div>

      
			<div class="form-group">
			  <label for="InputPassword1">Password</label>
			  <input type="password" class="form-control" id="InputPassword1" placeholder="Enter Password" name="password"required>
			</div>
			<div class="form-group">
			  <label for="InputPassword1">Contact number</label>
			  <input type="text" class="form-control" id="InputPassword1" placeholder="Enter Password" name="num"required>
			</div>            
        </div>
			<button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
			<div class="form-footer">
			  <p> You have an account? <a href="LoginPage.html">Login</a></p>
			  
			</div>
			</form>
		  </section>
		</section>
	  </section>
	  
	   <!-- html code -->
	   <script type="text/javascript" src="js/jquery.js"></script>
	   <script type="text/javascript" src="js/popper.min.js"></script>
	   <script type="text/javascript" src="js/bootstrap.min.js"></script>   	   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>