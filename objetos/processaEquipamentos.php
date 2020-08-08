<?php


include_once('conexao.php');
    class CRUDs{
        // criando um atributo dentro da classe e ssetando como null.
        private $pdo = null; 
        public function __construct($conexao){
            //o construtor vai receber o parametro para conexão. 
            $this->pdo = $conexao;

        }
        
        public function buscaEquipamento($chavePesquisa){
           
            try{
                if($chavePesquisa != ''){
                     $sql = "SELECT * FROM  `tbl_equipamentos` WHERE hostname like '%".$chavePesquisa."%' or ip_equipamento like '%".$chavePesquisa."%';";
                
                
                }else{
                    $sql = "SELECT * FROM  `tbl_equipamentos`;";
                
                }
                
                $stm = $this->pdo->prepare($sql);
                $stm->execute();
    
                $dados = $stm->fetchAll(PDO::FETCH_ASSOC);
                return $dados;              
                
    
    
               }catch(PDOException $erro){
    
                echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
    
               }
        }
        public function buscaEquipamentoUpdate($idEquipamentoUpdate){
            try{
                if($idEquipamentoUpdate != ''){
                     $sql = "SELECT * FROM  `tbl_equipamentos` WHERE  id_equipamento = ". $idEquipamentoUpdate .";";
                
                
                }
                
                $stm = $this->pdo->prepare($sql);
                $stm->execute();
    
                $dados = $stm->fetchAll(PDO::FETCH_ASSOC);
                return $dados;              
                
    
    
               }catch(PDOException $erro){
    
                echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
    
               }


        }
    }


    
    $CRUDs = new CRUDs(Conexao::getInstance());

    $botaoChavePesquisa = filter_input(INPUT_POST,'botaoChavePesquisa', FILTER_SANITIZE_STRING);
    if(isset($botaoChavePesquisa)){
        $campoChavePesquisa = filter_input(INPUT_POST,'campoChavePesquisa', FILTER_SANITIZE_STRING);
        $result = $CRUDs->buscaEquipamento($campoChavePesquisa);
    
               
                
                 echo ' <table class="table">
                 						

                    <thead>
                        <tr>
                        <th scope="col">ID_EQUIPAMENTO</th>
                        <th scope="col">HOSTNAME</th>
                        <th scope="col">ID_KEYSTONE</th>
                        <th scope="col">IP_EQUIPAMENTO</th>
                        <th scope="col">IP_SWITCH</th>
                        <th scope="col">PORTA_SWITCH</th>
                        <th scope="col">RACK</th>
                        <th scope="col">CONTROLES</th>
                        </tr>
                    </thead>
                    <tbody>';

                     foreach ($result as $row ) {
                        
        
                        echo '<tr>';
                              echo'  <th scope="row">' . $row["id_equipamento"] .'</th>';
                              echo'  <th>' . $row["hostname"] .'</th>';
                              echo'  <th>' . $row['id_keystone'] .'</th>';
                              echo'  <th>' . $row['ip_equipamento'] .'</th>';
                              echo'  <th>' . $row['ip_switch'] .'</th>';
                              echo'  <th>' . $row['porta_switch'] .'</th>';
                              echo'  <th>' . $row['rack_rede'] .'</th>';
                              echo '<th><form  action="#" method="POST"><input type"text" value="' . $row['id_equipamento'] .'" name="idEquipamentoUpdate" hidden="true"><button class="btn btn-outline-danger" type="submit" id="botaoEditarEquipamento" data-toggle="modal" data-target="#modalUpdate" name="botaoEditarEquipamento">Editar</button></form></th>';
                               
                        echo '</tr>'; 
                        
                     }



                        
                    
                 echo'     
                    </tbody>
                 </table>';
    }

    $botaoEditarEquipamento = filter_input(INPUT_POST,'botaoEditarEquipamento', FILTER_SANITIZE_STRING);

    if(isset($botaoEditarEquipamento)){
        $idEquipamentoUpdate = filter_input(INPUT_POST,'idEquipamentoUpdate',FILTER_SANITIZE_STRING);
        $CRUDs->buscaEquipamentoUpdate($idEquipamentoUpdate);

        echo '<!-- Modal -->
        <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="exampleModalLongTitle">Cadastro - Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <form method="POST" action="objetos/validaCadastro.php">
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="nomeCadastro">Nome:</label>
                                    <input class="form-control" id="nomeCadastro" name="nomeCadastro"type="text" placeholder="Nome...">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="ultimoSobrenomeCadastro">Último Sobrenome:</label>
                                    <input class="form-control" id="nomeCadastro" name="sobreNomeCadastro" type="text" placeholder="Último Sobrenome...">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="emailCadastro">Email:</label>
                                    <input class="form-control" id="emailCadastro" name="emailCadastro" type="email" placeholder="Email...">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="senhaCadastro">Senha:</label>
                                    <input class="form-control" id="senhaCadastro" name="senhaCadastro" type="password" placeholder="Senha...">
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="confirmaSenhaCadastro">Confirma senha:</label>
                                    <input class="form-control" id="confirmaSenhaCadastro" name="confirmaSenhaCadastro" type="password" placeholder="Confirma senha...">
                                </div>

                            </div>
                        
                        </form>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-info" data-dismiss="modal">Fechar</button>
                    <button type="submit" name="botaoCadastrarUsuario" class="btn btn-outline-primary">Enviar</button>
                </div>
                </div>
            </div>
        </div>';

    }

