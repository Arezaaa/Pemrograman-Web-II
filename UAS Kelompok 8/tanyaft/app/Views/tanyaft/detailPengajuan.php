<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="card content flex-grow-1 p-3 shadow" style="margin-top: 100px;">
    <div class="d-flex flex-row align-items-center">
        <img src="/img/arrow.png" style="width: 30px;" alt="">
        <a href="<?= base_url('/tanyaft') ?>" class="text-decoration-none"><h6 class="fw-bold m-0 ms-2" style="color: deepskyblue;">Kembali</h6></a>
    </div>
    <hr>
    <header class="d-flex flex-row justify-content-center">
        <div>
            <h4 class="fw-bold mb-5">Detail Pengajuan Surat Rekomendasi Mahasiswa</h4>
        </div>    
    </header>
    <section class="d-flex flex-column">
        <div class="d-flex flex-row">
            <div class="flex-grow-1 me-3">
                <label class="fw-bold" for="nama">ID Pengajuan</label> 
                <input class="form-control mb-4 bg-body-secondary" type="text" name="id_pengajuan" placeholder="" value="<?= $pengajuan["id"] ?>" disabled>
            </div>
            <div>
                <label class="fw-bold" for="status_pengajuan">Status Pengajuan</label> 
                <p class="approved-button">Disetujui</p>
            </div> 
        </div>
        <div class="d-flex flex-row">
            <div class="flex-grow-1 me-3">
                <label class="fw-bold" for="tgl_pengajuan">Tanggal Pengajuan</label> 
                <input class="form-control mb-4 bg-body-secondary" type="text" name="tgl_pengajuan" placeholder="" value="<?= $pengajuan["created_at"] ?>" disabled>
            </div>
            <div class="flex-grow-1">
                <label class="fw-bold" for="nama_lengkap">Nama Lengkap</label> 
                <input class="form-control mb-4 bg-body-secondary" type="text" name="nama_lengkap" placeholder="" value="<?= $pengajuan["nama"] ?>" disabled>
            </div>
        </div>
        <div class="d-flex flex-row">
            <div class="flex-grow-1 me-3">
                <label class="fw-bold" for="nim">NIM</label> 
                <input class="form-control mb-4 bg-body-secondary" type="text" name="nim" placeholder="" value="2210817110001" disabled>
            </div>
            <div class="flex-grow-1">
                <label class="fw-bold" for="program_studi">Program Studi</label> 
                <input class="form-control mb-4 bg-body-secondary" type="text" name="program_studi" placeholder="" value="Teknologi Informasi" disabled>
            </div>
        </div>
        <div class="d-flex flex-row">
            <div class="flex-grow-1 me-3">
                <label class="fw-bold" for="pertanyaan">Pertanyaan</label> 
                <input class="form-control mb-4 bg-body-secondary" type="text" name="pertanyaan" placeholder="" value="<?= $pengajuan["pertanyaan"] ?>" disabled>
            </div>
            <div class="flex-grow-1">
                <label class="fw-bold" for="berkas_pendukung">Berkas Pendukung</label>
                <a href="<?= base_url('') ?>" class="form-control mb-4 bg-body-secondary">Cek File</a>
            </div>

        </div>
    </section>
</div>

<?= $this->endSection() ?>
