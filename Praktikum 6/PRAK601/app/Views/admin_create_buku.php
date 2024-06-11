<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" class="form-control" placeholder="Buku judul" required oninvalid="this.setCustomValidity('Judul harus diisi dan berupa string')" oninput="this.setCustomValidity('')">
    </div>
    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" class="form-control" placeholder="Buku penulis" required oninvalid="this.setCustomValidity('Penulis harus diisi dan berupa string')" oninput="this.setCustomValidity('')">
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" placeholder="Buku penerbit" required oninvalid="this.setCustomValidity('Penerbit harus diisi dan berupa string')" oninput="this.setCustomValidity('')">
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control" 
            placeholder="Tahun terbit" min="1800" max="2024" required oninvalid="this.setCustomValidity('Tahun Terbit harus diisi dan berupa angka, angka harus lebih besar dari 1800 dan lebih kecil dari 2024')" oninput="this.setCustomValidity('')">
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary mx-auto mt-1">Tambah</button>
        <a href="<?= base_url('admin/buku') ?>" class="btn btn-secondary mx-auto mt-1">Kembali</a>
    </div>
</form>

<?= $this->endSection() ?>