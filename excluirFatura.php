<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Fatura;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: faturas.php?status=error');
    exit;
}

//CONSULTA O CLIENTE
$obFatura= Fatura::getFatura($_GET['id']);

//VALIDAÇÃO DO CLIENTE
if(!$obFatura instanceof Fatura){
    header('location: faturas.php?status=error');
    exit;
}


//VALIDAÇÃO POST
if(isset($_POST['excluir'])){
    $obFatura->excluirFatura();

    header('location: faturas.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmarExclusaoFatura.php';
include __DIR__.'/includes/footer.php';