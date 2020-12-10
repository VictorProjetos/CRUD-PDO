<?php

require __DIR__.'/vendor/autoload.php';
define('TITLE', 'Editar Fatura');
use \App\Entity\Fatura;
use \App\Entity\Cliente;
//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
    header('location: faturas.php?status=error');
    exit;
}
$clientes = Cliente::getClientes();
//CONSULTA O FATURA
$obFatura = Fatura::getFatura($_GET['id']);

//VALIDAÇÃO DO FATURA
if(!$obFatura instanceof Fatura){
    header('location: faturas.php?status=error');
    exit;
}
//VALIDAÇÃO POST
// echo "<pre>"; print_r($_POST); echo "</pre>"; exit;
if(isset($_POST['descricao_fatura'], $_POST['valor_fatura'], $_POST['vencimento'], $_POST['cliente_id'])){
    
    $obFatura->descricao_fatura = $_POST['descricao_fatura'];
    $obFatura->valor_fatura = $_POST['valor_fatura'];
    $obFatura->vencimento = $_POST['vencimento'];
    $obFatura->cliente_id = $_POST['cliente_id'];
    $obFatura->atualizarFatura();

    header('location: faturas.php?status=success');
    exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formularioEditaFatura.php';
include __DIR__.'/includes/footer.php';