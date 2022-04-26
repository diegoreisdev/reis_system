<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	/* MÉTODO RESPONSÁVEL POR CARREGAR A VIEW LOGIN */
	public function index()
	{
		$title['title'] = "Login";
		$this->load->view('layout/header', $title);
		$this->load->view('pages/login', $title);
		$this->load->view('layout/footer', $title);
	}

	/* MÉTODO RESPONSÁVEL POR CARREGAR A VIEW HOME */
	public function home()
	{
		permissao();
		$title['title'] = "Home";
		$this->load->view('layout/header', $title);
		$this->load->view('pages/home', $title);
		$this->load->view('layout/footer', $title);
	}

	/* MÉTODO RESPONSÁVEL POR CHAMAR A VALIDAÇÃO DO USUÁRIO */
	public function validar()
	{
		$this->load->model('login_model');
		$login = $_POST['login'];
		$senha = $_POST['senha'];
		$usuario = $this->login_model->validar($login, $senha);

		if ($usuario) {
			$this->session->set_userdata('usuario_logado', $usuario);
			redirect('login/home');
		} else {
			$title['title'] = "Login";
			$erro['erro'] = 'Login e/ou senha inválido(s)';
			$this->load->view('layout/header', $title);
			$this->load->view('pages/login', $erro);
			$this->load->view('layout/footer');
		}
	}

	/* MÉTODO RESPONSÁVEL EM DESLOGAR USUÁRIO */
	public function sair()
	{
		$this->session->unset_userdata('usuario_logado');
		redirect('login');
	}
}
