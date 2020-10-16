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
        public function UpdateEquipamento($idEquipamentoUpdate,$hostname,$id_keystone,$ip_equipamento,$ip_switch,$porta_switch,$rack_rede){


       
            try{
              if($idEquipamentoUpdate != ''){
               $sql = "UPDATE `tbl_equipamentos` SET `hostname`='$hostname',`id_keystone`= '$id_keystone',`ip_equipamento`='$ip_equipamento',`ip_switch`='$ip_switch',`porta_switch`='$porta_switch',`rack_rede`='$rack_rede' WHERE id_equipamento = $idEquipamentoUpdate ;";
                
                
           }
                
           $stm = $this->pdo->prepare($sql);

           $stm->execute();

                
    
    
            }catch(PDOException $erro){
    
                echo "<script>alert('Erro na linha: {$erro->getLine()}')</script>";
    
         }


      }
    }


    Class Dao{
          public function PopulaTable($result){
         
      
               
             
            
                       
                        
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
                                      echo '<th> <input type"text" value="" name="idEquipamentoUpdate" hidden="true"><button class="btn btn-outline-danger" type="submit" id="botaoEditarEquipamento" data-toggle="modal" data-target="#exampleModal'.$row['id_equipamento'].'" name="botaoEditarEquipamento">Editar</button></th>';
                                       
                                echo '</tr>'; 
        
                                echo '<!-- Modal -->
                                      <form method="POST">
                                            <div class="modal fade" id="exampleModal'.$row['id_equipamento'].'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">'.$row["hostname"].'</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form-row">
                                                    <div class="form-group col-md-0">
                                                   
                                                      <input type="text" value="'.$row["id_equipamento"] .'" hidden="true" class="form-control" name="idEquipamentoUpdate" id="" placeholder="Email">
                                                     </div>
                                                      <div class="form-group col-md-12">
                                                        <label for="inputEmail4">HOSTNAME</label>
                                                        <input type="text" value="'.$row["hostname"]  .'" class="form-control" id="inputEmail4" name="hostname" placeholder="Email">
                                                      </div>
                                                      
                                                    </div>  
                                                    <div class="form-row">
                                                      <div class="form-group col-md-6">
                                                        <label for="inputEmail4">IP DO EQUIPAMENTO</label>
                                                        <input type="text" value="'. $row["ip_equipamento"].'" class="form-control" id="inputEmail4" name="ip_equipamento" placeholder="Email">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="inputPassword4">IP SWITCH </label>
                                                        <input type="text" value="'. $row["ip_switch"].'" class="form-control" id="inputPassword4" name="ip_switch" placeholder="Senha">
                                                      </div>
                                                    </div>  
                                                    <div class="form-row">
                                                      <div class="form-group col-md-3">
                                                        <label for="inputEmail4">PORTA SWITCH </label>
                                                        <input type="text" value="'. $row["porta_switch"].'" class="form-control" id="inputEmail4" name="porta_switch" placeholder="Email">
                                                      </div>
                                                      <div class="form-group col-md-3">
                                                        <label for="inputPassword4">RACK DE REDE</label>
                                                        <input type="text" value="'. $row["rack_rede"].'" class="form-control" id="inputPassword4" name="rack_rede" placeholder="Senha">
                                                      </div>
                                                      <div class="form-group col-md-6">
                                                        <label for="inputPassword4">ID KEYSTONE</label>
                                                        <input type="text" value="'. $row["id_keystone"] .'" class="form-control" id="inputPassword4" name="id_keystone" placeholder="Senha">
                                                      </div>
                                                    
                                                    </div>  
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">FECHAR</button>
                                                  <button type="submit" class="btn btn-primary" name="botaoEditarEquipamento">SALVAR</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                            
                                      
                                      
                                      
                                      </form>
                                    
                                  ';
                                
                             }
        
        
        
                                
                            
                         echo'     
                            </tbody>
                         </table>';
            


          }


    }
    $CRUDs = new CRUDs(Conexao::getInstance());
    $Dao = new Dao();
    $botaoEditarEquipamento = filter_input(INPUT_POST,'botaoEditarEquipamento', FILTER_SANITIZE_STRING);
    $botaoChavePesquisa = filter_input(INPUT_POST,'botaoChavePesquisa', FILTER_SANITIZE_STRING);
    

  
    
    if(isset($botaoChavePesquisa)){
      $campoChavePesquisa = filter_input(INPUT_POST,'campoChavePesquisa', FILTER_SANITIZE_STRING);
      $result = $CRUDs->buscaEquipamento($campoChavePesquisa);
      $Dao->PopulaTable($result);

    }
    if(isset($botaoEditarEquipamento)){
        $idEquipamentoUpdate = filter_input(INPUT_POST,'idEquipamentoUpdate',FILTER_SANITIZE_STRING);
        $hostname  = strtoupper(filter_input(INPUT_POST,'hostname', FILTER_SANITIZE_STRING));
        $id_keystone = strtoupper(filter_input(INPUT_POST,'id_keystone', FILTER_SANITIZE_STRING));
        $ip_equipamento = strtoupper(filter_input(INPUT_POST,'ip_equipamento', FILTER_SANITIZE_STRING));
        $ip_switch = strtoupper(filter_input(INPUT_POST,'ip_switch', FILTER_SANITIZE_STRING));
        $porta_switch = strtoupper(filter_input(INPUT_POST,'porta_switch', FILTER_SANITIZE_STRING));
        $rack_rede = strtoupper(filter_input(INPUT_POST,'rack_rede', FILTER_SANITIZE_STRING));
    
        
        $CRUDs->UpdateEquipamento($idEquipamentoUpdate,$hostname,$id_keystone,$ip_equipamento,$ip_switch,$porta_switch,$rack_rede);
        $result = $CRUDs->buscaEquipamento("");
        $Dao->PopulaTable($result);

        

    }
  
 

