<?php
session_start();
$conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");

$sql = "SELECT * FROM usuarios WHERE email = ? OR usuario = ?";
$comando = $conexao->prepare($sql);
$comando->execute([ $_POST['login'], $_POST['login'] ]);
$usuario = $comando->fetch();

if ($usuario && password_verify($_POST['senha'], $usuario['senha'])) {
    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome_completo'];
    header("Location: submissoes.php");
} else {
    echo "Login ou senha inválidos.";
    echo "<br><a href='entrada.php'>Tentar novamente</a>";
}
?>