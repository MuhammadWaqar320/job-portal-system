
<!DOCTYPE html>
<html>
<head>

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
            <table align="center" style="margin-top:10px;width:80%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:blue;color:white">Job Title</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:blue;color:white">Job Category</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:blue;color:white">Job Quantiy</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:blue;color:white">Field</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:blue;color:white">Apply Now</th>
            
            </tr>
                  <?php
                      if(isset($_POST['submit'])){
                        include('connection.php');
                        $date=$_POST['job'];
                        $qry="select * from postjob where title='$date'";
                        $run=mysqli_query($db,$qry);
                        if(mysqli_num_rows($run)<1){
                            echo "<tr><td colspan='6' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No Job Found<td></tr>";
                        }
                        else{
                            while($data=mysqli_fetch_assoc($run)){
                              ?>
                              <tr>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['title']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['job_category']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['job_quantity']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['dept']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"> <a href="LoginCandidate.php?title=<?php echo $data['title']?>">apply</a> </td>
                              </tr>
                              <?php
                            }
                        }

                      }

                  ?>
            </table>
</body>
</html>