
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
<body style="background:rgb(71, 129, 236);">

            <!-----------Navigation Bar------------->
            <table align="center" style="margin-top:10px;width:80%;">
            <tr>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;color:black">Id</th>
            <th style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;color:black">Star</th>
            
            </tr>
<?php
                        include('connection.php');
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
                  <?php
                        include('connection.php');
                        $qry="select * from rate";
                        $run=mysqli_query($db,$qry);
                        if(mysqli_num_rows($run)<1){
                            echo "<tr><td colspan='2' style='border:1px solid black;padding:10px;text-align:center;background-color:skyblue;'>No Job Found<td></tr>";
                        }
                        else{
                            while($data=mysqli_fetch_assoc($run)){
                              ?>
                              <tr>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['id']; ?></td>
                                 <td style="border:1px solid black;padding:10px;text-align:center;background-color:skyblue;"><?php echo $data['star']; ?></td>
                              </tr>
                              <?php
                            }
                   ?>         
                            <h3 style="text-align:center;margin-top:10px">Rating :  <?php  if($total>4)
                            {
                              $total=4;
                            }  echo
                            
                            round($total,1); ?></h3>
              <?php
                        }


                  ?>
            </table>
</body>
</html>