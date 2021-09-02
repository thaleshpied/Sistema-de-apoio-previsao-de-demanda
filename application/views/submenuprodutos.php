<div style="margin-bottom: 15px;" class="ml-2">
	<a href="consultar_produtos" class="btn btn-outline-info" role="button">Consultar</a>
	<a href="cadastrar_produtos" class="btn btn-outline-info" role="button">Cadastrar</a>
	<a href="editar_produtos" class="btn btn-outline-info" role="button">Editar</a>
	<!--<a href="consumo_produtos" class="btn btn-info" role="button">Consumo</a>-->
</div>

  <div class="col-12">
          <a class="btn btn-outline-success ml-2 text-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i><span> Novo Produto</span></a>
    </div> 

<!-- MODAL ADICIONAR NOVO FORNECEDOR -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div id="cadastro-box" class="cadastroproduto">
  <div id="cadastro-box-interno">
    <form method="post" id="form-cadastro">
    <fieldset>
      <div id="cadastro-produto-label" class="text-center">Cadastro de Produto</div>    
      <div class="input-div" id="input-produto">  Nome do Produto:
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

      <div class="input-div" id="input-valor">Valor da unidade em R$:&nbsp;&nbsp;&nbsp;&nbsp;
        <input class="form-control" id="preco" name="preco" type="text" required placeholder="Apenas números" widht="60px" required />
      </div>
      <div class="input-div" id="input-valor">Quantidade estoque:
        <input class="form-control" id="quantidade" name="quantidade" type="number" required placeholder="Apenas números, poderá preencher com o valor 0 (zero)" widht="50px" required min="0" minlength="3" maxlength="10" />
      </div>
      <div class="input-div" id="input-descrição">Descrição:&nbsp;&nbsp;
        <input class="form-control" id="descricao" name="descricao" type="text" required placeholder="Descrição do Produto" widht="190px" maxlength="100" />﻿
      </div>
      <div class="input-div" id="input-valor">Imagem:&nbsp;&nbsp;&nbsp;&nbsp;
        <select class="form-control" id="imagem" name="imagem">
          <option value="produto.png">
            Produto
          </option>
        </select>
      </div>    
      <div id="botoes">
        <input class="btn btn-info" type="submit" name="Cadastrar" value="Cadastrar" id="botao">
      </div>
    </fieldset>
    </form>
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-info mb-3" type="submit" name="Cadastrar" value="Cadastrar" id="botao">Salvar</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

$(document).ready(function(){

  //Cadastrar
  $('#botao').on('click',function(){

    // Pegando valores dos inputs
    var nome = $('#nome').val();
    var descricao = $('#descricao').val();
    var preco = $('#preco').val();
    var quantidade = $('#quantidade').val();
    var imagem = $('#imagem').val();
    var tipo = $('#tipo').val();
    var estoquemax = $('#estoquemax').val();

    // verificando se os campos estão preenchidos
    if (
      nome == "" || descricao == "" || preco == "" || quantidade == "" || imagem == "" || tipo == ""
      ) 
    {
      alert('Todos os campos são obrigatórios!');
    } else {
      // Ajax envia os dados para o Produto/add
      $.ajax({
        type : "POST",
        url  : "<?php echo base_url('Produtos/add')?>",
        dataType : "JSON",
        data : {
          nome:nome,
          descricao:descricao,
          preco:preco,
          quantidade:quantidade,
          imagem:imagem,
          tipo:tipo,
          estoquemax:estoquemax,
        },
        success: function(data){
          alert(data);
        }
      });
      // Limpando o formulário
      document.getElementById("#form-cadastro").reset();
    }
  });

  // Mascaras nos inputs
  $('#preco').mask('R$ 000,00', );

});

</script>
