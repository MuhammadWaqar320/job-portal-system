
<?php

include 'connection.php';
if (isset($_POST['submit']))
{
   $username = mysqli_real_escape_string($db, $_POST['ComName']);
 $password = mysqli_real_escape_string($db, $_POST['password']);
  $Id= mysqli_real_escape_string($db, $_POST['id']);
 // first check the database to make sure 
 // a user does not already exist with the same username and/or email
 
 $user_check_query = "SELECT * FROM employee WHERE Emp_name='$username' AND Emp_password='$password'";
 $user_check_query = "SELECT * FROM employee WHERE Emp_name='$username' AND Emp_password='$password'";
 $result = mysqli_query($db, $user_check_query);
 $row= mysqli_fetch_assoc($result);
 if(mysqli_num_rows($result)>0)
 {
    $applyid=0;
    $apply="SELECT * From applynow";
    $result23=mysqli_query($db,$apply);
    while($data1=mysqli_fetch_assoc($result23))
    {
      $applyid++;
        
    }
    $applyid=$applyid+1;
   $user_check_query1 = "SELECT Id FROM employee WHERE Emp_name='$username' AND Emp_password='$password'";
   $result1 = mysqli_query($db, $user_check_query1);
   $row= mysqli_fetch_assoc($result1);
   $empId=$row['Id'];
   echo $empId;
   echo $Id;
   $query = "INSERT INTO applynow(id,job_name,emp_id) VALUES('$applyid','$Id','$empId')";
  mysqli_query($db, $query);
  echo "<script>window.alert('Successfully you apllied for this job')
  window.location ='index.php';
  </script>"; 
 }
 else
 {
  echo "<script>window.alert('Sorry username or password is incorrect')
  window.location ='index.php';
  </script>"; 
 }
}
?>