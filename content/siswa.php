<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data Siswa</h2>
<a class="tombol" href="?hal=siswa_tambah">Tambah</a>
<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>NISN</th>
         <th>NIK</th>
         <th>Nama</th>
         <th>Kelas</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
   <?php
   $query = mysqli_query($con, "SELECT t_siswa.NISN, t_siswa.NIK, t_pendaftar.Nama ,t_kelas.Nama AS Kelas FROM t_siswa
                                INNER JOIN t_kelas ON t_kelas.ID_Kelas=t_siswa.ID_Kelas
                                INNER JOIN t_pendaftar ON t_pendaftar.NIK=t_siswa.NIK");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><?= $data['NISN'] ?></td>
         <td><?= $data['NIK'] ?></td>
         <td><?= $data['Nama'] ?></td>
         <td><?= $data['Kelas'] ?></td>
         <td><center>
            <a class="tombol edit" href="?hal=siswa_edit&id=<?= $data['NISN'] ?>"> Tampil </a>
            <a class="tombol hapus" href="?hal=siswa_hapus&id=<?= $data['NISN'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>