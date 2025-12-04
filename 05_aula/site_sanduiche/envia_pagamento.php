<!DOCTYPE html>
<html lang="pt-BR">
<head><title>Escolha o Pagamento</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"></head>
<body>
    <?php $pagina_atual = 'pagamento'; include 'menu.php'; ?>
    <div class="container mt-4"><h2>Passo 7: Forma de Pagamento</h2>
        <form action="recebe_pagamento.php" method="get">
            <input type="radio" name="pagamento" value="Pix" checked> Pix<br>
            <input type="radio" name="pagamento" value="Cartão"> Cartão de Crédito/Débito<br><br>
            <input type="submit" class="btn btn-primary" value="Ver Resumo do Pedido">
        </form>
    </div>
</body>
</html>