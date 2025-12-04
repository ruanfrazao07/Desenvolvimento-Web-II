<?php
include 'aluno.php';
session_start(); 
include 'menu.php';
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Mostrar Aluno</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <h2>Aluno Cadastrado</h2>
  <?php

  if(isset($_SESSION['aluno'])): ?>
    <div class="card" style="width: 22rem;">
      <div class="card-body">
        <p class="card-text"><strong>Nome:</strong> <?= $_SESSION['aluno']->nome ?></p>
        <p class="card-text"><strong>Nascimento:</strong> <?= $_SESSION['aluno']->nascimento ?></p>
        <p class="card-text"><strong>Curso:</strong> <?= $_SESSION['aluno']->curso ?></p>
        <p class="card-text"><strong>Matrícula:</strong> <?= $_SESSION['aluno']->matricula ?></p>
      </div>
    </div>
  <?php else: ?>
    <p>Nenhum aluno cadastrado.</p>
  <?php endif; ?>
</div>
</body>
</html>
