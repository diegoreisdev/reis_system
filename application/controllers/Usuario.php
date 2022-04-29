<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuario extends CI_Controller
{
    /* MÉTODO CONSTRUTOR
    ********************************************************/
    public function __construct()
    {
        parent::__construct();
        permissao();
        $this->load->model('usuario_model');
    }

    /* METODO RESPONSÁVEL EM REDERIZAR A VIEW CADASTRAR
    ********************************************************/
    public function cadastro_usuario()
    {
        $title['title'] = "Cadastrar de Usuário";
        $this->load->view('layout/header',                   $title);
        $this->load->view('pages/usuario/cadastrar_usuario', $title);
        $this->load->view('layout/footer');
    }

    /* METODO RESPONSÁVEL EM REDERIZAR A VIEW EDITAR
    ********************************************************/
    public function editar_usuario($id)
    {
        $visualizar_usuario['mostra'] = $this->usuario_model->mostrar($id);
        $title['title'] = "Editar Usuário";
        $this->load->view('layout/header', $title);
        $this->load->view('pages/usuario/editar_usuario', $visualizar_usuario);
        $this->load->view('layout/footer');
    }

    /* METODO RESPONSÁVEL EM REDERIZAR A VIEW RELATÓRIO
    ********************************************************/
    public function relatorio_usuario()
    {
        $visualizar_usuarios['usuario'] = $this->usuario_model->exibir_usuario();
        $title['title'] = "Relatório de Usuário";
        $this->load->view('layout/header', $title);
        $this->load->view('pages/usuario/relatorio_usuario', $visualizar_usuarios);
        $this->load->view('layout/footer');
    }

    /* METODO RESPONSÁVEL EM SALVAR USUÁRIO
    ********************************************************/
    public function salvar_usuario()
    {
        $this->form_validation->set_rules('nome', 'Nome', 'required|trim|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('login', 'Login', 'required|trim|valid_email');
        $this->form_validation->set_rules('senha', 'Senha', 'required|trim');
        $this->form_validation->set_rules('perfil', 'Perfil', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata("erro", "Usuário não cadastrado");
            redirect('usuario/cadastro_usuario');
        } else {
            $usuario = [
                "nome"   => $this->input->post('nome'),
                "login"  => $this->input->post('login'),
                "senha"  => $this->input->post('senha'),
                "perfil" => $this->input->post('perfil')
            ];
            $this->usuario_model->adicionar($usuario);
            $this->session->set_flashdata("novo", "Usuário cadastrado com sucesso");
            redirect('usuario/relatorio_usuario');
        }
    }

    /* MÉTODO RESPONSÁVEL POR ALTERAR USUÁRIO
    ********************************************************/
    public function alterar_usuario($id)
    {
        $this->form_validation->set_rules('nome', 'Nome', 'required|trim|min_length[5]|max_length[20]');
        $this->form_validation->set_rules('login', 'Login', 'required|trim|valid_email');
        $this->form_validation->set_rules('senha', 'Senha', 'required|trim');
        $this->form_validation->set_rules('perfil', 'Perfil', 'required');

        $usuario_alterado =
            [
                "nome"   => $this->input->post('nome'),
                "login"  => $this->input->post('login'),
                "senha"  => $this->input->post('senha'),
                "perfil" => $this->input->post('perfil')
            ];
        $this->usuario_model->update($id, $usuario_alterado);
        $this->session->set_flashdata('editado', 'Usuário editado com sucesso');
        redirect('usuario/relatorio_usuario');
    }


    /* METODO RESPONSÁVEL EM EXCLUIR USUÁRIO
    ********************************************************/
    public function deletar($id)
    {
        $this->usuario_model->excluir($id);
        $this->session->set_flashdata('excluido', 'Usuário excluido com sucesso');
        redirect('usuario/relatorio_usuario');
    }
}
