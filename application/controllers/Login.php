<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()	{
		$this->load->view('layout/header');
		$this->load->view('pages/login');
		$this->load->view('layout/footer');
	}
	public function home()	{
		$this->load->view('layout/header');
		$this->load->view('pages/home');
		$this->load->view('layout/footer');
	}

	public function validar() {
		$dados = [
			$this->input->post('login'),
			$this->input->post('senha')
		];
	}
}
	

