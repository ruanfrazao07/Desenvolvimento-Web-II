<?php
$conexao = new PDO("mysql:host=localhost;dbname=opina", "root", "");

$sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
$comando = $conexao->prepare($sql);

$senha_criptografada = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$comando->execute([
    $_POST['nome'],
    $_POST['email'],
    $senha_criptografada
]);

echo "Usuário salvo com sucesso!";
echo "<br><a href='entrada.html'>Ir para Login</a>";
?>