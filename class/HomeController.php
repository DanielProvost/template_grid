<?php

class HomeController{

    public function index(){
           $page= 'index';
           include 'views/main.phtml';
    }
}