<?php 
require '../../../config.php';
require '../../model/DAO/ClienteDao.php';

$cliente = new ClienteDao($pdo);
$cliente->deslogar();

?>