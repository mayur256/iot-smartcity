<?php
error_reporting("null");

$con=mysqli_connect("localhost","root","","smart_city");
$r=$_GET["so"];

$a=$_GET['p1'];
$c=$_GET['p2'];
$e=$_GET['p3'];

$y=$_GET['np'];


$s="Shivaji Nagar";
$t="Tree1";
$u=date("d/m/Y \-\t g.i a", time()+12600);

mysqli_query($con,"insert into soil(sdata,sarea,stno,sdate) values('$r','$s','$t','$u')");

mysqli_query($con,"update parking set pstatus=$a where pid='1'");
mysqli_query($con,"update parking set pstatus=$c where pid='2'");
mysqli_query($con,"update parking set pstatus=$e where pid='3'");

mysqli_query($con,"update noparking set nstatus=$y where nid='2'");
?>