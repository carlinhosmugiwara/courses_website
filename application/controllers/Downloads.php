<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Downloads extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('download');
    }

    public function apresentacao_slide()
    {
        $path = '/opt/lampp/htdocs/curso_bitcoin/assets/apresentacao_empresa.pdf';
        force_download($path , NULL);
    }
}
