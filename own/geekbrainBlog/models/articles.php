<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
//require_once 'menu.php';


function articles_all($link) {

    //заглушка
    /*$arr1 = ["id" => 1, "title" => "Title1", "date" => "january 2016", "content"=>"Content1"];
    $arr2 = ["id" => 2, "title" => "Title2", "date" => "january 2016", "content"=>"Content2"];

    $arr[0] = $arr1;
    $arr[1] = $arr2;

    return $arr;*/

    //запрос
    $query = "SELECT * FROM articles ORDER BY id DESC";
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $articles = array();

    for ($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }

    return $articles;
}

function articles_get($link, $id_article) {
    //заглушка
    /*$arr1 = ["id" => 1, "title" => "Title1", "date" => "january 2016", "content"=>"Content1"];
    return $arr1;*/

    $query = sprintf ("SELECT * FROM articles WHERE id=%d", (int)$id_article);
    $result = mysqli_query($link, $query);

    if (!$result)
        die(mysqli_error($link));

    $articles = mysqli_fetch_assoc($result);
       
    return $articles;
}

function articles_new($link, $title, $date, $content) {

            // Подготовка
        $title = trim($title);
        $content = trim($content);
            
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $template_add = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";
        
        $query = sprintf($template_add, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $date),
                         mysqli_real_escape_string($link, $content));
        
        //echo $query;
        $result = mysqli_query($link, $query);
        
        if (!$result)
            die(mysqli_error($link));
        
        return true;
    
}

function articles_edit($link, $id, $title, $date, $content) {
            // Подготовка
        $title = trim($title);
        $content = trim($content);
        $date = trim($date);
        $id = (int)$id;
            
        // Проверка
        if ($title == '')
            return false;
        
        // Запрос
        $template_update = "UPDATE articles SET title='%s', content='%s', date='%s' WHERE id='%d'";
            
        $query = sprintf($template_update, 
                         mysqli_real_escape_string($link, $title),
                         mysqli_real_escape_string($link, $content),
                         mysqli_real_escape_string($link, $date),
                         $id);
        
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);


}

function articles_delete($link, $id) {

        $id = (int)$id;
        // Проверка
        if ($id == 0)
            return false;
        
        // Запрос
        $query = sprintf("DELETE FROM articles WHERE id='%d'", $id);
        $result = mysqli_query($link, $query);
        
        if (!result)
            die(mysqli_error($link));
        
        return mysqli_affected_rows($link);
    }


    function articles_intro($text, $len = 10)
    {
        return mb_substr($text, 0, $len); 
    }


//require_once 'footer.php';
?>