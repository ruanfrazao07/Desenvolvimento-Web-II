<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>
<body>
<h2>Login</h2>

<form method="post">
  Usuário: <input type="text" name="usuario"><br><br>
  Senha: <input type="password" name="senha"><br><br>
  <input type="submit" value="Entrar">
</form>

<?php
session_start();
if($_POST){
  $con = new PDO("mysql:host=localhost;dbname=ctsite","root","");
  $sql = "SELECT * FROM usuarios WHERE usuario=:u AND senha=:s";
  $stmt = $con->prepare($sql);
  $stmt->execute(['u'=>$_POST['usuario'],'s'=>$_POST['senha']]);
  $user = $stmt->fetch();

  if($user){
    $_SESSION['id'] = $user['id'];
    $_SESSION['nome'] = $user['nome'];
    header("Location: tarefas.php");
  } else {
    echo "<p>Usuário ou senha inválidos!</p>";
  }
}
?>
<br>
<a href="cadastro.php">Cadastrar novo usuário</a>
</body>
</html>
