<?php
header('Content-Type: application/json; charset=utf-8');
session_start();

try {
    $conn = new PDO("mysql:host=localhost;dbname=sistema_notas", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo json_encode(["erro" => "Conexão falhou: " . $e->getMessage()]);
    exit;
}
?>