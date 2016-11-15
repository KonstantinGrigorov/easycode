<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'db.php';
require_once 'models/articles.php';
//require_once 'menu.php'; 

$link = db_connect();
$articles = articles_all($link);

include ("views/articles.php");
//include ("views/article.php");
//include ("article.php");

?>

   <!--  <div class="container">
      <form action="add_user.php" method="POST">
        <h2 >Add user</h2>
        <label for="name" >Name</label>
        <input name="name" type="text" id="name" placeholder="name">
        <label for="lastname" >Lastname</label>
        <input name="lastname" type="text" id="lastname" placeholder="lastname">
        <label for="mail">Email address</label>
        <input name="mail" type="mail" id="inputEmail" class="form-control" placeholder="mail" required autofocus>
        
        <button type="submit">Add new user</button>
      </form>
      
    </div> -->

    <!-- /container -->

