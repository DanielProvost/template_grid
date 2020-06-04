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
        $controller->afficher(1);
        break;
    default :

        echo 'erreur 404';
}