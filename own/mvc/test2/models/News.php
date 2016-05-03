<?php

class News
{
    //возвращает одну новость по ид
    public static function getNewsItemById($id)
    {
        //Запрос в БД 
        $id = intval($id);
        if ($id)
        {
       //$host = 'localhost';
        //$dbname = 'konstantin';
        //$user = 'Konstantin';
	//$password = '12345';
       //$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        
        $db = Db::getConnection();
        
        $result = $db->query("SELECT * FROM posts WHERE id=" . $id);
        
        //$result->setFetchMode(PDO::FETCH_NUM);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        $newsItem = $result->fetch();
        
        return $newsItem;   
        }
    }
    
    //возвращает массив новостных ид
    public static function getNewsList()
    {
        //Запрос в БД 
        //$host = 'localhost';
        //$dbname = 'konstantin';
        //$user = 'Konstantin';
	//$password = '12345';
        //$db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        
        $db = Db::getConnection();
        $newsList = array();
        
        $result = $db->query("SELECT 
	    id, 
	    title,
            body,
	    date_creation 
	    FROM posts 
	    ORDER BY date_creation DESC");
        
        $i = 0;
        while($row = $result->fetch()) {
            $newsList[$i]['id']=$row['id'];
            $newsList[$i]['title']=$row['title'];
            $newsList[$i]['body']=$row['body'];
            $newsList[$i]['date_creation']=$row['date_creation'];
            $i++;
        }
       return $newsList;  
       echo 'Hello';
    }
    
    
    
}

