<?php
 include "connection.php";
session_start();
// initializing variables
// connect to the database
//include "connection.php";
//  $db = mysqli_connect('localhost', 'root', '', 'smajobberoslo');
// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $title = mysqli_real_escape_string($db, $_POST['title']);
   $image=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//   $image = $_FILES['image']['name'];
//   $target = "img/".basename($image);
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
 
          $query = "INSERT INTO ads(link,img) 
       VALUES('$title','$image')";
      mysqli_query($db, $query);
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
	<title>Post a Job</title>
	<style>
		/* set entire body that is webpage */
body{
	background:  rgb(220, 226, 238);
		
}
.LoginHome:hover
{
    color: black;
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
	</style>

</head>
<body style="background-image: url('pics/.JPG');">
<nav class="navbar navbar-danger " style="background-color:rgb(71, 129, 236);">
                <a class="btn btn-outline-light" style="background-color:blue;border-radius:8px;margin-left:540px;" href="Logout.php" role="button" >Logout</a>
                <a class="btn btn-outline-light" style="background-color:blue;border-radius:8px;margin-right:530px;" href="admindash.php" role="button" >Backward</a>
              </nav>

	<section class="container-fluid" style="margin-bottom:60px;margin-top:60px;">
		<!-- row and justify-content-center class is used to place the form in center -->
		<section class="row justify-content-center">
		  <section class="col-12 col-sm-6 col-md-4">
			<form class="form-container" action="Addadsform.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			  <h4 class="text-center font-weight-bold">Add ads</h4>
			 
            <label for="InputJobName1">Link</label>
            <input type="text" class="form-control" id="InputJobName" aria-describeby="nameHelp" placeholder="Enter ads link" name="title">
            </div><br>
			<label>Upload Image</label>
			<div class="input-group"  style="border:1px solid silver; border-radius:5px;margin-bottom:20px">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp" name="image">
                </span>
            </span>
            
        </div>
            
        </div>
          <br>
			<button type="submit" class="btn btn-primary btn-block" name="submit">Submit</button>
			
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
