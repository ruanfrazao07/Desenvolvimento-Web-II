<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Sanduicheira</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $pagina_atual = 'home';
    include 'menu.php';
    ?>
    <div class="container mt-4">
        <h1>Bem-vindo à Sanduicheira Online!</h1>
        <p>Use o menu de navegação acima para montar seu pedido passo a passo.</p>
        <a href="envia_local.php" class="btn btn-primary">Começar Pedido</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>