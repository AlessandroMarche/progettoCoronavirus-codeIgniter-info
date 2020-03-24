<?php
class Mappa extends CI_Controller{
    public function index() {
        $this->load->view('header');
        $this->load->view('mappa/home');
        $this->load->view('footer');
    }
}
