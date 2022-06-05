<!DOCTYPE html>
<html>
<head>
  <style type="text/css">
        .img-circle {
        border-radius: 100%;
    }
  </style>
	<title>Smart City</title>
  <?php
   $url=$_SERVER['REQUEST_URI'];
   header("Refresh: 2.5; URL=$url");
  ?>
<meta http-equiv="refresh" content="5">
</head>
<?php include("head.php");?>
<body onload=”javascript:setTimeout(“location.reload(true);”,100);”>
<?php include("header.php");?>
<?php include("menu.php");?>
<div class="card">
<center>  
<div class="card-body" style="width: 100%;">
<div class="card text-center">

  <center>
  <div class="card-body" style="width: 100%;">
<section class="text-center">
    <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card testimonial-card">
                <div class="avatar mx-auto">
                  <div class="card">

                    <div class="card-body" style="width: 100%;">
                      <p>Parking Slot 1</p>
                    </div>
                  </div>

                  <center>
                  <div class="card-body" style="width: 90%;">
                  <?php
                  $q1=mysqli_query($con,"select * from parking where pid=1");
                  while ($r=mysqli_fetch_array($q1)) {
                    extract($r);
                    if($pstatus=='1')
                    {
                    ?>
                      <img class="img-circle" src="img/back/xs.jpg" style="height: 390px;width: 90%;">

                    <?php
                    }
                    else
                    {
                      ?>
                      <img class="img-circle" src="img/back/as.jpg" style="height: 390px;width: 90%;">

                      <?php
                    }

                    }
                    ?> 
                    </div>
                  </center> 

                </div>
           </div>
        </div>



        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card testimonial-card">
                <div class="avatar mx-auto">
                  <div class="card">

                    <div class="card-body" style="width: 100%;">
                      <p>Parking Slot 2</p>
                    </div>
                  </div>

                  <center>
                  <div class="card-body" style="width: 90%;">
                  <?php
                  $q1=mysqli_query($con,"select * from parking where pid=2");
                  while ($r=mysqli_fetch_array($q1)) {
                    extract($r);
                    if($pstatus=='1')
                    {
                    ?>
                      <img class="img-circle" src="img/back/xs.jpg" style="height: 390px;width: 90%;">

                    <?php
                    }
                    else
                    {
                      ?>
                      <img class="img-circle" src="img/back/as.jpg" style="height: 390px;width: 90%;">

                      <?php
                    }

                    }
                    ?> 
                    </div>
                  </center> 

                </div>
           </div>
        </div>


        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card testimonial-card">
                <div class="avatar mx-auto">
                  <div class="card">

                    <div class="card-body" style="width: 100%;">
                      <p>Parking Slot 3</p>
                    </div>
                  </div>

                  <center>
                  <div class="card-body" style="width: 90%;">
                  <?php
                  $q1=mysqli_query($con,"select * from parking where pid=3");
                  while ($r=mysqli_fetch_array($q1)) {
                    extract($r);
                    if($pstatus=='1')
                    {
                    ?>
                      <img class="img-circle" src="img/back/xs.jpg" style="height: 390px;width: 90%;">

                    <?php
                    }
                    else
                    {
                      ?>
                      <img class="img-circle" src="img/back/as.jpg" style="height: 390px;width: 90%;">

                      <?php
                    }

                    }
                    ?> 
                    </div>
                  </center> 

                </div>
           </div>
        </div>


    </div>
</section>

  </div>
</center>
</div>






  </div>
</div>
</center>


<?php include("footer.php");?>
</body>
</html>