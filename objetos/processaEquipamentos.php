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
    }


    $botaoChavePesquisa = filter_input(INPUT_POST,'botaoChavePesquisa', FILTER_SANITIZE_STRING);
    if(isset($botaoChavePesquisa)){
        $campoChavePesquisa = filter_input(INPUT_POST,'campoChavePesquisa', FILTER_SANITIZE_STRING);
        $CRUDs = new CRUDs(Conexao::getInstance());
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
                               
                        echo '</tr>'; 
                        
                     }



                        
                    
                 echo'     
                    </tbody>
                 </table>';
    }


