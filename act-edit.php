<?php

include 'koneksi.php';
$id_tamu = $_POST['id_tamu'];
$instansi = $_POST['instansi'];
$kepada = $_POST['kepada'];
$nama = $_POST['nama'];
$tlp = $_POST['tlp'];
$pesan = $_POST['pesan'];


mysqli_query($host,"UPDATE tamu SET instansi='$instansi', kepada='$kepada', nama='$nama', tlp='$tlp', pesan='$pesan' WHERE id_tamu='$id_tamu'");

header("location:adminpage.php");
?>
