<div class="background-custom"></div>
<div class="container-custom">
    <div class="content-custom">
        <h2 class="logo-custom"><img src="<?= base_url('assets/'); ?>assets/img/logo-unisa.png" alt="">UNISA Yogyakarta</h2>
        <div class="text-sci-custom">
            <h2>Selamat Datang!<br><span>Di Sistem Generate Password WiFi <br> Universitas 'Aisyiyah Yogyakarta</span></h2>
            <p>Ini adalah sistem generate password WiFi</p>

            <div class="social-icons-custom">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="logreg-box">
            <?= $this->session->flashdata('message'); ?>
            <div class="form-box-custom login-custom">
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                    <h2>Masuk</h2>

                    <div class="input-box-custom">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="text" inputmode="email" name="email" id="email" aria-describedby="emailHelp" value="">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-box-custom">
                        <span href="#" id="showPassword" class="icon"><i class="fa-solid fa-eye-slash" id="icon"></i></span>
                        <input type="password" id="password" name="password" value="">
                        <label for="password">Kata Sandi</label>
                    </div>

                    <div class="remember-forgot">
                        <label for=""><input type="checkbox">Ingatkan Saya!</label>
                        <a href="#">Lupa Password?</a>
                    </div>

                    <button type="submit" class="btn-custom">
                        <i class="fa-solid fa-right-to-bracket"></i> Masuk
                    </button>

                    <div class="login-register">
                        <p>Belum punya akun? <a href="#" class="register-link">Daftar</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box-custom register-custom">
                <form class="user" method="post" action="<?= base_url('auth/registration'); ?>">
                    <h2>Daftar Akun</h2>

                    <div class="input-box-custom">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="text" id="name" name="name" value="<?= set_value('name'); ?>">
                        <?= form_error('name', '<small class="text-warning pl-3">', '</small>'); ?>
                        <label for="name">Nama Lengkap</label>
                    </div>
                    <div class="input-box-custom">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="text" inputmode="email" id="email" name="email" value="<?= set_value('email'); ?>">
                        <?= form_error('email', '<small class="text-warning pl-3">', '</small>'); ?>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-box-custom">
                        <span href="#" id="showPassword1" class="icon"><i class="fa-solid fa-eye-slash" id="icon"></i></span>
                        <input type="password" id="password1" name="password1" value="">
                        <?= form_error('password1', '<small class="text-warning pl-3">', '</small>'); ?>
                        <label for="password">Kata Sandi</label>
                    </div>
                    <div class="input-box-custom">
                        <span href="#" id="showPassword2" class="icon"><i class="fa-solid fa-eye-slash" id="icon"></i></span>
                        <input type="password" id="password2" name="password2">
                        <label for="password">Ulangi Kata Sandi</label>
                    </div>

                    <button type="submit" class="btn-custom">
                        <i class="fas fa-solid fa-arrow-right"></i> Daftar
                    </button>

                    <div class="login-register">
                        <p>Sudah punya akun? <a href="#" class="login-link">Masuk</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>