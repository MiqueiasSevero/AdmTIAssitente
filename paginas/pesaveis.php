

    <div class="container justify-content-center shadow-lg p-3 mb-5 bg-white rounded">
                <div class="row justify-content-center mb-5 mt-5">
                    <h1 class="h1">
                        Pesquisa Produtos Pesaveis
                    </h1>    

                </div>
    
                <div class="row justify-content-center">
                    
                   
                        <div class="col-6">
                            <form method="POST">
                                <div  class="input-group">
                                    <input class="form-control" type="search" name="pesquisaProdutoPesavel" praceholder="Digite nome ou Código Consinco">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-info" name="botaoPesquisaPesavel" type="submit">Buscar</button>
                                    </div>   
                                </div>
                            </form>     
                        </div>   
                   
                </div>     
    
    </div>

    <div class="container justify-content-center shadow-lg p-3 my-15 bg-white rounded">
    
         <?php
                
                     require_once('./objetos/processaPesaveis.php');
                
          ?>   
    
    
    
    </div>


