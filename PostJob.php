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
  $name = mysqli_real_escape_string($db, $_POST['ComName']);
  $jobCategory = mysqli_real_escape_string($db, $_POST['JobCategory']);
  $jobDesc = mysqli_real_escape_string($db, $_POST['JobDesc']);
  $jobQuantity = mysqli_real_escape_string($db, $_POST['JobQuantity']);
  $dept = mysqli_real_escape_string($db, $_POST['dept']);
  $type = mysqli_real_escape_string($db, $_POST['type']);
  $title = mysqli_real_escape_string($db, $_POST['title']);
   $image=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
//   $image = $_FILES['image']['name'];
//   $target = "img/".basename($image);
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $variable="Company"; 
  if($type==$variable)
   {
    $user_check_query = "SELECT * FROM postjob WHERE job_category='$jobCategory'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    $Name=$user['job_category'];
   // if job exists
       if($Name==$jobCategory)
        {
          echo "sorry";
    }
      else{
        $query = "INSERT INTO postjob(Company_name,job_category,job_description,job_quantity,dept,img,selecttype,title) 
        VALUES('$name','$jobCategory','$jobDesc','$jobQuantity','$dept','$image','$type','$title')";
       $chk=mysqli_query($db, $query);
       echo "<script>window.alert('You successfully post this job')
       window.location ='index.php';
       </script>"; 
    }
      
   }
   else
   {
    $user_check_query = "SELECT * FROM postjobprivate WHERE job_category='$jobCategory'";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    $Name=$user['job_category'];
   // if job exists
       if($Name==$jobCategory)
        {
          echo "sorry";
    }
      else{
          $query = "INSERT INTO postjobprivate(Company_name,job_category,job_description,job_quantity,dept,img,selecttype,title) 
       VALUES('$name','$jobCategory','$jobDesc','$jobQuantity','$dept','$image','$type','$title')";
      $chk=mysqli_query($db, $query);
      echo "yes";
    }
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
.bg
{
  background-image: url("img/Timer3.jpg");
}
	</style>

</head>
<body class="bg">
<nav class="navbar navbar-expand-sm  HomeNav" style="background-color:rgb(71, 129, 236)">
        <a href="" class="navbar-brand">
            <a href="index.php"> <img src="img/logo2.jpg" height="100px" width="200px"></a>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#listCollapse"
            style="background-color:white"><span style="color:black;"><i
                    class="fa fa-bars"></i>Menu</span>
        </button>&nbsp &nbsp
       <!-- navigation bar  -->
        <div id="listCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto " id="nav-ul">
                <li class="nav-item"> <a href="index.php" class="nav-link LoginNav" id="nav-li-a"
                    style="color: white;font-size: 25px;"><span class="LoginHome" style="color: black;"><i class="fa fa-university"></i>
                        Home</span></a> </li>
                <li class="nav-item active"> <a href="AdminLoginForm.php" class="nav-link LoginNav" id="nav-li-a"
                        style="color:white;font-size: 25px;"><span class="LoginHome"><i class="fas fa-sign-in-alt"></i>
                            Admin</span></a> </li>
                <li class="nav-item"> <a href="option1.php" class="nav-link LoginNav" id="nav-li-a"
                        style="color:white;font-size: 25px;"><span class="LoginHome"><i class="fa fa-user"></i>
                            Registeration</span></a> </li>
                            <li class="nav-item"> <a href="option.php" class="nav-link LoginNav" id="nav-li-a"
                                style="color:white;font-size: 25px;"><span class="LoginHome"><i class="fa fa-clipboard" aria-hidden="true"></i>
                                    Post Job</span></a> </li>
            </ul>
        </div>
    </nav>
	<section class="container-fluid" style="margin-bottom:60px;">
		<!-- row and justify-content-center class is used to place the form in center -->
		<section class="row justify-content-center">
		  <section class="col-12 col-sm-6 col-md-4">
			<form class="form-container" action="PostJob.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
			  <h4 class="text-center font-weight-bold">Post Job</h4>
			  <label for="InputName1">Heading</label>
			   <input type="text" class="form-control" id="InputComName" aria-describeby="nameHelp" placeholder="Enter your Name or Company name" name="ComName"required>
			</div>
			<div class="form-group">
			 
			  <label for="InputName1">Field</label>
			   <input type="text" class="form-control" id="InputComName" aria-describeby="nameHelp" placeholder="Enter field" name="dept"required>
            </div>
            <label for="InputJobName1">Job Title</label>
            <input type="text" class="form-control" id="InputJobName" aria-describeby="nameHelp" placeholder="Enter Job title" name="title"required>
            </div><br>
            <label for="InputJobName1">Job Category</label>
            <input type="text" class="form-control" id="InputJobName" aria-describeby="nameHelp" placeholder="Enter Job Category" name="JobCategory"required>
            </div><br>
			<div class="form-group">
			  <label for="InputDes">Job Description</label>
			  <textarea type="textarea" class="form-control" id="Inputdes" placeholder="Enter Job Description" name="JobDesc"></textarea>
            </div>
            <label for="Inputqua">No of Seats</label>
            <input type="number" class="form-control" id="Inputqua" name="JobQuantity" placeholder="Enter number of seats"required>
		  </div><br>
		  <label for="InputPassword1">Select</label>
            <div class="form-group" style="border:1px solid silver;border-radius:5px;padding-top:10px;padding-left:10px;padding-bottom:10px;">
			 
              <input type="radio" name="type" value="Private Peron" required><span> Private Peron</span> <input type="radio" name="type"
          value="Company" class="input" required><span> Company</span>
            </div>
			<label>Upload Image/Logo</label>
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
	  <div class="footerDiv">
		<div class="footer-wrapper">
		  <div class="container-fluid">
		  
			   <div class="">
				<center>   <h1 style="color:rgb(71, 129, 236);font-weight: bold;font-family: initial;">Contact Us</h1></center><br>
			  <center>  <h5 style="color:white;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
				</span></a> </li> +0513-420051</h5>
				<h5 style="color:white;"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;qasim1234@gmail.com</h5></center>
			   </div>
			   <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore" style="color: blanchedalmond;">  <p
				style="font-size: 30px;color:white;text-align: center;font-weight: bold;font-family: initial; font-size: 20px;">
				Click for share on facebook</p></a></div>
			   <div class="sharethis-inline-share-buttons" style="padding-bottom: 50px;"></div>
		  </div>
		</div>
	
	  </div>
	   <!-- html code -->
	   <script type="text/javascript" src="js/jquery.js"></script>
	   <script type="text/javascript" src="js/popper.min.js"></script>
	   <script type="text/javascript" src="js/bootstrap.min.js"></script>         	   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>e ;r
