<!DOCTYPE html>
<html lang="pt-BR">
<head><title>Escolha a Proteína</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
    <?php $pagina_atual = 'proteina'; include 'menu.php'; ?>
    <div class="container mt-4"><h2>Passo 3: Escolha a Proteína</h2>
        <form action="recebe_proteina.php" method="get">
            <input type="radio" name="proteina" value="Carne" checked> Carne<br>
            <input type="radio" name="proteina" value="Frango"> Frango<br><br>
            <input type="submit" class="btn btn-primary" value="Próximo Passo">
        </form>
    </div>
</body>
</html>