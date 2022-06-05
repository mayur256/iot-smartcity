<!DOCTYPE html>
<html>
<head>
	<title>Smart City</title>
<style type="text/css">
  .pt-3-half {
padding-top: 1.4rem;
}
</style>
</head>
<?php include("head.php");?>

<body>
<?php include("header.php");?>
<?php include("menu.php");?>

<div class="card text-center">
<center>
<div class="card-body" style="width: 95%;">

<!-- Editable table -->
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Pollution</h3>
  <div class="card-body">
    <div id="table" class="table-editable">

      <table class="table table-bordered table-responsive-md table-striped text-center">
        <tr>
          <th class="text-center">Area Name</th>
          <th class="text-center">Date </th>
          <th class="text-center">Time</th>
          <th class="text-center">Pollution Level</th>
        </tr>
        <?php
        $q1=mysqli_query($con,"select * from gas_sensor order by gid desc");
        while ($r=mysqli_fetch_array($q1)) {
        extract($r);
        $a=explode('-',$gtime);
        ?>
        <tr>
          <td class="pt-3-half" contenteditable="true"><?=$garea?></td>
          <td class="pt-3-half" contenteditable="true"><?=$a[0]?></td>
          <td class="pt-3-half" contenteditable="true"><?=$a[1]?></td>
          <td class="pt-3-half" contenteditable="true"><?=$gdata?>&nbsp;ppm</td>
        </tr>
        <?php
      }
      ?>
      </table>
    </div>
  </div>
</div>
<!-- Editable table -->


</div>
</center>
</div>


<?php include("footer.php");?>
</body>
</html>