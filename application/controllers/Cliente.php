<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller{


    public function cadastro_cliente() {
        $this->load->view('layout/header');
		$this->load->view('pages/cliente/cadastro_cliente');
		$this->load->view('layout/footer');
    }

    public function relatorio_cliente() {
        $this->load->model('cliente_model');
        $clientes['cliente'] = $this->cliente_model->exibir_cliente();
        
        $this->load->view('layout/header');
		$this->load->view('pages/cliente/relatorio_cliente', $clientes);
		$this->load->view('layout/footer');
    }

    public function editar_cliente() {
        $this->load->view('layout/header');
		$this->load->view('pages/cliente/editar_cliente');
		$this->load->view('layout/footer');
    }

    public function salvar_cliente() {
        $this->load->model('adicionar_cliente');
       
    }


}