<?php
session_start();
if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 'admin') { die("Acesso restrito."); }

$conexao = new PDO("mysql:host=localhost;dbname=reclama", "root", "");
$sql = "UPDATE reclamacao SET estado = ? WHERE id = ?";
$comando = $conexao->prepare($sql);
$comando->execute([
    $_POST['novo_estado'],
    $_POST['id_reclamacao']
]);

header("Location: admin_lista.php");
?>