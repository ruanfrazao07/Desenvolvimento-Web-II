<?php
session_start();
if (isset($_GET['local'])) {
    $_SESSION['local'] = $_GET['local'];
    echo "Opção de local salva! Redirecionando para o próximo passo...";
    header("refresh:2;url=envia_pao.php");
} else {
    echo "Nenhuma opção selecionada!";
    echo '<br><a href="envia_local.php">Voltar</a>';
}
?>