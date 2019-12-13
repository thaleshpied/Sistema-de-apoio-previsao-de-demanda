<?php
/* 
 * Gerado usando CRUDigniter v3.2 
 */
 
class Consumo_produto_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Selecionando consumo_produto por pedido_idPedido
     */
    function get_consumo_produto($pedido_idPedido)
    {
        return $this->db->get_where('consumo_produto',array('pedido_idPedido'=>$pedido_idPedido))->row_array();
    }
        
    /*
     * Selecionando tudo da tabela consumo_produto
     */
    function get_all_consumo_produto()
    {
        $this->db->order_by('periodo');
        return $this->db->get('consumo_produto')->result_array();
    }
        
    /*
     * Adicionando consumo_produto
     */
    function add_consumo_produto($params)
    {
        $this->db->insert('consumo_produto',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Atualizando consumo_produto
     */
    function update_consumo_produto($pedido_idPedido,$params)
    {
        $this->db->where('pedido_idPedido',$pedido_idPedido);
        return $this->db->update('consumo_produto',$params);
    }
    
    /*
     * Deletando consumo_produto
     */
    function delete_consumo_produto($pedido_idPedido)
    {
        return $this->db->delete('consumo_produto',array('pedido_idPedido'=>$pedido_idPedido));
    }
}
