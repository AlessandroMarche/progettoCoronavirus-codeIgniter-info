<?php
class Utils_Model extends CI_Model
{
    public function getRegionalDataFromData($regione)
    {
        $this->regione = $regione;
        $json = file_get_contents('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-regioni.json');
        $dati = json_decode($json);

        $filteredData = array_filter($dati, function ($element) {
            if ($element->denominazione_regione == $this->regione)
                return true;
            return false;
        });

        return array(json_encode($filteredData), $filteredData);
    }
}
