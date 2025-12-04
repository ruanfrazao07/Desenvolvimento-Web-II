<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resumo do Pedido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $pagina_atual = 'resumo';
    include 'menu.php';
    ?>
    <div class="container mt-4">
        <div class="card">
            <div class="card-header"><h2>Resumo do Pedido</h2></div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Local:</strong> <?= isset($_SESSION['local']) ? htmlspecialchars($_SESSION['local']) : 'Não definido' ?></li>
                    <li class="list-group-item"><strong>Pão:</strong> <?= isset($_SESSION['pao']) ? htmlspecialchars($_SESSION['pao']) : 'Não definido' ?></li>
                    <li class="list-group-item"><strong>Proteína:</strong> <?= isset($_SESSION['proteina']) ? htmlspecialchars($_SESSION['proteina']) : 'Não definido' ?></li>
                    <li class="list-group-item"><strong>Queijo:</strong> <?= isset($_SESSION['queijo']) ? htmlspecialchars($_SESSION['queijo']) : 'Não definido' ?></li>
                    <li class="list-group-item"><strong>Vegetais:</strong> <?= !empty($_SESSION['vegetais']) ? htmlspecialchars(implode(', ', $_SESSION['vegetais'])) : 'Nenhum' ?></li>
                    <li class="list-group-item"><strong>Molhos:</strong> <?= !empty($_SESSION['molhos']) ? htmlspecialchars(implode(', ', $_SESSION['molhos'])) : 'Nenhum' ?></li>
                    <li class="list-group-item"><strong>Pagamento:</strong> <?= isset($_SESSION['pagamento']) ? htmlspecialchars($_SESSION['pagamento']) : 'Não definido' ?></li>
                </ul>
            </div>
            <div class="card-footer">
                <p>Obrigado pelo seu pedido!</p>
            </div>
        </div>
    </div>
</body>
</html>