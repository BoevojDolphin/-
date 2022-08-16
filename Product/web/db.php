<?php

$host = 'localhost';
$db = 'projectalex';
$user = 'root';
$pass = 'root';

try {
$pdo = new PDO( "mysql:host=$host; dbname=$db",
$user, $pass );
} catch (PDOException $e) {
	echo 'Ошибка соединения' .$e->getMessage();
}