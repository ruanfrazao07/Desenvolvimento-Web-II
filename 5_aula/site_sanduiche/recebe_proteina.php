<?php
session_start();
if(isset($_GET['proteina'])){
    $_SESSION['proteina'] = $_GET['proteina'];
    echo "Proteína salva! Redirecionando...";
    header("refresh:2;url=envia_queijo.php");
} else { echo 'Selecione uma proteína. <a href="envia_proteina.php">Voltar</a>';}
?>