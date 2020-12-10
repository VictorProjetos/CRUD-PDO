
<main>
    <section>
        <a href="home.php">
            <button class="btn btn-success">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
        <div class="form-group">
            <label>Descrição da Fatura</label>
            <input type="text" class="form-control" name="descricao_fatura" value="">
        </div>
        <div class="form-group">
            <label>Valor da Fatura</label>
            <input type="text" class="form-control" name="valor_fatura" id="valor_fatura" value="">
        </div>
        <div class="form-group">
            <label>Data de Vencimento</label>
            <input type="text" class="form-control" name="vencimento" id="vencimento" value="">
        </div>
        <div class="form-group">
            <label>Cliente da fatura</label>
            <select class="form-control text-black" name="cliente_id" id="cliente_id" value="">
                <?php 
                    foreach($clientes as $clientes){ ?>
                        <option value="<?=$clientes->id?>"><?=$clientes->nome?></option>
                <?php    }
                ?> 
            </select>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success mt-3">Salvar</button>
        </div>
    </form>
</main>
<script>
    $(document).ready(function() {
        $('#cliente_id').select2();
    });
    $("#valor_fatura").maskMoney({
        prefix:'R$ ', 
        allowNegative: true,
        thousands:'.',
        decimal:',',
        affixesStay: false
    });
    $(document).ready(function ($) {
        $('#vencimento').mask('00/00/0000');
    });
</script>