<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
    
    .milestones
{
  background: url("milestones.jpg");
  width: 100%;
  padding-top: 25px;
  padding-bottom: 25px;
  height:250px;
}

@media(max-width: 1500px) {
    .milestones{
    height:620px;
    margin-top:0px;
    }
}
@media(max-width: 1500px) {
    .milestone_icon{
    display:none;
    }
}
.milestones_container
{
  margin-top: 0px;
}
.milestone
{
  width: 100%;
}
.milestone_icon
{
  display: inline-block;
  height: 81px;
  width: 81px;
}
.milestone_icon img
{
  max-width: 100%;
}
.milestone_counter
{
  font-size: 48px;
  font-weight: 500;
  color: #FFFFFF;
  line-height: 0.75;
  margin-top: 37px;
}
.milestone_text
{
  font-size: 18px;
  font-weight: 500;
  color: #FFFFFF;
  margin-top: 21px;
  line-height: 0.75;
}

  </style>
</head>
<body>
<!-- div style="background-color:white;height:auto;margin-left: 20%;margin-right: 20%;padding:20px;border-left:1px solid silver;border-right:1px solid silver;"> -->


	
  <div class="milestones">

    <div  class="container-fluid">
      <div class="row milestones_container">
              
        <!-- Milestone -->
  
        <div class="col-lg-4 milestone_col">
          <div class="milestone text-center">
            <div class="milestone_icon"><img src="milestone_1.svg" alt=""></div>
            <div class="milestone_counter count">  <?php
              $total_job=0;
              $job="SELECT * From postjob";
              $result1=mysqli_query($db,$job);
              while($data1=mysqli_fetch_assoc($result1))
              {
                $total_job++;
                  
              }
          echo $total_job ?></div>
            <div class="milestone_text">Available Jobs</div>
          </div>
        </div>


        <!-- Milestone -->
        <div class="col-lg-4 milestone_col">
          <div class="milestone text-center">
            <div class="milestone_icon"><img src="milestone_2.svg" alt=""></div>
            <div class="milestone_counter count"><?php
              $total_company=0;
              $company="SELECT * From companylogin";
              $result2=mysqli_query($db,$company);
              while($data1=mysqli_fetch_assoc($result2))
              {
                $total_company++;
                  
              }
          echo $total_company ?></div>
            <div class="milestone_text">Registered Companies</div>
          </div>
        </div>

        <!-- Milestone -->
        <div class="col-lg-4 milestone_col">
          <div class="milestone text-center">
            <div class="milestone_icon"><img src="milestone_3.svg" alt=""></div>
            <div class="milestone_counter count"> <?php
              $total_job=0;
              $job="SELECT * From postjob";
              $result1=mysqli_query($db,$job);
              while($data1=mysqli_fetch_assoc($result1))
              {
                $total_job++;
                  
              }
          echo $total_job ?></div>
            <div class="milestone_text">Registered Candidate</div>
          </div>
        </div>
        <!-- Milestone -->
       

      </div>
    </div>
  </div>

<!-- jquery code for counter -->
<script type="text/javascript">
  

$('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});

</script>


</body>
</html>