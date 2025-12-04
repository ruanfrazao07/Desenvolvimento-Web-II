<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Cadastro</title>
</head>
<body>
<h2>Cadastro de Usuário</h2>

<form method="post">
  Usuário: <input type="text" name="usuario"><br><br>
  Senha: <input type="password" name="senha"><br><br>
  Nome: <input type="text" name="nome"><br><br>
  Nascimento: <input type="date" name="nascimento"><br><br>
  CEP: <input type="text" name="cep"><br><br>
  Número: <input type="text" name="numero"><br><br>
  <input type="submit" value="Cadastrar">
</form>

<?php
if($_POST){
  $con = new PDO("mysql:host=localhost;dbname=ctsite","root","");
  $sql = "INSERT INTO usuarios (usuario, senha, nome, nascimento, cep, numero)
          VALUES (:u, :s, :n, :nas, :c, :num)";
  $stmt = $con->prepare($sql);
  $ok = $stmt->execute([
    'u'=>$_POST['usuario'],
    's'=>$_POST['senha'],
    'n'=>$_POST['nome'],
    'nas'=>$_POST['nascimento'],
    'c'=>$_POST['cep'],
    'num'=>$_POST['numero']
  ]);
  if($ok){ echo "<p>Usuário cadastrado!</p>"; }
  else { echo "<p>Erro ao cadastrar!</p>"; }
}
?>
<br>
<a href="login.php">Ir para Login</a>
</body>
</html>
