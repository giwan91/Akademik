<?php
   if(!defined('INDEX')) die("");
?>
<h2 class="judul">Data Calon Peserta Didik</h2>
<a class="tombol" href="?hal=pendaftar_tambah">Tambah</a>
<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>NIK</th>
         <th>Nama</th>
         <th>Jenis Kelamin</th>
         <th>Nomor Telepon</th>
         <th>Alamat</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
   <?php
   $query = mysqli_query($con, "SELECT * FROM t_pendaftar");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><?= $data['NIK'] ?></td>
         <td><?= $data['Nama'] ?></td>
         <td><?= $data['Jenis_Kelamin'] ?></td>
         <td><?= $data['Nomor_Telepon'] ?></td>
         <td><?= $data['Alamat'] ?></td>
         <td><center>
            <a class="tombol edit" href="?hal=pendaftar_edit&id=<?= $data['NIK'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=pendaftar_hapus&id=<?= $data['NIK'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
