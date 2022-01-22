<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Smajobber</title>
  <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
<meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rating System</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<style>
   
   .footerDiv {
	background-image: url("img/Fbg.jpg");
  background-repeat: no-repeat;
	margin-bottom: 15px;
}
.card1 {
	padding-top: 25px;
	padding-left: 10px;
}
.inner {
	overflow: hidden;
}

.inner img {
	transition: 1.5s all ease;
}

.inner:hover img {
	transform: scale(1.5);
}

@media(max-width: 1500px) {
    .form-inline {
        display: none;
    }
}
.shopAnim {
	font-size: 38px;
	animation: waqar 5s infinite;
}
@media(max-width: 600px) {
	.abc {
		margin-top: 360px;
	}
}
.Main {
		margin-bottom: 0px;
	}
@media screen and (max-width: 1200px) {
	.Main {
		margin-bottom: 400px;
	}
}
@media screen and (max-width: 1200px) {
	.now{
		width:100%;
	}
}
@media only screen and (max-width: 1200px) {
	.Res {
		display: none;
	}
}
@media only screen and (max-width: 1200px) {
	.responsive{
	 width:100%
	}
}
.Lap0 {
	height: 70px;
	width: 100px;
  padding: 0px 3px;
}

@media(max-width: 600px) {
	.sliderDiv {
		/* margin-top: 175px; */
		padding-left: 15px;
	}
}
.LoginHome:hover
{
    color: black;
}
@media screen and (max-width: 1200px) {
	.Main{
		margin-bottom:0px;
	}
}
@media screen and (max-width: 1200px) {
	.companyris{
		display:none;
	}
}
companyris
.row1 {
	padding-left: 25px;
	padding-right: 25px;
}
h1
{
  font-weight:bold;
}
#myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color:rgb(180, 196, 226);
        color: black;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
      }
      #myBtn:hover {
        background-color: #555;
        color: white;
      }
.HelpDiv {
  background-image: url("img/Timer3.jpg");
    height: 580px;
    padding-top:50px;
    width:100%;
}
@media(max-width: 1500px) {
    .form-inline {
        display: none;
    }
}
@media(max-width: 1500px) {
    .Img {
        height:160px;
        width:160px;
    }
}
@media(max-width: 1500px) {
    .mar{
        margin-top:100px;
    }
}
@media only screen and (max-width: 1455px) and (min-width: 700px) {
    .input{
        width:130px;
        margin-bottom:8px;
    }
}
@media only screen and (max-width: 1455px) and (min-width: 700px) {
    .more{
        margin-top:10px;
    }
}
/* @media(max-width: 1500px) {
    .ab{
        display: none;
    }
} */
@media(max-width: 1500px) {
    .ab{
        display: none;
    }
}
@media(max-width: 1500px) {
    .shopAnim{
        display: none;
    }
}
@media(max-width: 1500px) {
    .rate{
        margin-right:100px;
    }
}
@media(max-width: 1300px) {
    .HelpDiv{
        display:none;
    }
}

@media(max-width: 800px) {
    .d-block{
        height:400px;
        border:1px solid white;
        border-radius:5px;
    }
}
@media(max-width: 1500px) {
    .Rte{
        padding-left:50px;
    }
}
.para
{
	color:black;
   height:80px;
	overflow: auto;
	font-size: 16px;
	text-align: justify;
	padding: 5px;
}
.rate:hover
{
  color:red;
}
.onImage {
    padding-top: 170px;
    color: blue;
    font-size: 70px;
    text-shadow: 2px 2px white;
    font-family: initial;
   
}
@keyframes waqar {
	0% {
		color: blue;
		font-size: 5px;
	}

	10% {
		color: red;
		font-size: 10px;
	}

	20% {
		color: green;
	}

	40% {
		color: yellow;
	}

	60% {
		color: black;
	}

	80% {
		color: grey;
	}

	100% {
		color: orange;

	}
}

   
   
</style>
</head>

