<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="d-flex">
    <div class="card content flex-grow-1 p-3 shadow bg-light" style="margin-top: 20px;">
        <header class="d-flex flex-row justify-content-start align-items-center">
            <svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4q0 1 .25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75Q6 13 6 12H2s-2 0-2-2zm1.398-.855a.76.76 0 0 0-.254.302A1.5 1.5 0 0 0 1 4.01V10c0 .325.078.502.145.602q.105.156.302.254a1.5 1.5 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.76.76 0 0 0 .254-.302 1.5 1.5 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.76.76 0 0 0-.302-.254A1.5 1.5 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145"/>
            </svg>
            <div>
                <h4 class="fw-bold">Layanan e-Response</h4>
                <p class="text-secondary">Inovasi Layanan Informasi dan Pengaduan FT ULM</p>
            </div>
        </header>
        <div class="mt-3 d-flex justify-content-end">
            <div class="me-3">
                <label class="text-secondary">Urutkan sesuai :</label>
            </div>
            <div>
                <select id="" class="form-select">
                    <option value="name-asc">Nama Layanan (A-Z)</option>
                </select>
            </div>
    </div>
        <div class="kartu mt-3 d-flex">
            <div class="response me-3">
                <img src="<?= base_url('images/lapor.png') ?>" alt="Lapor FT">
            </div>
            <div class="response ms-3">
                <a href="<?= base_url('tanyaft/main') ?>"><img src="<?= base_url('images/tanya.png') ?>" alt="Tanya FT"></a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
