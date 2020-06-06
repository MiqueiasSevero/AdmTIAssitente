<?php
       
        //session_start() ;
        include_once('conexao.php');
            class ProdutosPesaveis{
                // criando um atributo dentro da classe e ssetando como null.
                private $pdo = null; 
                public function __construct($conexao){
                    //o construtor vai receber o parametro para conexão. 
                    $this->pdo = $conexao;
        
                }
                public function buscaProduto($buscaProdutoPesavel){
                    $sql = "SELECT * FROM `tbl_pesaveis`;";
                    $stm = $this->pdo->prepare($sql);
                    $stm->execute();
                    
                    $dados = $stm->fetchAll(PDO::FETCH_OBJ);

                    return $dados;
                }
            }

            $botaoPesquisaPesavel = filter_input(INPUT_POST,'botaoPesquisaPesavel', FILTER_SANITIZE_STRING);
            if(isset($botaoPesquisaPesavel)){
                $pesquisaProdutoPesavel = filter_input(INPUT_POST,'pesquisaProdutoPesavel', FILTER_SANITIZE_STRING);
                $produtosPesaveis = new ProdutosPesaveis(Conexao::getInstance());
                $result = $produtosPesaveis->buscaProduto($pesquisaProdutoPesavel);
            
                    
                         echo ' <table class="table">
                            <thead>
                                <tr>
                                <th scope="col-2">SEQPRODUTO</th>
                                <th scope="col-4">DESCCOMPLETA</th>
                                <th scope="col-4">CODACESSO</th>
                                <th scope="col-2">COMPRADOR</th>
                                </tr>
                            </thead>
                            <tbody>';

                             foreach ($result as $row ) {
                                
                
                                echo '<tr>';
                                      echo'  <th scope="row">' . $row[0]->SEQPRODUTO .'</th>';
                                       
                                echo '</tr>'; 
                                
                             }



                                
                            
                         echo'     
                            </tbody>
                         </table>';
            }
        
            
        




?>