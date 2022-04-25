<?php

class Usuario_model extends CI_Model{
    /* VALIDA LOGIN */


    public function adicionar($usuario) {
        $this->db->insert("usuario", $usuario);
    }

    public function exibir_usuario(){
       return $this->db->get('usuario')->result_array();
    }

    public function editar() {

    }

    public function excluir($id) {
        $this->db->where('id', $id);
        $this->db->delete('usuario');
        return true;
    }

   

}