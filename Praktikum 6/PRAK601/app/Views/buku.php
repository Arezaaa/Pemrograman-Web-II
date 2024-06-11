<?= $this->extend('layout/post_layout') ?>

<?= $this->section('content') ?>

<div class="container">
    <?php foreach ($bukus as $buku) : ?>
        <div class="row">
            <div class="col-md-12 mb-2 card">
                <div class="card-body">
                    <h5 class="h5"><a href="/buku/<?= $buku['id'] ?>"><?= $buku['judul'] ?></a></h5>
                    <p><?= $buku['penulis'] ?>, <?= $buku['penerbit'] ?> (<?= $buku['tahun_terbit'] ?>)</p>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>

<?= $this->endSection() ?>