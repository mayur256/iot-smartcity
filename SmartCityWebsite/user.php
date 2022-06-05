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
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Android User Data</h3>
  <div class="card-body">
    <div id="table" class="table-editable">

      <table class="table table-bordered table-responsive-md table-striped text-center">
        <tr>
          <th class="text-center">USER NAME</th>
          <th class="text-center">USER EMAIL-ID</th>
          <th class="text-center">USER PASSWORD</th>
          <th class="text-center">USER PHONE NUMBER</th>
        </tr>
        <?php
        $q1=mysqli_query($con,"select * from auser order by uemail desc");
        while ($r=mysqli_fetch_array($q1)) {
        extract($r);
        ?>
        <tr>
          <td class="pt-3-half" contenteditable="true"><?=$uname?></td>
          <td class="pt-3-half" contenteditable="true"><?=$uemail?></td>
          <td class="pt-3-half" contenteditable="true"><?=$upass?></td>
          <td class="pt-3-half" contenteditable="true"><?=$uphone?></td>
        </tr>
        <?php
      }
      ?>
      </table>
    </div>
  </div>
</div>

</div>
</center>
</div>


<?php include("footer.php");?>
</body>
</html>