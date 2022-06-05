<?php
if(isset($_POST['index1']))
{
  header("location:index1.php");
}
if(isset($_POST['pollution']))
{
  header("location:pollution.php");
}
if(isset($_POST['humidity']))
{
  header("location:hum.php");
}
if(isset($_POST['temp']))
{
  header("location:temp.php");
}
if(isset($_POST['traffic']))
{
  header("location:traffic.php");
}
if(isset($_POST['soil']))
{
  header("location:soil.php");
}
if(isset($_POST['parking']))
{
  header("location:parking.php");
}
if(isset($_POST['userd']))
{
  header("location:user.php");
}
if(isset($_POST['Logout']))
{
  header("location:logout.php");
}
?>

<nav class="navbar navbar-dark cyan darken-3">
  <center>
  <form method="post" class="form-inline">
  	<input type="submit" class="btn morpheus-den-gradient btn-lg" value="Home" name="index1">
    <input type="submit" class="btn morpheus-den-gradient btn-lg" value="Pollution" name="pollution">
    <input type="submit" class="btn morpheus-den-gradient btn-lg" value="Humidity" name="humidity">
    <input type="submit" class="btn morpheus-den-gradient btn-lg" value="Traffic"name="traffic">
    <input type="submit" class="btn morpheus-den-gradient btn-lg" value="Soil" name="soil">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <h1 style="font-size:90px;font-family:Times New Roman;font-style:bold;"><strong><font color="red">Smart City</font></strong></h1>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" class="btn morpheus-den-gradient btn-lg" value="Temperature" name="temp">

    <input type="submit" class="btn morpheus-den-gradient btn-lg" value="Parking" name="parking">
    <input type="submit" class="btn morpheus-den-gradient btn-lg" value="Users" name="userd">
        <input type="submit" class="btn morpheus-den-gradient btn-lg" value="Logout" name="Logout">
  </form>
</center>
</nav>