<body style="background-color:hsl(0, 0%, 94%);font-family:initial;">
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
                    style="color: white;font-size: 22px;"><span class="LoginHome" style="color: black;"><i class="fa fa-university"></i>
                        Home</span></a> </li>
                <li class="nav-item active"> <a href="AdminLoginForm.php" class="nav-link LoginNav" id="nav-li-a"
                        style="color:white;font-size: 22px;"><span class="LoginHome"><i class="fas fa-sign-in-alt"></i>
                            Admin</span></a> </li>
                <li class="nav-item"> <a href="option1.php" class="nav-link LoginNav" id="nav-li-a"
                        style="color:white;font-size: 22px;"><span class="LoginHome"><i class="fa fa-user"></i>
                            Registeration</span></a> </li>
                            <li class="nav-item"> <a href="option.php" class="nav-link LoginNav" id="nav-li-a"
                                style="color:white;font-size: 22px;"><span class="LoginHome"><i class="fa fa-clipboard" aria-hidden="true"></i>
                                    Post Job</span></a> </li>
            </ul>
        </div>
    </nav>
<!-- slider-->
<div class="HelpDiv">
    <center>
        <h1 class="onImage ab" style="font-border:1px solid black">Search For Any Type of Job</h1>
    </center>
    <div class="ab">
    <form class="form-inline" action="searchjob.php" method="post">
    
    <!-- style="margin-left: 26%; border-left: 2px solid rgb(71, 129, 236);border-top: 2px solid rgb(71, 129, 236);border-bottom: 2px solid rgb(71, 129, 236);height: 38px;padding: 8px;background: white;"> -->
<input class="form-control mr-sm-2 search-bar ab xyz" type="search" placeholder="Enter job title"
    aria-label="Search" name="job" size="85px"
    style="margin-left:390px;border-right: 2px solid rgb(71, 129, 236);margin-right:0px;border-top-left-radius: 20px;border-bottom-left-radius: 20px;;border-top: 2px solid rgb(71, 129, 236);border-left:2px solid rgb(71, 129, 236);;border-bottom: 2px solid rgb(71, 129, 236);">

<button type="submit" class="btn btn-primary ab abc" name="submit" style="margin-left:-10px; border-top-right-radius: 20px;border-bottom-right-radius: 20px;">Search</button>
</form>
    </div>
     
    
</div>
<marquee style="margin-top:20px;font-size:25px;color:blue">Well come to you in our Website</marquee>
<div>

</div>
<div>
<div class="Main">
			<div class="">
				<div class="wow bounceInDown">
					<div class="sliderDiv">
						<div class="carousel slide carousel-fade" id="myslider" data-ride="carousel"
							data-interval="3000">
							<ol class="carousel-indicators">
								<li class="active" data-target="#myslider" data-slide-to="0"> </li>
								<li data-target="#myslider" data-slide-to="1"></li>
								<li data-target="#myslider" data-slide-to="2"></li>
								<li data-target="#myslider" data-slide-to="3"></li>
							
							</ol>
							<div class="carousel-inner">
								<!------------------------------------------------------------>
								<div class="carousel-item active">
									<img src="img/bg1.jpg" class="d-block " width="100%" height="700px"
										style="padding-top:10px;padding-bottom: 10px">
									<div class="carousel-caption">

									</div>
								</div>
								<!-------------------------------------------------------------->
								<div class="carousel-item">
									<img src="img/bg2.jpg" class="d-block" width="100%" height="700px"
										style="padding-top:10px;padding-bottom: 10px">
									<div class="carousel-caption">

									</div>
								</div>
								<!-------------------------------------------------------------->
                <div class="carousel-item">
									<img src="img/bg4.jpg" class="d-block" width="100%" height="700px"
										style="padding-top:10px;padding-bottom: 10px">
									<div class="carousel-caption">

									</div>
								</div>
								<!-------------------------------------------------------------->
								<!-------------------------------------------------------------->
								<!-------------------------------------------------------------->

							</div>
							<a href="#myslider" class="carousel-control-prev" role="button" data-slide="prev">
								<span class="carousel-control-prev-icon"></span>
							</a>
							<a href="#myslider" class="carousel-control-next" role="button" data-slide="next">
								<span class="carousel-control-next-icon"></span>
							</a>
						</div>
					</div>
				</div>
				<!----------------------------------------------------->
		
			</div>
		</div>
  <?php 
