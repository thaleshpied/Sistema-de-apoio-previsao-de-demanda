<div class="cadastroproduto" id="cadastro-box">
	<div id="cadastro-box-interno">
		<form method="post" id="form-cadastro">
		<fieldset>
			<div id="cadastro-produto-label">Manutenção de Produtos</div>
			<div class="input-div" id="input-produto">  Produto:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<select class="form-control" id="idProduto" name="idProduto" onchange="carregarDados()">
					<option>Selecione</option>
					<?php 
						foreach ($produtos as $p) {
							echo '<option value="'.$p['idProduto'].'">'.$p['nome'].'</option>';
						}
					 ?>
				</select>
			</div>
			<div class="input-div" id="input-produto">  Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="form-control" id="nome" name="nome" type="text" required placeholder="Nome do Produto" widht="100px" maxlength="45" />
			</div>
			<!-- CRIAR BACK END DOS CAMPOS ABAIXO -->
				
				<div class="input-div" id="input-tipo">Tipo da Unidade:
				<input class="form-control" id="tipo" name="tipo" type="text" required placeholder="Apenas letras, exemplo: cx, pct, frd." widht="50px" required min="0" minlength="2" maxlength="10" />
				</div>
				<!-- 
				<div class="input-div" id="input-codigoProduto">Código do produto:
				<br><input id="codmanual" onclick="codmanual()" type="checkbox" name=""> Código manual
				<input class="form-control" id="codigoProduto" name="codigoProduto" type="number" placeholder="Apenas número" widht="50px" required min="0" minlength="3" maxlength="10" disabled="" />
				</div> -->

				<div class="input-div" id="input-estoquemax">Estoque Máximo:
				<input class="form-control" id="estoquemax" name="estoquemax" type="number" placeholder="Apenas número" widht="50px" required min="0" minlength="3" maxlength="10" />
				</div>

				<!-- CRIAR BACK END DOS CAMPOS ACIMA -->			
			<div class="input-div" id="input-valor">Valor R$:&nbsp;&nbsp;&nbsp;&nbsp;
				<input class="form-control" id="preco" name="preco" type="text" required placeholder="Apenas números" widht="60px" required />
			</div>
			<div class="input-div" id="input-valor">Quantidade:
				<input class="form-control" id="quantidade" name="quantidade" type="number" required placeholder="Apenas números" widht="50px" required min="0" minlength="3" maxlength="10" />
			</div>
			<div class="input-div" id="input-descrição">Descrição:&nbsp;&nbsp;
				<input class="form-control" id="descricao" name="descricao" type="text" required placeholder="Descrição do Produto" widht="190px" maxlength="100" />﻿
			</div>
			<div class="input-div" id="input-valor">Imagem:&nbsp;&nbsp;&nbsp;&nbsp;
				<select class="form-control" id="imagem" name="imagem">
					<option>Selecione</option>
					<option value="produto.png">
						Protudo
					</option>
				</select>
			</div>		
			<div id="botoes">
				<input class="btn btn-info" type="submit" name="Alterar" value="Alterar" id="botao">
			</div>
		</fieldset>
		</form>
	</div>
</div>

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