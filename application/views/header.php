<!DOCTYPE html>
<html>

<head>
    <title>Progetto coronavirus</title>
    <link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css') ?>">
    <link rel="script" href="<?= base_url('/assets/js/bootstrap.min.js') ?>">
    <link rel="icon" href="<?= base_url('/assets/images/logo.png') ?>">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"></script>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-fixed-top">
        <a class="navbar-brand" href="<?= base_url('/index.php/go/index') ?>">
            <img src="<?= base_url('/assets/images/logo.png') ?>" width="60" height="60" class="d-inline-block align-center ml-3" alt="">
            Coronavirus
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <?= anchor('go/index', "Home", 'class="nav-link"') ?>
                </li>
                <li class="nav-item">
                    <?= anchor('mappa/index', "Mappa", 'class="nav-link"') ?>
                </li>
                <li class="nav-item">
                    <?= anchor('storico/index', "Storico", 'class="nav-link"') ?>
                </li>
            </ul>
        </div>
    </nav>
</head>

<body>