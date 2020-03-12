<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Storico extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('storico/home');
        $this->load->view('footer');
    }

    public function nazionale()
    {
        $json = file_get_contents('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-andamento-nazionale.json');
        $dati = json_decode($json);
        $data['dati'] = $dati;
        $this->load->view('header');
        $this->load->view('storico/nazionale', $data);
        $this->load->view('footer');
    }
}
