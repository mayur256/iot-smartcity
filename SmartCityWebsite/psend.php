<?php
$con=mysqli_connect("localhost","root","","smart_city");

$sql = "select * from parking";
$result = $con->query($sql);
if ($result->num_rows >0) {
 while($row[] = $result->fetch_assoc()) {
 $tem = $row;
 $json = json_encode($tem);
 }
} else {
 echo "No Results Found.";
}
 echo $json;
$con->close();
?>