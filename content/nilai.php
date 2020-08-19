<?php
   if(!defined('INDEX')) die("");
   $query = mysqli_query($con, "SELECT * FROM t_pelajaran WHERE ID_Pelajaran='$_GET[id]'");
   $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Data Nilai <?php echo $data['Nama']?></h2>
<a class="tombol" href="?hal=niai_tambah">Tambah</a>
<table class="table">
   <thead>
      <tr>
         <th>No</th>
         <th>NISN</th>
         <th>Nama</th>
         <th>Kelas</th>
         <th>Nilai</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
   <?php
   $cari = $data['ID_Pelajaran'];
   $query2 = mysqli_query($con, "SELECT t_nilai.`ID`, t_nilai.`ID_Pelajaran`, t_nilai.`NISN`, t_nilai.`Nilai`, t_siswa.`NIK` AS NIK,
                           t_pendaftar.`Nama` AS Nama, `t_kelas`.`Nama` AS Kelas,`t_pelajaran`.`Nama` AS Pelajaran FROM `t_nilai` 
                           INNER JOIN t_pelajaran ON `t_nilai`.`ID_Pelajaran`=`t_pelajaran`.`ID_Pelajaran`
                           INNER JOIN t_siswa ON `t_nilai`.`NISN`=`t_siswa`.`NISN`
                           INNER JOIN t_kelas ON `t_siswa`.`ID_Kelas`=`t_kelas`.`ID_Kelas`
                           INNER JOIN t_pendaftar ON `t_siswa`.`NIK`=`t_pendaftar`.`NIK`
                           WHERE t_nilai.`ID_Pelajaran`='$cari'");
   $no = 0;
   while($data2 = mysqli_fetch_array($query2)){
      $no++;
?>
      <tr>
         <td><?= $no ?></td>
         <td><?= $data2['NISN'] ?></td>
         <td><?= $data2['Nama'] ?></td>
         <td><?= $data2['Kelas'] ?></td>
         <td><?= $data2['Nilai'] ?></td>
         <td><center>
            <a class="tombol edit" href="?hal=nilai_edit&id=<?= $data2['ID'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=nilai_hapus&id=<?= $data2['ID'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>