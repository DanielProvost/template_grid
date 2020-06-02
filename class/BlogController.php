<?php

class BlogController{

    public function afficher(){
        $page= 'blog';
        include 'views/header.phtml';
        include 'views/blog.phtml';
    }

}