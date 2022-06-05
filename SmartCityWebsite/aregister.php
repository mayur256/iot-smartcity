<?php
$con=mysqli_connect("localhost","root","","smart_city");
$name=$_GET["name"];
$pass=$_GET["pass"];
$email=$_GET["email"];
$phone=$_GET["phone"];

$q=mysqli_query($con,"insert into auser(uname,upass,uemail,uphone)Values('$name','$pass','$email','$phone')");
if($q==1)
{
	echo "1";
}
else
{
	echo "0";
}
?>