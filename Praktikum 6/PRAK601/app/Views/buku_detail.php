<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>
<h2 class="h2"><?= $buku['judul'] ?></h2>
<div class="mb-5">
    <span><?= $buku['tahun_terbit'] ?></span>
</div>

<?= $this->endSection() ?>