<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Fatura;

$faturas = Fatura::getFaturas();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagemFaturas.php';
include __DIR__.'/includes/footer.php';