include "n.php";
?>
</div>
<div class="row">
  <div class="col-sm-3" class="mar" >
    <?php
       $query="SELECT * From ads";
       $Result=mysqli_query($db,$query);
       $Check=mysqli_num_rows($Result);
       $odd=0;
       while($data=mysqli_fetch_assoc($Result))
       {
         $odd=$odd+1;
         $re=$odd%2;
         if($re!=0)
         {
       ?>
       <?php echo '<a href="'.$data['link'].'"> <img height="330px" class="Img" style="margin:10px;border-radius:8px;border:1px solid skyblue" width="100%" style="border:1px solid silver;border-radius:10px" src="data:;base64,'.base64_encode( $data['img'] ).' "/></a>';
         }
       ?>
       
       <?php
       }
    ?>
  </div>
  <div class="col-sm-6">
  <div style="background-color:white;height:auto;padding:20px;border-left:1px solid silver;border-right:1px solid silver;">
<div class="row">  
</div>
<center> <h1 style="font-family:initial;font-weight:bold;margin-top:15px;" class="companyris"><img src="img/c2.jpg" width="90px" height="80px;">Information Of Registered Companies<img src="img/com.jpg" width="90px" height="80px;"> </h1></center>
<div class="companyris" style="background-color:rgb(216, 227, 250);border-radius:8px;border:1px solid silver;height:auto;margin-top:20px;margin-left:0px;margin-right:0px;">
<div class="row" style="padding-top:20px;">
        <div class="col-sm-3">
          <h3 style="margin-left:8px;font-family:initial;font-weight:bold">Company</h3>
        </div>
        <div class="col-sm-3">
        <h3 style="font-family:initial;font-weight:bold">Category</h3>
        
        </div>
        <div class="col-sm-3">
        <h3 style="font-family:initial;font-weight:bold">Rating</h3>
        
        </div>
        <div class="col-sm-3">
        <h3 style="font-family:initial;font-weight:bold"><a> RateNow </a></h3>
        
        </div>
    
    </div>	
<hr>
 <?php
     $query="SELECT * From companylogin";
     $result=mysqli_query($db,$query);
     $check=mysqli_num_rows($result);
    //  $Array4=mysqli_fetch_assoc($check);
     if($check<0)
     {

     }
     else
     {
      while($data=mysqli_fetch_assoc($result))
      {
             ?>
           <div class="row">
        <div class="col-sm-3">
          <h5 style="margin-left:8px;font-family:initial;"><?php  echo $data['Company_name']  ?></h5>
        </div>
        <div class="col-sm-3">
        <h5 style="margin-left:8px;font-family:initial;"><?php  echo $data['deptno']  ?></h5>
        </div>
        <div class="col-sm-3">
        <h5 style="margin-left:8px;font-family:initial;">
        <?php 
            $d=$data['Id'];
         $starr=0;
         $job="SELECT * From companyrate where com_id='$d'";
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
        
        
        echo round($total,1);  ?>
        
      </h5>
        </div>
        <div class="col-sm-3">
        <h5 style="margin-left:8px;font-family:initial;" class="rate"><a style="color:blue;text-decoration:underline;" href="ratenow.php?Id=<?php echo $data['Id']?>">Ratenow</a></h5>
        </div>
    </div>

             <?php
      }

     }
  ?>
  <?php

 ?>
</div>

