   <!-- <div class="col-12">
          <a href="{{url('/gerenciamento/categoria/create')}}" class="btn btn-success float-right"><i class="fas fa-plus"></i><span>Novo Fornecedor</span></a>
        </div>-->
<div id="accordion">
  <div class="card-header" id="headingOne">
    <div class="card row">   
      <div class="col-8">
        <h5 class="mb-0">
        <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Fornecedor <small> Dados</small>
        </a>
      </h5>

      <?php foreach ($fornecedores as $p): ?>
                            
            <div class="media text-muted pt-3 border-bottom">
                <p class="media-body pb-3 mb-0 small lh-125 text-body">                              
                Nome: <?php echo $p['nome']; ?></p><br>
                Endereço: <?php echo $p['endereço']; ?>
            </div>                                           
      <?php endforeach ?>                    
                  


        
      </div>   
      <div class="col-4">
        
              <button class="btn btn-warning"><i class="fas fa-pencil-alt"></i></button>
              <button class="btn btn-danger"><i class="fas fa-times"></i></button>
      </div> 
      <h6 class="mb-0 text-center bg-info bg-gradient">
        <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Detalhes
        </a>
      </h6>  
    </div>

      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
            Detalhes
        </div>
      </div>
  </div>

  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Fornecedor <small> Dados</small>
        </a>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        <div class="row ">

        aqi
      </div>
      </div>
    </div>
  </div>  
</div>