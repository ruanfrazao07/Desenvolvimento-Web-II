<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exer 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
        $pg_atual = 'mostra';
        include 'navbar.php';
    session_start();    
    if($_SESSION['nome'])
    {
    echo "Mostrando Sessão: ".$_SESSION['nome'];
    } else
    echo "Sessão foi encerrada"
    ?>
</body>
</html>