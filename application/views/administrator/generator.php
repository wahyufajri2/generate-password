<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4"><?= $title; ?></h1>
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
        <div class="row">
            <div class="col-lg d-flex justify-content-center"><b>Silakan melakukan generate username dan password!</b></div>
        </div>
        <div class="row">
            <div class="col-lg">

                <?= form_open_multipart('administrator/generator'); ?>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Jumlah User</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Enkripsi</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Masa Berlaku</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Kode Panggil</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-3">
                    <label for="tgl_kadaluwarsa" class="form-label">Tgl Kadaluwarsa</label>
                    <input type="date" class="form-control" id="tgl_kadaluwarsa">
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Generate</button>
                </div>

            </div>
        </div>
    </div>
</main>