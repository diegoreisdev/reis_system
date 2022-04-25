<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller{

    /* MÉTODO RESPONSÁVEL EM RENDERIZAR A VIEW CADASTRO */
    public function cadastro_cliente() {
        $title['title'] = "Cadastrar Cliente";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/cliente/form_cliente');
		$this->load->view('layout/footer');
    }

    /* MÉTODO RESPONSÁVEL EM RENDERIZAR A VIEW EDIÇÃO DE CLIENTE */
    public function editar_cliente() {
        $title['title'] = "Editar Cliente";
        $this->load->view('layout/header',$title);
        $this->load->view('pages/cliente/form_cliente');
        $this->load->view('layout/footer');
    }

    /* MÉTODO RESPONSÁVEL EM EXIBIR RELATÓRIO*/
    public function relatorio_cliente() {
        $this->load->model('cliente_model');
        $visualizar_cliente ['cliente']= $this->cliente_model->exibir_cliente();
        
        $title['title'] = "Relatório Cliente";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/cliente/relatorio_cliente', $visualizar_cliente);
		$this->load->view('layout/footer');
    }


    /* MÉTODO RESPONSÁVEL PELA ADIÇÃO DE CLIENTE */
    public function salvar_cliente() {
        $cliente_novo = $_POST;        

        $this->load->model('cliente_model');
        $this->cliente_model->salvar_cliente($cliente_novo);
		redirect('cliente/relatorio_cliente');       
    }

    /* MÉTODO RESPONSÁVEL PELA EXCLUSÃO */
    public function deletar($id) {
        $this->load->model('cliente_model');
        $this->cliente_model->excluir($id);
        redirect('cliente/relatorio_cliente');
    }


}