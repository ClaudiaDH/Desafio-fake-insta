<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
</head>
<body>

<?php include "views/includes/header.php"; ?>
<main class= "d-flex justify-content-center">
        <div class= "card col-4 p-3">
            <h1>Faça seu login</h1>
                <h6> <?php if(array_key_exists('loginError', $_SESSION)){
                    echo "NÃO LOGADO";} ?> </h6>

            <form action= "login-user" method= "POST" enctype= "multipart/form-data">
	
            <input type="text" class="form-control form-control-sm mb-3 name" name="email" placeholder="E-mail" id="email" required>

            <input type="password" class="form-control form-control-sm mb-3 text" name="senha" id="senha" placeholder="Senha" required>
            
                <div class= "d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
                <div class= "d-flex justify-content-center mt-4 mb-2">    
                    <h6>Caso ainda não tenha cadastro:</h6>
                </div>   
                <div class= "d-flex justify-content-center">   
                    <a href= "/fake-insta/cadastro" type="submit" class="btn btn-primary">Cadastrar</a>
                        
                </div>        
            </form>
        </div>

    </main>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>