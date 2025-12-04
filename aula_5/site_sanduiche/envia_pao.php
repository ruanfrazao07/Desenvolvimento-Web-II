<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Escolha o Pão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $pagina_atual = 'pao';
    include 'menu.php';
    ?>
    <div class="container mt-4">
        <h2>Passo 2: Escolha o Pão</h2>
        <form action="recebe_pao.php" method="get">
            <input type="radio" name="pao" value="Italiano Branco" checked> Italiano Branco<br>
            <input type="radio" name="pao" value="Parmesão e Orégano"> Parmesão e Orégano<br>
            <input type="radio" name="pao" value="Integral"> Integral<br><br>
            <input type="submit" class="btn btn-primary" value="Próximo Passo">
        </form>
    </div>
</body>
</html>