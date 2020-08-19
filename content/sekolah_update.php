<?php
   if(!defined('INDEX')) die("");
   $query2 = mysqli_query($con, "SELECT * FROM t_sekolah");
   $data = mysqli_fetch_array($query2);
   $id = $data['ID_Sekolah'];

   $query = mysqli_query($con, "UPDATE t_sekolah SET
      Nama = '$_POST[Nama]',
      Alamat = '$_POST[Alamat]',
      Nomor_Telepon = '$_POST[Nomor_Telepon]',
      NIP_KepalaSekolah = '$_POST[NIP_KepalaSekolah]',
      ID_Sekolah = '$_POST[ID_Sekolah]' 
      WHERE 
      ID_Sekolah = '$id'
      ");

   if($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=sekolah'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
      echo "<meta http-equiv='refresh' content='1; url=?hal=sekolah'>";
   }
?>