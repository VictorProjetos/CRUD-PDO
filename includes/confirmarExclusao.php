<?php
    if(isset($obCliente->nome)){
        $nome = $obCliente->nome;
    }else{
        $nome = "";
    };
?>
<main>

    <h2 class="mt-3">Excluir Vaga</h2>

    <form method="post">
        <div class="form-group">
            <p>Você realmente excluir o cliente <strong><?=$obCliente->nome?></strong>?</p>
        </div>
        <div class="form-group">
            <a href="clientes.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>
</main>