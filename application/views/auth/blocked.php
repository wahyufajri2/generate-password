<!DOCTYPE html>
<html lang="en">
<style>
    /*======================
    404 page
=======================*/


    .page_404 {
        padding: 40px 0;
        background: #fff;
        font-family: 'Arvo', serif;
    }

    .page_404 img {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;

    }

    .four_zero_four_bg {
        background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
        height: 70vh;
        background-position: center;

    }


    .four_zero_four_bg h1 {
        font-size: 85px;
        font-weight: bold;
    }

    .four_zero_four_bg h3 {
        font-size: 80px;
        font-weight: bold;
    }

    .link_404 {
        color: #fff !important;
        padding: 10px 20px;
        background: rgb(65, 97, 0);
        margin: 20px 0;
        display: inline-block;
    }

    .link_404:hover {
        color: #000000 !important;
        background: rgb(170, 254, 0);
    }

    .contant_box_404 {
        margin-top: -50px;
    }
</style>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title; ?></title>
    <script src="https://fonts.googleapis.com/css?family=Arvo" crossorigin="anonymous"></script>
</head>

<body>
    <section class="page_404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="col-sm-10 col-sm-offset-1  text-center">
                        <div class="four_zero_four_bg">
                            <h1 class="text-center ">403</h1>


                        </div>

                        <div class="contant_box_404">
                            <h3 class="h2">
                                Akses Dilarang
                            </h3>

                            <p>Anda telah melanggar hak akses!</p>

                            <a href="<?= base_url('anggota'); ?>" class="link_404">Kembali ke Profil Saya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous"></script>

</html>