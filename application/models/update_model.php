<?php
class Update_Model extends CI_Model
{
    public function isUpdated()
    {
        $nationalUpdated =  $this->isNationalUpdated();
        if (!$nationalUpdated) {
            $this->updateNational();
            return true;
        }
        return false;
    }

    private function isNationalUpdated()
    {
        //get lastest on db
        $lastSaved = $this->getMostRecentNationalData();
        //get lastest on internet
        $json = file_get_contents('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-andamento-nazionale.json');
        $dati = json_decode($json);
        $lastOnline = end($dati);
        if ((new DateTime($lastOnline->data))->format('Y-m-d') == (new DateTime($lastOnline->data))->format('Y-m-d'))
            return true;
        return false;
    }

    private function getMostRecentNationalData()
    {
        $queryString = "SELECT * FROM nazionale WHERE data = (SELECT MAX(data) FROM nazionale)";
        $query = $this->db->query($queryString);

        return $query->row();
    }

    private function updateNational()
    {
        $json = file_get_contents('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-andamento-nazionale.json');
        $dati = json_decode($json);
        foreach ($dati as $dato) {
            if (!$this->alreadyExistsDateNational($dato->data)) {
                $query = $this->db->query("INSERT INTO `nazionale` (`data`, `ricoverati_con_sintomi`, `terapia_intensiva`, `totale_ospedalizzati`, `isolamento_domicialiare`, `totale_attualmente_positivi`, `nuovi_attualmente_positivi`, `dimessi_guariti`, `deceduti`, `totale_casi`, `tamponi`) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);", array(
                    (new DateTime($dato->data))->format('Y-m-d'), $dato->ricoverati_con_sintomi, $dato->terapia_intensiva, $dato->totale_ospedalizzati, $dato->isolamento_domiciliare, $dato->totale_attualmente_positivi, $dato->nuovi_attualmente_positivi, $dato->dimessi_guariti, $dato->deceduti, $dato->totale_casi, $dato->tamponi,
                ));
            }
        }
    }

    private function alreadyExistsDateNational($data)
    {
        $query = $this->db->query(
            "SELECT data FROM nazionale WHERE data = ?;",
            array((new DateTime($data))->format(('Y-m-d')))
        );
        return ($query->row() != null);
    }
}
