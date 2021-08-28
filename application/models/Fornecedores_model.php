<?php
/* 
 * Gerado usando CRUDigniter v3.2 
 */
 
class Fornecedores_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
        
    /*
     * Selecionando tudo da tabela fornecedores
     */
    function get_all_fornecedores()
    {
        $this->db->where('idFornecedor >', 0);
        $this->db->order_by('idFornecedor');
        return $this->db->get('fornecedores')->result_array();
    }
}
