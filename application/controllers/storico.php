<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Storico extends CI_Controller
{

    public function index()
    {
        $json = file_get_contents('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-andamento-nazionale.json');
        $dati = json_decode($json);
        $data['dati'] = array_reverse($dati);
        $data['json'] = $json;

        $haveBeenUpdated = $this->update_model->isUpdated();
        $data['haveBeenUpdated'] = $haveBeenUpdated;

        $this->load->view('header');
        $this->load->view('storico/home', $data);
        $this->load->view('footer');
    }
}
