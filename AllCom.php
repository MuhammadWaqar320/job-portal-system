<?php
  //  include_once("dbcon.php");
  //  session_start();
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
</head>
<body style="background-color:skyblue">

            <!-----------Navigation Bar------------->
            <nav class="navbar navbar-danger " style="background-color:rgb(39, 171, 211)">
                <a class="btn btn-outline-light" style="background-color:blue;border-radius:8px; margin-left:500px;" href="Logout.php" role="button" >Logout</a>
                <a class="btn btn-outline-light" style="background-color:blue;border-radius:8px;margin-right:550px;" href="admindash.php" role="button" >Backward</a>
                </form>
              </nav>

            <table align="center" style="margin-top:10px;width:80%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Company Name</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Email</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Password</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Image</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Dept Number</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Zip Code</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Country</th>
            </tr>
                  <?php
                        include('connection.php');
                        // $db=mysqli_connect('localhost','root','','smajobberoslo');
                        $qry="select * from companylogin";
                        $run=mysqli_query($db,$qry);
                        if(mysqli_num_rows($run)<1){
                            echo "<tr><td colspan='8' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No Company Found<td></tr>";
                        }
                        else{
                            while($data=mysqli_fetch_assoc($run)){
                              ?>
                              <tr>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['Id']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['Company_name']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['Email']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['password']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo '<img height="100px" width="100px"style="border-radius:100px;" src="data:;base64,'.base64_encode($data['img']).'">' ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['deptno']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['zip']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['country']; ?></td>
                              </tr>
                              <?php
                            }
                        }

        

                  ?>
            </table>
</body>
</html>