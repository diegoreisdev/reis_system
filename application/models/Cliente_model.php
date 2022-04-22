<?php

class Cliente_model extends CI_Model{

    public function exibir_cliente(){
       return $this->db->get('cliente')->result_array();
    }
}

