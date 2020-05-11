<?php
session_start();
include_once('conexao.php');
    class Login{
        // criando um atributo dentro da classe e ssetando como null.
        private $pdo = null; 
        public function __construct($conexao){
            //o construtor vai receber o parametro para conexão. 
            $this->pdo = $conexao;

        }
        public function buscaLogin($usuarioLogin){
            $sql = "SELECT id, nome, email, senha FROM `tbl_usuarios` WHERE email = '".$usuarioLogin."'LIMIT 1;";
            $stm = $this->pdo->prepare($sql);
            $stm->execute();

            $dados = $stm->fetch(PDO::FETCH_ASSOC);
            return $dados;
        }
    }

    $botaoEntrarLogin = filter_input(INPUT_POST,'botaoEntrarLogin', FILTER_SANITIZE_STRING);
    if($botaoEntrarLogin) {
        $usuarioLogin = filter_input(INPUT_POST,'usuarioLogin',FILTER_SANITIZE_STRING);
        $senhaLogin = filter_input(INPUT_POST,'senhaLogin',FILTER_SANITIZE_STRING);

          //  echo  " $usuarioLogin  -  $senhaLogin";
          if((!empty($usuarioLogin)) AND (!empty($senhaLogin))){
            //Gerar senha criptografada
           // echo password_hash($senhaLogin, PASSWORD_DEFAULT);  
           //pesquisar usuario no banco de dados.
            $Login = new Login(Conexao::getInstance());
            $resultadoUsuario = $Login->buscaLogin($usuarioLogin);
           
            if(isset($resultadoUsuario)){
                $rowUsuario = $resultadoUsuario;
                if (password_verify($senhaLogin,$rowUsuario['senha'])){
                    $_SESSION['id'] = $rowUsuario['id'];
                    $_SESSION['nome'] = $rowUsuario['nome'];
                    $_SESSION['email'] = $rowUsuario['email'];

                    header("Location:nav.php");
                }else{
                    $_SESSION['msg'] = "Usuário ou senha incorreto!";
                    header("Location:index.php");
                }
            }

          }else{
            $_SESSION['msg'] = "Usuário ou senha incorreto!";
            header("Location:index.php");
          }

    }else{
        $_SESSION['msg'] = "Página não encontrada";
        header("Location:index.php");
    }
?>