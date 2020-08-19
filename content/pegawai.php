<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data Pegawai</h2>
<a class="tombol" href="?hal=pegawai_tambah">Tambah</a>
<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>NIP</th>
         <th>Nama</th>
         <th>Jabatan</th>
         <th>Golongan</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
   <?php
   $query = mysqli_query($con, "SELECT * FROM t_pegawai");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><?= $data['NIP'] ?></td>
         <td><?= $data['Nama'] ?></td>
         <td><?= $data['Jabatan'] ?></td>
         <td><?= $data['Golongan'] ?></td>
         <td><center>
            <a class="tombol edit" href="?hal=pegawai_edit&id=<?= $data['NIP'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=pegawai_hapus&id=<?= $data['NIP'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>