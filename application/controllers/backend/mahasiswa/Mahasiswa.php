<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function index()
    {
        $this->load->view('backend/mahasiswa/templates/header');
        $this->load->view('backend/mahasiswa/templates/sidebar');
        $this->load->view('backend/mahasiswa/templates/navbar');
        $this->load->view('backend/mahasiswa/mahasiswa/index');
        $this->load->view('backend/mahasiswa/templates/footer');
    }
}
