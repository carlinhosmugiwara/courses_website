<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Adm_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function login($data)
    {
        $sql = 'SELECT id, nome_completo, email FROM usuario WHERE email=? AND senha=?';
        $query = $this->db->query($sql, array($data['email'], $data['senha']));
        return $query->result();
    }

}
