<?php
$regioni = array(
    'Abruzzo',
    'Basilicata',
    'Calabria',
    'Campania',
    'Emilia Romagna',
    'Friuli Venezia Giulia',
    'Lazio',
    'Liguria',
    'Lombardia',
    'Marche',
    'Molise',
    'Piemonte',
    'Puglia',
    'Sardegna',
    'Sicilia',
    'Toscana',
    'Trentino Alto Adige',
    'Umbria',
    'Valle d\'Aosta',
    'Veneto'
);
?>
<div class="container mt-5 d-flex" style="height: 600px;">
    <div class="row my-auto w-100 justify-content-center">
        <div class="col-6 text-center">
            <h3 class="text-info">SELEZIONA UNA REGIONE</h3>
            <form method="post" action="<?= base_url('/index.php/storico/regionale') ?>">
                <select class="custom-select custom-select-lg mb-3 mt-3" name='regione'>
                    <option <? $regione == "" ? 'selected' : '' ?>>Nessuna selezionata</option>
                    <?php
                    for ($i = 0; $i < count($regioni); $i++) {
                        echo '<option value="' . $regioni[$i] . ($regione == $regioni[$i] ? '" selected' : '"') . '>' . $regioni[$i] . '</option>';
                    }
                    ?>
                </select>
                <button class="btn btn-info btn-lg" type="submit">
                    Vai a
                    <i class="fas fa-chevron-right"></i>
                </button>
            </form>
        </div>
    </div>
</div>