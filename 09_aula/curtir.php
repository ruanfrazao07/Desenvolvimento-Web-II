<?php
$id_imagem = $_GET['id'];

if (isset($id_imagem)) {
    $conexao = new PDO("mysql:host=localhost;dbname=galeria", "root", "");
    $sql = "UPDATE imagens SET curtidas = curtidas + 1 WHERE id = ?";
    $comando = $conexao->prepare($sql);
    $comando->execute([$id_imagem]);
}

header("Location: galeria.php");
?>