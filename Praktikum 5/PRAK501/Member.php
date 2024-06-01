<?php
    require('./Model.php');
    if (isset($_GET['id_member'])) {
        DeleteMember($_GET['id_member']);
    }
?>
<html>
    <head>
        <title>Data Member</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <header data-bs-theme="dark">
            <div class="navbar navbar-dark bg-success bg-gradient shadow-sm">
                <div class="container">
                <a href="index.php" class="navbar-brand d-flex align-items-center">
                    <strong>Perpustakaan</strong>
                </a>
                </div>
            </div>
        </header>

        <table  class="table table-success table-striped">
            <thead>
                <tr>
                    <th>Id Member</th>
                    <th>Nama Member</th>
                    <th>Nomor Member</th>
                    <th>Alamat</th>
                    <th>Tanggal mendaftar</th>
                    <th>Tanggal terakhir bayar</th>
                    <th>Update/Hapus</th>
                </tr>
            </thead>
            <tbody>
                <?= GetAllData("member") ?>
            </tbody>
        </table>

        <footer class="text-body-secondary py-5 text-center container-fluid bg-success bg-gradient bg-opacity-75 fixed-bottom">
            <div class="container">
                <p class="float-end mb-1">
                <a href="#" class="btn btn-success">Back to top</a>
                </p>
                <div class="btn-group">
                    <a href="FormMember.php" class="btn btn-success">Tambah Data</a>
                    <a href="index.php" class="btn btn-success">Kembali Ke Halaman Utama</a>
                </div>
            </div>
        </footer>
    </body>
</html>