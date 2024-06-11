<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($bukus as $buku): ?>
            <tr>
                <td><?= $buku['id'] ?></td>
                <td><?= $buku['judul'] ?></td>
                <td><?= $buku['penulis'] ?></td>
                <td><?= $buku['penerbit'] ?></td>
                <td><?= $buku['tahun_terbit'] ?></td>
                <td>
                    <a href="<?= base_url('admin/buku/'.$buku['id'].'/preview') ?>" class="btn btn-sm btn-outline-secondary">View</a>
                    <a href="<?= base_url('admin/buku/'.$buku['id'].'/edit') ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <a href="#" data-href="<?= base_url('admin/buku/'.$buku['id'].'/delete') ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2">Apakah kamu yakin?</h2>
                <p>Data akan dihapus dan hilang selamanya</p>
            </div>
            <div class="modal-footer">
                <a href="#" role="button" id="delete-button" class="btn btn-danger">Hapus</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmToDelete(el){
        $("#delete-button").attr("href", el.dataset.href);
        $("#confirm-dialog").modal('show');
    }
</script>

<?= $this->endSection() ?>