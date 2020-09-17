<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Planos extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Planos_model');
    }

    public function index()
    {
        $planos = $this->Planos_model->get();
        $this->load->view('planos', array('planos' => $planos));
    }
}
