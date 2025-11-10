<?php
session_start();
if (!isset($_SESSION['id'])) { die("Acesso negado."); }

$destino = null;
if (isset($_FILES['arquivo']) && $_FILES['arquivo']['error'] == 0) {
    $nome_arquivo = uniqid() . '-' . basename($_FILES['arquivo']['name']);
    $caminho_completo = 'arquivos_submissoes/' . $nome_arquivo;
    $extensao = strtolower(pathinfo($caminho_completo, PATHINFO_EXTENSION));

    if ($extensao == 'pdf' || $extensao == 'txt') {
        if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $caminho_completo)) {
            $destino = $caminho_completo;
        }
    }
}

if ($destino) {
    $conexao = new PDO("mysql:host=localhost;dbname=clube_escrita", "root", "");
    $sql = "INSERT INTO submissoes (usuario_id, titulo, observacoes, arquivo) VALUES (?, ?, ?, ?)";
    $comando = $conexao->prepare($sql);
    $comando->execute([
        $_SESSION['id'],
        $_POST['titulo'],
        $_POST['observacoes'],
        $destino
    ]);
    header("Location: submissoes.php");
} else {
    echo "Erro no upload ou tipo de arquivo inválido. Apenas PDF e TXT são permitidos.";
}
?>