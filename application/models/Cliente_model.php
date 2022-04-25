<?php

class Cliente_model extends CI_Model{

    public function salvar_cliente($cliente_novo) {
        $this->db->insert('cliente', $cliente_novo);
    }

    public function exibir_cliente(){
       return $this->db->get('cliente')->result_array();
    }

    public function excluir($id) {
        $this->db->where('id', $id);
        $this->db->delete('cliente');
        return true;
    }
}

