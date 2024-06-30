<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

<div class="card content flex-grow-1 p-3 shadow" style="margin-top: 100px;">
    <div class="d-flex flex-row align-items-center">
        <svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/></svg>
        <a href="<?= base_url('/tanyaft') ?>" class="text-decoration-none"><h6 class="fw-bold m-0 ms-2" style="color: deepskyblue;">Kembali</h6></a>
    </div>
    <hr>
    <header class="d-flex flex-row justify-content-center">
        <div>
            <h4 class="fw-bold mb-5">Detail Pengajuan Surat Rekomendasi Mahasiswa</h4>
        </div>    
    </header>
    <section class="d-flex flex-column">
        <div class="row mb-4">
            <div class="col-md-6">
                <label class="fw-bold" for="id_pengajuan">ID Pengajuan</label> 
                <input class="form-control bg-body-secondary" type="text" name="id_pengajuan" value="<?= $pengajuan["id"] ?>" disabled>
            </div>
            <div class="col-md-6">
                <label class="fw-bold" for="status_pengajuan">Status Pengajuan</label><br> 
                <p class="badge bg-success-subtle text-success">Disetujui</p>
            </div> 
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <label class="fw-bold" for="tgl_pengajuan">Tanggal Pengajuan</label> 
                <input class="form-control bg-body-secondary" type="text" name="tgl_pengajuan" value="<?= $pengajuan["created_at"] ?>" disabled>
            </div>
            <div class="col-md-6">
                <label class="fw-bold" for="nama_lengkap">Nama Lengkap</label> 
                <input class="form-control bg-body-secondary" type="text" name="nama_lengkap" value="<?= $pengajuan["nama"] ?>" disabled>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <label class="fw-bold" for="nim">NIM</label> 
                <input class="form-control bg-body-secondary" type="text" name="nim" value="2210817110001" disabled>
            </div>
            <div class="col-md-6">
                <label class="fw-bold" for="program_studi">Program Studi</label> 
                <input class="form-control bg-body-secondary" type="text" name="program_studi" value="Teknologi Informasi" disabled>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-md-6">
                <label class="fw-bold" for="pertanyaan">Pertanyaan</label> 
                <input class="form-control bg-body-secondary" type="text" name="pertanyaan" value="<?= $pengajuan["pertanyaan"] ?>" disabled>
            </div>
            <div class="col-md-6">
                <label class="fw-bold" for="berkas_pendukung">Berkas Pendukung</label>
                <a href="<?= base_url('') ?>" class="form-control bg-body-secondary text-primary">Cek File</a>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection() ?>
