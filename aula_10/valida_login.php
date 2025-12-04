<?php
session_start();
$conexao = new PDO("mysql:host=localhost;dbname=reclama", "root", "");

$sql = "SELECT * FROM usuarios WHERE email = ?";
$comando = $conexao->prepare($sql);
$comando->execute([$_POST['email']]);
$usuario = $comando->fetch();

if ($usuario && password_verify($_POST['senha'], $usuario['senha'])) {
    $_SESSION['id'] = $usuario['id'];
    $_SESSION['nome'] = $usuario['nome'];
    $_SESSION['tipo'] = $usuario['tipo'];

    if ($usuario['tipo'] == 'admin') {
        header("Location: admin_lista.php");
    } else {
        header("Location: minhas_reclamacoes.php");
    }
} else {
    echo "Email ou senha inválidos.";
    echo "<br><a href='login.html'>Tentar novamente</a>";
}
?>