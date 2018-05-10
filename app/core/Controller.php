<?php

class Controller
{
    public $model;
    public $view;

    function __construct()
    {
        $this->view = new View();
    }

    function index()
    {
    }

//    public function clean($value)
//    {
//        $value = trim($value);
//        $value = stripslashes($value);
//        $value = strip_tags($value);
//        $value = htmlspecialchars($value);
//
//        return $value;
//    }
}