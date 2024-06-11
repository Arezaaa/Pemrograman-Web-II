<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <input type="hidden" name="id" value="<?= $buku['id'] ?>" />
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" name="judul" class="form-control" 
            placeholder="Buku judul" value="<?= $buku['judul'] ?>" required>
    </div>
    <div class="form-group">
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" class="form-control" 
            placeholder="Buku penulis" value="<?= $buku['penulis'] ?>" required>
    </div>
    <div class="form-group">
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" class="form-control" 
            placeholder="Buku penerbit" value="<?= $buku['penerbit'] ?>" required>
    </div>
    <div class="form-group">
        <label for="tahun_terbit">Tahun Terbit</label>
        <input type="number" name="tahun_terbit" class="form-control" 
        placeholder="Tahun terbit" min="1800" max="2024" value="<?= $buku['tahun_terbit'] ?>" required>
    </div>
    <div class="form-group text-center">
        <button type="submit" class="btn btn-primary mx-auto mt-1">Simpan</button>
        <a href="<?= base_url('admin/buku') ?>" class="btn btn-secondary mx-auto mt-1">Kembali</a>
    </div>
</form>

<?= $this->endSection() ?>