<?php

    include_once "Conexao.php";

    class Post extends Conexao{

        //Envia dados do input para o banco de dados
        public function criarPost($image, $descricao){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO posts(img,descricao) values(?,?)");
            return $query->execute([$image, $descricao]);

        }

        //Envia dados do banco de dados para a página
        public function listarPosts(){
            $db =  parent::criarConexao();
            $query = $db->query('SELECT * FROM posts ORDER BY id DESC');
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);
            return $resultado;

        }

    }



?>