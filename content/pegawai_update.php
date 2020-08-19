<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "UPDATE t_pegawai SET
         Nama = '$_POST[Nama]',
         Alamat = '$_POST[Alamat]',
         Nomor_Telepon = '$_POST[Nomor_Telepon]',
         Jenis_Kelamin = '$_POST[Jenis_Kelamin]',
         Jabatan = '$_POST[Jabatan]',
         Golongan = '$_POST[Golongan]'
         WHERE NIP = '$_POST[NIP]'
      ");
   
   if($query ){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
      echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
   }
?>