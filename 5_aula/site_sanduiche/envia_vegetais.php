<!DOCTYPE html>
<html lang="pt-BR">
<head><title>Escolha os Vegetais</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
    <?php $pagina_atual = 'vegetais'; include 'menu.php'; ?>
    <div class="container mt-4"><h2>Passo 5: Escolha os Vegetais</h2>
        <form action="recebe_vegetais.php" method="get">
            <input type="checkbox" name="vegetais[]" value="Alface"> Alface<br>
            <input type="checkbox" name="vegetais[]" value="Tomate"> Tomate<br>
            <input type="checkbox" name="vegetais[]" value="Cebola Roxa"> Cebola Roxa<br>
            <input type="checkbox" name="vegetais[]" value="Pimentão"> Pimentão<br><br>
            <input type="submit" class="btn btn-primary" value="Próximo Passo">
        </form>
    </div>
</body>
</html>