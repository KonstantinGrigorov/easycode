<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'db.php';
require_once 'models/articles.php';
//require_once 'menu.php'; 

$link = db_connect();
$article = articles_get($link, $_GET['id']);

include ("views/article.php");


?>
