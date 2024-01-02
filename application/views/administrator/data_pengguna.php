<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Cek Password Pengguna</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="<?= base_url('administrator'); ?>">
                    <?php foreach ($role as $rl) : ?>
                        <?php if ($rl['id'] == 1) : ?>
                            <span value="<?= $rl['id']; ?>"><?= $rl['role']; ?></span>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </a></li>
            <li class="breadcrumb-item active"><?= $title; ?></li>
        </ol>
        <hr>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="cekBerdasarkanID-tab" data-bs-toggle="tab" data-bs-target="#cekBerdasarkanID" type="button" role="tab" aria-controls="cekBerdasarkanID" aria-selected="true">Cek Berdasarkan ID</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cekBerdasarkanKodePanggil-tab" data-bs-toggle="tab" data-bs-target="#cekBerdasarkanKodePanggil" type="button" role="tab" aria-controls="cekBerdasarkanKodePanggil" aria-selected="false">Cek Berdasarkan Kode Panggil</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="cekBerdasarkanTanggalGenerate-tab" data-bs-toggle="tab" data-bs-target="#cekBerdasarkanTanggalGenerate" type="button" role="tab" aria-controls="cekBerdasarkanTanggalGenerate" aria-selected="false">Cek Berdasarkan Tanggal Generate</button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="cekBerdasarkanID" role="tabpanel" aria-labelledby="cekBerdasarkanID-tab">
                <div class="row mt-3">
                    <div class="col-lg">
                        <div class="marquee-container">
                            <div class="marquee-wrapper">
                                <span id="marqueeText" class="marquee-text">Silakan Cek Password berdasarkan ID</span>
                            </div>
                        </div>
                        <div class="row g-3 mt-1 align-items-center">
                            <div class="col-lg-2">
                                <label for="user_id" class="col-form-label"><b>User ID</b></label>
                            </div>
                            <div class="col-lg">
                                <input type="text" id="user_id" name="user_id" class="form-control">
                            </div>
                        </div>
                        <div class="row g-3 mt-1 align-items-center">
                            <div class="col-lg-2">
                                <label for="user_id" class="col-form-label"><b>Kode Enkripsi</b></label>
                            </div>
                            <div class="col-lg">
                                <input type="text" id="user_id" name="user_id" class="form-control">
                            </div>
                        </div>
                        <div class="row g-3 mt-1 align-items-center">
                            <div class="col-lg-2"></div>
                            <div class="col-lg">
                                <a type="button" class="btn btn-primary">Tampil Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="cekBerdasarkanKodePanggil" role="tabpanel" aria-labelledby="cekBerdasarkanKodePanggil-tab">
                <div class="row mt-3">
                    <div class="col-lg">
                        <div class="marquee-container">
                            <div class="marquee-wrapper">
                                <span id="marqueeText1" class="marquee-text">Silakan Cek Password Berdasarkan Kode Panggil</span>
                            </div>
                        </div>
                        <div class="row g-3 mt-1 align-items-center">
                            <div class="col-lg-2">
                                <label for="user_id" class="col-form-label"><b>Kode Panggil</b></label>
                            </div>
                            <div class="col-lg">
                                <input type="text" id="user_id" name="user_id" class="form-control">
                            </div>
                        </div>
                        <div class="row g-3 mt-1 align-items-center">
                            <div class="col-lg-2">
                                <label for="user_id" class="col-form-label"><b>Kode Enkripsi</b></label>
                            </div>
                            <div class="col-lg">
                                <input type="text" id="user_id" name="user_id" class="form-control">
                            </div>
                        </div>
                        <div class="row g-3 mt-1 align-items-center">
                            <div class="col-lg-2"></div>
                            <div class="col-lg">
                                <a type="button" class="btn btn-primary"> Tampil Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="cekBerdasarkanTanggalGenerate" role="tabpanel" aria-labelledby="cekBerdasarkanTanggalGenerate-tab">
                <div class="row mt-3">
                    <div class="col-lg">
                        <div class="marquee-container">
                            <div class="marquee-wrapper">
                                <span id="marqueeText2" class="marquee-text">Silakan Cek Password Berdasarkan Tanggal Generate</span>
                            </div>
                        </div>
                        <div class="row g-3 mt-1 align-items-center">
                            <div class="col-lg-2">
                                <label for="user_id" class="col-form-label"><b>Tanggal Generate</b></label>
                            </div>
                            <div class="col-lg">
                                <input type="text" id="user_id" name="user_id" class="form-control">
                            </div>
                        </div>
                        <div class="row g-3 mt-1 align-items-center">
                            <div class="col-lg-2">
                                <label for="user_id" class="col-form-label"><b>Kode Enkripsi</b></label>
                            </div>
                            <div class="col-lg">
                                <input type="text" id="user_id" name="user_id" class="form-control">
                            </div>
                        </div>
                        <div class="row g-3 mt-1 align-items-center">
                            <div class="col-lg-2"></div>
                            <div class="col-lg">
                                <a type="button" class="btn btn-primary"> Tampil Data</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>