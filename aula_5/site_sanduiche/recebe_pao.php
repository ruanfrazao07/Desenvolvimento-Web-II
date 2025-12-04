<?php
session_start();
if (isset($_GET['pao'])) {
    $_SESSION['pao'] = $_GET['pao'];
    echo "Tipo de pão salvo! Redirecionando para o próximo passo...";
    header("refresh:2;url=envia_proteina.php");
} else {
    echo "Nenhum pão selecionado!";
    echo '<br><a href="envia_pao.php">Voltar</a>';
}
?>