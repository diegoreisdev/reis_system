<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		$title['title'] = "Login";
		$this->load->view('layout/header', $title);
		$this->load->view('pages/login', $title);
		$this->load->view('layout/footer', $title);
	}
	public function home()
	{
		$title['title'] = "Home";
		$this->load->view('layout/header', $title);
		$this->load->view('pages/home', $title);
		$this->load->view('layout/footer', $title);
	}

	public function validar()
	{
		$dados = [
			$this->input->post('login'),
			$this->input->post('senha')
		];
	}
}
