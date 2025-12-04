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

?>
<?php
$sql = "SELECT nome, data_limite FROM tarefas
        WHERE id_usuario = :id AND data_limite <= CURDATE()";
$stmt = $con->prepare($sql);
$stmt->execute(['id'=>$_SESSION['id']]);
$tarefas = $stmt->fetchAll();
?>

<h2>Bem-vindo, <?= $_SESSION['nome'] ?></h2>
<h3>Suas tarefas até hoje:</h3>

<ul>
<?php
if($tarefas){
  foreach($tarefas as $t){
    echo "<li>{$t['nome']} - {$t['data_limite']}</li>";
  }
}else{
  echo "<li>Nenhuma tarefa encontrada</li>";
}
?>
<br><a href="tarefas.php">Tarefa</a>
</ul>
</body>
</html>