<!DOCTYPE html>
<html>

<head>
    <title>PPL PR</title>
</head>

<body>
    <h2>211511044 - Muchamad Diaz Adhari</h2>
    <br />
    <!-- <a href="Latihan4.php">KEMBALI</a> -->
    <br />
    <br />
    <h3>TAMBAH DATA MAHASISWA</h3>
    <form method="post" action="<?= base_url('/Mahasiswa/saved') ?>">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="number" name="NIM"></td>

            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama"></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="Umur"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
</body>

</html>