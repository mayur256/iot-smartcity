<?php
error_reporting("null");
$con=mysqli_connect("localhost","root","","smart_city");
$a=$_GET["gas"];
$b=$_GET["tem"];
$c=$_GET["hum"];

$e="Shivaji Nagar";
$d=date("d/m/Y \-\t g.i a", time()+12600);

mysqli_query($con,"insert into gas_sensor(gdata,garea,gtime) values('$a','$e','$d')");
mysqli_query($con,"insert into temphum(temp,hum,tharea,thtime) values('$b','$c','$e','$d')"); 
?>