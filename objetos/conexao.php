
<?php
    define("HOST","localhost");
    define("DBNAME","admti");
    define("USERNAME","root");
    define("PASSWORD","");


    //classe

    class  Conexao{

        //criando atributo pdo
        private static $pdo;
        
        //metodo de conexão
        public static function getInstance(){
         if(!isset(self::$pdo)){
            $opcoes = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8', PDO::ATTR_PERSISTENT => TRUE);
            try {
                self::$pdo = new PDO('mysql:host='.HOST.';dbname=' . DBNAME .'', USERNAME, PASSWORD);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch(PDOException $e) {
                echo 'ERROR: ' . $e->getMessage();
            }
         }
         return self::$pdo;

        }

    }
    
        
   
    

           

?>