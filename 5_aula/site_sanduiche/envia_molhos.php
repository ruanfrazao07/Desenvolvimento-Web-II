<!DOCTYPE html>
<html lang="pt-BR">
<head><title>Escolha os Molhos</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
    <?php $pagina_atual = 'molhos'; include 'menu.php'; ?>
    <div class="container mt-4"><h2>Passo 6: Escolha os Molhos</h2>
        <form action="recebe_molhos.php" method="get">
            <input type="checkbox" name="molhos[]" value="Maionese"> Maionese<br>
            <input type="checkbox" name="molhos[]" value="Mostarda e Mel"> Mostarda e Mel<br>
            <input type="checkbox" name="molhos[]" value="Chipotle"> Chipotle<br><br>
            <input type="submit" class="btn btn-primary" value="Próximo Passo">
        </form>
    </div>
</body>
</html>