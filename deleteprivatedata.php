<?php
   
   include('connection.php');
   $pid=$_GET['pid'];
   $qry="DELETE FROM `postjobprivate` WHERE  `Id`='$pid'";
   $run=mysqli_query($db,$qry);
   if($run==true){
       ?>
       <script>
           <?php

            header('location: admindash.php');
            ?>
        //    window.open('delete.php?pid=<?php 
        // echo $pid;
        ?>','_self');
       </script>
<?php
   }
?>