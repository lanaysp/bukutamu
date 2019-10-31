<?php include "koneksi.php"; ?>
<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php');
} else {
   $username = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">


<link rel="stylesheet" href="assets/datatabel.min.css" />
 <title>Admin</title>
</head>
   <body>
<?php include 'navbar.php' ?>

<div class="container mt-3">
   <div class="col-md-12 ">
      <div class="card ">
        <div class="card-header">
          Tabel Data Tamu
        </div>
        <?php
        $query_mysql = mysqli_query($host,"SELECT * FROM user ")or die(mysql_error());
        while($data = mysqli_fetch_array($query_mysql)){ ?>
        <div class="card-body">
      <h5>Hallo <?= $data['nama_petugas'];  ?> </h5>
         <?php } ?>
     <table id="tamu" class="table table-striped table-bordered table-hover" >
        <thead >
           <tr>
             <th>No</th>
             <th>Nama Instansi</th>
             <th>Kepada</th>
             <th>Nama</th>
             <th>No Telepon</th>
             <th>Pesan</th>
             <th>Tanggal Kirim</th>
             <th>Aksi</th>
           </tr>
        </thead>
        <tbody>
           <?php
           $nomor = 1;
           $query_mysql = mysqli_query($host,"SELECT * FROM tamu")or die(mysql_error());
           while($data = mysqli_fetch_array($query_mysql)){
           ?>
           <tr>
           <td><?= $nomor++; ?></td>
           <td><?= $data['instansi']; ?></td>
           <td><?= $data['kepada']; ?></td>
           <td><?= $data['nama']; ?></td>
           <td><?= $data['tlp']; ?></td>
           <td><?= $data['pesan']; ?></td>
           <td><?= $data['date_created']; ?></td>
           <td>
              <a class="edit badge badge-warning" href="edit.php?id_tamu=<?= $data['id_tamu']; ?>">Edit</a>
              <a class="hapus badge badge-danger" href="hapus.php?id_tamu=<?= $data['id_tamu']; ?>" onclick="return confirm('Yakin?');">Hapus</a>
           </td>
          </tr>
      <?php } ?>
        </tbody>
     </table>

        </div>
      </div>
   </div>
</div>


   <script src="assets/js/jquery-3.3.1.slim.min.js" ></script>
   <script src="assets/js/popper.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>

   <script src="assets/js/jquery.min.js"></script>
   <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
   <script>
    $(document).ready(function(){
        $('#tamu').DataTable();
    });
</script>

   </body>
   </html>
