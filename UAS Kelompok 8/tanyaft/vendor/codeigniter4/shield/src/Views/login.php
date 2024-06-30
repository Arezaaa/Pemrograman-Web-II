<?= $this->extend(config('Auth')->views['layout']) ?>

<?= $this->section('title') ?><?= lang('Auth.login') ?><?= $this->endSection() ?>

<?= $this->section('main') ?>

<div class="container-fluid min-vh-100 d-flex">
    <div class="row w-100">
        <!-- Image Section -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
            <img src="<?php echo base_url('images/hardhatft.png'); ?>" class="img-fluid d-block mx-auto h-100" alt="Helmets">
        </div>
        
        <!-- Login Form Section -->
        <div class="col-md-6 d-flex align-items-center justify-content-center bg-white">
            <div class="p-4 w-100" style="max-width: 500px;">
                <div class="d-flex align-items-center mb-4">
                    <img src="<?php echo base_url('images/logo_ulm.png'); ?>" class="img-fluid me-3" alt="Logo" width="70" height="auto">
                    <div>
                        <p class="fs-4 fw-bold mb-0"><?= lang('Auth.fakultas') ?></p>
                        <p class="fs-4  mb-0 text-secondary"><?= lang('Auth.universitas') ?></p>
                    </div>
                </div>
                <p class="text-center fs-5 fw-bold mb-1"><?= lang('Auth.loginMsg1') ?></p>
                <p class="text-center text-secondary fs-6"><?= lang('Auth.loginMsg2') ?></p>

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

                <?php if (session('message') !== null) : ?>
                    <div class="alert alert-success fs-6" role="alert"><?= session('message') ?></div>
                <?php endif ?>

                <form action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field() ?>

                    <!-- Username -->
                    <div class="mb-3">
                        <label for="floatingUsernameInput" class="form-label fw-bold fs-5"><?= lang('Auth.username') ?></label>
                        <input type="text" class="form-control form-control-lg fs-6" id="floatingUsernameInput" name="username" inputmode="username" autocomplete="username" placeholder="<?= lang('Auth.usernameInput') ?>" value="<?= old('username') ?>" required />
                    </div>

                    <!-- Email 
                    <div class="mb-3">
                        <label for="floatingEmailInput" class="form-label fw-bold fs-5"><?= lang('Auth.email') ?></label>
                        <input type="email" class="form-control form-control-lg fs-6" id="floatingEmailInput" name="email" inputmode="email" autocomplete="email" placeholder="<?= lang('Auth.emailInput') ?>" value="<?= old('email') ?>" required />
                    </div>
                    -->

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="floatingPasswordInput" class="form-label fw-bold fs-5"><?= lang('Auth.password') ?></label>
                        <div class="input-group">
                            <input type="password" class="form-control form-control-lg fs-6" id="floatingPasswordInput" name="password" inputmode="text" autocomplete="new-password" placeholder="<?= lang('Auth.passwordInput') ?>" required />
                            <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" id="togglePasswordIcon" class="bi bi-eye-slash" viewBox="0 0 16 16"> <path d="M13.359 11.238C15.06 9.72 16 8 16 8s-3-5.5-8-5.5a7 7 0 0 0-2.79.588l.77.771A6 6 0 0 1 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755q-.247.248-.517.486z"/> <path d="M11.297 9.176a3.5 3.5 0 0 0-4.474-4.474l.823.823a2.5 2.5 0 0 1 2.829 2.829zm-2.943 1.299.822.822a3.5 3.5 0 0 1-4.474-4.474l.823.823a2.5 2.5 0 0 0 2.829 2.829"/> <path d="M3.35 5.47q-.27.24-.518.487A13 13 0 0 0 1.172 8l.195.288c.335.48.83 1.12 1.465 1.755C4.121 11.332 5.881 12.5 8 12.5c.716 0 1.39-.133 2.02-.36l.77.772A7 7 0 0 1 8 13.5C3 13.5 0 8 0 8s.939-1.721 2.641-3.238l.708.709zm10.296 8.884-12-12 .708-.708 12 12z"/> </svg>
                        </button>
                        </div>

                        <!-- Forgot Password -->
                        <?php if (setting('Auth.allowMagicLinkLogins')) : ?>
                            <p class="text-end fs-6"><a class="text-secondary text-decoration-none" href="<?= url_to('magic-link') ?>"><?= lang('Auth.forgotPassword') ?></a></p>
                        <?php endif ?>
                    </div>
                    
                    <!-- Remember me -->
                    <?php if (setting('Auth.sessionConfig')['allowRemembering']): ?>
                        <div class="form-check mb-3">
                            <input type="checkbox" name="remember" class="form-check-input fs-6" <?php if (old('remember')): ?> checked<?php endif ?>>
                            <label class="form-check-label fs-6"><?= lang('Auth.rememberMe') ?></label>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Login -->
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary btn-lg fs-5 text-white"><?= lang('Auth.login') ?></button>
                    </div>
                    
                    <!-- Register -->
                    <?php if (setting('Auth.allowRegistration')) : ?>
                        <p class="text-center text-secondary fs-6"><?= lang('Auth.needAccount') ?> <a class="fw-bold text-black text-decoration-none" href="<?= url_to('register') ?>"><?= lang('Auth.register') ?></a></p>
                    <?php endif ?>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    const togglePassword = document.getElementById('togglePassword');
    const togglePasswordIcon = document.getElementById('togglePasswordIcon');
    const passwordInput = document.getElementById('floatingPasswordInput');

    togglePassword.addEventListener('click', function() {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
    });
</script>

<?= $this->endSection() ?>
