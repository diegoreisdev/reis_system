<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cliente extends CI_Controller
{
    /* MÉTODO CONSTRUTOR */
    public function __construct()
    {
        parent::__construct();
        permissao();
        $this->load->model('cliente_model');
    }

    /* MÉTODO RESPONSÁVEL EM EXIBIR A VIEW CADASTRO */
    public function cadastro_cliente()
    {
        $title['title'] = "Cadastrar Cliente";
        $this->load->view('layout/header', $title);
        $this->load->view('pages/cliente/cadastrar_cliente');
        $this->load->view('layout/footer');
    }

    /* MÉTODO RESPONSÁVEL PELA ADIÇÃO DE CLIENTE */
    public function salvar_cliente()
    {
        $cliente_novo = $_POST;
        $this->cliente_model->salvar_cliente($cliente_novo);
        redirect('cliente/relatorio_cliente');
    }

    /* MÉTODO RESPONSÁVEL EM EXIBIR A VIEW RELATÓRIO */
    public function relatorio_cliente()
    {
        $visualizar_cliente['cliente'] = $this->cliente_model->exibir_cliente();
        $title['title'] = "Relatório Cliente";
        $this->load->view('layout/header', $title);
        $this->load->view('pages/cliente/relatorio_cliente', $visualizar_cliente);
        $this->load->view('layout/footer');
    }

    /* MÉTODO RESPONSÁVEL EM EXIBIR A VIEW EDIÇÃO DE CLIENTE */
    public function editar_cliente($id)
    {
        $visualizar_cliente['mostra'] = $this->cliente_model->mostrar($id);
        $title['title'] = "Editar Cliente";
        $this->load->view('layout/header', $title);
        $this->load->view('pages/cliente/editar_cliente', $visualizar_cliente);
        $this->load->view('layout/footer');
    }


    /* MÉTODO RESPONSÁVEL POR ALTERAR O CLIENTE */
    public function alterar_cliente($id)
    {
        $cliente_alterado = $_POST;
        $this->cliente_model->update($id, $cliente_alterado);
        redirect('cliente/relatorio_cliente');
    }

    /* MÉTODO RESPONSÁVEL PELA EXCLUSÃO */
    public function deletar($id)
    {
        $this->cliente_model->excluir($id);
        redirect('cliente/relatorio_cliente');
    }
}
