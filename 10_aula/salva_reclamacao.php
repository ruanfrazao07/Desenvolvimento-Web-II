<?php
session_start();
if (!isset($_SESSION['id'])) { die("Acesso negado."); }

$caminho_foto = null;
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    $nome_arquivo = uniqid() . '-' . $_FILES['foto']['name'];
    $destino = 'fotos_reclamacoes/' . $nome_arquivo;
    if (move_uploaded_file($_FILES['foto']['tmp_name'], $destino)) {
        $caminho_foto = $destino;
    }
}

$conexao = new PDO("mysql:host=localhost;dbname=reclama", "root", "");
$sql = "INSERT INTO reclamacao (id_reclamante, titulo, descricao, foto, estado) VALUES (?, ?, ?, ?, 'Enviada')";
$comando = $conexao->prepare($sql);
$comando->execute([
    $_SESSION['id'],
    $_POST['titulo'],
    $_POST['descricao'],
    $caminho_foto
]);

header("Location: minhas_reclamacoes.php");
?>