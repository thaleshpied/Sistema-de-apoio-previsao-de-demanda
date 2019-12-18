<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Visão detalhada - <small> com registro de consumo</small>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
            Para detalhar o consumo selecione o ano
          <div class="row ">

          <!-- Consumo por ano --> 
        
          <a class="btn btn-outline-info" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">2019</a>
          <button class="btn btn-outline-info" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">2020</button>          
        </p>
        <div class="row">
          <div class="">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body">
                <div class="row ">
                  <!-- Exibindo produtos -->
                  <?php foreach($produtos as $p){ ?>

                    
                    <div class="col-xs-12 col-md-12">
                      <div class="my-3 p-3 rounded box-shadow">
                        <h6 style = "color: black;" class="border-gray pb-2 mb-0">

                          Código: <?php echo $p['idProduto']; ?> <?php echo $p['nome']; ?>
                          - Estoque Atual:  <?php echo $p['quantidade'];?>
                          - Preço unitário: R$ <?php echo formatar_preco($p['preco']); ?> 
                          - Estoque máximo: <?php echo $p['estoquemax']; ?>                           
                        </h6>  
                    
                    
                    <?php if ($consumototal){ //Se existem consumototal
                                /*Exibindo consumo dos últimos 12 meses para cada produto*/
                                foreach($consumototal as $x =>$value){                          

                                  if($p['idProduto']==$value['produto_idProduto']){

                                    $consumofinal = $value['quantidadeconsumida'];
                          
                                    if ($zx<12) {
                                      echo $consumofinal;
                                      echo "<br>";
                                      $SY += $consumofinal;
                                      $zx++;                                    
                                    } 
                                  }
                                }   
                          echo 'Consumo total dos últimos 12 meses = '.$SY;
                          //Reiniciando a variáveis SY e zx para que seja ultilizado no próximo laço foreach
                          $SY = 0; 
                          $zx = 0;  
                      }?>
                           

            <div class="media text-muted pt-3 border-bottom">
                <p class="media-body pb-3 mb-0 small lh-125 text-body">                              
                Descrição: <?php echo $p['descricao']; ?></p>
            </div>                                                 
          </div>
        </div>   
      <?php } ?>


                </div>
                </div> <!--TERMINA EXIBIÇÃO DO CONSUMO DE 2019 -->


                
              </div>
            </div>
          </div>
          <div class="">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body">
                Consumo 2020 <br>
                Ainda não há registros.
              </div>
            </div>
          </div>
        </div>
      </div>
    


<div class="row ">
                  <!-- Exibindo produtos -->
                  <?php foreach($produtos as $p){ ?>

                    
                    <div class="col-xs-12 col-md-12">
                      <div class="my-3 p-3 rounded box-shadow">
                        <h6 style = "color: black;" class="border-gray pb-2 mb-0">

                          Código: <?php echo $p['idProduto']; ?> <?php echo $p['nome']; ?>
                          - Estoque Atual:  <?php echo $p['quantidade'];?>
                          - Preço unitário: R$ <?php echo formatar_preco($p['preco']); ?> 
                          - Estoque máximo: <?php echo $p['estoquemax']; ?>                           
                        </h6>  

                           

                        <div class="media text-muted pt-3 border-bottom">
                            <p class="media-body pb-3 mb-0 small lh-125 text-body">                              
                            Descrição: <?php echo $p['descricao']; ?></p>
                        </div>                                                 
                      </div>
                    </div>   
                  <?php } ?>
                </div>
                </div> <!--TERMINA EXIBIÇÃO DO CONSUMO DE 2019 -->
    </div>


  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Visão simplificada
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <div class="row ">

        <!-- Exibindo produtos -->
        <?php foreach($produtos as $p){ ?>

          <!-- Produto <?php echo $p['idProduto']; ?> -->
          <div class="col-xs-12 col-md-6 border">
            <div class="my-3 p-3 rounded box-shadow">
              <h6 style = "color: black;" class="border-bottom border-gray pb-2 mb-0">

                Código: <?php echo $p['idProduto']; ?> <?php echo $p['nome']; ?>
                  
              </h6>
              <div class="media text-muted pt-3">
                  <img src="<?php echo base_url('application/views/assets/img/'). $p['imagem'];?>" class="img-fluid w-25 p-2" alt="Imagem do Produto">
                  <p class="media-body pb-3 mb-0 small lh-125 text-body">
                    <strong class="d-block text-gray-dark">Preço unitário: R$ <?php echo formatar_preco($p['preco']); ?></strong>
                  Descrição: <?php echo $p['descricao']; ?></p>
                  Estoque Atual:  <?php echo $p['quantidade'];?>
                </div>
            </div>
          </div>   
        <?php } ?>
      </div>
      </div>
    </div>
  </div>  
</div>