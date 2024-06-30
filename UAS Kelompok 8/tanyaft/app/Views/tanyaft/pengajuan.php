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
            <h4 class="fw-bold mb-4">Tambah Pengajuan Tanya FT</h4>
        </div>    
    </header>
    <section class="d-flex flex-column">
        <?php if(session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <?php foreach(session()->getFlashdata('errors') as $error): ?>
                    <p><?= $error ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        <?php if(session()->getFlashdata('message')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('message') ?>
            </div>
        <?php endif; ?>
        <form action="<?= base_url('/pengajuan/submit') ?>" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="mb-3">
                <label for="nama" class="form-label fw-bold">Nama Lengkap <span id="username-asterisk" class="required-asterisk">*</span></label>
                <input type="text" class="form-control bg-body-secondary" id="nama" name="nama" placeholder="" required>
                <div class="invalid-feedback">
                    Nama lengkap harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label fw-bold">NIM <span id="nim-asterisk" class="required-asterisk">*</span></label>
                <input type="text" class="form-control bg-body-secondary" id="nim" name="nim" placeholder="" required>
                <div class="invalid-feedback">
                    NIM harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label for="program_studi" class="form-label fw-bold">Program Studi <span id="prodi-asterisk" class="required-asterisk">*</span></label>
                <select class="form-select bg-body-secondary" id="program_studi" name="program_studi" required>
                    <option value="" disabled selected>Pilih Program Studi</option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                </select>
                <div class="invalid-feedback">
                    Program studi harus diisi.
                </div>
            </div>

            <div class="mb-3">
                <label for="pertanyaan" class="form-label fw-bold">Pertanyaan <span id="pertanyaan-asterisk" class="required-asterisk">*</span></label>
                <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="7" placeholder="Masukkan pertanyaan" required></textarea>
                <div class="invalid-feedback">
                    Pertanyaan harus diisi.
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold d-block">Berkas Pendukung</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="fileInput" name="berkas_pendukung" accept=".jpg,.jpeg,.png" onchange="updateFileName()" required>
                    <button class="btn btn-info text-white" type="button" onclick="document.getElementById('fileInput').click();">Choose File</button>
                </div>
                <div class="invalid-feedback">
                    Berkas pendukung harus diunggah (format: jpg, jpeg, png).
                </div>
                <span class="text-secondary small" style="font-style: italic;">* Upload file dengan format jpg, png, jpeg maksimal 2 MB</span>
            </div>
            
            <div class="d-flex justify-content-end mt-4">
                <button type="reset" class="btn btn-outline-secondary me-3" style="width: 150px;">Batal</button>
                <button type="submit" class="btn btn-primary" style="width: 150px;">Kirim</button>
            </div>
        </form>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const fields = [
            {input: 'nama', asterisk: 'username-asterisk'},
            {input: 'nim', asterisk: 'nim-asterisk'},
            {input: 'program_studi', asterisk: 'prodi-asterisk'},
            {input: 'pertanyaan', asterisk: 'pertanyaan-asterisk'},
        ];

        fields.forEach(field => {
            const inputElement = document.getElementById(field.input);
            const asteriskElement = document.getElementById(field.asterisk);

            inputElement.addEventListener('input', function() {
                if (inputElement.value.trim() === '') {
                    asteriskElement.classList.remove('hidden');
                } else {
                    asteriskElement.classList.add('hidden');
                }
            });

            // Initial check in case the field is pre-filled
            if (inputElement.value.trim() !== '') {
                asteriskElement.classList.add('hidden');
            }
        });
    });
</script>

<?= $this->endSection() ?>
