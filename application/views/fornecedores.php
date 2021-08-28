<div class="row">
<div class="col-12">
          <a href="{{url('/gerenciamento/categoria/create')}}" class="btn btn-success ml-2"><i class="fas fa-plus"></i><span> Novo Fornecedor</span></a>
        </div>

  
</div>
<div id="accordion">
  <div class="card-header" id="headingOne">
    <div class="card row">   
      <div class="col-12">

      <?php foreach ($fornecedores as $p): ?>
                            
            <div class="media text-muted pt-3">
                <p class="media-body pb-3 mb-0 small lh-125 text-body">                              
                Nome: <?php echo $p['nome']; ?> - Telefone: <?php echo $p['telefone']; ?> 
                <br>
                Endereço: <?php echo $p['endereço']; ?>                  
                </p>
            </div>                                           
      
      <div>
        
              <button class="btn btn-warning mb-1 mr-5 float-right fonrecedoresopcoes" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fas fa-pencil-alt"></i></button>
              <button class="btn btn-danger mb-1 float-right fonrecedoresopcoes"><i class="fas fa-times"></i></button>
      </div>


      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
            <h6>Editor de cadastro:</h6>
            <div class="input-div pt-1" id="input-valor">
              <input class="form-control" id="nome" name="nome" type="text" widht="60px" placeholder="Nome: <?php echo $p['nome']; ?>" required />
            </div>
            <div class="input-div pt-1" id="input-valor">
              <input class="form-control" id="telefone" name="telefone" type="text" widht="60px" placeholder="Telefone: <?php echo $p['telefone']; ?>" required />
            </div>
            <div class="input-div pt-1" id="input-valor">
              <input class="form-control" id="endereço" name="endereço" type="text" widht="60px" placeholder="Endereço: <?php echo $p['endereço']; ?>" required />
            </div>
            <div class="input-div pt-1" id="input-valor">
              <button class="btn btn-outline-info mb-3" type="submit" name="Alterar" id="botao">Salvar</button>
            </div>
        </div>
      </div>

      
        
    <?php endforeach ?>                    
      </div>   
    </div>
  </div>
</div>
                  


        