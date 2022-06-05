<!DOCTYPE html>
<html>
<head>
    <?php include("head.php");?>
</head>
<body>
<?php
if(isset($_POST['login']))
{
    extract($_POST);
    if($txtemail=="admin@gmail.com" && $txtpass=="admin" )
    {
        $_SESSION["email"]=$txtemail;
        header("location:index1.php");
    }
    else
    {
        echo "Invalid credentials";
    }
}
?>
<center>
<div class="card"style="width: 30%;">

<h5 class="card-header info-color white-text text-center py-4">
    <strong>Log in</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form method="post" class="text-center" style="color: #757575;"><br><br>
        <div class="md-form mt-0">
            <input type="email" id="materialRegisterFormEmail" class="form-control" name="txtemail">
        </div>        <!-- Password -->
        <div class="md-form">
            <input type="password" id="materialRegisterFormPassword" class="form-control" name="txtpass" aria-describedby="materialRegisterFormPasswordHelpBlock">
        </div>
        <!-- Sign up button -->
<input class="btn btn-outline-red" type="submit" name="login" value="Log in">


    </form>
    <!-- Form -->

</div>

</div>
</center>
</body>

</html>
