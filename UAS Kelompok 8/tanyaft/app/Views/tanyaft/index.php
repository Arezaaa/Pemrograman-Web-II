<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tanya FT</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            background-color: whitesmoke;
        }
        .sidebar {
            background-color: #f8f9fa;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 200px;
            padding-top: 60px; /* Tambahkan padding top untuk memberikan ruang pada header */
            overflow-y: auto; /* Menambahkan overflow untuk memungkinkan scrolling */
            z-index: 1000; /* Pastikan sidebar berada di bawah header */
        }
        .sidebar .nav-item {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            color: #000;
            text-decoration: none;
        }
        .sidebar .nav-item img {
            margin-right: 10px;
        }
        .sidebar .nav-item.active {
            background-color:#ADD8E6;
            border-radius: 5px;

        }
        .sidebar .nav-item:hover {
            background-color: #ADD8E6;
            border-radius: 5px;
        }
        .content {
            margin-left: 200px;
            padding-top: 60px; /* Tambahkan padding top untuk memberikan ruang pada header */
            padding-left: 20px;
        }
        .approved-button {
            display: inline-block;
            padding: 6px 30px;
            background-color: #b2f2bb; /* Warna hijau muda */
            color: #2f9e44; /* Warna teks hijau */
            border-radius: 20px; /* Membuat sudut melengkung */
            text-align: center;
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-left: 5px; z-index: 1100; position: fixed; width: 100%; box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);">
        <img class="m-2" src="/img/ulm.jpg" style="width: 40px;" alt="">
        <div class="d-flex flex-column">
            <a class="navbar-brand p-0" style="font-size: 15px; font-weight:bold;" href="#">Fakultas Teknik</a>
            <a class="navbar-brand p-0 text-secondary" style="font-size: 10px;" href="#">Universitas Lambung Mangkurat</a>
        </div>

        <div class="m-2 ps-5" style="width: 300px;">
            <img src="/img/search.jpg" class="" style="width: 20px;" alt="">
            <p class="d-inline p-2 text-secondary">Cari Layanan...</p>
        </div>
        <div class="d-flex flex-row ms-auto justify-content-center" style="margin-right: 90px;">
            <img class="m-2" src="/img/bell.jpg" style="width: 30px; height:auto;" alt="">
            <img class="m-2" src="/img/user.jpg" style="width: 30px;" alt="">
            <p class="fs-6 m-2 text-center">Kelompok 10</p>
        </div>
    </nav>
    
    <div class="d-flex">
        <nav class="sidebar p-3" style="margin-top: 74px; width:max-content;">
            <h6 class="text-secondary text-start ps-3">Menu</h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <img src="<?= base_url('img/menu.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="<?= base_url('dashboard') ?>">Dashboard</a>
                </li>
                <h6 class="text-secondary text-start p-3">Layanan</h6>
                <li class="nav-item">
                    <img src="<?= base_url('img/email.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-services">e-Services</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/conversation.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-command-center">e-Command Center</a>
                </li>
                <li class="nav-item active">
                    <img src="<?= base_url('img/desktop.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="<?= base_url('e_response') ?>">e-Response</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/website.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-commerce">e-Commerce</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/briefcase.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#e-office">e-Office</a>
                </li>
                <h6 class="text-secondary text-start ps-3">Other</h6>
                <li class="nav-item">
                    <img src="<?= base_url('img/list.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#kuesioner">Kuesioner</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/question.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/profile.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="#profile">Profile</a>
                </li>
                <li class="nav-item">
                    <img src="<?= base_url('img/logout.jpg') ?>" style="width: 23px;" alt="">
                    <a class="nav-link text-secondary" href="<?= base_url('/logout') ?>">Logout</a>
                </li>
            </ul>
        </nav>
       
        <div class="card content flex-grow-1 p-3" style="margin-left: 320px; margin-right:40px; width:auto; margin-top:100px; box-shadow: 4px 4px 4px 4px rgba(0, 0, 0, 0.1);">
            <div class="d-flex flex-row" style="align-items: center;">
                <img src="/img/arrow.png" style="width: 30px;" alt="">
                <a href="<?= base_url('/e_response') ?>" style="text-decoration: none;"><h6 class="fw-bold m-0" style="color:deepskyblue;">Kembali</h6></a>
            </div>
            <hr>
            <header class="d-flex flex-row justify-content-center">
                <img src="/img/Tanya FT.png" alt="" style="margin-bottom: 20px; margin-right:20px;">
                <div class="align-content-center">
                    <h4 class="fw-bold">Tanya FT</h4>
                    <p>Layanan ini disediakan untuk menyampaikan permohonan informasi publik terkait Fakultas Teknik ULM</p>
                </div>
                
            </header>
            <section>
                <h6 class="fw-bold">Deskripsi</h6>
                <p class="text-secondary"><strong>TANYA FT</strong> merupakan Layanan Informasi Publik FT ULM. Layanan ini disediakan bagi para pihak untuk menyampaikan permohonan informasi publik terkait Fakultas Teknik Universitas Lambung Mangkurat. Setiap permohonan dikelola oleh Unit Layanan Administrasi Terpadu FT ULM sebagai pelaksana tugas Pejabat Pengelola Informasi dan Dokumentasi (PPID) FT ULM dan didistribusikan kepada Kelompok Kerja (POKJA) yang berkaitan atau langsung kepada Pimpinan FT ULM secara daring (online). Jawaban/Tanggapan dapat dipantau melalui fitur status pengajuan.</p>
            </section>
            <section>
                <h6 class="fw-bold">Alur Pengajuan</h6>
                <ol class="text-secondary">
                    <li>Mahasiswa mengisi data pertanyaan</li>
                    <li>Admin Akademik akan menanggapi pertanyaan tersebut</li>
                    <li>Tanggapan dapat dilihat melalui tabel pengajuan</li>
                </ol>
            </section>
            <section class="d-flex flex-column">
                <h6 class="fw-bold">
                    Tabel Pengajuan
                </h6>
                <a class="ms-auto m-2" href="<?= base_url('pengajuan/tambah') ?>"><button class="btn btn-primary " type="submit">+  Tambah Pengajuan</button></a>
                <table class="table">
                    <thead class="table-secondary align-middle" style="height: 60px;">
                        <tr>
                            <th scope="col" class="text-secondary">No</th>
                            <th scope="col" class="text-secondary">ID Pengajuan</th>
                            <th scope="col" class="text-secondary">Jenis Pengajuan</th>
                            <th scope="col" class="text-secondary">Tanggal Pengajuan</th>
                            <th scope="col" class="text-secondary">Status</th>
                            <th scope="col" class="text-secondary">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pengajuan as $index => $item) : ?>
                            <tr>
                                <th scope="row"><?= $index + 1 ?></th>
                                <td><?= $item['id'] ?></td>
                                <td>Tanya FT</td>
                                <td><?= $item['created_at'] ?></td>
                                <td><p class="approved-button">Disetujui</p></td>
                                <td>
                                    <a href="<?= base_url('/pengajuan/detailPengajuan/' . $item['id']) ?>" class="btn" style="background-color:mediumpurple;">Detail</a>
                                    <a href="<?= base_url('/pengajuan/tanggapan/' . $item['id']) ?>" class="btn btn-info btn-sm">Tanggapan</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table>
            </section>
        </div>
    </div>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
