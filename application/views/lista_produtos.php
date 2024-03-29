<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Previsão de demanda - <small> mês xx-xxxx</small>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
          <div class="row ">
            <button class="btn btn-outline-info mb-3" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Exportar Previsão</button>
        <div class="row">
          <div class="">
            <div class="collapse multi-collapse show" id="multiCollapseExample1">
              <div class="card card-body">
                <div class="row ">
                  <!-- Exibindo produtos -->
                  <?php foreach($produtos as $p){ ?>
                    
                    <div class="col-xs-12 col-md-12 previsaoitem">
                      <div class="my-3 p-3 rounded box-shadow">
                        <h6 style = "color: black;" class="border-gray pb-2 mb-0">
 
                          Nome: <?php echo $p['nome']; ?>
                          - Estoque:  <?php echo $p['quantidade'];?>                          
                          - Estoque máximo: <?php echo $p['estoquemax']; ?>                           
                          - Valor unitário: R$ <?php echo formatar_preco($p['preco']); ?>
                          
                        </h6>                    
                    
                    <?php if ($consumototal){ //Se existem consumototal
                                /*Exibindo consumo dos últimos 12 meses para cada produto*/
                                foreach($consumototal as $x =>$value){                          

                                  if($p['idProduto']==$value['produto_idProduto']){

                                    $consumofinal = $value['quantidadeconsumida'];
                          
                                    if ($zx<12) {
                                       //echo $consumofinal;
                                       //echo "<br>";
                                      $SY += $consumofinal;
                                      
                                      // IFs ABAIXO PARA SXY OU SEJA CADA CONSUMO VEZES O SEU PESO
                                      switch ($zx) {
                                          case 0:
                                          $SXY += ($consumofinal*11);
                                          break;
                                          case 1:
                                          $SXY += ($consumofinal*10);
                                          break;
                                          case 2:
                                          $SXY += ($consumofinal*9);
                                          break;
                                          case 3:
                                          $SXY += ($consumofinal*8);
                                          break;
                                          case 4:
                                          $SXY += ($consumofinal*7);
                                          break;
                                          case 5:
                                          $SXY += ($consumofinal*6);
                                          break;
                                          case 6:
                                          $SXY += ($consumofinal*5);
                                          break;
                                          case 7:
                                          $SXY += ($consumofinal*4);
                                          break;
                                          case 8:
                                          $SXY += ($consumofinal*3);
                                          break;
                                          case 9:
                                          $SXY += ($consumofinal*2);
                                          break;
                                          case 10:
                                          $SXY += ($consumofinal*1);
                                          break;
                                          case 11:
                                          $SXY += ($consumofinal*0);
                                          break;                                          
                                      }
                                      $zx++;                          
                                      
                                    } 

                                    // APRESENTANDO OS VALORES DE SOMA SOMENTE NO ÚLTIMO LAÇO
                                    if ($zx == 12) {

                                      /* 

                                      EQUAÇÃO 1: ∑Y = (n . a) + ( ∑x . b) 
                                      EQUAÇÃO 2: ∑X.Y = (Sx . a) + (s x² + b)

                                      */

                                      $B = (($SY*11)+($SXY*-2))/-286;
                                      $A = ($SY-(66*$B))/12;
                                      $PREVISAO = $A + ($B*12);
                                      $valorfinal = (round($PREVISAO) * $p['preco']); 

                                        
                                      //Apresentando a quantidade prevista e indicando o tipo do produto
                                      echo "<br><h5>Quantidade para o próximo mês = ".round($PREVISAO) .$p['tipo']; 
                                      echo "<br>Valor previsto total:" . formatar_preco($valorfinal);
                                      echo "</h5>";
                                    }


                                  }                                  
                                }  
                         
                          //Reiniciando a variáveis SY e zx para que seja ultilizado no próximo laço foreach
                          
                          $SY = 0;
                          $SXY = 0; 
                          $zx = 0;  

                      }?>
                           

            <div class="media text-muted pt-3 border-bottom">
                <p class="media-body pb-3 mb-0 small lh-125 text-body"> 
            </div>                                                 
          </div>
        </div>   
      <?php } ?>
                </div>
                </div> 
              </div>
            </div>
          </div>
        </div>
      </div>

  
</div> <!--TERMINA EXIBIÇÃO DO CONSUMO DE 2019 -->
</div>
</div> 
</div>