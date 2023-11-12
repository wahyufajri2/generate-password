<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style-log.css">
    <title>Halaman Daftar</title>
</head>

<body>
    <section>
        <div class="form-box-reg">
            <div class="form-value">
                <form action="">
                    <h2>Daftar Akun</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="text" required>
                        <label for="">Nama Lengkap</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Alamat Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Kata Sandi</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Ulangi Kata Sandi</label>
                    </div>
                    <button>Daftar</button>
                    <div class="forgot">
                        <a href="#">Lupa Kata Sandi</a>
                    </div>
                    <div class="register">
                        <p>Sudah punya akun? <a href="<?= base_url('auth'); ?>">Masuk!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>