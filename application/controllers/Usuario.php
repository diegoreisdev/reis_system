<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{
    /* MÉTODO CONSTRUTOR */
    public function __construct()
    {
        parent::__construct();
        permissao();
        $this->load->model('usuario_model');
    }

    /* METODO RESPONSÁVEL EM REDERIZAR A VIEW CADASTRAR */
    public function cadastro_usuario()
    {
        $title['title'] = "Cadastrar Usuário";
        $this->load->view('layout/header',                   $title);
        $this->load->view('pages/usuario/cadastrar_usuario', $title);
        $this->load->view('layout/footer');
    }

    /* METODO RESPONSÁVEL EM REDERIZAR A VIEW EDITAR */
    public function editar_usuario($id)
    {
        $visualizar_usuario['mostra'] = $this->usuario_model->mostrar($id);
        $title['title'] = "Editar Usuário";
        $this->load->view('layout/header', $title);
        $this->load->view('pages/usuario/editar_usuario', $visualizar_usuario);
        $this->load->view('layout/footer');
    }

    /* METODO RESPONSÁVEL EM REDERIZAR A VIEW RELATÓRIO */
    public function relatorio_usuario()
    {
        $visualizar_usuarios['usuario'] = $this->usuario_model->exibir_usuario();
        $title['title'] = "Relatório Usuário";
        $this->load->view('layout/header', $title);
        $this->load->view('pages/usuario/relatorio_usuario', $visualizar_usuarios);
        $this->load->view('layout/footer');
    }

    /* METODO RESPONSÁVEL EM SALVAR USUÁRIO*/
    public function salvar_usuario()
    {
        $usuario = [
            "nome"   => $this->input->post('nome'),
            "login"  => $this->input->post('login'),
            "senha"  => $this->input->post('senha'),
            "perfil" => $this->input->post('perfil')
        ];
        $this->usuario_model->adicionar($usuario);
        redirect('usuario/relatorio_usuario');
    }

    /* MÉTODO RESPONSÁVEL POR ALTERAR USUÁRIO */
    public function alterar_usuario($id)
    {
        $usuario_alterado = [
            "nome"   => $this->input->post('nome'),
            "login"  => $this->input->post('login'),
            "senha"  => $this->input->post('senha'),
            "perfil" => $this->input->post('perfil')
        ];
        $this->usuario_model->update($id, $usuario_alterado);
        redirect('usuario/relatorio_usuario');
    }

    /* METODO RESPONSÁVEL EM EXCLUIR USUÁRIO */
    public function deletar($id)
    {
        $this->usuario_model->excluir($id);
        redirect('usuario/relatorio_usuario');
    }
}
