<?php
  session_start();
  ob_start();
  
  include "library/config.php";

  if(empty($_SESSION['username']) or empty($_SESSION['password'])){
     echo "<p align='center'> Anda harus login terlebih dahulu!</p>";
     echo "<meta http-equiv='refresh' content='2; url=login.php'>";
  }else{
    define('INDEX', true);
?>

<!DOCTYPE HTML>
<html>
   <head>
      <title>Dashboard</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <header>
         Aplikasi Manajemen Akademik
      </header>
      <div class="container">
         <aside>
            <ul class="menu">
               <li> <a href="?hal=dashboard" class="aktif">Dashboard</a> </li>
               <li> <a href="?hal=sekolah" class="aktif">Data Sekolah</a> </li>
               <li> <a href="?hal=pegawai" class="aktif">Data Pegawai</a> </li>
               <li> <a href="?hal=pendaftar" class="aktif">Data Pendaftar</a> </li>
               <li> <a href="?hal=kelas" class="aktif">Data Kelas</a> </li>
               <li> <a href="?hal=siswa" class="aktif">Data Siswa</a> </li>
               <li> <a href="?hal=pelajaran" class="aktif">Data Pelajaran</a> </li>
               <li> <a href="?hal=user" class="aktif">Pengaturan</a> </li>
               <li> <a href="logout.php">Keluar</a> </li>
            </ul>
         </aside>
         <section class="main">
            <?php include "konten.php"; ?>
         </section>
      </div>
      <footer>
         Copyright &copy; Giwan Gunawan
      </footer>
   </body>
</html>
<?php
   }
?>