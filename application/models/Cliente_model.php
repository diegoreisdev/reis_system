<?php

class Cliente_model extends CI_Model{

    /* METODO RESPONSÁVEL EM INSERIR*/
    public function salvar_cliente($cliente_novo) {
        $this->db->insert('cliente', $cliente_novo);
    }

    /* METODO RESPONSÁVEL EM BUSCAR*/
    public function exibir_cliente(){
       return $this->db->get('cliente')->result_array();
    }

    /* METODO RESPONSÁVEL EM EXCLUIR*/
    public function excluir($id) {
        $this->db->where('id', $id);
        $this->db->delete('cliente');
        return true;
    }
}

