<?= $this->extend('layout/v_template') ?>
<?= $this->section('content') ?>


<br />
<a href="Latihan4.php">KEMBALI</a>
<br />
<br />
<h3>EDIT DATA MAHASISWA</h3>

<?php

foreach ($mahasiswa as $d) {
?>
    <form method="post" action="<?= base_url('/Mahasiswa/updated') ?>">
        <table>
            <tr>
                <td>NIM</td>
                <td><input disabled type="number" name="NIM" value="<?php echo $d['NIM']; ?>"></td>
                <td><input type="hidden" name="NIM" value="<?php echo $d['NIM']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="Nama" value="<?php echo $d['Nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="text" name="Umur" value="<?php echo $d['Umur']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
<?php
}
?>

<?= $this->endSection() ?>