<?php
   if(!defined('INDEX')) die("");
?>
<h2 class="judul">Data Pelajaran</h2>
<a class="tombol" href="?hal=pelajaran_tambah">Tambah</a>
<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>ID Pelajaran</th>
         <th>Nama</th>
         <th>Pengajar</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
   <?php
   $query = mysqli_query($con, "SELECT t_pelajaran.ID_Pelajaran, t_pelajaran.Nama, t_pegawai.Nama AS Pengajar
                                FROM t_pelajaran 
                                INNER JOIN t_pegawai ON t_pegawai.NIP=t_pelajaran.NIP_Pengajar");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><?= $data['ID_Pelajaran'] ?></td>
         <td><?= $data['Nama'] ?></td>
         <td><?= $data['Pengajar'] ?></td>
         <td><center>
         <a class="tombol edit" href="?hal=nilai&id=<?= $data['ID_Pelajaran'] ?>"> Nilai </a>
            <a class="tombol edit" href="?hal=pelajaran_edit&id=<?= $data['ID_Pelajaran'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=pelajaran_hapus&id=<?= $data['ID_Pelajaran'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
