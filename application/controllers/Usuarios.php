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
        // Verifica se o usuario e admin | Function pega do nome do banco | Usado pelo Id e in_group

        # single group (by id)
        if (!$this->ion_auth->in_group(1)) {
            // $this->session->set_flashdata('message', 'You must be part of the group 1 to view this page');
            setar_msg('msgerro', 'Erro: Você precisa ser um administrador para acessar essa pagina', 'erro');
            redirect('home');
        }
        
        $this->load->model('ion_auth_model');
    }
    public function index()
    {

        $dados['users'] = $this->ion_auth->users()->result(); // get all users

        // Titulo da aba no navegador
        $dados["titulo"] = "Usuarios";

        // Pega os dados do Model

        // Passa um conjunto de variaveis para as views
        $this->load->vars($dados);

        $this->load->view('templates/header');
        $this->load->view('pages/usuarios');
        $this->load->view('templates/footer');
    }
}
