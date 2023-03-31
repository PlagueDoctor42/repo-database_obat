<!DOCTYPE html>
<html>

<head>
    <tittle>Eeee Maling Pangsit</tittle>
</head>

<body>
    <?php
    echo "cepak ngehe"
    ?>

    <fieldset>
        <legend> FORM OBAT</legend>
        <form method="POST" action="proses.php">
            <table border="0">
                <tr>
                    <td>kode_obat</td>
                    <td><input type="text" name="kode_obat" required></td>
                </tr>
                <tr>
                    <td>nama_obat</td>
                    <td><input type="text" name="nama_obat"></td>
                </tr>
                <tr>
                    <td>jenis_obat</td>
                    <td><input type="text" name="jenis_obat"></td>
                </tr>
                <tr>
                    <td>kategori_obat</td>
                    <td><input type="text" name="kategori_obat"></td>
                </tr>
                <tr>
                    <td>harga_obat</td>
                    <td><input type="text" name="harga_obat"></td>
                </tr>
                <tr>
                    <td>jumlah_obat</td>
                    <td><input type="text" name="jumlah_obat"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name"simpan" value="simpan">
                    <input type='button'value='display'onClick='top.location="display.php"'class='button'class="display">   
                </td> 
                </tr>
            </table>

        </form>
    </fieldset>
</body>

</html>