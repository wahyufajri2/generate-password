<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style-log.css">
    <title>Halaman Masuk</title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Masuk Akun</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Kata Sandi</label>
                    </div>
                    <div class="remember">
                        <label for=""><input type="checkbox">Ingatkan Saya</label>
                    </div>
                    <button>Log in</button>
                    <div class="forgot">
                        <a href="#">Lupa Kata Sandi</a>
                    </div>
                    <div class="register">
                        <p>Belum punya akun? <a href="#">Daftar!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>