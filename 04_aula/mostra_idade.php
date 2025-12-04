<?php
include 'aluno.php';
session_start(); 
include 'menu.php';
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Idade do Aluno</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>Idade do Aluno</h2>
    <?php 
    if (isset($_SESSION['aluno']) && $_SESSION['aluno'] instanceof Aluno) {
        $nascimento = DateTime::createFromFormat('Y-m-d', $_SESSION['aluno']->nascimento);   
        if ($nascimento === false) {
            echo '<p>Data de nascimento inválida.</p>';
        } else {
            $hoje = new DateTime();
            $idade = $hoje->diff($nascimento)->y;
            echo '<p>' . htmlspecialchars($_SESSION['aluno']->nome) . ', ' . $idade . ' anos</p>';
        }
    } else {
        echo '<p>Nenhum aluno cadastrado.</p>';
    }
    ?>
</div>
</body>
</html>
