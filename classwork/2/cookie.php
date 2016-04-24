<?php

require_once 'iCookie.php';

/**
 * Напишите класс-оболочку над cookie. Оболочка должна представлять собой набор функций:
 * сохранение куки, удаление куки, считывание куки. Используйте ассоциативный массив $_COOKIE;
 */
class Cookie implements iCookie
{

}

$cookie = new Cookie();
$cookie->setCookie('key1', 'value1');
$cookie->getCookie('key1'); // value1
$cookie->deleteCookie('key1');
$cookie->getCookie('key1'); // null

//changes

//changes2