<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

function getDb() {
	$host = 'localhost';
	$db = 'script';
	$user = 'Konstantin';
	$pass = '12345';
	$dsn = "mysql:host=$host;dbname=$db";
	$opt = array(
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
	);
    $pdo = new PDO($dsn, $user, $pass, $opt);
    return $pdo;
}

function query($sql) {
	$db = getDb();
    return $db->query($sql)
        ->fetchAll(PDO::FETCH_ASSOC);
}

