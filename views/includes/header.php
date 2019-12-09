
<?php
session_start();
    //come from de user register function
    $user = $_SESSION['user'];
    $username=  $_SESSION["username"];


?>
<!-- Starting the header that I'm gonna "include" in my code, so I don't need use the HTML structure-->

<header>
    <nav class="navbar top-instagram justify-content-center">
        <a href="#" class="navbar-brand">
            <img src="views/image/logo.png" alt="Website Logo" srcset="" width="60">Instagram
        </a>    

        
        <!--Installing the SignUp,SignIn and Logout Button -->
        <div>
            
            <!--This is where is gonna shows up the name of the user when he is logged -->
            <?php if($username){ ?>
            Hello, <?php echo $username[0]['username']; ?>
            <a href="/fake-insta/logout">Logout</a>
        <?php }else if($user){?>
            Hello,<?php echo $user->username ; ?>
            <a href="/fake-insta/logout">Logout</a>
            <?php }else{ ?>
            <a class="btn btn-signup" href="/fake-insta/sign-up">Register</a>
            <a class="btn btn-signup" href="/fake-insta/sign-in">Login</a>
           <?php }?>
            
        
        </div>
    </nav>


</header>