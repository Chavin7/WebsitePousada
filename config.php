<?php 

session_start();

$host = 'localhost';
$banco = 'pousada';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:dbname=".$banco.";host=".$host,$user,$pass);
} catch (PDOException $e) {
    die("Falha de conexão com o banco de dados" . $e->getMessage());
} catch (Exception $e) {
    die("Erro desconhecido: " . $e->getMessage());
}


?>