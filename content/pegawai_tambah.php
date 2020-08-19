<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Tambah Pegawai</h2>
<form method="post" action="?hal=pegawai_insert" enctype="multipart/form-data">

   <div class="form-group">
      <label for="nip">NIP</label>   
      <div class="input"><input type="text" id="NIP" name="NIP"></div> 
   </div>

   <div class="form-group">
      <label for="Nama">Nama</label>   
      <div class="input"><input type="text" id="Nama" name="Nama"></div> 
   </div>

   <div class="form-group">
      <label for="Jenis_Kelamin">Jenis Kelamin</label>   
      <input type="radio" id="Jenis_Kelamin" name="Jenis_Kelamin" value="L"> Laki-laki
      <input type="radio" id="Jenis_Kelamin" name="Jenis_Kelamin" value="P"> Perempuan 
   </div>

   <div class="form-group">
      <label for="jabatan">Jabatan</label> 
      <div class="input"><input type="text" id="Jabatan" name="Jabatan"></div> 
   </div>

   <div class="form-group">
      <label for="Alamat">Alamat</label>   
      <div class="input"><textarea style="width: 100%" rows="5" id="Alamat" name="Alamat"></textarea></div>
   </div>

   <div class="form-group">
      <label for="Nomor Telepon">Nomor Telepon</label> 
      <div class="input"><input type="text" id="Nomor_Telepon" name="Nomor_Telepon"></div> 
   </div>

   <div class="form-group">
      <label for="Golongan">Golongan</label> 
      <div class="input"><input type="text" id="Golongan" name="Golongan"></div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>