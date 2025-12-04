<?php
include 'conexao.php';

if (!isset($_SESSION['id'])) { exit; }

$texto = $_POST['historico'];
$id_usuario = $_SESSION['id'];

$conn->prepare("DELETE FROM historico WHERE id_usuario = ?")->execute([$id_usuario]);

$linhas = explode("\n", $texto);

foreach ($linhas as $linha) {
    $colunas = explode("\t", $linha);

    if (count($colunas) > 5) {
        $semestre = trim($colunas[1]);
        $disciplina = trim($colunas[4]);
        $nota = trim($colunas[6]);
        $situacao = trim($colunas[8]);

        if (is_numeric($semestre)) {
            $sql = "INSERT INTO historico (id_usuario, semestre, disciplina, nota, situacao) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id_usuario, $semestre, $disciplina, $nota, $situacao]);
        }
    }
}

echo json_encode(["status" => "Histórico importado com sucesso!"]);
?>