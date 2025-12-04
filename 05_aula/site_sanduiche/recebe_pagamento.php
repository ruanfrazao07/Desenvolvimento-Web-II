<?php
session_start();
if(isset($_GET['pagamento'])){
    $_SESSION['pagamento'] = $_GET['pagamento'];
    echo "Pagamento salvo! Redirecionando para o resumo...";
    header("refresh:2;url=resumo_pedido.php");
} else { echo 'Selecione uma forma de pagamento. <a href="envia_pagamento.php">Voltar</a>';}
?>