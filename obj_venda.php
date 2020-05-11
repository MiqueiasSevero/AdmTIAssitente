<?php
        require_once("./conexao.php");

    class CRUDVenda{
       // criando um atributo dentro da classe e ssetando como null.
       private $pdo = null; 
       public function __construct($conexao){
            //o construtor vai receber o parametro para conexão. 
            $this->pdo = $conexao;

       }
       public function buscaItem($cod_item){
           $sql = "SELECT * FROM `tbl_produtos` WHERE '".$cod_item ."';";
           $stm = $this->pdo->prepare($sql);
           $stm->execute();

           $dados = $stm->fetchAll(PDO::FETCH_OBJ);
            return $dados;
       }
    }
    //estanciado e chamando objeto

    $CRUDVenda = new CRUDVenda(Conexao::getInstance());
        $cod_item = $_POST[''];
        $retorno = $CRUDVenda->buscaItem($cod_item);    

        print_r($retorno);

?>