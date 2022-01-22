<?php
include "connection.php";
$Id = $_GET['Id'];
$interest=0;
$query="SELECT * from interest1 where job_id='$Id'";
$execute=mysqli_query($db, $query);
while($row= mysqli_fetch_assoc($execute))
{
  $interest++;
}
$interest++;
$applyid=0;
$apply="SELECT * From interest1";
$result23=mysqli_query($db,$apply);
while($data1=mysqli_fetch_assoc($result23))
{
  $applyid++;
}
$applyid=$applyid+1;
$query = "INSERT INTO interest1(Id,interest_var,job_id) 
VALUES('$applyid','$interest','$Id')";
mysqli_query($db, $query);

$user_check_query = "SELECT * FROM postjob WHERE Id='$Id'";
$result1 = mysqli_query($db, $user_check_query);
$data = mysqli_fetch_assoc($result1);
?>
<html>
<head>
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
    <title>

    </title>
</head>
<body>
 
<div class="container">
<center> <h1 style="font-family:initial;font-weight:bold">Detail Information of Job</h1> </center>
<div class="row" style="margin-bottom:40px;height:auto;background-color:rgb(216, 227, 250);border:1px solid silver;border-radius:8px;margin-top:50px;margin-right:150px;margin-left:150px">
   <div class="col-sm-12">
   <?php
 
       
// display image code
echo '<img height="350px" width="100%" style="border:1px solid silver;border-radius:10px" src="data:;base64,'.base64_encode( $data['img'] ).' "/>';
?>
     <span style="font-size:22px;font-weight:bold;font-family:initial;">Job Title:</span>
          <p style="margin-left:126px"><?php  echo $data['title'] ?></p>
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Field:</span>
          <p style="margin-left:55px"><?php  echo $data['dept'] ?></p>
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Job Category:</span>
          <p style="margin-left:136px"><?php  echo $data['job_category'] ?></p>
          <span style="font-size:22px;font-weight:bold;font-family:initial;">No. Of Seats:</span>
          <p style="margin-left:130px"><?php  echo $data['job_quantity'] ?></p>
          <span style="font-size:22px;font-weight:bold;font-family:initial;color:red">Interested People:</span>
          <p style="margin-left:170px"><?php  echo $interest; ?></p> 
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Job Description:</span>
          <p style="margin-left:130px"><?php  echo $data['job_description'] ?></p>
   </div>
</div>
 

</div>












<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>