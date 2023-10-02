<!DOCTYPE html>
<html>
<head>
<title> Halaman admin- www.malasngoding.com</title>
</head>
<body>
<?php 
session_start();
//cek apakah yg mengakses halaman ini sudah login
if($_SESSION['level']==" "){
   header("location:index.php?pesan=gagal");
}
 ?>
<h1>Halaman admin</h1>

<p>Hallo<b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo$_SESSION['level']; ?> </b></p>
<a href="logout.php">LOGOUT</a>

<br/>
<br/>

<a> Membuat login multi user dengan php</a>
</body>
  </html>
