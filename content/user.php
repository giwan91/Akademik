<?php
   if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data User</h2>
<a class="tombol" href="?hal=user_tambah">Tambah</a>
<table class="table">
   <thead>
      <tr>
         <th>ID User</th>
         <th>Username</th>
         <th>Nama Lengkap</th>
         <th>Aksi</th>
      </tr>
   </thead>
   <tbody>
   <?php
   $query = mysqli_query($con, "SELECT * FROM user");
   $no = 0;
   while($data = mysqli_fetch_array($query)){
      $no++;
?>
      <tr>
         <td><?= $data['id_user'] ?></td>
         <td><?= $data['nama_lengkap'] ?></td>
         <td><?= $data['username'] ?></td>
         <td><center>
            <a class="tombol edit" href="?hal=user_edit&id=<?= $data['id_user'] ?>"> Edit </a>
            <a class="tombol hapus" href="?hal=user_hapus&id=<?= $data['id_user'] ?>"> Hapus </a>
         </td>
     </tr>
<?php
   }
?>
   </tbody>
</table>