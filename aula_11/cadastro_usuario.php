<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
</head>
<body>
    <h1>Cadastro no Clube de Escrita</h1>
    <form action="salva_usuario.php" method="POST">
        Nome Completo: <input type="text" name="nome_completo" required><br>
        Usuário: <input type="text" name="usuario" required><br>
        E-mail: <input type="email" name="email" required><br>
        Data de Nascimento: <input type="date" name="data_nascimento"><br>
        CPF: <input type="text" name="cpf"><br>
        Senha: <input type="password" name="senha" required><br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>