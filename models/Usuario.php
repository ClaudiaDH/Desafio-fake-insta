<?php 
include_once "Conexao.php";
class Usuario extends Conexao {
    public function cadastroUser($nome, $email, $senha){
        $db = parent::criarConexao();
        $query = $db->prepare("INSERT INTO usuarios (nome, email, senha) values (?, ?, ?)");
        return $query->execute([$nome, $email, $senha]);
    }
}
?>