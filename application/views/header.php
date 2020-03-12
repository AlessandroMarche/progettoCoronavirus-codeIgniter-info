<!DOCTYPE html>
<html>
<title>Progetto coronavirus</title>
<link rel="stylesheet" href="<?= base_url('/assets/css/bootstrap.min.css') ?>">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('/assets/images/logo.png') ?>" width="60" height="60" class="d-inline-block align-center ml-3" alt="">
            Coronavirus
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                   <?= anchor('go/index', "Pagina iniziale", 'class="nav-link"') ?>
                </li>
            </ul>
        </div>
    </nav>