<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "UPDATE user SET
         nama_lengkap = '$_POST[nama_lengkap]',
         username = '$_POST[username]',
         password = '$_POST[password]',
         WHERE id_user = '$_POST[id_user]'
      ");
   
   if($query){
      echo "Data berhasil disimpan!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=user'>";
   }else{
      echo "Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
      echo "<meta http-equiv='refresh' content='1; url=?hal=user'>";
   }
?>