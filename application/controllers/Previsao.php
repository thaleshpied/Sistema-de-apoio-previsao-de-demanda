<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Previsao extends CI_Controller {

	protected $dados = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produto_model');
		$this->load->model('Consumo_produto_model');
		$this->load->helper('funcoes_helper');		
	}

	// Página Inicial 
	public function index()
	{	
		$dados['title'] = "Previsão de Demanda";
		$produtos = $this->Produto_model->get_all_produto();
		$dados['produtos'] = $produtos;
		$quantidadetotal = $this->Produto_model->cont_all_produto();
		$dados['quantidadetotal'] = $quantidadetotal;
		$consumototal = $this->Consumo_produto_model->get_all_consumo_produto();
		$dados['consumototal'] = $consumototal;

		$valortotal = 0;
		$dados['valortotal'] = $valortotal;
		
		// Variavei para calculo da previsão de demanda

		$SY = 0;
		$dados['SY'] = $SY;

		$SXY = 0;
		$dados['SXY'] = $SXY;

		$zx = 0;
		$dados['zx'] = $zx;

		$SX = 66;
		$dados['SX'] = $SX;
		
		$n = 12;		
		$Sx² = 506;

		$this->load->view('components/head.php', $dados);
		$this->load->view('components/nav.php', $dados);
		$this->load->view('dashboard_previsao.php', $dados);
		$this->load->view('lista_produtos.php');
		$this->load->view('components/foother.php', $dados);		
	}
}