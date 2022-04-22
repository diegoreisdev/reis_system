<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{


    public function cadastro_usuario() {
        $this->load->view('layout/header');
		$this->load->view('pages/usuario/cadastro_usuario');
		$this->load->view('layout/footer');
    }

    public function relatorio_usuario() {
        $this->load->model('usuario_model');
        $usuarios['usuario'] = $this->usuario_model->exibir_usuario();
     
        $this->load->view('layout/header');
		$this->load->view('pages/usuario/relatorio_usuario', $usuarios);
		$this->load->view('layout/footer');
    }

    public function editar_usuario() {
        $this->load->view('layout/header');
		$this->load->view('pages/usuario/editar_usuario');
		$this->load->view('layout/footer');
    }
}