<?php

    //create a variable that is gonna to receive the post route from the PostController.
    $posts = $_REQUEST['posts'];
    
    session_start();
    //come from de user register function
    
    $username=  $_SESSION["username"];


?>


?>


<!-- PAGE THAT IS GONNA SHOWS UP THE POSTS -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/style.css">
</head>
<body>
     <!--Including the header in the code-->
    <?php include_once "views/includes/header.php"; ?> 

    <main class="board">
    <?php foreach($posts as $post): ?>
    <div class="card mt-5">
    
        <img src="<?php echo $post->img  ?>" id="cardimg" alt="Card image cap"/>

        <div class="card-body">
            <p class="card-text"><?php echo $post->descript; ?></p>
            <?php if($username){ ?>
            <p class="card-text"><?php echo $username[0]['username']; ?></p>
            <?php } ?>

            
        </div>
        
    </div>
    <?php endforeach; ?>
    <a href="/Desafio-fake-insta/post-form" class="float-button">&#10010;</a>
    




        
        
    
    </main>

        <!-- ***** JS Scripts ***** -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
    
</body>
</html>