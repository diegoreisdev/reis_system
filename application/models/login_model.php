<?php

class Login_model extends CI_Model
{
    /* MÉTODO RESPONSÁVEL VALIDAR USUÁRIO */
    public function validar($login, $senha)
    {
        $this->db->where('login', $login);
        $this->db->where('senha', $senha);
        $usuario = $this->db->get('usuario')->row_array();
        return $usuario;
    }
}
