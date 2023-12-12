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
            <div class="col-lg">
                Cek password berdasarkan ID
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
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-lg">
                Cek password berdasarkan kode panggil
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
            </div>
        </div>
        <hr>
    </div>
</main>