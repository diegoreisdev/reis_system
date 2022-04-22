<?php

class Usuario_model extends CI_Model{
    /* VALIDA LOGIN */


    public function adicionar() {

    }

    public function exibir_usuario(){
       return $this->db->get('usuario')->result_array();
    }

    public function editar() {

    }

    public function excluir() {

    }

    public function adicionar_cliente() {
        $this->db->get('usuarios')->result_array();
    }

}