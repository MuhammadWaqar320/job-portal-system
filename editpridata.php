<?php
   
   include('connection.php');
   $id=$_POST['pname'];
   $name=$_POST['pprice'];
   $pid=$_POST['pid'];
   $pass=$_POST['pcategory'];
   $qry="UPDATE `postjobprivate` SET `Id` = '$id', `Company_name` = '$name', `job_description` = '$pass' WHERE  `Id` = '$pid'";
   $run=mysqli_query($db,$qry)
   ;
   if($run==true){
       ?>
       <script>
       window.alert("Record Updated Successfully!!");
            </script>
            
            <?php

            header('location: admindash.php');
            ?>
             <script>
        //    window.open('updateform.php?pid=<?php 
        // //    echo $pid;
        //    ?>','_self');
       </script>
<?php
   }
?>