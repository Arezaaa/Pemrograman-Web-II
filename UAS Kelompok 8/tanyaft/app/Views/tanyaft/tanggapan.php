<?php

use PhpParser\Node\Stmt\Echo_;
?>
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
        .file-input-wrapper {
            display: flex;
            align-items: center;
            border: 1px solid #e9ecef;
            border-radius: 5px;
            overflow: hidden;
            width: 100%;
    
        }
        .file-input-wrapper .btn {
            background-color:deepskyblue; 
            color: white;
            border: none;
            border-radius: 0;
            padding: 10px 20px;
        }
        .file-input-wrapper input[type="file"] {
            display: none;
        }
        .file-input-wrapper .file-label {
        
            padding: 10px 20px;
            color: #6c757d;
            cursor: pointer;
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
                <a href="<?= base_url('/tanya-ft') ?>" style="text-decoration: none;"><h6 class=" fw-bold m-0" style="color:deepskyblue;">Kembali</h6></a>
            </div>
            <hr>
            <header class="d-flex flex-row justify-content-center">
                <div class="align-content-center">
                    <h4 class="fw-bold mb-5">Tanggapan Tanya FT</h4>
                </div>    
            </header>
            <section class="d-flex flex-column">
                <div class="d-flex flex-row">
                    <p>
                        Pertanyaan 
                    </p>
                    <p style="margin-left: 20px; margin-right:20px;">
                        :
                    </p>
                    <p>
                        Apa saja Keuntungan layanan FT ULM yang baru dibuat ini?
                    </p>
               </div>

               <div class="d-flex flex-row">
                <div style="margin-right: 130px;">
                </div>
                 <input class="form-control mb-4 w-100" style="background-color: #e9ecef; padding:15px; width:auto" type="text" name="nim" placeholder="" value="Cek File" disabled>
               </div>
               <div class="d-flex flex-row">
                    <p>
                        Jawaban 
                    </p>
                    <p style="margin-left: 35px; margin-right:19px;">
                        :
                    </p>
                    <p>
                         Website layanan baru FT ULM dirancang untuk memberikan akses yang mudah dan cepat bagi mahasiswa, dosen, dan staf untuk mengakses berbagai layanan akademik dan administratif. Dengan antarmuka yang responsif dan ramah pengguna, pengguna dapat dengan mudah mengajukan permohonan, mengakses informasi akademik, memantau status pengajuan, dan berinteraksi dengan berbagai fitur lainnya secara efisien.
                    </p>
               </div>
            </section>
        </div>
    </div>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>
</html>
