<?php
require '../../../config.php';
require '../../model/DAO/ClienteDao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$cliente = new ClienteDao($pdo);

if ($email && $senha) {
    if ($cliente->logar($email, $senha)) {
        if (isset($_SESSION['cliente_logado'])) {
            header('Location: ../../../index.php');
        } else {
            header('Location: ../../view/login.php');
        }
    } else {
        header('Location: ../../view/login.php');
    }
} else {
    header('Location: ../../view/login.php');
}