<div style="">
<h1 style="font-family:initial;text-align:center;padding-top:20px;">Available Jobs <img src="img/top2.jpg" width="70px" height="60px"> </h1>
<?php

  $query="SELECT * From postjob";
  $result11=mysqli_query($db,$query);
  $check4=mysqli_num_rows($result11);
  if($check4<0)
  {

  }
  else
  {
     while($data=mysqli_fetch_assoc($result11))
     {
      $compan=$data['Company_name'];
      $query="SELECT Email From companylogin where Company_name='$compan'";
      $result111=mysqli_query($db,$query);
      $check44=mysqli_num_rows($result111);
      $data11=mysqli_fetch_assoc($result111)
       ?>
                <div class="row" style="margin-bottom:10px"> 
   <div class="col-sm-12" >
      <div class="card" style="background-color:rgb(216, 227, 250);border-radius:8px;">
        <div class="card-body">
        <div class="inner" >
        <?php

// display image code
echo '<img height="350px" width="100%" style="border:1px solid silver;border-radius:10px" src="data:;base64,'.base64_encode( $data['img'] ).' "/>';
?>
</div>
                  <h1 class="card-title" style="font-family:initial;text-align:center;font-weight:bold"><?php echo $data['Company_name'] ?></h1>
                  <hr style="background:silver">
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Job Title:</span>
          <p style="margin-left:90px"><?php echo $data['title'] ?></p>
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Field:</span>
          <p style="margin-left:60px"><?php echo $data['dept'] ?></p>
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Job Category:</span>
          <p style="margin-left:136px"><?php echo $data['job_category'] ?></p>
      
          <span style="font-size:22px;font-weight:bold;font-family:initial;">No. Of Seats:</span>
          <p style="margin-left:125px"><?php  echo $data['job_quantity'] ?></p>
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Email:</span>
          <p style="margin-left:60px"><?php echo  $data11['Email'] ?></p>          
          <!-- for button -->
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Instruction:</span>
          <p style="margin-left:110px">If you are interested in this Job then Click on More Detail button</p> 
   


        <center> <a href="LoginCandidate.php?title=<?php echo $data['title']?>" class="btn btn-dark" id="btn" style="">Apply Now</a> <a href="Discomments.php?Id=<?php echo $data['Id']?>" style="margin-left:10px" class="btn btn-dark" id="btn">Comment</a><a href="interest1.php?Id=<?php echo $data['Id']?>" style="margin-left:15px" class="btn btn-dark" id="btn" class="more">More Detail</a></center>
      </div>
      </div>
        
   </div>
   </div>
        
       <?php   
     }
  }





?>

<!-- ------------------ -->
<?php

  $query="SELECT * From postjobprivate";
  $result11=mysqli_query($db,$query);
  $check4=mysqli_num_rows($result11);
  if($check4<0)
  {

  }
  else
  {
     while($data=mysqli_fetch_assoc($result11))
     {
      $compan=$data['Company_name'];
      $query="SELECT email From person where name='$compan'";
      $result111=mysqli_query($db,$query);
      $check44=mysqli_num_rows($result111);
      $data11=mysqli_fetch_assoc($result111)
       ?>
                <div class="row" style="margin-bottom:10px"> 
   <div class="col-sm-12" >
      <div class="card" style="background-color:rgb(216, 227, 250);border-radius:8px;">
        <div class="card-body">
        <div class="inner" >
        <?php

// display image code
echo '<img height="350px" width="100%" style="border:1px solid silver;border-radius:10px" src="data:;base64,'.base64_encode( $data['img'] ).' "/>';
?>
</div>
<h1 class="card-title" style="font-family:initial;text-align:center;font-weight:bold"><?php echo $data['Company_name'] ?></h1>
                  <hr style="background:silver">
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Job Title:</span>
          <p style="margin-left:90px"><?php echo $data['title'] ?></p>
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Field:</span>
          <p style="margin-left:60px"><?php echo $data['dept'] ?></p>
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Job Category:</span>
          <p style="margin-left:136px"><?php echo $data['job_category'] ?></p>
      
          <span style="font-size:22px;font-weight:bold;font-family:initial;">No. Of Seats:</span>
          <p style="margin-left:125px"><?php  echo $data['job_quantity'] ?></p>
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Email:</span>
          <p style="margin-left:60px"><?php echo  $data11['email'] ?></p>          
          <!-- for button -->
          <span style="font-size:22px;font-weight:bold;font-family:initial;">Instruction:</span>
          <p style="margin-left:110px">If you are interested in this Job then Click on More Detail button</p> 
   


        <center> <a href="LoginCandidate.php?title=<?php echo $data['title']?>" class="btn btn-dark" id="btn" style="">Apply Now</a> <a href="Discommentsprivate.php?Id=<?php echo $data['Id']?>"  class="btn btn-dark" id="btn"style="margin-left:10px">Comment</a><a href="interest2.php?Id=<?php echo $data['Id']?>" style="margin-left:15px" class="btn btn-dark" id="btn" class="more">More Detail</a></center>
      </div>
      </div>
        
   </div>
   </div>
        
       <?php   
     }
  }





