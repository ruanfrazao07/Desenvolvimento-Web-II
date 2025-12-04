<?php
session_start();
if(isset($_GET['queijo'])){
    $_SESSION['queijo'] = $_GET['queijo'];
    echo "Queijo salvo! Redirecionando...";
    header("refresh:2;url=envia_vegetais.php");
} else { echo 'Selecione um queijo. <a href="envia_queijo.php">Voltar</a>';}
?>