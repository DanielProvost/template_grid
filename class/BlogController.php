<?php

class BlogController{

    public function afficher($id){
        $postmodel1 = new PostModel;
        $post = $postmodel1->getOnePost($id);
        $page= 'blog';

        include 'views/header.phtml';
        include 'views/blog.phtml';
    }

    public function afficherTousArticles(){
        $postmodel2 = new PostModel;
        $posts = $postmodel2->getAllPosts();
        $page= 'blog';
        include 'views/header.phtml';
        include 'views/blog.phtml';
    }

}