
<?php
    // connect to the database
// $db = mysqli_connect('localhost', 'root', '', 'smajobberoslo');
include "connection.php";
// REGISTER USER
if (isset($_POST['submit'])) {
  
    $username = mysqli_real_escape_string($db, $_POST['name']);
    $comm = mysqli_real_escape_string($db, $_POST['com']);
    $jobid = mysqli_real_escape_string($db, $_POST['idd']);
   $query = "INSERT INTO commentsprivate(Cus_Name,Comments,private_job) VALUES('$username','$comm','$jobid')";
   mysqli_query($db, $query);
 }
 //Display comments
 $qry="select * from commentsprivate";
 $run=mysqli_query($db,$qry);
 if(mysqli_num_rows($run)<1){
    echo "<script>window.alert('No comment') </script>";
 }
/*
<div class="container" style="height:auto;border:1px solid silver;margin-top:50px">
<h2 style="text-align:center;font-family:intial">Chat</h2>
<div  style="margin-top:10px">
  <p>Hello. How are you today?</p>
  <span class="time-right">11:00</span>
</div>
<div class=" darker">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea type="text" class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Type your message....." style="background:rgb(241, 237, 237);"></textarea>
    <a type="submit" class="btn btn-primary" style="color:white;margin-top:5px;">Submit</a>  
</div>
*/

 else{
   ?>
     <div class="container" style="height:auto;border:1px solid silver;margin-top:50px;background-color:rgb(216, 227, 250);">
     <h2 style="text-align:center;font-family:intial">Chat</h2>
     <div class="row">
     <div class="col-sm-4"></div>
     <div  class="col-sm-5">
   <?php
     while($data=mysqli_fetch_assoc($run)){  
       if($data['private_job']==$jobid){
       ?>
       <h4 style="color:blue;"><?php echo $data['Cus_Name']?> </h4>
       <p style="border:1px solid silver;padding-left:5px;border-radius:8px"><?php echo $data['Comments']?> </p>
    <script>
      
          </script> 
       <?php
      
    }
       }
       ?>
       </div>
       <div class="col-sm-3"></div>
       </div>
       </div>
       <?php
     }
  ?>

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" href="https://maxcdnfont-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="css/login_style.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="cssExternal.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
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
</head>
<body style="">


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
        <?php
        ?>