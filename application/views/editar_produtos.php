
				<!-- Exibindo produtos -->
        <?php foreach($produtos as $p){ ?>

          <div class="col-12 border row" id="editarproduto">
          		
          		<!-- IMAGEM DO PRODUTO -->
          		<div class="col-4">
          			<img src="<?php echo base_url('application/views/assets/img/'). $p['imagem'];?>" class="img-fluid p-2" alt="Imagem do Produto">
          		</div>
          		
          		<!-- DADOS DO PRODUTO -->
          		<div class="col-8">
          			<form method="post" id="form-cadastro">
          			<div class="my-3 p-3 rounded box-shadow">
          				
          					<div class="input-div" id="input-valor">
											<input class="form-control" id="idProduto" name="idProduto" type="text" widht="60px" placeholder="Nome: <?php echo $p['nome']; ?>" value="<?php echo $p['idProduto']; ?>" disabled />
										</div>

              			<div class="input-div pt-1" id="input-valor">
											<input class="form-control" id="nome" name="nome" type="text" widht="60px" placeholder="Nome: <?php echo $p['nome']; ?>" required />
										</div>

										<div class="input-div pt-1" id="input-valor">
											<input class="form-control" id="descricao" name="descricao" type="text" widht="60px" placeholder="Descrição: <?php echo $p['descricao']; ?>" required />
										</div>

										<div class="input-div pt-1" id="input-valor">
											<input class="form-control" id="quantidade" name="quantidade" type="text" widht="60px" placeholder="Estoque: <?php echo $p['quantidade']; ?>" required />
										</div>

                  	<div class="input-div pt-1" id="input-valor">
											<input class="form-control" id="preco" name="preco" type="text" required  widht="60px" placeholder="Valor: R$ <?php echo formatar_preco($p['preco']) ?>" required />
										</div>

                  	<div class="input-div pt-1" id="input-valor">
											<button class="btn btn-outline-info mb-3" type="submit" name="Alterar" id="botao">Salvar</button>
										</div>
            		</div>
            	</form>
          		</div>   
        		</div>
        <?php } ?>		
          		
          	
<!-- RETORNAR AO INÍCIO DA PÁGINA -->            
<a class="scroll-to-top rounded" href="#page-top" style="display: inline;">
	<i class="fas fa-angle-up"></i>
</a>

<!-- SCRIPT PARA SALVAR OS CAMPOS EDITADOS DO PRODUTO -->
<script type="text/javascript">

$(document).ready(function(){


	//Cadastrar
	$('#botao').on('click',function(){

		event.preventDefault();

		// Pegando valores dos inputs
		var idProduto = $('#idProduto').val();
		var nome = $('#nome').val();
		var descricao = $('#descricao').val();
		var preco = $('#preco').val();
		var quantidade = $('#quantidade').val();
		var imagem = $('#imagem').val();

		// verificando se os campos estão preenchidos
		if (
			nome == "" || descricao == "" || preco == "" || quantidade == "" || imagem == ""
			) 
		{
			alert('Todos os campos são obrigatórios!');
		} else {
			// Ajax envia os dados para o Produto/edit
			$.ajax({
				type : "POST",
				url  : "<?php echo base_url('Produtos/edit')?>",
				dataType : "JSON",
				data : {
					idProduto:idProduto,
					nome:nome,
					descricao:descricao,
					preco:preco,
					quantidade:quantidade,
					imagem:imagem,
				},
				success: function(data){
					alert(data);
				}
			});
			/* Limpando o formulário */
			document.getElementById("form-cadastro").reset();
		}
	});

	// Mascaras nos inputs
	$('#preco').mask('#.##0,00', {reverse: true});
	console.log();
	
});

function carregarDados() {

	var idProduto = $('#idProduto').val();

	// Ajax envia os dados para o Produto/getProduto
	$.ajax({
		type : "POST",
		url  : "<?php echo base_url('Produto/getProduto')?>",
		dataType : "JSON",
		data : {
			idProduto:idProduto,
		},
		success: function(data){

			document.getElementById("nome").value = data['nome'];
			document.getElementById("descricao").value = data['descricao'];
			document.getElementById("preco").value = data['preco'];
			document.getElementById("quantidade").value = data['quantidade'];
			document.getElementById("imagem").value = data['imagem'];
			document.getElementById("estoquemax").value = data['estoquemax'];
			document.getElementById("tipo").value = data['tipo'];

		}
	});
}

</script>

</body>
</html>