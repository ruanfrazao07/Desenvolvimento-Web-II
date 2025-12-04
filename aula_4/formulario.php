<?php include 'menu.php'; ?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Cadastro de Aluno</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <h2>Cadastro de Aluno</h2>
  <form action="recebe.php" method="POST">
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Nome:</label>
      <div class="col-sm-10">
        <input type="text" name="nome" class="form-control" required>
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Nascimento:</label>
      <div class="col-sm-10">
        <input type="date" name="nascimento" class="form-control" required>
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Curso:</label>
      <div class="col-sm-10">
        <input type="text" name="curso" class="form-control" required>
      </div>
    </div>
    <div class="row mb-3">
      <label class="col-sm-2 col-form-label">Matrícula:</label>
      <div class="col-sm-10">
        <input type="text" name="matricula" class="form-control" required>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
</body>
</html>
