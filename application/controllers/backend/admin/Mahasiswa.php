<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $this->load->view('backend/admin/templates/header');
        $this->load->view('backend/admin/templates/sidebar');
        $this->load->view('backend/admin/templates/navbar');
        $this->load->view('backend/admin/mahasiswa/index');
        $this->load->view('backend/admin/templates/footer');
    }
}
