<?php
   
    $loginUser = isset($_SESSION["fake"]["user"][0]["nome"]) ? $_SESSION["fake"]["user"][0]["nome"]:[];
    // var_dump($loginUser);
    // exit;
   
?>

<header>
        <nav class="navbar topo-instagran justify-content-center">
            <a class="navbar-brand" href="/fake-insta/"><img width="90" src="views/img/logo.png" alt="" srcset="">Instagram</a>

            <?php
            if($loginUser){ ?>
            <div class= "d-flex mt-3">
                <p><?php echo "Olá, ".$loginUser; ?></p>
            </div>
            <div class= "d-flex ml-3">     
                <a href="/fake-insta/logout" type="submit" class="btn btn-primary">Logout</a>
            </div>    
            <?php }else{ ?>
                    <a href="/fake-insta/cadastro">Cadastre-se</a>
                    <a href="/fake-insta/login">Login</a>
                <?php } ?>

        </nav>
</header>