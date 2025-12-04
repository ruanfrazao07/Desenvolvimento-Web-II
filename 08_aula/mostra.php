<?php
session_start();
if (!isset($_SESSION['id'])) { die("Você precisa fazer login. <a href='entrada.html'>Entrar</a>"); }

echo "<h1>Bem-vindo, " . $_SESSION['nome'] . "!</h1>";
echo "<a href='cadastro_produto.html'>Cadastrar Novo Produto</a> | ";
echo "<a href='mostra_comentarios.php'>Ver Comentários</a> | ";
echo "<a href='sair.php'>Sair</a>";
echo "<h3>Produtos Cadastrados:</h3>";

$conexao = new PDO("mysql:host=localhost;dbname=opina", "root", "");
$resultado = $conexao->query("SELECT * FROM produtos");

echo "<ul>";
while ($produto = $resultado->fetch()) {
    echo "<li>";
    echo $produto['nome'];
    echo " - <a href='cadastro_comentario.php?id_produto=" . $produto['id'] . "'>Comentar</a>";
    echo "</li>";
}
echo "</ul>";
?>