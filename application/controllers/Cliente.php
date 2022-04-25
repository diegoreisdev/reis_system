<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller{


    public function cadastro_cliente() {
        $title['title'] = "Cadastrar Cliente";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/cliente/cadastro_cliente');
		$this->load->view('layout/footer');
    }

    public function relatorio_cliente() {
        $this->load->model('cliente_model');
        $visualizar_cliente ['cliente']= $this->cliente_model->exibir_cliente();
        
        $title['title'] = "Relatório Cliente";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/cliente/relatorio_cliente', $visualizar_cliente);
		$this->load->view('layout/footer');
    }

    public function editar_cliente() {
        $title['title'] = "Editar Cliente";
        $this->load->view('layout/header',$title);
		$this->load->view('pages/cliente/editar_cliente');
		$this->load->view('layout/footer');
    }

    public function salvar_cliente() {
        $cliente_novo = [
            "nomeCliente" => $this->input->post("nomeCliente"),
            "categoria" => $this->input->post("categoria")
        ];
        
        $this->load->model('cliente_model');
        $this->cliente_model->salvar_cliente($cliente_novo);
		redirect('cliente/relatorio_cliente');       
    }

    public function deletar($id) {
        $this->load->model('cliente_model');
        $this->cliente_model->excluir($id);
        redirect('cliente/relatorio_cliente');
    }


}