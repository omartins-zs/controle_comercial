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
			$identity = $this->input->post('login');
			$password = $this->input->post('senha');
			$remember = TRUE; // remember the user
			if ($this->ion_auth->login($identity, $password, $remember)) {
				redirect('home', 'refresh');
			} else {
				setar_msg('msgerro', 'Os dados de acesso estão incorretos', 'erro');
				redirect('login', 'refresh');
			}
		} else {
			$this->load->view('templates/header');
			$this->load->view('pages/login');
			$this->load->view('templates/footer');
		}
	}

	public function logout()
	{
		$logout = $this->ion_auth->logout();
		redirect('login', 'refresh');
	}
}
