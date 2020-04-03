<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tampil_Kinerja extends CI_Controller
{
    public function index()
    {
        $this->load->view('backend/mahasiswa/templates/header');
        $this->load->view('backend/mahasiswa/templates/sidebar');
        $this->load->view('backend/mahasiswa/templates/navbar');
        $this->load->view('backend/mahasiswa/kinerja/tampil_kinerja/index');
        $this->load->view('backend/mahasiswa/templates/footer');
    }
}
