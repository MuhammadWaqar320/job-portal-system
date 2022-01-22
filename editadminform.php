<?php
   include_once("connection.php");
   session_start();
  //  if($_SESSION['uid'])
  //  {

  //  }
  //  else{
  //      header('location: ../Login.php');
  //  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="Registration.css">
  <link rel="stylesheet" type="text/css" href="cssExternal.csss">
	<link rel="stylesheet" type="text/css" href="dashstyle.css">
 	<!-- Fav icon -->
   <link rel="shortcut icon" type="text/css" href="bgImage/logoH.jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  .pro
  {
    border:1px solid black;
    width:260px;
    padding-left:10px;
    border-radius:5px;
    height:35px;
  }
  .send
  {
    width:120px;
    border:1px solid black;
    border-radius:5px;
    height:35px;
    margin-left:70px;
    background-color:black;
    color:white;
  }
  .send:hover
  {
    background-color:yellow;
    color:black;
  }
  </style>
</head>

<body class="Regis" style="background-color:skyblue;">


            <!-----------Navigation Bar------------->
            <nav class="navbar navbar-danger " style="background-color:rgb(39, 171, 211)">
             <form class="form-inline" style="margin-top:15px;">
                <a class="btn btn-outline-light" style="background-color:blue;border-radius:8px;margin-left:500px;" href="Logout.php" role="button" >Logout</a>
                <a class="btn btn-outline-light" style="background-color:blue;border-radius:8px;margin-left:10px;" href="editadmin.php" role="button" >Backward</a>
                </form>
              </nav>
              
<?php
        include('connection.php');
        $pid=$_GET['pid'];
        $sql="SELECT * FROM admin WHERE Id='$pid'";
        $run=mysqli_query($db,$sql);
        $data=mysqli_fetch_assoc($run);
?>
             <!--------------Form------------>
             <center>      <div style="background-color:white;width:300px;height:460px;margin-top:30px;border-radius:8px;border:1px solid white">
              <div>
                <h2 style="background-color:black;height:68px;border-radius:8px;color:white;padding-top:15px;">Update Prodcut</h2>
              </div>
             <form method="post" action="editadmindata.php" enctype="multipart/form-data">
                  <h4>Id</h4>
                  <input type="text" name="pname" class="pro" value=<?php echo $data['Id']; ?>>
                  <h4>Name</h4>
                  <input type="text" name="pprice" class="pro" value=<?php echo $data['admin_name']; ?>>
                  <h4>Job Description</h4>
                  <input type="text" name="pcategory" class="pro" value=<?php echo $data['admin_password']; ?>>
                  <input type="hidden" name="pid" value="<?php echo $data['Id']; ?>">
        
                  <br><br>
                <input style="margin-right:50px;" type="submit" name="submit" value="submit" class="send">
             </form>     
             </div></center>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>