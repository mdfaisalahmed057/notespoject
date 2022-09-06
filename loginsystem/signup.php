<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $showerror=false;
  $showalert=false;
include 'partial/_dbconnect.php';
$username=$_POST["username"];
$password=$_POST["password"];#refrencing from the form for="username"
$cpassword=$_POST["cpassword"];

if(($password==$cpassword) && $exists=false){
$sql="INSERT INTO `users` (`sno`, `$username`, `$password`, `dt`) 
VALUES ('2', '$username', '$password', current_timestamp())";
$result=mysqli_query($conn,$sql);
if($result){
  $showalert=true;
}
else{
$showerror="password do not match";
}
}
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>signup php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php require 'partial/_nav.php'?>
    <div class="container">
        <h1 class="text-center">Sign up </h1>

        <?php 
        if($showalert){
         echo' 
         <div class="alert alert-success" role="alert">
         A simple success alert—check it out!
       </div>';
        }
        ?>
         <?php 
        if($showerror){
         echo' 
         <div class="alert alert-success" role="alert">
         '.$showerror.'
       </div>';
        }
        ?>


     
        <form action="/loginsystem/signup.php" method="POST">
  <div class="">
    <label for="username" class="form-label">username</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="cpassword" name="password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>
  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>