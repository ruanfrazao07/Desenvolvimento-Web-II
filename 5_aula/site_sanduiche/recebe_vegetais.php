<?php
session_start();
$_SESSION['vegetais'] = isset($_GET['vegetais']) ? $_GET['vegetais'] : [];
echo "Vegetais salvos! Redirecionando...";
header("refresh:2;url=envia_molhos.php");
?>