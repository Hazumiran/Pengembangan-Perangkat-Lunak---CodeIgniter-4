<?= $this->extend('layout/v_template') ?>

<?= $this->section('content') ?>

<?php if (session()->get('logged_in')) : ?>
    <div style="width: 300px; border-radius: 5px;">
        <ul style="background-color: green; color: white; padding: 10px;">
            <li>Berhasil Login</li>
        </ul>
    </div>
<?php endif; ?>


<form method="GET" action="<?= base_url('/Mahasiswa/cari') ?>" class="form-group">
    <div class="row">
        <div class="col-lg-12">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="cari" placeholder="Mencari Data Berdasarkan Nama">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="Submit">CARI DATA</button>
                </div>
            </div>
        </div>

    </div>
</form>


<h2>Data Mahasiswa</h2>
<table border="1">
    <a href="<?= base_url('/Mahasiswa/create') ?>">Create</a>
    <br>
    <br>
    <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>USIA</th>
        <th>OPSI</th>
    </tr>
    <br>
    <!-- <a href="./Admin/admin_index.php">Home</a> -->


    <?php
    // session_start();
    // if ($_SESSION['status'] != "login") {
    //     header("location:login.php?pesan=belum_login");
    // }
    $no = 1;
    foreach ($mahasiswa as $row) {
        echo "<tr>
            <td>$no</td>
            <td>" . $row->NIM . "</td>
            <td>" . $row->Nama . "</td>
            <td>" . $row->Umur . "</td>
            <td>
                <a href='" . base_url('Mahasiswa/edit') . '/' . $row->NIM . "'>Edit</a>            
                <a href='" . base_url('Mahasiswa/delete') . '/' . $row->NIM . "'>Delete</a>            
                <a href='" . base_url('Mahasiswa/detail') . '/' . $row->NIM . "'>Details</a>      
              </tr>";
        $no++;
    }
    ?>
</table>
<?= $this->endSection() ?>