<?php// require_once 'db.php';  ?>
<html>
    <head>
        <style type="text/css">
            font {font-size: 20pt; color: black; font-family: "Arial" }
            font.text1 {font-size: 11pt; color: black; font-family: "Aharoni" }
            font.text2 {font-size: 31pt; color: black; font-family: "Algerian" }
        </style>
    </head>
    <body>
    <?php

        /*$productName = "";
        $productCategory = "";
        $productCost = "";*/
        if (isset($_POST['product_name']) or isset($_POST['category']) or isset($_POST['cost'])) {
            $productName = $_POST['product_name'];
            $productCategory = $_POST['category'];
            $productCost = $_POST['cost'];
        }
        else {
            echo "Вы не ввели каkую-то категорию товара";
        }

         $nameLength = strlen($productName);
         if ($nameLength<3 or $nameLength>50) {
            echo "Некорректная длина названия товара!";
            die;
         }
         if (!is_numeric($productCost)) {
            echo "Вы ввели некорректный символ, введите число!";
            die;
         }
     ?>    
    <table border="3" align="center">
        <caption align="top"><font class="text2">Goods</font></caption>
        <tr align="center">
            <td><font><strong>Product</strong></font></td>
            <td><font><strong>Category</strong></font></td>
            <td><font><strong>Cost</strong></font></td>
        </tr>
        
            <tr>
                <td><font class="text1"><i> <?php echo $productName ?> </i></font></td>
                <td><font class="text1"><i> <?php echo $productCategory ?> </i></font></td>
                <td><font class="text1"><i> <?php echo $productCost ?> </i></font></td>
            </tr>
        
    </table>
    </body>
    </html>
    <?php

$db  =  new  PDO('mysql:dbname=test; host=localhost',"Konstantin","12345");
 
//далее сам запрос
$sql="insert into `goods` (product_name, product_price, product_category) values (:name,:price,:category)";
$sth=$db->prepare($sql);
$sth->bindValue(':name', $productName);
$sth->bindValue(':price', $productCost);
$sth->bindValue(':category', $productCategory);
$sth->execute();
 ?>
