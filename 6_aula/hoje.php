<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas de Hoje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $pagina_atual = 'hoje';
    include 'menu.php';

    $hoje = date('Y-m-d');
    ?>
    <div class="container mt-4">
        <h2>Tarefas para Hoje (<?= date('d/m/Y') ?>)</h2>
        
        <ul class="list-group">
            <?php
            $tem_tarefa_hoje = false;
            foreach ($_SESSION['tarefas'] as $tarefa) {
                if ($tarefa['data'] == $hoje) {
                    echo '<li class="list-group-item">' . htmlspecialchars($tarefa['nome']) . '</li>';
                    $tem_tarefa_hoje = true;
                }
            }

            if (!$tem_tarefa_hoje) {
                echo '<p class="alert alert-info">Você não tem tarefas para hoje.</p>';
            }
            ?>
        </ul>
    </div>
</body>
</html>