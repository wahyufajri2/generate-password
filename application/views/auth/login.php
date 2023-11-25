<div class="background"></div>
<div class="container">
    <div class="content">
        <h2 class="logo"><img src="<?= base_url('assets/'); ?>img/logo unisa.png" alt="">UNISA Yogyakarta</h2>
        <div class="text-sci">
            <h2>Selamat Datang!<br><span>Di Sistem Generate Password WiFi Universitas 'Aisyiyah Yogyakarta</span></h2>
            <p>Ini adalah sistem generate password WiFi</p>

            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="logreg-box">
            <div class="form-box login">
                <form action="#">
                    <h2>Masuk</h2>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" id="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" id="password" required>
                        <label for="password">Kata Sandi</label>
                    </div>

                    <div class="remember-forgot">
                        <label for=""><input type="checkbox">Ingatkan Saya!</label>
                        <a href="#">Lupa Password?</a>
                    </div>

                    <button type="submit" class="btn">Masuk</button>

                    <div class="login-register">
                        <p>Belum punya akun? <a href="#" class="register-link">Daftar</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <form action="#">
                    <h2>Daftar Akun</h2>

                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="text" id="text" required>
                        <label for="text">Nama Lengkap</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" name="email" id="email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" id="password" required>
                        <label for="password">Kata Sandi</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="fa-solid fa-lock"></i></span>
                        <input type="password" name="password" id="password" required>
                        <label for="password">Ulangi Kata Sandi</label>
                    </div>

                    <button type="submit" class="btn">Daftar</button>

                    <div class="login-register">
                        <p>Sudah punya akun? <a href="#" class="login-link">Masuk</a></p>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>