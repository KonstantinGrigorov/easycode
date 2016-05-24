<?php
require_once 'db.php';
$db  =  new  PDO('mysql:dbname=test; host=localhost',"Konstantin","12345");
 
//далее сам запрос
$sql="insert into `goods` (product_name, product_price, product_category) values (:name,:price,:category)";
$sth=$db->prepare($sql);
$sth->bindValue(':name', $productName);
$sth->bindValue(':price', $productCost);
$sth->bindValue(':category', $productCategory);
$sth->execute();