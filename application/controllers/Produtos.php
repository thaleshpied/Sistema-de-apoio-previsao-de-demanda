<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

	protected $dados = array();

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Produto_model');
		$this->load->model('Consumo_produto_model');
		$this->load->helper('funcoes_helper');
		
	}

	// Página Inicial 
	public function consultar()
	{	
		$dados['title'] = "Consultar Produtos";
		$produtos = $this->Produto_model->get_all_produto();
		$dados['produtos'] = $produtos;
		$quantidadetotal = $this->Produto_model->cont_all_produto();
		$dados['quantidadetotal'] = $quantidadetotal;
		$consumototal = $this->Consumo_produto_model->get_all_consumo_produto();
		$dados['consumototal'] = $consumototal;

		$valortotal = 0;
		$dados['valortotal'] = $valortotal;

		$SY = 0;
		$dados['SY'] = $SY;

		$zx = 0;
		$dados['zx'] = $zx;
		

		// Variavei para calculo da previsão de demanda
		
		$SY = 0; //Soma do consumo dos últimos 12 períodos;
		$SXY = 0; // soma de X vezes o Y ou seja cada período multippliocado pelo seu peso ;
		$n = 12;
		$Sx = 66;		
		$Sx² = 506;

		$this->load->view('components/head.php', $dados);
		$this->load->view('components/nav.php', $dados);
		$this->load->view('dashboard.php', $dados);
		$this->load->view('submenuprodutos.php');
		$this->load->view('consultar_produtos.php');
		$this->load->view('components/foother.php', $dados);
		

		
		
	}

	public function cadastrar()
		{	
			$dados['title'] = "Cadastrar Produtos";
			$produtos = $this->Produto_model->get_all_produto();
			$dados['produtos'] = $produtos;
			$quantidadetotal = $this->Produto_model->cont_all_produto();
			$dados['quantidadetotal'] = $quantidadetotal;

			$valortotal = 0;
 			$dados['valortotal'] = $valortotal;	

			$this->load->view('components/head.php', $dados);
			$this->load->view('components/nav.php', $dados);
			$this->load->view('dashboard.php', $dados);
			$this->load->view('submenuprodutos.php');
			$this->load->view('cadastrar_produtos.php', $dados);
			$this->load->view('components/foother.php', $dados);
	}

	public function editar()
		{	
			$dados['title'] = "Editar Produtos";
			$produtos = $this->Produto_model->get_all_produto();
			$dados['produtos'] = $produtos;
			$quantidadetotal = $this->Produto_model->cont_all_produto();
			$dados['quantidadetotal'] = $quantidadetotal;
			$valortotal = 0;
			$dados['valortotal'] = $valortotal;	

			$this->load->view('components/head.php', $dados);
			$this->load->view('components/nav.php', $dados);
			$this->load->view('dashboard.php', $dados);
			$this->load->view('submenuprodutos.php');
			$this->load->view('editar_produtos.php', $dados);
			$this->load->view('components/foother.php', $dados);
	}

	public function consumo()
		{	
			$dados['title'] = "Consumo de Produtos";
			$produtos = $this->Produto_model->get_all_produto();
			$dados['produtos'] = $produtos;
			$quantidadetotal = $this->Produto_model->cont_all_produto();
			$dados['quantidadetotal'] = $quantidadetotal;

			$consumototal = $this->Consumo_produto_model->get_all_consumo_produto();
			$dados['consumototal'] = $consumototal;

			$valortotal = 0;
			$dados['valortotal'] = $valortotal;	


			$this->load->view('components/head.php', $dados);
			$this->load->view('components/nav.php', $dados);
			$this->load->view('dashboard.php', $dados);
			$this->load->view('submenuprodutos.php');
			$this->load->view('consumo_produtos.php', $dados);
			$this->load->view('components/foother.php', $dados);
	}

	public function add()
	{   
		if(isset($_POST) && count($_POST) > 0)     
		{   
			$params = array(
				'nome' => $this->input->post('nome'),
				'preco' => floatval($this->input->post('preco')) * 100,
				'descricao' => $this->input->post('descricao'),
				'quantidade' => $this->input->post('quantidade'),
				'imagem' => $this->input->post('imagem'),
				'tipo' => $this->input->post('tipo'),
				'estoquemax' => $this->input->post('estoquemax'),
			);
			
			$produto_id = $this->Produto_model->add_produto($params);
			
			$mensagem = 'Produto cadastrado com sucesso!';
			echo json_encode($mensagem);
		}
		else
		{            
			$mensagem = 'Ocorreu um erro ao enviar os dados!';
			echo json_encode($mensagem);
		}
	}
	public function edit()
	{   
		$idProduto = $this->input->post('idProduto');
		// check if the produto exists before trying to edit it
		$data['produto'] = $this->Produto_model->get_produto($idProduto);
		
		if(isset($data['produto']['idProduto']))
		{
			if(isset($_POST) && count($_POST) > 0)     
			{   
				$params = array(
					'nome' => $this->input->post('nome'),
					'preco' => floatval($this->input->post('preco')) * 100,
					'descricao' => $this->input->post('descricao'),
					'quantidade' => $this->input->post('quantidade'),
				);

				$this->Produto_model->update_produto($idProduto,$params);  

				$mensagem = 'Produto alterado com sucesso!';
				echo json_encode($mensagem);
				return true;
			}
			else
			{
				$mensagem = 'Ocorreu um erro ao enviar os dados!';
				echo json_encode($mensagem);
				return true;
			}
		}
		else
			$mensagem = 'Selecione um produto para editar!';
			echo json_encode($mensagem);
			return true;
	}

	 









}