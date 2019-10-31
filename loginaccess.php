<?php
   session_start();
   require_once("koneksi.php");
   $username = $_POST['username'];
   $pass = md5($_POST['password']);
   $cekuser = mysqli_query($host,"SELECT * FROM user WHERE username = '$username'");
   $hasil = mysqli_fetch_array($cekuser);
   if(mysqli_num_rows($cekuser) == 0) {
     echo "<div align='center'>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil ['password']) {
       echo "<div align='center'>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:adminpage.php');
     }
   }
?>
