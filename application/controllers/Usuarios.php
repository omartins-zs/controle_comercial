<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Verifica se está logado no sistema
        if (!$this->ion_auth->logged_in()) {
            setar_msg('msgerro', 'Erro: Você precisa estar logado no sistema.', 'erro');
            redirect('login');
        }
        // Verifica se o usuario e admin
        if (!$this->ion_auth->is_admin()) {
            setar_msg('msgerro', 'Erro: Você precisa ser um administrador para acessar essa pagina', 'erro');
            redirect('home');
        }
        $this->load->model('ion_auth_model');
    }
    
}
