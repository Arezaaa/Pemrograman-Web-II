<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="d-flex">
    <div class="card content flex-grow-1 p-3 shadow bg-light" style="margin-top: 20px;">
        <header class="d-flex flex-row justify-content-start align-items-center">
            <svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-grid" viewBox="0 0 16 16"><path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zM2.5 2a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zM1 10.5A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5zm6.5.5A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5zm1.5-.5a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/></svg>
            <div>
                <h4 class="fw-bold">Dashboard</h4>
                <p class="text-secondary">Akses menu dan informasi penting lainnya di sini</p>
            </div>
        </header>
        <div class="card custom-orange-bg mt-3">
        <div class="card-body d-flex align-items-center">
            <div>
                <p>
                    <svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z"/>
                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                    </svg>
                    Kamu belum mengisi kuisioner pada periode semester ini, Silahkan isi Kuisioner <a href="#">Disini</a>
                </p>
                <p class="small">
                    Kamu tidak dapat melakukan pengajuan layanan jika belum mengisi kuisioner. Oleh karena itu, kami mengharapkan agar setiap mahasiswa mengisi kuisioner pada awal setiap semester sebagai bagian dari proses yang diperlukan untuk memberikan pelayanan yang terbaik dan peningkatan kualitas serta evaluasi layanan FT ULM.
                </p>
            </div>
        </div>
    </div>

    <div class="mt-3 position-relative">
            <img src="<?= base_url('images/welcome.png') ?>" class="img-fluid w-100" alt="Welcome Image">
            <div class="position-absolute top-0 start-0 p-3 text-white">
                <h4><b>Selamat Datang <?= auth()->user()->username ?>!</b></h4>
                <p>Di website ini kamu dapat mengajukan layanan dan<br>mengecek status pengajuannya</p>
            </div>
        </div>

    <p class="mt-3 text-secondary">Ringkasan</p>
    <div class="summary row row-cols-1 row-cols-md-4 g-3">
        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-info fw-bold">3</h3>
                    <p class="card-text text-secondary">Layanan diajukan</p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-info fw-bold">1</h3>
                    <p class="card-text text-secondary">Menunggu persetujuan</p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-info fw-bold">1</h3>
                    <p class="card-text text-secondary">Layanan disetujui</p>
                </div>
            </div>
        </div>
        <div class="col mb-3">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-info fw-bold">1</h3>
                    <p class="card-text text-secondary">Layanan ditolak</p>
                </div>
            </div>
        </div>
    </div>


    <p class="mt-3 text-secondary">Mungkin yang kamu butuhkan</p>
    <div class="d-flex flex-wrap">
        <div class="position-relative me-3 mb-3 flex-fill">
            <img src="<?= base_url('images/graduation.png') ?>" class="img-fluid w-100" alt="Graduation">
        </div>
        <div class="me-3 mb-3 flex-fill">
            <img src="<?= base_url('images/pkl.png') ?>" class="img-fluid w-100" alt="PKL">
        </div>
        <div class="me-3 mb-3 flex-fill">
            <img src="<?= base_url('images/penelitian.png') ?>" class="img-fluid w-100" alt="Penelitian">
        </div>
        <div class="me-3 mb-3 flex-fill">
            <img src="<?= base_url('images/data.png') ?>" class="img-fluid w-100" alt="Data">
        </div>
        <div class="me-3 mb-3 flex-fill">
            <img src="<?= base_url('images/tugas.png') ?>" class="img-fluid w-100" alt="Tugas">
        </div>
        <div class="me-3 mb-3 flex-fill">
            <img src="<?= base_url('images/mbkm.png') ?>" class="img-fluid w-100" alt="MBKM">
        </div>
    </div>
</div>

<?= $this->endSection() ?>