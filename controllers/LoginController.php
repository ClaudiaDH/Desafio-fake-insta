<?php 
include_once "models/LoginUsuario.php";
class LoginController{
    public function acao($rotas){
        switch($rotas){
        case "login":
            $this->viewLogin();
        break;
        
        case "login-user":
            $this->loginUsuario();
        break;
        }
    }
    public function viewLogin(){
        include "views/loginUsuario.php";
    }
    private function loginUsuario(){
        session_start();
    
        //acessa tabela usuario
        $user = new LoginUsuario();
        $resultado = $user->loginUser($_POST['email'],$_POST['senha']);
        $senha = password_verify($_POST['senha'], $resultado[0]['senha']);
      
        if($senha){
            $_SESSION['fake']['user'] = $resultado;
            header('Location:/fake-insta/posts');
        } else {
            
            $_SESSION['loginError'] = "NÃO LOGADO";
            header('Location:login');
        }
    }
}
?>