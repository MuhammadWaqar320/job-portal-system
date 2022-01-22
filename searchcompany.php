
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

            <!-----------Navigation Bar------------->
            <nav class="navbar navbar-danger " style="background-color:rgb(71, 129, 236);">
             <form class="form-inline" style="margin-top:0px;" method="post" action="searchcompany.php">
               <a class="navbar-brand" href="admindash.php"><img src="img/logo2.jpg" style="height:70px;width:170px"> </a>
               <input class="form-control mr-sm-2 Hinput" style="width:500px;" type="search" placeholder="Search Private Jobs By Title" aria-label="Search" name="pname">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit" style="background-color:blue;border-radius:8px;" name="submit">Search</button> 
                <a class="btn btn-outline-light" style="margin-left:10px;background-color:blue;border-radius:8px;" href="Logout.php" role="button" >Logout</a>
                </form>
              </nav>
            <table align="center" style="margin-top:10px;width:80%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Name</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Job Category</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Job Description</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Job Quantity</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Dept</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Image</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">SelectType</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:yellow;color:black">Title</th>
            </tr>
                  <?php
                      if(isset($_POST['submit'])){
                        include('connection.php');
                        $date=$_POST['pname'];
                        $qry="select * from postjob where title='$date'";
                        $run=mysqli_query($db,$qry);
                        if(mysqli_num_rows($run)<1){
                            echo "<tr><td colspan='9' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No Job Found<td></tr>";
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
                                
                              </tr>
                              <?php
                            }
                        }

                      }

                  ?>
            </table>
</body>
</html>