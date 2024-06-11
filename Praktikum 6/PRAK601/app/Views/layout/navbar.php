<style>
    .navbar-nav .nav-item.active .nav-link {
    color: #fff;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav nav-underline">
                <li class="nav-item <?= (current_url() == base_url()) ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item <?= preg_match('/buku(?:\/[0-9]+)?/', current_url())? 'active' : '';?>">
                    <a class="nav-link" href="<?= base_url('buku')?>">Buku</a>
                </li>
                <li class="nav-item <?= (current_url() == base_url('admin/buku') && session()->get('logged_in') === TRUE) ? 'active' : ''; ?>">
                    <?php if(session()->get('logged_in') === TRUE): ?>
                        <a class="nav-link" href="<?= base_url('admin/buku') ?>">Admin</a>
                    <?php else: ?>
                        <a class="nav-link" href="<?= base_url('login') ?>" onclick="alert('Kamu harus login terlebih dahulu untuk mengakses page Admin.'); window.location.href = '<?= base_url('login') ?>'; return false;">Admin</a>
                        
                    <?php endif; ?>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto nav-underline">
                <?php if(session()->get('logged_in') === TRUE):?> 
                <li class="nav-item <?= (current_url() == base_url('/logout')) ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= base_url('/'); ?>/logout">Logout</a>
                </li>
                <?php else: ?>
                <li class="nav-item <?= (current_url() == base_url('/login')) ? 'active' : ''; ?>">
                    <a class="nav-link" href="<?= base_url(); ?>/login">Login</a>
                </li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</nav>