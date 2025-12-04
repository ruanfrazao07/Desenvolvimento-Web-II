<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Saída</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php
    $pagina_atual = 'sair';
    include 'menu.php';
    ?>
    <div class="container mt-4">
    <?php
    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params["path"], $params["domain"],
            $params["secure"], $params["httponly"]
        );
    }

    session_destroy();
    echo "<h3>Sessão encerrada com sucesso!</h3>";
    echo "<p>Todos os dados do seu pedido foram limpos.</p>";
    echo '<a href="home.php">Voltar para a página inicial</a>';
    ?>
    </div>
</body>
</html>