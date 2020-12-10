<?php 
    $mensagem = '';
    if(isset($_GET['status'])){
        switch ($_GET['status']) {
            case 'success':
               $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;
            case 'error':
                $mensagem = '<div class="alert alert-danger">Algum deu errado :(</div>';
             break;
            default:
            break;
        }
    }
    $resultados = '';
    foreach($faturas as $faturas){
        $resultados .= '<tr>
                            <td>'.$faturas->id.'</td>
                            <td>'.$faturas->descricao_fatura.'</td>
                            <td> R$ '.$faturas->valor_fatura.'</td>
                            <td>'.$faturas->vencimento.'</td>
                            <td>'.$faturas->nome.'</td>
                            <td>
                                <a href="editarFatura.php?id='.$faturas->id.'">
                                    <button type="button" class="btn btn-primary">Editar</button>
                                </a>
                                <a href="excluirFatura.php?id='.$faturas->id.'">
                                    <button type="button" class="btn btn-danger">Excluir</button>
                                </a>
                            </td>
                        </tr>';
    }

    $resultados = strlen($resultados) ? $resultados : '<tr>
                                                            <td colspan="6" class="text-center">
                                                                Nenhuma fatura cadastrado
                                                            </td>
                                                        </tr>';
?>
<main>
    <?=$mensagem?>
    <section>
        <a href="cadastrarFatura.php">
            <button class="btn btn-success">Nova Fatura</button>
        </a>
        <a href="home.php">
            <button class="btn btn-primary">Voltar</button>
        </a>
    </section>

    <section>
        <table class="table bg-light mt-3">
            <thead>
                <tr>
                    <th>ID fatura</th>
                    <th>Descriçao da fatura</th>
                    <th>Valor da fatura</th>
                    <th>Vencimento</th>
                    <th>Nome do responsável pelo fatura</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?=$resultados?>
            </tbody>
        </table>
    </section>
</main>