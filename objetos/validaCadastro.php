<?php
session_start();
include_once('conexao.php');
    class Cadastro{
        // criando um atributo dentro da classe e ssetando como null.
        private $pdo = null; 
        public function __construct($conexao){
            //o construtor vai receber o parametro para conexão. 
            $this->pdo = $conexao;

        }
        public function CadastraUsuario($nome,$email,$senha){
            $sql = "insert into tbl_usuarios values(null,'$nome','$email',);"
            $stm = $this->pdo->prepare($sql);
            $stm->execute();

            $dados = $stm->fetch(PDO::FETCH_ASSOC);
            return $dados;
        }
    }

    $botaoEntrarLogin = filter_input(INPUT_POST,'botaoCadastrarUsuario', FILTER_SANITIZE_STRING);
    if($botaoEntrarLogin) {
        $nome = filter_input(INPUT_POST,'nomeCadastro',FILTER_SANITIZE_STRING);
        $ultimoSobrenome = filter_input(INPUT_POST,'sobreNomeCadastro',FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST,'emailCadastro',FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST,'senhaCadastro',FILTER_SANITIZE_STRING);
        $confirmaSenha = filter_input(INPUT_POST,'confirmaSenhaCadastro',FILTER_SANITIZE_STRING);
        
        

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