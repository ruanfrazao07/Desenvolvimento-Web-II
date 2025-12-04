<?php
$conexao = new PDO("mysql:host=localhost;dbname=reclama", "root", "");

$sql = "INSERT INTO usuarios (nome, email, senha, cpf, nascimento) VALUES (?, ?, ?, ?, ?)";
$comando = $conexao->prepare($sql);

$senha_criptografada = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$comando->execute([
    $_POST['nome'],
    $_POST['email'],
    $senha_criptografada,
    $_POST['cpf'],
    $_POST['nascimento']
]);

echo "Usuário cadastrado com sucesso!";
echo "<br><a href='login.html'>Fazer Login</a>";
?>