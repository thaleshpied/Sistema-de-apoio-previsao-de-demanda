<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	protected $dados = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produto_model');
		$this->load->helper('funcoes_helper');
	}

	// Página Inicial 
	public function index()
	{	
		$dados['title'] = "Sistema de Apoio à decisão";
		$quantidadetotal = $this->Produto_model->cont_all_produto();
		$dados['quantidadetotal'] = $quantidadetotal;
		$produtos = $this->Produto_model->get_all_produto();
		$dados['produtos'] = $produtos;
		$valortotal = 0;
		$dados['valortotal'] = $valortotal;	
		$this->load->view('components/head.php', $dados);
		$this->load->view('components/nav.php', $dados);
		$this->load->view('dashboard.php', $dados);
		$this->load->view('index.php', $dados);
		$this->load->view('components/foother.php', $dados);		
	}

	// Página Fornecedores 
	public function fornecedores()
	{	
		$dados['title'] = "Fornecedores";
		$quantidadetotal = $this->Produto_model->cont_all_produto();
		$dados['quantidadetotal'] = $quantidadetotal;
		$produtos = $this->Produto_model->get_all_produto();
		$dados['produtos'] = $produtos;
		$valortotal = 0;
		$dados['valortotal'] = $valortotal;	
		$this->load->view('components/head.php', $dados);
		$this->load->view('components/nav.php', $dados);
		$this->load->view('fornecedores.php', $dados);
		$this->load->view('index.php', $dados);
		$this->load->view('components/foother.php', $dados);		
	}

}
