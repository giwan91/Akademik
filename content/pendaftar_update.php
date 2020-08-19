<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "UPDATE t_pendaftar SET
         Nama = '$_POST[Nama]',
         Alamat = '$_POST[Alamat]',
         Nomor_Telepon = '$_POST[Nomor_Telepon]',
         Jenis_Kelamin = '$_POST[Jenis_Kelamin]',
         WHERE NIK = '$_POST[NIK]'
      ");
   
   if($query ){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=pendaftar'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
      echo "<meta http-equiv='refresh' content='1; url=?hal=pendaftar'>";
   }
?>