<?php
/* 
 * Gerado usando CRUDigniter v3.2 
 */
 
class Produto_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Selecionando produto por idProduto
     */
    function get_produto($idProduto)
    {
        return $this->db->get_where('produto',array('idProduto'=>$idProduto))->row_array();
    }
        
    /*
     * Selecionando tudo da tabela produto
     */
    function get_all_produto()
    {
        $this->db->where('quantidade >', 0);
        $this->db->order_by('nome', 'desc');
        return $this->db->get('produto')->result_array();
    }
    /*
     * Retorna total de produtos cadastrados
     */
    function cont_all_produto(){
        return $this->db->count_all('produto');
    }
    /*
     * Retorna valor total dos produtos cadastrados
     */
    function sum_all_produto(){
        return $this->db->select_sum('preco');
        $valortotal = $this->db->from('produto'); 

        $this->db->select('sum(preco), estoquemax, ', FALSE);
    }

        
    /*
     * Adicionando produto
     */
    function add_produto($params)
    {
        $this->db->insert('produto',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Atualizando produto
     */
    function update_produto($idProduto,$params)
    {
        $this->db->where('idProduto',$idProduto);
        return $this->db->update('produto',$params);
    }
    
    /*
     * Deletando produto
     */
    function delete_produto($idProduto)
    {
        return $this->db->delete('produto',array('idProduto'=>$idProduto));
    }
}
