<?php

function permissao()
{
    /* MÉTODO RESPONSÁVEL EM PERMITIR ACESSO SOMENTE ESTANDO LOGADO
    ********************************************************/
    $permitido = get_instance();
    $usuario_logado = $permitido->session->userdata('usuario_logado');
    if (!$usuario_logado) {
        redirect('login');
    }
    return $usuario_logado;
}
