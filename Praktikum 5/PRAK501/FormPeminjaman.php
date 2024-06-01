<?php 
require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    $result = GetPeminjaman($_GET['id_peminjaman']);
}
?>
<html>
    <head>
        <title>Form Peminjaman</title>
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
        <section class="py-5 text-center container-fluid bg-success bg-gradient bg-opacity-75">
                        <h2 class="fw-light text-light">Form Peminjaman</h2>
                    </div>
                </div>
        </section>

        <main> 
            <div class="container">
                <div class="col">
                    <form action="" method="POST">
                        <div class="row-3">
                        <div class="col-12">
                            <label for="tgl_pinjam" class="form-label">Tanggal Pinjam</label>
                            <input type="datetime-local" class="form-control" id="tgl_pinjam" name="tgl_pinjam" <?php echo isset ($result) ? "value='" . $result[0]["tgl_pinjam"] . "'" : "value=''"; ?> required>
                        </div>

                        <div class="col-12">
                            <label for="tgl_kembali" class="form-label">Tanggal Kembali</label>
                            <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali" <?php echo isset ($result) ? "value='" . $result[0]["tgl_kembali"] . "'" : "value=''"; ?> required>
                        </div>
                        <hr class="my-4">
                            <?php
                                if (isset($_GET['id_peminjaman'])) {
                                    echo "<button class='w-100 btn btn-success btn-lg' type=\"submit\" name=\"update\">Update</button>";
                                } else {
                                    echo "<button class='w-100 btn btn-success btn-lg' type=\"submit\" name=\"submit\">Tambah</button>";
                                }
                            ?>
                    </form>
                </div>
            </div>
        </main> 

        <footer class="text-body-secondary py-5 text-center container-fluid bg-success bg-gradient bg-opacity-75 fixed-bottom">
            <div class="container">
                <div class="btn-group">
                    <a href="Peminjaman.php" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </footer>

        <?php
            if (isset($_POST['submit'])) {
                AddPeminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali']);
            }
            if (isset($_POST['update'])) {
                UpdatePeminjaman($_GET['id_Peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
            }
        ?>
    </body>
</html>