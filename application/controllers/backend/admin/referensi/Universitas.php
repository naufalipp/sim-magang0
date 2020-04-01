<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Universitas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('backend/referensi/UniversitasModel', 'UniversitasModel');
    }
    public function index()
    {
        $data['universitas'] = $this->UniversitasModel->getUniversitas();

        $this->load->view('backend/templates/header');
        $this->load->view('backend/templates/sidebar');
        $this->load->view('backend/templates/navbar');
        $this->load->view('backend/admin/referensi/universitas/index', $data);
        $this->load->view('backend/templates/footer');
    }
}
