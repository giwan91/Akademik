<?php
   if(!defined('INDEX')) die("");

   $query = mysqli_query($con, "DELETE FROM user WHERE id_user='$_GET[id]'");

   if($query){
      echo "Data berhasil dihapus!";
      echo "<meta http-equiv='refresh' content='1; url=?hal=user'>";
   }else{
      echo "Tidak dapat menghapus data!<br>";
      echo mysqli_error();
      echo "<meta http-equiv='refresh' content='1; url=?hal=user'>";
   }
?>