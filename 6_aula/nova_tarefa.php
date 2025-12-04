<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $pagina_atual = 'nova';
    include 'menu.php';
    ?>
    <div class="container mt-4">
        <h2>Cadastrar Nova Tarefa</h2>
        <form action="salvar_tarefa.php" method="POST">
            <div class="mb-3">
                <label for="nome_tarefa" class="form-label">Nome da Tarefa:</label>
                <input type="text" class="form-control" id="nome_tarefa" name="nome_tarefa" required>
            </div>
            <div class="mb-3">
                <label for="data_tarefa" class="form-label">Data:</label>
                <input type="date" class="form-control" id="data_tarefa" name="data_tarefa" required>
            </div>
            <button type="submit" class="btn btn-primary">Salvar Tarefa</button>
        </form>
    </div>
</body>
</html>