<div class="row">
   <div class="col-12">
          <a class="btn btn-outline-success ml-2 text-success" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i><span> Novo</span></a>
    </div> 

  <!-- MODAL ADICIONAR NOVO FORNECEDOR -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Novo Fornecedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="card-body">
              <form method="post">
                
              <div class="input-div pt-1" id="input-valor">Nome
                <input class="form-control" id="nome" name="nome" type="text" widht="60px" placeholder="" required />
              </div>
              <div class="input-div pt-1" id="input-valor">Telefone
                <input class="form-control" id="telefone" name="telefone" type="text" widht="60px" placeholder="" required />
              </div>
              <div class="input-div pt-1" id="input-valor">CEP
                <input class="form-control" id="cep" name="cep" type="text" widht="60px" placeholder="CEP" />
              </div>
              <div class="input-div pt-1" id="input-valor">Endereço
                <input class="form-control" id="endereço" name="endereço" type="text" widht="60px" placeholder="" required />
              </div>
              <div class="input-div pt-1" id="input-valor">Bairro
                <input class="form-control" id="bairro" name="bairro" type="text" widht="60px" placeholder="" required />
              </div>
              <div class="input-div pt-1" id="input-valor">Cidade
                <input class="form-control" id="cidade" name="cidade" type="text" widht="60px" placeholder="" required />
              </div>
              <div class="input-div pt-1" id="input-valor">País
                <input class="form-control" id="pais" name="pais" type="text" widht="60px" placeholder="" required />
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
</div>

  <div class="card-header" id="headingOne">
    <div class="card row">   
      <div class="col-12">

      <?php foreach ($fornecedores as $p): ?>
                            
              <div class="media text-muted pt-3 border-top">
                <p class="media-body pb-3 mb-0 small lh-125 text-body">                              
                Nome: <?php echo $p['nome']; ?> - Telefone: <?php echo $p['telefone']; ?> 
                <br>
                Endereço: <?php echo $p['endereço']; ?> - <?php echo $p['cidade']; ?> - <?php echo $p['pais']; ?>                  
                </p>
              <div>        
              <button class="btn btn-outline-warning" data-toggle="modal" data-target="#<?php echo $p['pais']; ?><?php echo $p['idFornecedor']; ?>"><i class="fas fa-pencil-alt"></i></button>
              <button class="btn btn-outline-danger"><i class="fas fa-times"></i></button>
      </div>
    </div>  
    <?php endforeach ?>    
        

        <?php foreach ($fornecedores as $p): ?>
        <!-- MODAL EDITAR FORNECEDOR -->
        <div class="modal fade" id="<?php echo $p['pais']; ?><?php echo $p['idFornecedor']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          
                      <div class="input-div pt-1" id="input-valor">
                        <input class="form-control" id="nome" name="nome" type="text" widht="60px" placeholder="Nome: <?php echo $p['nome']; ?>" required />
                      </div>
                      <div class="input-div pt-1" id="input-valor">
                        <input class="form-control" id="telefone" name="telefone" type="text" widht="60px" placeholder="Telefone: <?php echo $p['telefone']; ?>" required />
                      </div>
                      <div class="input-div pt-1" id="input-valor">
                        <input class="form-control" id="endereço" name="endereço" type="text" widht="60px" placeholder="Endereço: <?php echo $p['endereço']; ?>" required />
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
        <?php endforeach ?>   


      </div>   
    </div>
  </div>

                  


        