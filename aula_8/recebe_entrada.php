<?php
session_start();

$conexao = new PDO("mysql:host=localhost;dbname=opina", "root", "");

$sql = "SELECT * FROM usuarios WHERE email = ?";
$comando = $conexao->prepare($sql);
$comando->execute([ $_POST['email'] ]);
$usuario = $comando->fetch();

if ($usuario && password_verify($_POST['senha'], $usuario['senha'])) {
    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];
    header("Location: mostra.php");
} else {
    echo "Email ou senha inválidos.";
}
?>