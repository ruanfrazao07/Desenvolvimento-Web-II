<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Tarefas</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['id'])){
  header("Location: login.php");
  exit;
}

$con = new PDO("mysql:host=localhost;dbname=ctsite","root","");

// cadastrar nova tarefa
if($_POST){
  $sql = "INSERT INTO tarefas (nome, data_limite, id_usuario)
          VALUES (:n, :d, :id)";
  $stmt = $con->prepare($sql);
  $stmt->execute([
    'n'=>$_POST['nome'],
    'd'=>$_POST['data_limite'],
    'id'=>$_SESSION['id']
  ]);
}
?>

<h3>Adicionar nova tarefa</h3>
<form method="post">
  Nome: <input type="text" name="nome"><br><br>
  Data limite: <input type="date" name="data_limite"><br><br>
  <input type="submit" value="Salvar">
</form>
<br><a href="lista.php">Lista de tarefas</a>
<br>
<br><a href="logout.php">Sair</a>
</body>
</html>
