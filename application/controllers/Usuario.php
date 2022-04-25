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
        $visualizar_usuarios['usuario'] = $this->usuario_model->exibir_usuario();
        
        $title['title'] = "Relatório Usuário";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/usuario/relatorio_usuario', $visualizar_usuarios);
		$this->load->view('layout/footer');
    }

    public function editar_usuario() {
        $title['title'] = "Editar Usuário";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/usuario/editar_usuario');
		$this->load->view('layout/footer');
    }

    public function salvar_usuario(){
        $usuario = [
            "nome" => $this->input->post("nome"),
            "login" => $this->input->post("login"),
            "senha" => $this->input->post("senha"),
            "perfil" => $this->input->post("perfil"),
        ];
        $this->load->model('usuario_model');
        $this->usuario_model->adicionar($usuario);
        redirect('usuario/relatorio_usuario');
    }

    public function deletar($id) {
        $this->load->model('usuario_model');
        $this->usuario_model->excluir($id);
        redirect('usuario/relatorio_usuario');
    }
}