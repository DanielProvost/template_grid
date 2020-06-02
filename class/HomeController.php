<?php

class HomeController{

    public function index(){
           $page= 'index';
           include 'views/header.phtml';
           include 'views/main.phtml';
    }
}