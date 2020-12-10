<main>

    <h2 class="mt-3">Excluir Vaga</h2>

    <form method="post">
        <div class="form-group">
            <p>Você realmente excluir a fatura <strong><?=$obFatura->descricao_fatura?></strong>?</p>
        </div>
        <div class="form-group">
            <a href="faturas.php">
                <button type="button" class="btn btn-success">Cancelar</button>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>
</main>