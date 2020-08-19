<?php
   if(!defined('INDEX')) die("");
   $query = mysqli_query($con, "SELECT * FROM t_sekolah");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Data Sekolah</h2>
<form method="post" action="?hal=sekolah_update" enctype="multipart/form-data">

   <div class="form-group">
      <label for="nama">Nama Sekolah</label>   
      <div class="input"><input type="text" id="Nama" name ="Nama" value="<?= $data['Nama'] ?>"></div> 
   </div>

   <div class="form-group">
      <label for="ID">ID Sekolah</label>   
      <div class="input"><input type="text" id="ID_Sekolah" name="ID_Sekolah" value="<?= $data['ID_Sekolah'] ?>"></div> 
   </div>

   <div class="form-group">
      <label for="Alamat">Alamat</label>   
      <div class="input"><div class="input">
         <textarea style="width: 100%" rows="5" id="Alamat" name="Alamat"><?=  $data['Alamat'] ?></textarea>
      </div> 
   </div>

   <div class="form-group">
      <label for="Nomor">No Telepon</label>   
      <div class="input"><input type="text" id="Nomor_Telepon" name="Nomor_Telepon" value="<?= $data['Nomor_Telepon'] ?>"></div> 
   </div>

   <div class="form-group">
      <label for="Nomor">Kepala Sekolah</label>   
      <div class="input"><input type="text" id="NIP_KepalaSekolah" name="NIP_KepalaSekolah" value="<?= $data['NIP_KepalaSekolah'] ?>"></div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>
