<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller{

    /* METODO RESPONSÁVEL EM REDERIZAR A VIEW CADASTRAR */
    public function cadastro_usuario() {
        $title['title'] = "Cadastrar Usuário";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/usuario/form_usuario', $title);
		$this->load->view('layout/footer');
    }

    /* METODO RESPONSÁVEL EM REDERIZAR A VIEW EDITAR */
    public function editar_usuario() {
        $title['title'] = "Editar Usuário";
        $this->load->view('layout/header', $title);
        $this->load->view('pages/usuario/form_usuario');
        $this->load->view('layout/footer');
    }

    /* METODO RESPONSÁVEL EM REDERIZAR A VIEW RELATÓRIO */
    public function relatorio_usuario() {
        $this->load->model('usuario_model');
        $visualizar_usuarios['usuario'] = $this->usuario_model->exibir_usuario();
        
        $title['title'] = "Relatório Usuário";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/usuario/relatorio_usuario', $visualizar_usuarios);
		$this->load->view('layout/footer');
    }

    /* METODO RESPONSÁVEL EM SALVAR USUÁRIO*/
    public function salvar_usuario(){
        $usuario = $_POST;
        $this->load->model('usuario_model');
        $this->usuario_model->adicionar($usuario);
        redirect('usuario/relatorio_usuario');
    }
    /* METODO RESPONSÁVEL EM EXCLUIR USUÁRIO */
    public function deletar($id) {
        $this->load->model('usuario_model');
        $this->usuario_model->excluir($id);
        redirect('usuario/relatorio_usuario');
    }
}