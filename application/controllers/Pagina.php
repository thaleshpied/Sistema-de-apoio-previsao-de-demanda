<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagina extends CI_Controller {

	protected $dados = array();

	public function __construct()
	{
		parent::__construct();
	    $this->load->helper('funcoes_helper');
	}

	// Página Inicial 
	public function index()
	{	
		$dados['title'] = "T H A L E S";
		$this->load->view('components/head.php', $dados);
		$this->load->view('index.php', $dados);	
	}

}
