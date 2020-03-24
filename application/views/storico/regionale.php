<div class="container">

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-10">
                <h2 class="font-weight-bold text-center">DATI REGIONE: <?= $regione ?></h2>
            </div>
        </div>
    </div>

    <!--
    AGGIORNA DB REGIONALE
    <?php if ($haveBeenUpdated == true) { ?>
        <div class="alert alert-success alert-dismissible fade show mt-5" role="alert">
            <strong>Successo!</strong> I tuoi dati nel database in locale non erano aggiornati: ora lo sono!
        </div>
    <?php } ?>
    -->

    <canvas id="nationalChart" class="mt-5 mb-3"></canvas>

    <script>
        localStorage.setItem('regionalData', `<?= $json ?>`)
    </script>
    <script src="<?= base_url('/scripts/storicoRegionale.js') ?>"></script>

    <?php foreach ($dati as $dato) { ?>
        <div class="card mt-5">
            <div class="card-header">
                <?= date("d/m/Y", strtotime($dato->data)) ?> alle <?= date("H:i", strtotime($dato->data)) ?>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="row justify-content-around">
                        <div class="col-4">
                            <p class="font-weight-bold">Totale casi: <?= $dato->totale_casi ?></p>
                        </div>
                        <div class="col-4">
                            <p class="font-weight-bold">Deceduti: <?= $dato->deceduti ?></p>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-4">
                            <p class="font-weight-bold">In ospedale: <?= $dato->totale_ospedalizzati ?></p>
                        </div>
                        <div class="col-4">
                            <p class="font-weight-bold">In terapia intensiva: <?= $dato->terapia_intensiva ?></p>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-4">
                            <p class="font-weight-bold">Ricoverati con sintomi <?= $dato->ricoverati_con_sintomi ?></p>
                        </div>
                        <div class="col-4">
                            <p class="font-weight-bold">In insolamento domiciliare: <?= $dato->isolamento_domiciliare ?></p>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-4">
                            <p class="font-weight-bold">Nuovi casi: <?= $dato->nuovi_attualmente_positivi ?></p>
                        </div>
                        <div class="col-4">
                            <p class="font-weight-bold">Dimessi guariti: <?= $dato->dimessi_guariti ?></p>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-4">
                            <p class="font-weight-bold">Tamponi effettuati: <?= $dato->tamponi ?></p>
                        </div>
                        <div class="col-4">
                            <p class="font-weight-bold"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <? } ?>
</div>