<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Aluno extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aluno_model');
        $this->load->model('Planos_model');
        $this->load->library('session');
    }

    // views

    public function index()
    {
        $this->load->view('aluno/login');
    }

    public function cadastro()
    {
        $planos = $this->Planos_model->get();
        $this->load->view('aluno/cadastrar', array('planos' => $planos));
    }

    public function cadastro_plano($id)
    {
        $planoSelecionado =  $this->Planos_model->getId($id);
        $planos = $this->Planos_model->get();
        $this->load->view('aluno/cadastrar', array(
            'planos' => $planos,
            'planoSelecionado' => $planoSelecionado
        ));
    }

    public function info()
    {
        $this->load->view('aluno/info');
    }

    public function dashboard()
    {
        $this->load->view('aluno/dashboard', array('usuario' => $this->session));
    }

    public function downloads()
    {
        $this->load->view('aluno/downloads', array('usuario' => $this->session));
    }

    public function minha_conta()
    {
        $this->load->view('contrucao', array('usuario' => $this->session));
    }

    public function tickets()
    {
        $this->load->view('contrucao', array('usuario' => $this->session));
    }

    public function financeiro()
    {
        $this->load->view('contrucao', array('usuario' => $this->session));
    }

    public function erro()
    {
        $this->load->view('aluno/erro', array('erro' => $this->session));
    }

    public function sair()
    {
        $this->session->unset_userdata('id');
        $this->session->unset_userdata('nome');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('celular');
        $this->session->unset_userdata('estado');

        header('Location: ../../');
    }

    // models

    public function login()
    {
        $data = array(
            'nome_usuario' => $this->input->post('nome_usuario'),
            'senha' => hash('sha1', $this->input->post('senha'))
        );
        $response = $this->Aluno_model->logar($data);
        if (!empty($response)) {
            $this->session->set_userdata('id', $response[0]->id);
            $this->session->set_userdata('nome', $response[0]->nome_completo);
            $this->session->set_userdata('nome_user', $response[0]->nome_usuario);
            $this->session->set_userdata('email', $response[0]->email);
            $this->session->set_userdata('celular', $response[0]->celular);
            $this->session->set_userdata('estado', 'logado');

            header('Location: ../aluno/dashboard');
        } else {
            $this->session->set_userdata('estado', 'erro_login');
            header('Location: ../aluno/erro');
        }
    }

    public function cadastrar()
    {
        $data = array(
            'nome_completo' => $this->input->post('nome_completo'),
            'nome_usuario' => $this->input->post('nome_usuario'),
            'email' => $this->input->post('email'),
            'senha' => hash('sha1', $this->input->post('senha')),
            'celular' => $this->input->post('celular'),
            'data_nascimento' => $this->input->post('data_nascimento'),
            'endereco' => $this->input->post('endereco'),
            'bairro' => $this->input->post('bairro'),
            'cidade' => $this->input->post('cidade'),
            'estado' => $this->input->post('estado'),
            'numero_casa' => $this->input->post('numero_casa'),
            'cpf' => $this->input->post('cpf'),
            'id_plano' => $this->input->post('plano')
        );

        $login = array(
            'nome_usuario' => $data['nome_usuario'],
            'senha' => $data['senha']
        );

        $this->Aluno_model->cadastrar($data);
        $this->login($login);
    }
}
