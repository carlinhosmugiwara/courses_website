<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Adm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Adm_model');
        $this->load->model('Aluno_model');
        $this->load->model('Planos_model');
        $this->load->library('session');
    }

    // telas

    public function index()
    {
        $this->load->view('adm/login');
    }

    public function dashboard()
    {
        $alunos = $this->Aluno_model->pegar();
        $this->load->view('adm/dashboard', array(
            'alunos' => $alunos,
            'usuario' => $this->session
        ));
    }

    public function erro()
    {
        $this->load->view('adm/erro', array('erro' => $this->session));
    }

    public function sair()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nome_completo');
        $this->session->unset_userdata('email');

        header('Location: ../../');
    }

    // models

    public function login()
    {
        $data = array(
            'email' => $this->input->post('email'),
            'senha' => hash('sha1', $this->input->post('senha'))
        );
        $response = $this->Adm_model->login($data);
        if (!empty($response)) {
            $this->session->set_userdata('id', $response[0]->id);
            $this->session->set_userdata('nome_completo', $response[0]->nome_completo);
            $this->session->set_userdata('email', $response[0]->email);
            header('Location: dashboard');
        } else {
            $this->session->set_userdata('estado', 'erro_login');
            header('Location: ../adm/erro');
        }
    }
}
