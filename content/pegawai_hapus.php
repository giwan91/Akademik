<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "DELETE FROM t_pegawai WHERE NIP='$_GET[id]'");

   if($query){
      echo "Data berhasil dihapus!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
   }else{
      echo "Tidak dapat menghapus data!<br>";
      echo mysqli_error();
      echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
   }
?>