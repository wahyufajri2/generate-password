<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Administrator</div>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-fw fa-solid fa-gauge-high"></i></div>
                        Dasbor
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-fw fa-solid fa-address-card"></i></div>
                        Data Pengguna
                    </a>
                    <a class="nav-link" href="#">
                        <div class="sb-nav-link-icon"><i class="fas fa-fw fa-solid fa-gears"></i></div>
                        Generator
                    </a>
                    <hr>
                    <a class="nav-link" href="<?= base_url('admin/myProfile'); ?>">
                        <div class="sb-nav-link-icon"><i class="fas fa-fw fa-solid fa-user"></i></div>
                        Profil Saya
                    </a>
                    <a class="nav-link" href="<?= base_url('auth/logout'); ?>" data-bs-toggle="modal" data-bs-target="#logoutModal">
                        <div class="sb-nav-link-icon"><i class="fas fa-fw fa-solid fa-right-from-bracket"></i></div>
                        Keluar
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Masuk sebagai:</div>
                <?php foreach ($role as $rl) : ?>
                    <span value="<?= $rl['id']; ?>"><?= $rl['role']; ?></span>
                <?php endforeach; ?>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">