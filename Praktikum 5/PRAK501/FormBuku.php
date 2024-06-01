<?php
require 'Model.php';
if (isset($_GET['id_buku'])) {
    $result = GetBuku($_GET['id_buku']);
}
?>
<html>
    <head>
        <title>Form Buku</title>
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
                        <h2 class="fw-light text-light">Form Buku</h2>
                    </div>
                </div>
        </section>

        <main> 
            <div class="container">
                <div class="col">
                    <form action="" method="POST">
                        <div class="row-3">
                            <div class="col-12">
                                <label for="judul_buku" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku" <?php echo isset ($result) ? "value='" . $result[0]["judul_buku"] . "'" : "value=''"; ?> required>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="penulis" class="form-label">Penulis</label>
                            <input type="text" class="form-control" id="penulis" name="penulis" <?php echo isset ($result) ? "value='" . $result[0]["penulis"] . "'" : "value=''"; ?> required>
                        </div>

                        <div class="col-12">
                            <label for="penerbit" class="form-label">Penerbit</label>
                            <input type="text" class="form-control" id="penerbit" name="penerbit" <?php echo isset ($result) ? "value='" . $result[0]["penerbit"] . "'" : "value=''"; ?> required>
                        </div>

                        <div class="col-12">
                            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                            <input type="text" class="form-control" id="tahun_terbit" name="tahun_terbit" <?php echo isset ($result) ? "value='" . $result[0]["tahun_terbit"] . "'" : "value=''"; ?> required>
                        </div>
                        <hr class="my-4">
                            <?php
                                if (isset($_GET['id_buku'])) {
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
                    <a href="Buku.php" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </footer>

        <?php
            if (isset($_POST['submit'])) {
                AddBuku($_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
            }
            if (isset($_POST['update'])) {
                UpdateBuku($_GET['id_Buku'], $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
            }
        ?>
    </body>
</html>