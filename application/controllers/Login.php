<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		// Titulo da aba no navegador
		$dados["titulo"] = "Login";

		// Pega os dados do Model

		// Passa um conjunto de variaveis para as views
		$this->load->vars($dados);
		
		// Validando os inputs
		$this->form_validation->set_rules('login', 'E-mail', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');

		if ($this->form_validation->run() == TRUE) {
			echo '<pre>';
			print_r($this->input->post());
			echo '</pre>';
		} else {
			$this->load->view('templates/header');
			$this->load->view('pages/login');
			$this->load->view('templates/footer');
		}
	}
}
