<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Go extends CI_Controller
{

    public function index()
    {
        //get raw data from github
        $json = file_get_contents('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-andamento-nazionale.json');
        $obj = json_decode($json);
        $data['nationalTrend'] = end($obj);

        $this->load->view('header');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }
}
