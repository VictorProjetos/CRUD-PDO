<?php

require __DIR__.'/vendor/autoload.php';
define('TITLE', 'Editar Cliente');
use \App\Entity\Cliente;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: clientes.php?status=error');
    exit;
}

//CONSULTA O CLIENTE
$obCliente = Cliente::getCliente($_GET['id']);

//VALIDAÇÃO DO CLIENTE
if(!$obCliente instanceof Cliente){
    header('location: clientes.php?status=error');
    exit;
}
//VALIDAÇÃO POST
if(isset($_POST['nomeCliente'], $_POST['cpf'], $_POST['idade'])){

    $obCliente->nomeCliente = $_POST['nomeCliente'];
    $obCliente->cpf = $_POST['cpf'];
    $obCliente->idade = $_POST['idade'];
    $obCliente->atualizar();

    header('location: clientes.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';