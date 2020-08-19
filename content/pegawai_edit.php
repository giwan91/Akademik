<?php
   if(!defined('INDEX')) die("");
   $query = mysqli_query($con, "SELECT * FROM t_pegawai WHERE NIP='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Mengubah Pegawai</h2>
<form method="post" action="?hal=pegawai_update" enctype="multipart/form-data">
   
   <div class="form-group">
      <label for="nip">NIP</label>   
      <div class="input"><input type="text" id="NIP" name="NIP" readonly value="<?= $data['NIP'] ?>"></div> 
   </div>

   <div class="form-group">
      <label for="Nama">Nama</label>   
      <div class="input"><input type="text" id="Nama" name="Nama" value="<?= $data['Nama'] ?>"></div> 
   </div>

   <div class="form-group">
      <label for="Jenis_Kelamin">Jenis Kelamin</label>   
      <?php 
         if($data['Jenis_Kelamin'] == "L"){
            $l = " checked";
            $p = "";
         }else{
            $l = "";
            $p = "checked";
         }
      ?>
      <input type="radio" id="Jenis_Kelamin" name="Jenis_Kelamin" value="L" <?= $l ?>> Laki-laki
      <input type="radio" id="Jenis_Kelamin" name="Jenis_Kelamin" value="P" <?= $p ?>> Perempuan 
   </div>

   <div class="form-group">
      <label for="jabatan">Jabatan</label> 
      <div class="input"><input type="text" id="Jabatan" name="Jabatan" value="<?= $data['Jabatan'] ?>"></div> 
   </div>

   <div class="form-group">
      <label for="Alamat">Alamat</label>   
      <div class="input"><textarea style="width: 100%" rows="5" id="Alamat" name="Alamat" ><?= $data['Alamat'] ?></textarea></div>
   </div>

   <div class="form-group">
      <label for="Nomor Telepon">Nomor Telepon</label> 
      <div class="input"><input type="text" id="Nomor_Telepon" name="Nomor_Telepon" value="<?= $data['Nomor_Telepon'] ?>"></div> 
   </div>

   <div class="form-group">
      <label for="Golongan">Golongan</label> 
      <div class="input"><input type="text" id="Golongan" name="Golongan" value="<?= $data['Golongan'] ?>"></div> 
   </div>

   <div class="form-group">
      <input type="submit" value="Simpan" class="tombol simpan">
      <input type="reset" value="Batal" class="tombol reset">
   </div>
</form>