?>
<!-- ------------------------------------Assignment------------------------------ -->

<!-- ------------------------------------Assignment------------------------------- -->
<!-- top rated companies -->


<center>   <h1 style="font-weight:bold" class="companyris">Top Rating Companies</h1>  </center>
<div class="companyris" style="background-color:rgb(216, 227, 250);border-radius:8px;border:1px solid silver;height:auto;margin-top:20px;margin-left:0px;margin-right:0px;">
<div class="row" style="padding-top:20px;">
<div class="col-sm-4">
        <h3 style="margin-left:8px;center;font-family:initial;font-weight:bold">Logo</h3>
        
        </div> 
        <div class="col-sm-4">
          <h3 style="margin-left:8px;font-family:initial;font-weight:bold"> Company</h3>
        </div>
        <div class="col-sm-4">
        <h3 style="margin-left:8px;font-family:initial;font-weight:bold">Category</h3>
        
        </div>
   
    </div>	
<hr style="background:silver">
 <?php
     $query="SELECT * From companylogin";
     $result=mysqli_query($db,$query);
     $check=mysqli_num_rows($result);
     $vaar=0;
    //  $Array4=mysqli_fetch_assoc($check);
     if($check<0)
     {

     }
     else
     {
      while($data=mysqli_fetch_assoc($result))
      {
             ?>
      <div class="row">
           <div class="col-sm-4">
        <h3 style="margin-left:8px;font-family:initial;"><?php echo '<img style="height:35px;margin-bottom:10px;width:40px;border:1px solid silver;border-radius:8px;" src="data:;base64,'.base64_encode( $data['img'] ).'"/>';  ?></h3>
        </div>
        <div class="col-sm-4">
          <h3 style="margin-left:8px;font-family:initial;font-size:20px"><?php  echo $data['Company_name']  ?></h3>
        </div>
        <div class="col-sm-4">
        <h3 style="margin-left:8px;font-family:initial;font-size:20px"><?php  echo $data['deptno']  ?></h3>
        </div>
        <br>
       
    </div>
             <?php
             $vaar++;
             if($vaar==4)
             {
             break;
             }
      }

     }
  ?>
  <?php

 ?>


