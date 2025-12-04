<?php
$conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");

$sql = "INSERT INTO usuarios (nome_completo, usuario, email, data_nascimento, cpf, senha) 
        VALUES (?, ?, ?, ?, ?, ?)";
$comando = $conexao->prepare($sql);

$senha_criptografada = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$comando->execute([
    $_POST['nome_completo'],
    $_POST['usuario'],
    $_POST['email'],
    $_POST['data_nascimento'],
    $_POST['cpf'],
    $senha_criptografada
]);

echo "Usuário cadastrado com sucesso!";
echo "<br><a href='entrada.php'>Ir para Login</a>";
?>