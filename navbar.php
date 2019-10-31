<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Buku Tamu</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ">

         <?php
         if(!isset($_SESSION['username'])) {
           echo '<a class="nav-item nav-link" href="login.php">login</a>';
         } else {
           echo '<a class="nav-item nav-link" href="adminpage.php">Data Tamu</a>';
           echo '<a class="nav-item nav-link" href="printbukutamu.php">Laporan</a>';
           echo '<a class="nav-item nav-link" href="logout.php">logout</a>';
         }
            ?>
      </div>
  </nav>
</body>
</html>
