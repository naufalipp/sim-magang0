<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pembimbing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('backend/PembimbingModel', 'PembimbingModel');
    }

    public function index()
    {

        $data['pembimbing'] = $this->PembimbingModel->getPembimbing();

        $this->form_validation->set_rules('nama', 'nama', 'required', ['required' => 'Input nama tidak boleh kosong!']);
        $this->form_validation->set_rules('username', 'username', 'required', ['required' => 'Input username tidak boleh kosong!']);
        $this->form_validation->set_rules('password', 'password', 'required', ['required' => 'Input password tidak boleh kosong!']);

        if ($this->form_validation->run() == false) {
            $this->load->view('backend/admin/templates/header');
            $this->load->view('backend/admin/templates/sidebar');
            $this->load->view('backend/admin/templates/navbar');
            $this->load->view('backend/admin/pembimbing/index', $data);
            $this->load->view('backend/admin/templates/footer');
        } else {
        }
    }

    public function aksiTambah()
    {
    }
}
