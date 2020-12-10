<?php
    if(isset($obCliente->nome)){
        $nome = $obCliente->nome;
    }else{
        $nome = "";
    };
?>
<main>
    <section>
        <a href="clientes.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <div class="form-group">
            <label>Nome do cliente</label>
            <input type="text" class="form-control" name="nomeCliente" value="<?=$nome?>">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" value="<?=$obCliente->cpf?>">
        </div>
        <div class="form-group">
            <label>Idade</label>
            <input type="number" class="form-control" name="idade" value="<?=$obCliente->idade?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success mt-3">Salvar</button>
        </div>
    </form>
</main>
<script>
    $('#cpf').mask('000.000.000-00', {reverse: true});
</script>
