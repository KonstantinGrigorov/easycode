<?php

require_once 'iCookie.php';

/**
 * Напишите класс-оболочку над cookie. Оболочка должна представлять собой набор функций:
 * сохранение куки, удаление куки, считывание куки. Используйте ассоциативный массив $_COOKIE;
 */
class Cookie implements iCookie

{
	
	public function setCookie($key, $value)
	{
	setcookie($key, $value);
	}

	public function getCookie($key) 
	{
	return $_COOKIE[$key];
	}

	public function deleteCookie($key)
	{
	 setcookie($key, "",time() - 3600);
	}

}


$cookie = new Cookie();
echo $cookie->getCookie('test'); 
$cookie->deleteCookie('test');
//$cookie->setCookie('test', 'some text');
echo $cookie->getCookie('test'); // value1
// $cookie->deleteCookie('test', 2);
//$cookie->getCookie('test'); // null
//echo $cookie->setCookie('key1', 'value1');
//echo $cookie->getCookie('key1');
//echo $cookie->deleteCookie('key1', '10');
