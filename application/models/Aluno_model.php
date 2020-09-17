<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Aluno_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function pegar()
    {
        $select = 'SELECT a.id, a.nome_completo, a.nome_usuario, a.data_nascimento, a.endereco, ';
        $from = 'a.numero_casa, a.bairro, a.cidade, a.estado, cpf, a.email, a.celular, p.titulo FROM aluno a ';
        $inner_join = 'INNER JOIN planos p ON a.id_plano = p.id ';
        $query = $this->db->query($select . $from . $inner_join);
        return $query->result();
    }

    public function pegarPorId($id)
    {
        $sql = 'SELECT id, nome_completo, email, celular FROM aluno WHERE id=?';
        $query = $this->db->query($sql, array($id));
        return $query->result();
    }

    public function cadastrar($data)
    {
        $this->db->insert('aluno', $data);
    }

    public function logar($data)
    {
        $sql = 'SELECT id, nome_completo, nome_usuario, email, celular FROM aluno WHERE nome_usuario=? AND senha=?';
        $query = $this->db->query($sql, array($data['nome_usuario'], $data['senha']));
        return $query->result();
    }
}
