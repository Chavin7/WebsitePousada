<?php
require '../../../config.php';
require '../../model/DAO/ClienteDao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$cliente = new ClienteDao($pdo);

if ($nome && $email && $senha) {
    $c = new Cliente();
    $c->setNome($nome);
    $c->setEmail($email);
    $c->setSenha($senha);
    $cliente->atualizar($c);

    header('Location: ../../view/perfil.php');
} else {
    header('Location: ../../view/perfil.php');
}
