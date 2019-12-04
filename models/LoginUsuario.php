<?php 
include_once "Conexao.php";
class LoginUsuario extends Conexao {
    function loginUser($email){
        $db = parent::criarConexao();
        $query = $db->prepare("SELECT * FROM usuarios WHERE email = ?");
        $query->execute([$email]);
        $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
      
    }
}
?>