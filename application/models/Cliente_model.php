<?php

class Cliente_model extends CI_Model
{

    /* METODO RESPONSÁVEL EM INSERIR*/
    public function salvar_cliente($cliente_novo)
    {
        $this->db->insert('cliente', $cliente_novo);
    }

    /* METODO RESPONSÁVEL EM BUSCAR*/
    public function exibir_cliente()
    {
        return $this->db->get('cliente')->result_array();
    }

    /* MÉTODO RESPONSÁVEL EM EXIBIR DADOS NA VIEW DE EDIÇÃO */
    public function mostrar($id)
    {
        return $this->db->get_where('cliente', ['id' => $id])->row_array();
    }

    /* METODO RESPONSÁVEL EM EXCLUIR*/
    public function excluir($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('cliente');
        return true;
    }

    /* MÉTODO RESPONSÁVEL POR ALTERAR CLIENTE */
    public function update($id, $cliente_alterado)
    {
        $this->db->where('id', $id);
        return $this->db->update('cliente', $cliente_alterado);
    }
}
