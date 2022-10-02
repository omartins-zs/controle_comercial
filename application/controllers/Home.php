<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			setar_msg('msgerro', 'Erro: Você precisa estar logado no sistema.', 'erro');
			redirect('login');
		}
	}

	public function index()
	{
		// Titulo da aba no navegador
		$dados["titulo"] = "Inicial";

		// Pega os dados do Model

		// Passa um conjunto de variaveis para as views
		$this->load->vars($dados);

		$this->load->view('templates/header');
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
	}
}
