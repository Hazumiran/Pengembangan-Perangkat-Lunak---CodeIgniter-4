<?= $this->extend('layout/v_template') ?>

<?= $this->section('content') ?>

<h2>Mahasiswa Details</h2>
<br />
<a href="/Mahasiswa">KEMBALI</a>
<br />
<br />
<h3>Details DATA MAHASISWA</h3>
<?php
foreach ($mahasiswa as $row) {
?>
    <form>
        <table>
            <tr>
                <td>NIM</td>
                <td><input disabled type="number" name="NIM" value="<?php echo $row['NIM']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input disabled type="text" name="Nama" value="<?php echo $row['Nama']; ?>">
                </td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input disabled type="text" name="Umur" value="<?php echo $row['Umur']; ?>"></td>
            </tr>
        </table>
    </form>
<?php
}
?>

<?= $this->endSection() ?>