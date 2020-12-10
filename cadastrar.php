<?php

require __DIR__.'/vendor/autoload.php';
define('TITLE', 'Cadastrar Cliente');
use \App\Entity\Cliente;

//VALIDAÇÃO POST
if(isset($_POST['nomeCliente'], $_POST['cpf'], $_POST['idade'])){
    $obCliente = new Cliente;
    $obCliente->nomeCliente = $_POST['nomeCliente'];
    $obCliente->cpf = $_POST['cpf'];
    $obCliente->idade = $_POST['idade'];
    $obCliente->cadastrar();

    header('location: clientes.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';