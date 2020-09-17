<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Planos_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function get()
    {
        $sql = $this->db->get('planos');
        return $sql->result();
    }

    public function getId($id)
    {
        $this->db->where('id', $id);
        $sql = $this->db->get('planos');
        return $sql->result();
    }
}
