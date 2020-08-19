<?php
   if(!defined('INDEX')) die("");
   $query = mysqli_query($con, "SELECT * FROM user WHERE id_user='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Mengubah User</h2>
<form method="post" action="?hal=user_update" enctype="multipart/form-data">

   <div class="form-group">
      <label for="Nama">Nama</label>   
      <div class="input"><input type="text" id="nama_lengkap" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>"></div> 
   </div>


   <div class="form-group">
      <label for="username">Username</label> 
      <div class="input"><input type="text" id="username" name="username" value="<?= $data['username'] ?>"></div> 
   </div>

   <div class="form-group">
      <label for="password">Password</label>   
      <div class="input"><input type="text" id="password" name="password" value="<?= $data['password']?>"></div>
   </div>


   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>