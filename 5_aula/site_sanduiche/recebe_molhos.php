<?php
session_start();
$_SESSION['molhos'] = isset($_GET['molhos']) ? $_GET['molhos'] : [];
echo "Molhos salvos! Redirecionando...";
header("refresh:2;url=envia_pagamento.php");
?>