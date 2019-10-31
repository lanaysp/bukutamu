<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="assets/css/bootstrap.min.css">
 <title>Form Buku Tamu</title>
</head>
   <body>
<?php include 'navbar.php' ?>

<div class="row col-md-12 mt-4">
<div class="container col-md-5">
   <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
          Form Buku Tamu
        </div>
        <div class="card-body">
              <form action="act-tambah.php" method="post">
     <div class="form-group">
       <label for="instansi">Nama Instansi</label>
       <input type="text" class="form-control" id="instansi" name="instansi" aria- placeholder="Enter Nama Instansi" autofocus>
     </div>
     <div class="form-group">
       <label for="kepada">Kepada</label>
       <input type="text" class="form-control" id="kepada" name="kepada" aria- placeholder="Enter Surat Kepada">
     </div>
     
        <div class="form-group ">
         <label for="nama">Nama</label>
         <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama Pengirim">
       </div>
       <div class="form-group">
         <label for="tlp">No Telepon</label>
         <input type="tlp" class="form-control" id="tlp" name="tlp" placeholder="Enter No Telepon">


     </div>
     <div class="form-group">
       <label for="pesan">Pesan</label>
       <textarea name="pesan" id="pesan" class="form-control" row="3" placeholder="Masukan Pesan"></textarea>
     </div>
     <button type="submit" class="btn btn-primary col-12">Send</button>
   </form>
        </div>
      </div>
   </div>
</div>
<!-- tabel -->
<div class="container col-md-7">
   <div class="col-md-12">
      <div class="card ">
        <div class="card-header">
         Daftar Data Tamu
        </div>
        <?php
        $query_mysql = mysqli_query($host,"SELECT * FROM user ")or die(mysql_error());
        while($data = mysqli_fetch_array($query_mysql)){ ?>
        <div class="card-body">
         <?php } ?>
     <table id="tamu" class="table table-striped table-bordered table-hover table-responsive" >
        <thead >
           <tr>
             <th>No</th>
             <th>Nama Instansi</th>
             <th>Kepada</th>
             <th>Nama</th>
             <th>No Telepon</th>
             <th>Pesan</th>
             <th>Tanggal Kirim</th>
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
          </tr>
      <?php } ?>
        </tbody>
     </table>

        </div>
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
