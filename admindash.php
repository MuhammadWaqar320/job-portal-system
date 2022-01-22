<?php
session_start();
if(!$_SESSION['admin_name']){
  header("location:AdminLoginForm.php");
}
?>
<html>
<head>
   <title>Admin Panel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dashstyle.css">
	<!-- Fav icon -->
	<link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
   .Hinput
   {
     border:1px solid red;
   }
   .example_b
   {
     background-color:white;
   }
   .example_b:hover
   {
     background-color:peru;
   }
   .one
   {
    background-color:rgb(71, 129, 236);
    color:white;
   }
   .one:hover
   {
      background-color:blue;
      color:white;
   }
   .time
   {
    height:70px;
    width:882px;
    background:rgb(71, 129, 236);;
    margin-left:128px;
    color:white;
    text-align:center;
    border:1px solid white;
    margin-top:40px;
    font-size:45px;
    font-family:bold;
   }
   .time:hover
   {
    background-color:blue;
    color:white;
   }
   @media(max-width:600px){
     .ades{
       padding-left:10px;
     }
     .one{
       width:400px;
     } 
     .two{
       margin-left:70px;
     }
     .thr{
       display:none;
     }
     .logdis{
       width:450px;
     }
     .time{
       margin-left:70px;
       margin-right:50px;
     }
     .abc{
       display:none;
     }
   }
  </style>
</head>
<body class="bgimg" onload="Time()">
     <div class="main">
     
            <!-----------Navigation Bar------------->
           
            <nav class="navbar navbar-danger " style="background-color:rgb(71, 129, 236);">
               <a class="navbar-brand logdis" href="admindash.php"><img src="img/logo2.jpg" style="height:55px;width:170px"> </a> 
                <a class="btn btn-outline-light abc" style="margin-left:485px;background-color:blue;border-radius:8px;" href="Logout.php" role="button" >Logout</a>
              </nav>
              <div>
              </div>
              
       <div class="row rowsty" style="margin-top:0px; height:560px;">
            <div class="col-sm-3 sm4style" style="background-color:rgb(71, 129, 236);height:950px;margin-bottom:30px;">
   
              <div class="button_cont"  class="ades">
                   <a class="example_b " style="margin-left:35px;width:240px; padding-left:45px;margin-top:20px;" href="admindash.php" target="_blank" rel="nofollow noopener">Admin DashBoard</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:45px;" href="editadmin.php" target="_blank" rel="nofollow noopener">Edit Admin Data</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:35px;" href="AllPrivate.php" target="_blank" rel="nofollow noopener">All Private Peoples</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:60px;" href="AllCom.php" target="_blank" rel="nofollow noopener">All Companies</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:60px;" href="editprivate.php" target="_blank" rel="nofollow noopener">Edit Private Jobs</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:40px;" href="searchprivate.php" target="_blank" rel="nofollow noopener">Search Private Jobs</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:40px;" href="deleteprivate.php" target="_blank" rel="nofollow noopener">Delete Private Jobs</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:40px;" href="editcompany.php" target="_blank" rel="nofollow noopener">Edit Company Jobs</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:30px;" href="searchcompany.php" target="_blank" rel="nofollow noopener">Search Company Jobs</a>
              </div>
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:30px;" href="deletecompany.php" target="_blank" rel="nofollow noopener">Delete Company Jobs</a>
              </div>
              
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:30px;" href="Addadsform.php" target="_blank" rel="nofollow noopener">Add ads</a>
              </div>
              
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:30px;" href="deleteads.php" target="_blank" rel="nofollow noopener">Delete ads</a>
              </div>
              
              <div class="button_cont"  class="ades">
                   <a class="example_b" style="margin-left:35px;width:240px; padding-left:25px;" href="Displayrating.php" target="_blank" rel="nofollow noopener">Website Rating</a>
              </div>     
      
            </div>

            <div class="col-sm-8 sm4style">
                 <div class="row">
                 <?php
                  $db = mysqli_connect('localhost', 'root', '', 'smajobberoslo');
                   $p=0;
                   $productQuery="SELECT * From postjob";
                   $result1=mysqli_query($db,$productQuery);
                   while($data1=mysqli_fetch_assoc($result1))
                   {
      
                     $p=$data1['job_quantity']+$p;   
                   }
                 ?>    

              &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <div class="col-sm-3 one" style="border:1px solid white;margin-top:38px;margin-right:38px;margin-left:70px;">
                        <h3 style="margin-top:40px;padding-top:10px;padding-left:0px;">Total Private Jobs</h3>
                        <p style="margin-left:35px;padding-bottom:3px;font-weight:bold;font-size:25px;padding-top:10px;padding-left:40px;"><?php echo $p;?></p>
               </div>
               <div class="col-sm-3 one two" style="margin-top:38px;border:1px solid white;">
              <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
               <?php
               $db = mysqli_connect('localhost', 'root', '', 'smajobberoslo');
               $query="SELECT * From postjob";
               $result=mysqli_query($db,$query);
               $check=mysqli_num_rows($result);
               $quan=0;
               $pro=0;
               $productQuery="SELECT * From postjobprivate";
               $result1=mysqli_query($db,$productQuery);
               while($data1=mysqli_fetch_assoc($result1))
               {
  
                 $pro=$data1['job_quantity']+$pro;   
               }
               while($data=mysqli_fetch_assoc($result))
               {     
                    $quan=$data['job_quantity']+$quan;   
               }
               $total=$pro+$quan;
               ?>
                  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
               <h3 style="margin-top:40px;padding-top:10px;padding-left:30px;">Total Company Jobs</h3>
              <p style="margin-left:35px;padding-bottom:10px;font-weight:bold;font-size:25px;padding-top:10px;padding-left:20px;"><?php echo $pro; ?></p>
               </div>
                 
               <div class="col-sm-3 one thr" style="margin-top:38px;margin-left:38px;border:1px solid white;">
                        <h3 style="margin-top:40px;padding-top:10px;padding-left:20px;">Total Jobs</h3>
                        <p style="margin-left:40px;padding-bottom:10px;padding-left:10px;font-weight:bold;font-size:25px;"><?php echo $total ?></p>
               </div>              
                <div class="time">
       <div id="txt">
          
       </div>
     </div>
                   <!---------------slider--------------------->
       <div id="carouselExampleIndicators" class="carousel slide" data-interval="3000" data-ride="carousel" style="margin-left:60px;margin-top:30px;margin-bottom:1px;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slide1.webp" class="d-block logdis" alt="..." width="850px" height="550px">
    </div>
    <div class="carousel-item">
      <img src="img/bg1.jpg" class="d-block logdis" alt="..." width="850px" height="550px">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                 </div>
            </div>
       </div>
       <script>
function Time()
{
  var today=new Date();
  var h=today.getHours();
  var m=today.getMinutes();
  var s=today.getSeconds();
  h=checkTime(h);
  m=checkTime(m);
  s=checkTime(s);
  document.getElementById('txt').innerHTML=h+":"+m+":"+s;
  setTimeout(function(){Time()});
}

function checkTime(num)
{
  if(num<10)
  {
    num="0"+num;
  }
  return num;
} 
</script>
    <script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>