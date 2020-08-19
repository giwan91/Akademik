<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "INSERT INTO t_pendaftar SET
         NIK = '$_POST[NIK]',
         Nama = '$_POST[Nama]',
         Alamat = '$_POST[Alamat]',
         Nomor_Telepon = '$_POST[Nomor_Telepon]',
         Jenis_Kelamin = '$_POST[Jenis_Kelamin]'
      ");
   
   if($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=pendaftar'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
      echo "<meta http-equiv='refresh' content='1; url=?hal=pendaftar'>";
   }
?>