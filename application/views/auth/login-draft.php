<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="<?= base_url('assets/'); ?>img/logo-unisa.png" type="image/x-icon">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style-log.css">

</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">

                <?= $this->session->flashdata('mesaage'); ?>
                <form class="user" method="post" action="<?= base_url('auth'); ?>">
                    <h2>Masuk Akun</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" id="email" name="email" aria-describedby="emailHelp" value="<?php if (isset($_COOKIE["email"])) {
                                                                                                            echo $_COOKIE["email"];
                                                                                                        } else {
                                                                                                            echo set_value('email');
                                                                                                        } ?>" required>
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" id="password" name="password" value="<?php if (isset($_COOKIE["password"])) {
                                                                                        echo $_COOKIE["password"];
                                                                                    } ?>" required>
                        <label for="">Kata Sandi</label>
                    </div>
                    <div class="remember">
                        <label for=""><input type="checkbox">Ingatkan Saya</label>
                    </div>
                    <button type="submit">Masuk</button>
                    <div class="forgot">
                        <a href="#">Lupa Kata Sandi</a>
                    </div>
                    <div class="register">
                        <p>Belum punya akun? <a href="<?= base_url('auth/registration'); ?>">Daftar!</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>