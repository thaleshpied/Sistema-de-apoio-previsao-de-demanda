 <div class="col-12">
          <a class="btn btn-outline-success ml-2 text-success mb-2" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i><span> Novo Produto</span></a>
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
      <div id="botoes" class="modal-footer">
        <input class="btn btn-outline-info" type="submit" name="Cadastrar" value="Cadastrar" id="botao">
      </div>
    </fieldset>
    </form>
  </div>
</div>

      </div>
        </form>
     
    </div>
  </div>
</div>



<!-- OOOOOOOOOOOOOOOOOOOOOOOOOOOO -->

<div>
   

  <div class="card-header" id="headingOne">
    <div class="card row">   
      <div class="col-12">

      <?php foreach ($produtos as $p): ?>
                            
              <div class="media text-muted pt-3 border-top">
                <p class="media-body pb-3 mb-0 small lh-125 text-body">    
                <img src="<?php echo base_url('application/views/assets/img/'). $p['imagem'];?>" class="img-fluid p-2 imgprd" alt="Imagem do Produto">


                Código: <?php echo $p['idProduto']; ?> <?php echo $p['nome']; ?>
                          - Estoque Atual:  <?php echo $p['quantidade'];?>                          
                          - Preço unitário: R$ <?php echo formatar_preco($p['preco']); ?> <br>
                          Estoque máximo: <?php echo $p['estoquemax']; ?>                           
                          - Valor Total em estoque: 
                            <?php

                            $valortotalemestoque = ($p['quantidade']*$p['preco']);


                            echo formatar_preco ($valortotalemestoque);
                            ?>                  
                </p>
              <div>        
              <button class="btn btn-outline-warning" data-toggle="modal" data-target="#t<?php echo $p['idProduto']; ?>"><i class="fas fa-pencil-alt"></i></button>
              <button class="btn btn-outline-danger"><i class="fas fa-times"></i></button>
      </div>
    </div>  
    <?php endforeach ?>    
        

        <?php foreach ($produtos as $p): ?>
        <!-- MODAL EDITAR FORNECEDOR -->
        <div class="modal fade" id="t<?php echo $p['idProduto']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar <?php echo $p['nome']; ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                  <div class="card-body">
                    <form method="post">
                          
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
                                                                   
                  </div>
                </div>
                  
                  </form>
                
            </div>
          </div>
        </div>
        <?php endforeach ?>   


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