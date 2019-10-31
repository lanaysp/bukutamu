<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:adminpage.php'); }
   require_once("koneksi.php");
include 'navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <title>Form Login</title>
</head>
   <body>

<div class="container mt-5">
   <div class="col-md-6 offset-md-3">
      <div class="card ">
        <div class="card-header">
          Login Admin
        </div>
        <div class="card-body">
              <form action="loginaccess.php" method="POST">
     <div class="form-group">
       <label for="username">Username</label>
       <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Username">
     </div>
     <div class="form-group">
       <label for="password">Password</label>
       <input type="password" name="password" class="form-control" id="password" placeholder="Password">
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
        </div>
      </div>
   </div>
</div>


   <script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   </body>
   </html>
