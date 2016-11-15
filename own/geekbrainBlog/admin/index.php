<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    require '../db.php';
    require '../models/articles.php';

    $link = db_connect();
    
    $article['title']='';
    $article['date']='';
    $article['content']='';

    if (isset($_GET['action']))
        $action = $_GET['action'];

    else
        $action = "";

    if ($action == "add") {
        if (!empty($_POST)) {
            articles_new($link, $_POST['title'], $_POST['date'], $_POST['content']);
            header ("Location: index.php");
        }
        include ("../views/articles_add.php");
    }
        else if($action == 'edit'){
        if(!isset($_GET['id']))
            header('Location: index.php');
        $id = (int)$_GET['id'];
        
        if(!empty($_POST) && $id > 0) {
            articles_edit($link, $id, $_POST['title'], $_POST['date'], $_POST['content']);
            header("Location: index.php");
        }
        
        $article = articles_get($link, $id);
        include("../views/articles_add.php");  
    }else if($action == 'delete'){
        $id = $_GET['id'];
        $article = articles_delete($link, $id);
        header('Location: index.php');
    }


    else {

    $articles = articles_all($link);
    include ("../views/articles_admin.php");
    }

   


//echo "Admin panel";

?>

    


      
    
