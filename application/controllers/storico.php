<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Storico extends CI_Controller
{

    public function nazionale()
    {
        $json = file_get_contents('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-andamento-nazionale.json');
        $dati = json_decode($json);
        $data['dati'] = array_reverse($dati);
        $data['json'] = $json;

        //$haveBeenUpdated = $this->update_model->isUpdated();
        $data['haveBeenUpdated'] = false; //$haveBeenUpdated;

        $this->load->view('header');
        $this->load->view('storico/nazionale', $data);
        $this->load->view('footer');
    }

    public function regionale()
    {
        $postData = $this->input->post();
        $regione = isset($postData['regione']) ? $postData['regione'] : "";
        if ($regione != "") {
            $datiRegione = $this->utils_model->getRegionalDataFromData($regione);
            $data['dati'] = array_reverse($datiRegione[1]);
            $data['json'] = $datiRegione[0];
            $data['regione'] = $regione;
        }

        $otherDatas['regione'] = $regione;

        $this->load->view('header');
        $this->load->view('storico/selezionaRegione', $otherDatas);
        if ($regione != "")
            $this->load->view('storico/regionale', $data);
        $this->load->view('footer');
    }
}
