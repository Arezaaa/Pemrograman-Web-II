<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.useMagicLink') ?><?= $this->endSection() ?>

<?= $this->section('main') ?>

<div class="container-fluid min-vh-100 d-flex">
    <div class="row w-100">
        <!-- Image Section -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('images/hardhatft.png'); ?>" class="img-fluid d-block mx-auto h-100" alt="Helmets">
        </div>
        
        <!-- Magic Link Form Section -->
        <div class="col-md-6 d-flex align-items-center justify-content-center bg-white">
            <div class="p-4 w-100" style="max-width: 500px;">
                <div class="d-flex align-items-center mb-4">
                    <img src="<?php echo base_url('images/logo_ulm.png'); ?>" class="img-fluid me-3" alt="Logo" width="70" height="auto">
                    <div>
                        <p class="fs-4 fw-bold mb-0"><?= lang('Auth.fakultas') ?></p>
                        <p class="fs-4  mb-0 text-secondary"><?= lang('Auth.universitas') ?></p>
                    </div>
                </div>
                <p class="text-center fs-5 fw-bold mb-1"><?= lang('Auth.useMagicLink') ?></p>
                <p class="text-center text-secondary fs-6"><?= lang('Auth.magiclinkMsg') ?></p>

                <?php if (session('error') !== null) : ?>
                    <div class="alert alert-danger fs-6" role="alert"><?= session('error') ?></div>
                <?php elseif (session('errors') !== null) : ?>
                    <div class="alert alert-danger fs-6" role="alert">
                        <?php if (is_array(session('errors'))) : ?>
                            <?php foreach (session('errors') as $error) : ?>
                                <?= $error ?><br>
                            <?php endforeach ?>
                        <?php else : ?>
                            <?= session('errors') ?>
                        <?php endif ?>
                    </div>
                <?php endif ?>

                <form action="<?= url_to('magic-link') ?>" method="post">
                    <?= csrf_field() ?>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="floatingEmailInput" class="form-label fw-bold fs-5"><?= lang('Auth.email') ?></label>
                        <input type="email" class="form-control form-control-lg fs-6" id="floatingEmailInput" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.emailInput') ?>" value="<?= old('email', auth()->user()->email ?? null) ?>" required />
                    </div>

                    <!-- Send Magic Link -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary btn-lg fs-5 text-white"><?= lang('Auth.send') ?></button>
                    </div>
                </form>

                <p class="text-center text-secondary fs-6">Kembali ke <a class="fw-bold text-black text-decoration-none" href="<?= url_to('login') ?>"><?= lang('Auth.login') ?></a></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
