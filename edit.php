<?php include "koneksi.php"; ?>
<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['username'];
}
?>
<?php include 'navbar.php' ?>
<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <title>Form Edit</title>
</head>
   <body>
      <?php
      $id_tamu = $_GET['id_tamu'];
      $query_mysql = mysqli_query($host,"SELECT * FROM tamu WHERE id_tamu='$id_tamu'")or die(mysql_error());
      while($data = mysqli_fetch_array($query_mysql)){
      ?>


<div class="container mt-3">
   <div class="col-md-6 offset-md-3">
      <div class="card ">
        <div class="card-header">
          Form Buku Tamu
        </div>
        <div class="card-body">
     <form action="act-edit.php" method="post">
     <div class="form-group">
       <label for="instansi">Nama Instansi</label>
       <input type="text" class="form-control" id="instansi" name="instansi" value="<?php echo $data['instansi'] ?>">
     </div>
     <div class="form-group">
       <label for="kepada">Kepada</label>
       <input type="text" class="form-control" id="kepada" name="kepada"  value="<?php echo $data['kepada'] ?>">
     </div>
     <div class="row">
        <div class="form-group col-md-6">
         <label for="nama">Nama</label>
         <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $data['nama'] ?>">
       </div>
       <div class="form-group col-md-6">
         <label for="tlp">No Telepon</label>
         <input type="tlp" class="form-control" id="tlp" name="tlp" value="<?php echo $data['tlp'] ?>">
       </div>

     </div>
     <div class="form-group">
       <label for="pesan">Pesan</label>
       <textarea name="pesan" id="pesan" class="form-control" row="3"><?php echo $data['pesan'] ?></textarea>
     </div>
     <div class="form-group">
     <input type="hidden" class="form-control" name="id_tamu" value="<?php echo $data['id_tamu'] ?>">
     </div>
     <button type="submit" class="btn btn-primary col-12">Send</button>
   </form>
        </div>
      </div>
   </div>
</div>
<?php } ?>

   <script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   </body>
   </html>
<?php include 'footer.php'; ?>
