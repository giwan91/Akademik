<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Menambah User</h2>
<form method="post" action="?hal=user_insert" enctype="multipart/form-data">

   <div class="form-group">
      <label for="Nama">Nama</label>   
      <div class="input"><input type="text" id="nama_lengkap" name="nama_lengkap"></div> 
   </div>

   <div class="form-group">
      <label for="username">Username</label> 
      <div class="input"><input type="text" id="username" name="username"></div> 
   </div>

   <div class="form-group">
      <label for="password">Password</label>   
      <div class="input"><input type="text" id="password" name="password"></div>
   </div>


   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>