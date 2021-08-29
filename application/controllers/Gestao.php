<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestao extends CI_Controller {

	protected $dados = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produto_model');
		$this->load->model('Fornecedores_model');
		$this->load->model('Consumo_produto_model');
		$this->load->helper('funcoes_helper');		
	}

	// Página Inicial  *** ATENÇÃO - CRIAR OS RECURSOS DE BI, ESTA FUNÇÃO FOI COPIADA DO CONTROLE PRODUTOS
	public function bi()
	{	
		$dados['title'] = "Business Intelligence";
		
		$produtos = $this->Produto_model->get_all_produto();
		$dados['produtos'] = $produtos;

		$quantidadetotal = $this->Produto_model->cont_all_produto();
		$dados['quantidadetotal'] = $quantidadetotal;

		$consumototal = $this->Consumo_produto_model->get_all_consumo_produto();
		$dados['consumototal'] = $consumototal;

		$valortotal = 0;
		$dados['valortotal'] = $valortotal;

		$qtdtotalfornecedores = $this->Fornecedores_model->cont_all_fornecedores();
		$dados['qtdtotalfornecedores'] = $qtdtotalfornecedores;

		$this->load->view('components/head.php', $dados);
		$this->load->view('components/nav.php', $dados);
		$this->load->view('dashboard.php', $dados);
		$this->load->view('components/foother.php', $dados);		
	}


}