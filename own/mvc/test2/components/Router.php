<?php

class Router {
    // Хранит конфигурацию маршрутов.
    private $routes;
    
    public function __construct()
    {
       $routesPath= ROOT.'/config/routes.php';
       $this->routes = include($routesPath);
    }
    
    //Return request string
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) 
        {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
    
       //получить строку запроса
        $uri = $this->getURI();
        
     
   
         // проверить наличие такого запроса вroutes.php
        foreach ($this->routes as $uriPattern => $path)
        {
           //echo '<br>Где ищем (запрос, к-рый набрал юзер) '.$uri;//test2/news/sport/34
           //echo '<br>Что ищем(совпадение из правила) '.$uriPattern;//news/(a-z)+/([0-9]+)
           //echo '<br>Кто обрабатывает? '.$path;//news/view/$1/$2
           
           if (preg_match("~$uriPattern~", $uri)){
           //Получаем внутренний путь из внешнего согласно правилу
           $internalRoute = preg_replace("~$uriPattern~", $path, $uri); 
           //Поиск в ури с шаблоном уриПаттерн и замена на паз
           
           //echo '<br>Нужно сформировать '.$internalRoute;// news/view/sport/112
        
            
            
            //Oпределить контроллер, экшн (к-рые обрабатывают запрос)и параметры
        
        $segments = explode('/', $internalRoute);
        // echo '<pre>';
        //print_r($segments);
        
        $controllerName = array_shift($segments).'Controller'; //Здесь newsController
        $controllerName = ucfirst($controllerName);// Здесь NewsController
         
               
        $actionName = 'action'.ucfirst(array_shift($segments));//actionView 
        
        
        
        //echo '<br>controller name: '.$controllerName;
        //echo '<br>action name: '.$actionName;
        
        $parameters = $segments;
        //echo '<pre>';
        //print_r($parameters);
        
      
        
         //Подключить файл класса-контроллера
        $controllerFile = ROOT.'/controllers/'.$controllerName.'.php';
        if (file_exists($controllerFile)) 
            {
            include_once($controllerFile);
            }
        
        //создать объект, вызвать метод (т.е. экшн)
        $controllerObject = new $controllerName;
        
        
       
        $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
        
        
        
        if ($result != null)
            {
            break;
            }
        
           }
        }
      }
                                        
    }
    

