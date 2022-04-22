<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{


    public function cadastro_usuario() {
        $title['title'] = "Cadastrar Usuário";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/usuario/cadastro_usuario', $title);
		$this->load->view('layout/footer');
    }

    public function relatorio_usuario() {
        $this->load->model('usuario_model');
        $usuarios['usuario'] = $this->usuario_model->exibir_usuario();
        
        $title['title'] = "Relatório Usuário";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/usuario/relatorio_usuario', $usuarios, $title);
		$this->load->view('layout/footer');
    }

    public function editar_usuario() {
        $title['title'] = "Editar Usuário";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/usuario/editar_usuario', $title);
		$this->load->view('layout/footer');
    }
}