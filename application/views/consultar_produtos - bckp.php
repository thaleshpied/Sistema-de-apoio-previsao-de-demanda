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
                    <?php  
                      // Se existem consumototal
                      if ($consumototal)
                      {

                        /*Exibindo cada consumo*/
                        foreach($consumototal as $x =>$value){

                          

                          if($p['idProduto']==$value['produto_idProduto']){

                          $consumofinal = $value['quantidadeconsumida'];
                          
                          if ($zx<12) {
                            echo $consumofinal.$SY;
                            echo "<br>";
                            $SY += $consumofinal;
                          $zx++;
                            
                          }
                          




                          



                          /* if ($x<12) {
                            echo '<br> meu consumo na posição'.$x.'é'.$value['quantidadeconsumida'].$value['produto_idProduto'];
  
                            }

                            



                            
                            /*
                            if( $x['periodo'] == '2019-01-01'){
                              echo 'Janeiro = ';
                            }if( $x['periodo'] == '2019-02-01'){
                              echo 'Fevereiro = ';
                            }if( $x['periodo'] == '2019-03-01'){
                              echo 'Março = ';
                            }if( $x['periodo'] == '2019-04-01'){
                              echo 'Abril = ';
                            }if( $x['periodo'] == '2019-05-01'){
                              echo 'Maio = ';
                            }if( $x['periodo'] == '2019-06-01'){
                              echo 'Junho = ';
                            }if( $x['periodo'] == '2019-07-01'){
                              echo 'Julho = ';
                            }if( $x['periodo'] == '2019-08-01'){
                              echo 'Agosto = ';
                            }if( $x['periodo'] == '2019-09-01'){
                              echo 'Setembro = ';
                            }if( $x['periodo'] == '2019-10-01'){
                              echo 'Outubro = ';
                            }if( $x['periodo'] == '2019-11-01'){
                              echo 'Novembro = ';
                            }if( $x['periodo'] == '2019-12-01'){
                              echo 'Dezembro = ';
                            }                              

                             echo $x['quantidadeconsumida'].'<br>'; */
                              

                            
                             // $SY = ($SY+$value['quantidadeconsumida']);
                             
                             



                            }

                            
                          }   
                          echo 'Consumo total dos últimos 12 meses = '.$SY;
                          $SY = 0;                                                 
                          

                          

                        }
                        $i = 0;

                                                    
                    ?>
                           

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