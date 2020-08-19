<?php
   if(!defined('INDEX')) die("");
   $username = $_SESSION['username'];
   $query = mysqli_query($con, "SELECT * FROM user WHERE username='$username'");
   $data = mysqli_fetch_array($query);
?>
<h1>Selamat Datang di Aplkasi Manajemen Akademik</h1>
<h3>Hallo <?php 
   echo $data['nama_lengkap'];
?>!!!</h3>