<?php
$host ='localhost';
$db='attendence_db';
$user='root';
$pass='';
$charset='utf8mb4';

$dsn ="mysql:host=$host;dbname=$db;charset=$charset";

try{
    $pdo = new PDO($dsn , $user .$pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    echo "hello database";

}catch(PDOExeption $e){
    throw new PDOExeption($e_>getMessage());

}
require_once 'crud.php';
$crud = new crud($pdo);
?>