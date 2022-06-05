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
   header("Refresh: 10; URL=$url");
  ?>
<meta http-equiv="refresh" content="10">
</head>
<?php include("head.php");?>
<body onload=”javascript:setTimeout(“location.reload(true);”,100);”>
<?php include("header.php");?>
<?php include("menu.php");?>
<div class="card">
<center>  
<div class="card-body" style="width: 100%;">
<div class="card text-center">

  <div class="card-body" style="width: 100%;">

<section class="text-center">
    <div class="row">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card testimonial-card">
                <div class="avatar mx-auto">
                  <div class="card">

                    <div class="card-body" style="width: 100%;">
                      <p>Gangapur Road 2</p>
                    </div>
                  </div>

                  <center>
                  <div class="card-body" style="width: 90%;">
                  <?php
                  $q1=mysqli_query($con,"select * from noparking where nid=2");
                  while ($r=mysqli_fetch_array($q1)) {
                    extract($r);
                    if($nstatus=='1')
                    {

                    ?>
                    <?php
$fields = array(
    "sender_id" => "FSTSMS",
    "message" => "A Vehicle is illegally parked at Gangapur Road",
    "language" => "english",
    "route" => "p",
    "numbers" => "9284437311",
    "flash" => "1"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($fields),
  CURLOPT_HTTPHEADER => array(
    "authorization:8Q2awq4BjNK3rWHdGEILhinbFUtvzXgRYk9xc0eA7ODuJfmC65BNzvpb0k6IoDLOMfxlPV4EACnGcSwh",
    "accept: */*",
    "cache-control: no-cache",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
                   ?>
                      <img class="img-circle" src="img/back/xs.jpg" style="height: 390px;width: 90%;">
                    <?php
                    }
                    else
                    {
                      ?>
                      <img class="img-circle" src="img/back/abcd.jpg" style="height: 390px;width: 90%;">

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
</div>
  </div>
</div>
</center>

<?php include("footer.php");?>
</body>
</html>