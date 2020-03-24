<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Benvenuto</h1>
        <p class="lead">In questio sito potrai trovare molte informazioni utili riguardo al virus COVID-19 in Italia</p>
    </div>
</div>
<div class="container">
    <div class="card">
        <div class="card-header text-center">
            <h4>Andamento nazionale</h4>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-4">
                        <p class="font-weight-bold text-center">
                            <h2> Totale casi: <?= $nationalTrend->totale_casi ?> </h2>
                        </p>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold text-center">
                            <h2>Deceduti: <?= $nationalTrend->deceduti ?></h2>
                        </p>
                    </div>
                </div>
            </div>

            <footer class="blockquote-footer">Dati aggiornati il <?= date("d/m/Y", strtotime($nationalTrend->data)) ?> alle <?= date("H:i", strtotime($nationalTrend->data)) ?> </footer>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h4>Informazioni complete</h4>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-4">
                        <p class="font-weight-bold">Totale casi: <?= $nationalTrend->totale_casi ?></p>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold">Deceduti: <?= $nationalTrend->deceduti ?></p>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-4">
                        <p class="font-weight-bold">In ospedale: <?= $nationalTrend->totale_ospedalizzati ?></p>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold">In terapia intensiva: <?= $nationalTrend->terapia_intensiva ?></p>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-4">
                        <p class="font-weight-bold">Ricoverati con sintomi <?= $nationalTrend->ricoverati_con_sintomi ?></p>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold">In insolamento domiciliare: <?= $nationalTrend->isolamento_domiciliare ?></p>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-4">
                        <p class="font-weight-bold">Nuovi casi: <?= $nationalTrend->nuovi_attualmente_positivi ?></p>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold">Dimessi guariti: <?= $nationalTrend->dimessi_guariti ?></p>
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="col-4">
                        <p class="font-weight-bold">Tamponi effettuati: <?= $nationalTrend->tamponi ?></p>
                    </div>
                    <div class="col-4">
                        <p class="font-weight-bold"></p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 text-center">
                        <a href="<?= base_url('index.php/storico') ?>">
                            <button type="button" class="btn btn-outline-info">Vedi storico</button>
                        </a>
                    </div>

                </div>
            </div>

            <footer class="blockquote-footer">Dati aggiornati il <?= date("d/m/Y", strtotime($nationalTrend->data)) ?> alle <?= date("H:i", strtotime($nationalTrend->data)) ?> </footer>
        </div>
    </div>
</div>