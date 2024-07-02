<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="card content flex-grow-1 p-3 shadow bg-light" style="margin-top: 20px;">
            <div class="d-flex flex-row" style="align-items: center;">
                <svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/></svg>
                <a href="<?= base_url('/tanyaft') ?>" style="text-decoration: none;"><h6 class=" fw-bold m-0" style="color:deepskyblue;">Kembali</h6></a>
            </div>
            <hr>
            <header class="d-flex flex-row justify-content-center">
                <div class="align-content-center">
                    <h4 class="fw-bold mb-5">Tanggapan Tanya FT</h4>
                </div>    
            </header>
            <section class="d-flex flex-column">
                <div class="d-flex flex-row">
                    <p>Pertanyaan </p>
                    <p style="margin-left: 20px; margin-right:20px;">:</p>
                    <p><?= $pengajuan["pertanyaan"] ?></p>
               </div>

               <div class="d-flex flex-row">
                <div style="margin-right: 130px;">
                </div>
                <a href="<?= base_url($pengajuan['bukti_dukung']) ?>" class="form-control mb-4 bg-body-secondary text-primary">Cek File</a>
               </div>
               <div class="d-flex flex-row">
                    <p>Jawaban </p>
                    <p style="margin-left: 35px; margin-right:19px;">:</p>
                    <p>Website layanan baru FT ULM dirancang untuk memberikan akses yang mudah dan cepat bagi mahasiswa, dosen, dan staf untuk mengakses berbagai layanan akademik dan administratif. Dengan antarmuka yang responsif dan ramah pengguna, pengguna dapat dengan mudah mengajukan permohonan, mengakses informasi akademik, memantau status pengajuan, dan berinteraksi dengan berbagai fitur lainnya secara efisien.</p>
               </div>
            </section>
        </div>
<?= $this->endSection() ?>