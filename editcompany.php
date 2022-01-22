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
</head>
<body style="background:skyblue">

    <nav class="navbar navbar-danger " style="background-color:rgb(39, 171, 211)">
             <form class="form-inline" style="margin-top:0px;" method="post" action="Update.php">
                <a class="btn btn-outline-light" style="margin-left:680px;background-color:blue;border-radius:8px;margin-left:550px;" href="Logout.php" role="button" >Logout</a>
                <a class="btn btn-outline-light" style="margin-left:680px;background-color:blue;border-radius:8px;margin-left:10px;" href="admindash.php" role="button" >Backward</a>
                </form>
              </nav>
            <table align="center" style="margin-top:10px;width:80%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblu;">Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Name</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Job Category</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Job Description</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Job Quantity</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Job Dept</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Image</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Job Type</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Job Title</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;">Edit</th>
            </tr>
                  <?php
                        include('connection.php');
                        $qry="select * from postjob";
                        $run=mysqli_query($db,$qry);
                        if(mysqli_num_rows($run)<1){
                              echo "<tr><td colspan='9' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No Record Found<td></tr>";
                        
                        }
                        else{
                            while($data=mysqli_fetch_assoc($run)){
                              ?>
                              <tr>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['Id']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['Company_name']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['job_category']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['job_description']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['job_quantity']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['dept']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo '<img height="100px" width="100px"style="border-radius:100px;" src="data:;base64,'.base64_encode($data['img']).'">' ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['selecttype']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['title']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><a href="editcomform.php?pid=<?php echo $data['Id']?>">Edit</a></td>
                              </tr>
                              <?php
                            }
                        }

                      

                  ?>
            </table>
</body>
</html>