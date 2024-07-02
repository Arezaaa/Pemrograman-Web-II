<?= $this->extend('layout') ?>

<?= $this->section('content') ?>

    <div class="card content flex-grow-1 p-3 shadow" style="margin-top: 100px;">
        <div class="d-flex flex-row align-items-center">
            <svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/></svg>
            <a href="<?= base_url('/eresponse') ?>" style="text-decoration: none;">
                <h6 class="fw-bold m-0 text-info">Kembali</h6>
            </a>
        </div>
        <hr>
        <header class="d-flex flex-row mb-4">
    <img src="/images/Tanya FT.png" alt="" class="me-3">
    <div>
        <h4 class="fw-bold">Tanya FT</h4>
        <p class="text-secondary">Layanan ini disediakan untuk menyampaikan permohonan informasi publik terkait Fakultas Teknik ULM</p>
    </div>
    </header>
        <section class="mb-4">
            <h6 class="fw-bold">Deskripsi</h6>
            <p class="text-secondary">
                <strong>TANYA FT</strong> merupakan Layanan Informasi Publik FT ULM. Layanan ini disediakan bagi para pihak untuk menyampaikan permohonan informasi publik terkait Fakultas Teknik Universitas Lambung Mangkurat. Setiap permohonan dikelola oleh Unit Layanan Administrasi Terpadu FT ULM sebagai pelaksana tugas Pejabat Pengelola Informasi dan Dokumentasi (PPID) FT ULM dan didistribusikan kepada Kelompok Kerja (POKJA) yang berkaitan atau langsung kepada Pimpinan FT ULM secara daring (online). Jawaban/Tanggapan dapat dipantau melalui fitur status pengajuan.
            </p>
        </section>
        <section>
            <h6 class="fw-bold">Alur Pengajuan</h6>
            <ol class="text-secondary">
                <li>Mahasiswa mengisi data pertanyaan</li>
                <li>Admin Akademik akan menanggapi pertanyaan tersebut</li>
                <li>Tanggapan dapat dilihat melalui tabel pengajuan</li>
            </ol>
        </section>
        <section class="mt-3">
            <h6 class="fw-bold">Tabel Pengajuan</h6>
            <div class="d-flex justify-content-end mb-2">
                <a href="<?= base_url('pengajuan/tambah') ?>" class="btn btn-info text-white">+ Tambah Pengajuan</a>
            </div>
            <table class="table table-striped">
                <thead class="table-secondary">
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
                <?php if (empty($pengajuan)) : ?>
                    <tr>
                        <td colspan="6" class="text-center text-secondary">Belum Ada Pengajuan</td>
                    </tr>
                <?php else : ?>
                    <?php foreach ($pengajuan as $index => $item) : ?>
                        <tr>
                            <td><?= $index + 1 ?></td>
                            <td>TY-<?= $item['id'] ?></td>
                            <td>Tanya FT</td>
                            <td><?= $item['created_at'] ?></td>
                            <td><span class="badge bg-success-subtle text-success">Disetujui</span></td>
                            <td>   
                                <a href="<?= base_url('/pengajuan/detailPengajuan/' . $item['id']) ?>" class="btn btn-sm btn-primary text-white me-2"><svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16"><path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/><path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/></svg>
                                Detail</a>
                                <a href="<?= base_url('/pengajuan/tanggapan/' . $item['id']) ?>" class="btn btn-sm btn-info text-white"><svg class="m-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-2.5a2 2 0 0 0-1.6.8L8 14.333 6.1 11.8a2 2 0 0 0-1.6-.8H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2z"/><path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5M3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6m0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/></svg>                                
                                Tanggapan</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?php endif; ?>
        </section>
    </div>

<?= $this->endSection() ?>