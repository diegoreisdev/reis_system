<?php

function permissao()
{
    /* MÉTODO RESPONSÁVEL EM PERMITIR ACESSO SOMENTE ESTANDO LOGADO */
    $permitido = get_instance();
    $usuario_logado = $permitido->session->userdata('usuario_logado');
    if (!$usuario_logado) {
        $permitido->session->set_flashdata('danger', 'Realize login');
        redirect('login');
    }
    return $usuario_logado;
}
