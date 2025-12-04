<?php
session_start();
?>
<div style="width: 100%; background-color: #eee; padding: 10px; box-sizing: border-box;">
    <div style="float: left;">
        <a href="submissoes.php">Ver Submissões</a> | 
        <a href="atividades.php">Ver Atividades</a> | 
        <a href="minhas_submissoes.php">Minhas Submissões</a> | 
        <a href="minhas_atividades.php">Minhas Atividades</a>
    </div>
    <div style="float: right;">
        <?php if (isset($_SESSION['id'])): ?>
            Olá, <strong><?php echo htmlspecialchars($_SESSION['nome']); ?></strong>!
            <a href="sair.php">Sair</a>
        <?php else: ?>
            <a href="entrada.php">Entrar</a> | 
            <a href="cadastro_usuario.php">Cadastrar</a>
        <?php endif; ?>
    </div>
    <div style="clear: both;"></div>
</div>
<hr>