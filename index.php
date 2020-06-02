<?php
include 'autoload.php';

$page='home';
if(array_key_exists('p',$_GET) && isset($_GET['p'])){

    $page = $_GET['p'];
    ?>
    <pre>
    <?php print_r($page); ?>
</pre>
    <?php
}

switch($page){
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    default :
        echo 'erreur 404';
}