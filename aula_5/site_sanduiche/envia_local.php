<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Escolha o Local</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $pagina_atual = 'local';
    include 'menu.php';
    ?>
    <div class="container mt-4">
        <h2>Passo 1: Levar ou Comer no Local?</h2>
        <form action="recebe_local.php" method="get">
            <input type="radio" id="levar" name="local" value="Levar para viagem" checked>
            <label for="levar">Levar para viagem</label><br>
            <input type="radio" id="comer_local" name="local" value="Comer no local">
            <label for="comer_local">Comer no local</label><br><br>
            <input type="submit" class="btn btn-primary" value="Próximo Passo">
        </form>
    </div>
</body>
</html>