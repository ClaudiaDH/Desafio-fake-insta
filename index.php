<?php
    $routes = key($_GET)?key($_GET):'posts';

    switch($routes){
        case 'posts':
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->action($routes);
        break;
        case 'post-form':
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->action($routes);
        break;
        case 'register-post':
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->action($routes);
        break;
        case 'sign-up':
            include "controllers/UserController.php";
            $controller = new UserController();
            $controller->action($routes);
        break;
        case 'user-register':
            include "controllers/UserController.php";
            $controller = new UserController();
            $controller->action($routes);
        break;
        case 'sign-in':
            include "controllers/LoginController.php";
            $controller = new LoginController();
            $controller->action($routes);
        break;
        case 'user-signIn':
            include "controllers/LoginController.php";
            $controller = new LoginController();
            $controller->action($routes);
        break;
        case 'logout':
            include "controllers/LoginController.php";
            $controller = new LoginController();
            $controller->action($routes);
        break;
    }

    




?>