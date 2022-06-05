<?php
$con=mysqli_connect("localhost","root","","smart_city");
$email=$_GET["email"];
$pass=$_GET["pass"];
$q1=mysqli_query($con,"select * from auser where uemail='$email' and upass='$pass'");
if(mysqli_num_rows($q1)>0)
{
	echo "1";
}
else
{
	echo "0";
}
?>