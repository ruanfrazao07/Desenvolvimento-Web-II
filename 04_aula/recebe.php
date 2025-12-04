<?php
include 'aluno.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $aluno = new Aluno($_POST['nome'], $_POST['nascimento'], $_POST['curso'], $_POST['matricula']);
    $_SESSION['aluno'] = $aluno;
}
include 'menu.php';
?>

<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Recebe Aluno</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <h2>Aluno recebido!</h2>
  <a href="mostra_aluno.php" class="btn btn-success">Mostrar</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
