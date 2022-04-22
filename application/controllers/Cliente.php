<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller{


    public function cadastro_cliente() {
        $title['title'] = "Cadastrar Cliente";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/cliente/cadastro_cliente', $title);
		$this->load->view('layout/footer');
    }

    public function relatorio_cliente() {
        $this->load->model('cliente_model');
        $clientes['cliente'] = $this->cliente_model->exibir_cliente();
        
        $title['title'] = "Relatório Cliente";
        $this->load->view('layout/header', $title);
		$this->load->view('pages/cliente/relatorio_cliente', $clientes, $title,);
		$this->load->view('layout/footer');
    }

    public function editar_cliente() {
        $title['title'] = "Editar Cliente";
        $this->load->view('layout/header',$title);
		$this->load->view('pages/cliente/editar_cliente',$title);
		$this->load->view('layout/footer');
    }

    public function salvar_cliente() {
        $this->load->model('adicionar_cliente');
       
    }


}