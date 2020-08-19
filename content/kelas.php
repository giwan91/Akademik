<?php
   if(!defined('INDEX')) die("");
?>
<h2 class="judul">Data Jurusan</h2>
<a class="tombol" href="?hal=jurusan_tambah">Tambah</a>
<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Nama</th>
         <th>Informasi</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
   <?php
   $query = mysqli_query($con, "SELECT * FROM t_jurusan");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><?= $data['Nama'] ?></td>
         <td><?= $data['Informasi'] ?></td>
         <td><center>
            <a class="tombol edit" href="?hal=jurusan_edit&id=<?= $data['ID_Jurusan'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=jurusan_hapus&id=<?= $data['ID_Jurusan'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>
<br>
<h2 class="judul">Data Kelas</h2>
<a class="tombol" href="?hal=kelas_tambah">Tambah</a>
<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>Nama</th>
         <th>Jumlah Siswa</th>
         <th>Jurusan</th>
         <th>Wali Kelas</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
   <?php
   $query2 = mysqli_query($con, "SELECT t_kelas.ID_Kelas, t_kelas.Nama , t_kelas.Jumlah_Siswa, t_jurusan.Nama AS Jurusan, t_pegawai.Nama AS Wali FROM t_kelas 
                                 INNER JOIN t_jurusan ON t_kelas.Jurusan=t_jurusan.ID_Jurusan 
                                 INNER JOIN t_pegawai ON t_kelas.NIP_WaliKelas=t_pegawai.NIP
                                 ORDER BY t_kelas.Jurusan DESC");
   $no2 = 0;
   while($data2 = mysqli_fetch_array($query2)){
      $no2++;
?>
      <tr>
         <td><?= $no2 ?></td>
         <td><?= $data2['Nama'] ?></td>
         <td><?= $data2['Jumlah_Siswa'] ?></td>
         <td><?= $data2['Jurusan'] ?></td>
         <td><?= $data2['Wali'] ?></td>
         <td><center>
            <a class="tombol edit" href="?hal=kelas_edit&id=<?= $data2['ID_Kelas'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=kelas_hapus&id=<?= $data2['ID_Kelas'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>