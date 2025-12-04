<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todas as Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $pagina_atual = 'todas';
    include 'menu.php';
    ?>
    <div class="container mt-4">
        <h2>Todas as Tarefas</h2>
        <?php if (empty($_SESSION['tarefas'])): ?>
            <p class="alert alert-info">Nenhuma tarefa cadastrada ainda.</p>
        <?php else: ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome da Tarefa</th>
                        <th>Data</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['tarefas'] as $indice => $tarefa): ?>
                        <tr>
                            <td><?= strtoupper(substr($tarefa['nome'], 0, 1)) . substr($tarefa['nome'], 1) ?></td>
                            <td><?= date('d/m/Y', strtotime($tarefa['data'])) ?></td>
                            <td>
                                <a href="apagar_tarefa.php?id=<?= $indice ?>" class="btn btn-danger btn-sm">Apagar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>