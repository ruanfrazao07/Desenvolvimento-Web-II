<?php
$conexao = new PDO("mysql:host=localhost;dbname=galeria", "root", "");

$nome_temporario = $_FILES['arquivo_imagem']['tmp_name'];
$nome_original = $_FILES['arquivo_imagem']['name'];

$nome_unico = uniqid() . '-' . $nome_original;
$destino = 'uploads/' . $nome_unico;

if (move_uploaded_file($nome_temporario, $destino)) {
    $sql = "INSERT INTO imagens (nome_arquivo) VALUES (?)";
    $comando = $conexao->prepare($sql);
    $comando->execute([$nome_unico]);
    header("Location: galeria.php");
} else {
    echo "Falha no upload.";
}
?>