</div>
<!-- --------------------------------------------rating system ---------------------------------->
<?php
    include "connection.php";
    if (isset($_POST['rate'])) 
    {
      $vari=1;
      $star= mysqli_real_escape_string($db, $_POST['stars']);
      if($star<6)
      {
        if($star>0)
        {
          $query="INSERT INTO rate(star) VALUES('$star')";
          mysqli_query($db,$query);
        }
        else
        {
          echo "
          <script>
          window.alert('You can Enter 1-5 number only');
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
          </script>
          ";
      }
     
      
    }
?>
<?php
 $starr=0;
 $job="SELECT * From rate";
 $result1=mysqli_query($db,$job);
 $row=mysqli_num_rows($result1);
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
<h1 style="text-align:center;margin-top:20px">Rate Our WebSite</h1>
<div style="background-color:rgb(216, 227, 250);height:270px;margin-top:40px;border:1px solid silver;border-radius:5px">
   <div class="row" style="padding-top:30px;">
         <div class="col-sm-12">
         
   <center style="color:blue">       <i class="fa fa-star fa-2x" data-index="0"></i>      <i class="fa fa-star fa-2x" data-index="0"></i>      <i class="fa fa-star fa-2x" data-index="0"></i>      <i class="fa fa-star fa-2x" data-index="0"></i>      <i class="fa fa-star fa-2x" data-index="0"></i>  
  </center>   
  <h3 style="text-align:center;margin-top:10px">Rating :  <?php  if($total>4)
  {
    $total=4;
  }  echo
  
  round($total,1); ?></h3>
  <div class="container" style="margin-left:50px;margin-right:50px;">
  <!-- <form  action="index.php" method="post" class="form-container" class="forms">
	
  <input type="number" name="stars" size="18" style="border:1px solid blue;border-radius:5px;padding-left:10px;margin-left:235px;margin-top:20px;height:40px" id="InputPassword1" size="12" placeholder="Enter Number of stars" name="password" required>
<br>  <a class="btn btn-primary" style="color:white;margin-left:295px;margin-top:15px" name="rate" type="submit">Submit</a>    

</form> -->

<form action="index.php" method="post" id="login" class="form-container" class="forms">
  <div class="row">
         <div class="col-sm-3">

         </div>
         <div class="col-sm-6 md-12">
         <input  id="ex2" style="height:38px;padding-left:5px;border-radius:5px;" class="input" type="number" id="Rate" name="stars" placeholder="Enter number of stars" style="border:1px solid silver" required>   
         <button type="submit" class="btn btn-primary" name="rate">Submit</buttoon> 
        </div>
         <div class="col-sm-3">

         </div>
  </div>
  <div class="form-group row " >
    <div class="col-sm-3">

    </div>
<div class="col-sm-5">

</div>


</div>

</form>

  </div>

</div>
   </div>
</div>
  </div>
 
</div>

<!-- -----------------------------------------------------------------------------------final -->
</div>
<div class="col-sm-3">
<?php
       $query="SELECT * From ads";
       $Result=mysqli_query($db,$query);
       $Check=mysqli_num_rows($Result);
       $even=0;
       while($data=mysqli_fetch_assoc($Result))
       {
         $even=$even+1;
         $re=$even%2;
         if($re==0)
         {
       ?>
       <?php echo '<a href="'.$data['link'].'"> <img height="330px" class="Img" style="margin:10px;border-radius:8px;border:1px solid skyblue" width="100%" style="border:1px solid silver;border-radius:10px" src="data:;base64,'.base64_encode( $data['img'] ).' "/></a>';
         }
       ?>
       
       <?php
       }
    ?>
</div>
</div>
  <div class="footerDiv" style="height: 300px;padding-top: 30px;padding-bottom: 50px;">
    <div class="footer-wrapper">
      <div class="container-fluid">
      
           <div class="">
            <center>   <h1 style="color:rgb(71, 129, 236);font-weight: bold;font-family: initial;">Contact Us</h1></center><br>
          <center>  <h5 style="color:white;"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;
            </span></a> </li> +0513-420051</h5>
            <h5 style="color:white;"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;qasim1234@gmail.com</h5></center>
           </div>
           <div style="padding-top:50px"  class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore" style="color: blanchedalmond;">  <p
            style="display: none;"> <img src="img/2.png">
            Share on facebook</p></a></div>
           <div class="sharethis-inline-share-buttons" style="padding-bottom: 50px;"></div>
      </div>
    </div>

  </div>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <!-- <div style="background-color:black;color:white;padding:30px">Scroll Down</div>
  <div style="background-color:lightgrey;padding:30px 30px 2500px">This example demonstrates how to create a "scroll to top" button that becomes visible 
    <strong>when the user starts to scroll the page</strong>.</div> -->
  
  <script>
  //Get the button
  var mybutton = document.getElementById("myBtn");
  
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
  <!-- <div style="background-color:black;color:white;padding:30px">Scroll Down</div>
  <div style="background-color:lightgrey;padding:30px 30px 2500px">This example demonstrates how to create a "scroll to top" button that becomes visible 
    <strong>when the user starts to scroll the page</strong>.</div> -->
  
  <script>
  //Get the button
  var mybutton = document.getElementById("myBtn");
  
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {scrollFunction()};
  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }
  
  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.sc = 0;
    document.documentElement.scrollTop = 0;
  }
  </script>
  </div>
<!-- <div style="background-color:black;color:white;padding:30px">Scroll Down</div>
<div style="background-color:lightgrey;padding:30px 30px 2500px">This example demonstrates how to create a "scroll to top" button that becomes visible 
<strong>when the user starts to scroll the page</strong>.</div> -->
    <!-- files -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>