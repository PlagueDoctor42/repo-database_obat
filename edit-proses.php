<?php
include 'koneksi.php';
if (isset($_POST['submit'])) {
  $kode_obat = $_POST['kode_obat'];
  $nama_obat = $_POST['nama_obat'];
  $jenis_obat = $_POST['jenis_obat'];
  $kategori_obat = $_POST['kategori_obat'];
  $harga_obat = $_POST['harga_obat'];
  $jumlah_obat = $_POST['jumlah_obat'];
  $q = $conn->query("UPDATE t_obat SET kode_obat = '$kode_obat', nama_obat = '$nama_obat', jenis_obat = '$jenis_obat', kategori_obat = '$kategori_obat', harga_obat = '$harga_obat', jumlah_obat = '$jumlah_obat'  WHERE kode_obat = '$kode_obat'");
  if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data produk berhasil diubah'); window.location.href='form.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data produk gagal diubah'); window.location.href='form.php0'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: display.php');
}