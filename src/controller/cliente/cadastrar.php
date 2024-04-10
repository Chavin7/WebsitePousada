<?php
require '../../../config.php';
require '../../model/DAO/ClienteDao.php';

$nome = $_POST['nome'];
$genero = $_POST['genero'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$cliente = new ClienteDao($pdo);

if ($nome && $genero && $email && $senha) {
    $c = new Cliente();
    $c->setNome($nome);
    $c->setGenero($genero);
    $c->setEmail($email);
    $c->setSenha($senha);
    $cliente->cadastrar($c);

    if ($c->getEmail() && $c->getSenha()) {
        if ($cliente->logar($c->getEmail(), $c->getSenha())) {
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
}
