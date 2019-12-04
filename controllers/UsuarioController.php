<?php 
include_once "models/Usuario.php";
class UsuarioController{
    public function acao($rotas){
        switch($rotas){
        case "cadastro":
            $this->viewCadastro();
        break;
        
        case "cadastrar-user":
            $this->cadastroUsuario();
        break;
        }
    }
    public function viewCadastro(){
        include "views/register.php";
    }
    private function cadastroUsuario(){
        $user = new Usuario();
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        
        
        $resultado = $user->cadastroUser($nome, $email, $senha);
        if($resultado){
            header('Location:/fake-insta/login');
        }else {
            echo "ERRO!!!!!!";
            var_dump($resultado);

        }
    }
}
?>