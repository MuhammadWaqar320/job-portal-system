<!-- <?php

include 'connection.php';

$Id = $_GET['Id'];
// echo $Id;

?> -->
<?php
 $starr=0;
 $job="SELECT * From companyrate where com_id='$Id'";
 $result1=mysqli_query($db,$job);
 $row=mysqli_num_rows($result1);
//   echo $row;
 while($data1=mysqli_fetch_assoc($result1))
 {
   $starr=$starr+$data1['star'];
     
 }
 if($row==0)
 {
   $total=0;   
 }
 else
 {
  $total=$starr/$row;
 }
?>
<?php
include 'connection.php';
$query="SELECT Id From companylogin where Id='$Id'";
$result11=mysqli_query($db,$query);
$check4=mysqli_num_rows($result11);
//echo $check4;
$variab=0;
while($data=mysqli_fetch_assoc($result11))
{
 
 $variab=$data['Id'];
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
	</style>

</head>
<body>
	<nav class="navbar navbar-expand-sm  HomeNav" style="background-color:rgb(71, 129, 236) ;margin-bottom:60px;">
        <a href="" class="navbar-brand">
            <a href="HomePage.php"> <img src="img/lo.jpg" height="65px" width="200px"></a>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#listCollapse"
            style="background-color:white"><span style="color:black;"><i
                    class="fa fa-bars"></i>Menu</span>
        </button>&nbsp &nbsp
       <!-- navigation bar  -->
        <div id="listCollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto " id="nav-ul">
                <li class="nav-item"> <a href="index.html" class="nav-link LoginNav" id="nav-li-a"
                    style="color: white;font-size: 22px;"><span class="LoginHome" ><i class="fa fa-university"></i>
                        Home</span></a> </li>
               
                <li class="nav-item"> <a href="RegistrationForm.html" class="nav-link LoginNav" id="nav-li-a"
                        style="color:white;font-size: 22px;"><span class="LoginHome"><i class="fa fa-user"></i>
							Registeration</span></a> </li>
							<li class="nav-item"> <a href="PostJob.html" class="nav-link LoginNav" id="nav-li-a"
                                style="color:white;font-size: 22px;"><span class="LoginHome"><i class="fa fa-clipboard" aria-hidden="true"></i>
                                    Post Job</span></a> </li>
               
              
            </ul>
        </div>
    </nav>
<div class="container">
<?php
    include "connection.php";
    $applyid=0;
    $apply="SELECT * From companyrate";
    $result23=mysqli_query($db,$apply);
    while($data1=mysqli_fetch_assoc($result23))
    {
      $applyid++;
        
    }
    $applyid=$applyid+1;
    if (isset($_POST['rate'])) 
    {
      $vari=1;
      $star= mysqli_real_escape_string($db, $_POST['stars']);
      $now= mysqli_real_escape_string($db, $_POST['com_id']);
      if($star<6)
      {
        if($star>0)
        {
          $query="INSERT INTO companyrate(id,star,com_id) VALUES('$applyid','$star','$now')";
          $re=mysqli_query($db,$query);     
          echo "<script>window.alert('Thank you for rating')
          window.location ='index.php';
          </script>"; 
        //   exit();
        }
        else
        {
          echo "
          <script>
          window.alert('You can Enter 1-5 number only');
          window.location ='index.php';
          </script>
          ";
          $vari=0;
        }
       
      }
      elseif($vari==1)
      {
          echo "
          <script>
          window.alert('You can Enter 1-5 number only');
          window.location ='index.php';
          </script>
          ";
      }
     
      
    }
?>

<h1 style="text-align:center;margin-top:20px">Rate Registered Company</h1>
<div style="background: hsl(240, 100%, 80%);color:white;height:270px;margin-right:60px;margin-left:60px;margin-top:40px;border:1px solid silver;border-radius:5px">
   <div class="row" style="padding-top:30px;">
         <div class="col-sm-12">
         
   <center style="color:yellow">       <i class="fa fa-star fa-2x" data-index="0"></i>      <i class="fa fa-star fa-2x" data-index="0"></i>      <i class="fa fa-star fa-2x" data-index="0"></i>      <i class="fa fa-star fa-2x" data-index="0"></i>      <i class="fa fa-star fa-2x" data-index="0"></i>  
  </center>   
  <h3 style="text-align:center;margin-top:10px">Rating :  <?php  if($total>4)
  {
    $total=4;
  }  echo
  
  round($total,1); ?></h3>
  <!-- <form  action="index.php" method="post" class="form-container" class="forms">
	
  <input type="number" name="stars" size="18" style="border:1px solid blue;border-radius:5px;padding-left:10px;margin-left:235px;margin-top:20px;height:40px" id="InputPassword1" size="12" placeholder="Enter Number of stars" name="password" required>
<br>  <a class="btn btn-primary" style="color:white;margin-left:295px;margin-top:15px" name="rate" type="submit">Submit</a>    

</form> -->

<center><form action="ratenow.php" method="post" id="login" class="form-container" class="forms" style="background: hsl(240, 100%, 80%);	">
  <div class="form-group row">
  <div class="col-xs-3" style="margin-left:380px;">
   <input class="form-control" id="ex2" type="number" id="Rate" name="stars" placeholder="Enter number of stars" style="border:1px solid blue" required> 
  </div>
</div>
<div class="col-xs-3" style="margin-left:380px;">
   <input class="form-control" id="ex2"   type="number" style="display:none" id="Rate" name="com_id" value="<?php echo $variab ?>"> 
  </div>
<button type="submit" class="btn " name="rate" style="margin-left:0px;background:blue;color:white">Submit</buttoon>
</div>
 
</form>
</center>


</div>
   </div>
</div>
</div>

    
	
	  </div>       	   
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>