<?php

require __DIR__.'/vendor/autoload.php';
define('TITLE', 'Cadastrar Fatura');
use \App\Entity\Fatura;
use \App\Entity\Cliente;
//VALIDAÇÃO POST
if(isset($_POST['descricao_fatura'], $_POST['valor_fatura'], $_POST['vencimento'], $_POST['cliente_id'])){
    $obFatura = new Fatura;
    $obFatura->descricao_fatura = $_POST['descricao_fatura'];
    $obFatura->valor_fatura = $_POST['valor_fatura'];
    $obFatura->vencimento = $_POST['vencimento'];
    $obFatura->cliente_id = $_POST['cliente_id'];
    $obFatura->cadastrarFatura();

    header('location: faturas.php?status=success');
    exit;
}
$clientes = Cliente::getClientes();
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formularioFatura.php';
include __DIR__.'/includes/footer.php';