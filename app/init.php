<?php
session_start();
header('Content-Type: text/html; charset=utf-8');

require_once 'core/Model.php';
require_once 'core/View.php';
require_once 'core/Controller.php';
require_once 'core/Route.php';

$dbObject = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

Route::start();