<?php

class Usuario_model extends CI_Model
{
    /* VALIDA LOGIN */

    /* METODO RESPONSÁVEL EM INSERIR*/
    public function adicionar($usuario)
    {
        $this->db->insert("usuario", $usuario);
    }

    /* METODO RESPONSÁVEL EM BUSCAR*/
    public function exibir_usuario()
    {
        return $this->db->get('usuario')->result_array();
    }

    /* MÉTODO RESPONSÁVEL EM EXIBIR DADOS NA VIEW DE EDIÇÃO */
    public function mostrar($id)
    {
        return $this->db->get_where('usuario', ['id' => $id])->row_array();
    }
    /* METODO RESPONSÁVEL EM EXCLUIR*/
    public function excluir($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('usuario');
        return true;
    }
}
