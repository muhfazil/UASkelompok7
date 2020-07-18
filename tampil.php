<?php 

include "koneksi.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Data</title>
</head>
<body>
<table border="1">

<thead>
<tr>
<th>No</th>
<th>Nama Lengkap</th>
<th>Alamat Rumah</th>
<th>Nama Provinsi</th>
<th>Email</th>
<th>No Hp</th>
<th>Keahlian</th>
<th>Proses</th>
</tr>
</thead>

<tbody>

<?php 

$no = 1;

$sql = "SELECT * FROM datainput";
$query = mysqli_query($db,$sql);

while($relawan= mysqli_fetch_array($query)){


?>
<tr>
<td><?php echo $no++; ?> </td>
<td><?php echo $relawan['nama_lengkap'] ?></td>
<td><?php echo $relawan['alamat'] ?></td>
<td><?php echo $relawan['nama_provinsi'] ?></td>
<td><?php echo $relawan['email'] ?></td>
<td><?php echo $relawan['no_hp'] ?></td>
<td><?php echo $relawan['bidang_keahlian'] ?></td>
<td>
<a href="edit.php">Edit</a>
<a href="Hapus.php">hapus</a>
<a href="cetak.php">Cetak</a></td>


<?php } ?>
</tr>

</tbody>

</table>
</body>
</html>