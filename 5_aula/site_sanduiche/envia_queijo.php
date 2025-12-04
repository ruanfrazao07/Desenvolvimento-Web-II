<!DOCTYPE html>
<html lang="pt-BR">
<head><title>Escolha o Queijo</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
    <?php $pagina_atual = 'queijo'; include 'menu.php'; ?>
    <div class="container mt-4"><h2>Passo 4: Escolha o Queijo</h2>
        <form action="recebe_queijo.php" method="get">
            <input type="radio" name="queijo" value="Muçarela" checked> Muçarela<br>
            <input type="radio" name="queijo" value="Prato"> Prato<br>
            <input type="radio" name="queijo" value="Suíço"> Suíço<br><br>
            <input type="submit" class="btn btn-primary" value="Próximo Passo">
        </form>
    </div>
</body>
</html>