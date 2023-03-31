<?php
    include "koneksi.php";

    // $kode_obat = $_POST['kode_obat'];
  /*  $nama_obat = ["nama_obat"];
    $jenis_obat = $_POST["jenis_obat"];
     $kategori = $_POST["kategori"];
    $harga = $_POST["harga"];
    $jumlah = $_POST["jumlah"];
*/

        // $query=mysqli_query("insert into T_obat values('$kode_obat','$nama_obat',$jenis_obat','$kategori,'$haga',$jumlah')") or die('mysqli_error'());
        $sql = "INSERT INTO t_obat (kode_obat, nama_obat, jenis_obat, kategori_obat, harga_obat, jumlah_obat) VALUES ('$_POST[kode_obat]', '$_POST[nama_obat]', '$_POST[jenis_obat]', '$_POST[kategori_obat]', '$_POST[harga_obat]', '$_POST[jumlah_obat]' )";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
      } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
      header("location:form.php");
      function hapus($kode_obat) {
        global $conn;
        mysqli_query($conn,"delete from t_obat where kode_obat = $kode_obat");
        return mysqli_affected_rows(($conn));
      }
     // mysqli_close($conn);
        ?>  