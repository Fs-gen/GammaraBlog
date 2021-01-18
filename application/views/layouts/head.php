<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/9/9a/Kementerian_Agama_new_logo.png" type="image/gif" sizes="16x16">
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/') ?>fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">
    <title>Kantor Urusan Agama Kec. Cenrana</title>
</head>

<body>
    <div class="mx-0 my-0 w-100 d-flex bg-dark">
        <div class="text-light p-3 mr-auto" style="font-size:13px;" id="clock-wrapper"></div>
        <!-- <div class="p-3">test</div> -->
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success mt-0 p-2">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img class="mr-3" src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Kementerian_Agama_new_logo.png" width="50" alt="" srcset=""> <b>KUA Cenrana Maros</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav mr-auto"></div>
                <ul class="navbar-nav mr-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url() ?>">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Data
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Grafik Nikah Dan Rujuk</a>
                            <a class="dropdown-item" href="<?= base_url('Home/data_kua') ?>">Data KUA</a>
                            <!-- <a class="dropdown-item" href="#">Data 1</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Info Pendaftaran
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?= base_url('Home/info_pendaftaran') ?>">Kehendak Nikah</a>
                            <a class="dropdown-item" href="<?= base_url('Home/info_pendaftaran_haji') ?>">Pendaftaran Haji</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home/pelayanan_kua') ?>">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://gammaratanralili.com" target="_blank">Blog</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!-- Set up your carousel -->
    <div class="owl-carousel text-dark">
        <div><img src="<?= base_url('assets') ?>/img/1.jpeg" alt="" srcset=""></div>
        <div><img src="<?= base_url('assets') ?>/img/2.jpeg" alt="" srcset=""></div>
        <div><img src="<?= base_url('assets') ?>/img/3.jpeg" alt="" srcset=""></div>
        <div><img src="<?= base_url('assets') ?>/img/4.jpeg" alt="" srcset=""></div>
        <div><img src="<?= base_url('assets') ?>/img/5.jpg" alt="" srcset=""></div>
        <div><img src="<?= base_url('assets') ?>/img/6.jpg" alt="" srcset=""></div>
        <div><img src="<?= base_url('assets') ?>/img/7.jpg" alt="" srcset=""></div>
    </div>