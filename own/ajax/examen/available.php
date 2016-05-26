
    <?php
    sleep(2);
    if (isset($_POST['name']) or isset($_POST['category']) or isset($_POST['cost'])) {
            $productName = $_POST['name'];
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
        echo " Name - " .$_POST['name']." ,category - " .$_POST['category']." ,cost - " .$_POST['cost'];
  
     ?>    
   
    