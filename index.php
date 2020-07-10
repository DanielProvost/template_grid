<?php
include 'autoload.php';

$page='home';
if(array_key_exists('p',$_GET) && isset($_GET['p']))
{
    $page = $_GET['p'];
}

switch($page)
{
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;
    case 'blog' :
        $controller = new BlogController();
        $controller->afficherTousArticles();
        break;
    case 'user' :
        $controller = new UserController();
        $controller->creerUnUtilisateur();
        break;
    case 'signin':
        $controller = new SigninController();

        if(!empty($_POST)){
            $controller->signin();

        }
        else{$controller->index();
        }
        break;

    case 'signout':
        $controller = new SignoutController();
        $controller->index();
        break;

    case 'signup' :
        $controller = new SignupController();
        $controller->index();
        break;
    default :

        echo 'erreur 404';
}