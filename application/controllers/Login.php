<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		// Titulo da aba no navegador
		$dados["titulo"] = "Login";

		// Pega os dados do Model

		// Passa um conjunto de variaveis para as views
		$this->load->vars($dados);

		$this->load->view('templates/header');
		$this->load->view('pages/login');
		$this->load->view('templates/footer');
	}
}
