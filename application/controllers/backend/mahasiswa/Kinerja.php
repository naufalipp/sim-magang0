<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Kinerja extends CI_Controller
{
    public function index()
    {
        $this->load->view('backend/mahasiswa/templates/header');
        $this->load->view('backend/mahasiswa/templates/sidebar');
        $this->load->view('backend/mahasiswa/templates/navbar');
        $this->load->view('backend/mahasiswa/kinerja/index');
        $this->load->view('backend/mahasiswa/templates/footer');
    }
}
