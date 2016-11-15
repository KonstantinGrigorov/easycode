<?php
define('MYSQL_SERVER','localhost');
define('MYSQL_USER','Konstantin');
define('MYSQL_PASSWORD','12345');
define('MYSQL_DB','tzblog');

function db_connect(){
$link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
or die("Error: ".mysqli_error($link));
if(!mysqli_set_charset($link, "utf8")){
printf("Error: ".mysqli_error($link));
}
return $link;
}

/*function getDb() {
	$host = 'localhost';
	$db = 'tza';
	$user = 'Konstantin';
	$pass = '12345';
	$dsn = "mysql:host=$host;dbname=$db";
	$opt = array(
	    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	);
    $pdo = new PDO($dsn, $user, $pass, $opt);
    return $pdo;
}

function query($sql) {
	$db = getDb();
    return $db->query($sql)
        ->fetchAll(PDO::FETCH_ASSOC);
}*/

