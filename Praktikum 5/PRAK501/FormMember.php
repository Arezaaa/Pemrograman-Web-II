<?php 
require('./Model.php');
if (isset($_GET['id_member'])) {
    $result = GetMember($_GET['id_member']);
}
?>
<html>
    <head>
        <title>Form Member</title>
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
                        <h2 class="fw-light text-light">Form Member</h2>
                    </div>
                </div>
        </section>
        
        <main> 
            <div class="container">
                <div class="col">
                    <form action="" method="POST">
                        <div class="row-3">
                            <div class="col-12">
                                <label for="nama_member" class="form-label">Nama Member</label>
                                <input type="text" class="form-control" id="nama_member" name="nama_member" <?php echo isset ($result) ? "value='" . $result[0]["nama_member"] . "'" : "value=''"; ?>  required>
                            </div>
                        </div>

                        <div class="col-12">
                            <label for="nomor_member" class="form-label">Nomor Member</label>
                            <input type="text" class="form-control" id="nomor_member" name="nomor_member" <?php echo isset ($result) ? "value='" . $result[0]["nomor_member"] . "'" : "value=''"; ?> required>
                        </div>

                        <div class="col-12">
                            <label for="alamat" class="form-label">Alamat Member</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" <?php echo isset ($result) ? "value='" . $result[0]["alamat"] . "'" : "value=''"; ?> required>
                        </div>

                        <div class="col-12">
                            <label for="tgl_mendaftar" class="form-label">Tanggal Daftar</label>
                            <input type="datetime-local" class="form-control" id="tgl_mendaftar" name="tgl_mendaftar" value="<?php echo isset($result) ? date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"])) : ""; ?>" required>
                        </div>

                        <div class="col-12">
                            <label for="tgl_terakhir_bayar" class="form-label">Tanggal Bayar</label>
                            <input type="date" class="form-control" id="tgl_terakhir_bayar" name="tgl_terakhir_bayar" <?php echo isset ($result) ? date('Y-m-d\TH:i', strtotime($result[0]["tgl_mendaftar"])) : "value=''"; ?> required>
                        </div>
                        <hr class="my-4">
                            <?php
                                if (isset($_GET['id_member'])) {
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
                    <a href="Member.php" class="btn btn-success">Kembali</a>
                </div>
            </div>
        </footer>

        <?php
            if (isset($_POST['submit'])) {
                $tgl_daftar = date_create($_POST['tgl_daftar']);
                $tgl_daftar = date_format($tgl_daftar, "Y-m-d H:i:s");
                AddMember($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
            }
            if (isset($_POST['update'])) {
                $tgl_daftar = date('Y-m-d H:i:s', strtotime($_POST['tgl_daftar']));
                UpdateMember($_GET['id_member'], $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $tgl_daftar, $_POST['tgl_terakhir_bayar']);
            }
        ?>
    </body>
</html>