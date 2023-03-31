<?php
include 'koneksi.php';
if (isset($_GET['idedit'])) {
  $id = $_GET['idedit'];
$q = $conn->query("SELECT * FROM t_obat WHERE kode_obat = '$id'");
foreach ($q as $dt) :
  ?>
<h1>ici tanpa kiwir :'(</h1>
  <h2>Halaman Ubah Data</h2>
<form action="edit-proses.php" method="post">
    <input type="text" name="kode_obat" value="<?= $dt['kode_obat'] ?>">
    <input type="text" name="nama_obat" value="<?= $dt['nama_obat'] ?>">
    <input type="text" name="jenis_obat" value="<?= $dt['jenis_obat'] ?>">
    <input type="text" name="kategori_obat" value="<?= $dt['kategori_obat'] ?>">
    <input type="text" name="harga_obat" value="<?= $dt['harga_obat'] ?>">
    <input type="text" name="jumlah_obat" value="<?= $dt['jumlah_obat'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
<?php
  endforeach;
}