<?php
   if(!defined('INDEX')) die("");

   $halaman = array("dashboard",
                     "sekolah","sekolah_update",
                     "pendaftar","pendaftar_tambah", "pendaftar_insert","pendaftar_edit", "pendaftar_update","pendaftar_hapus",
                     "kelas",
                     "pegawai", "pegawai_tambah", "pegawai_insert","pegawai_edit", "pegawai_update","pegawai_hapus",
                     "pelajaran",
                     "nilai",
                     "siswa",
                     "user","user_tambah", "user_insert","user_edit", "user_update","user_hapus");

   if(isset($_GET['hal'])) $hal = $_GET['hal'];
   else $hal = "dashboard";

   foreach($halaman as $h){
      if($hal == $h){
         include "content/$h.php";
         break;
      }
   }
?>