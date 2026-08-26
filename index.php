<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe seus dados</title>
</head>
<body>
        <h3>Formulário de cadastro</h3>
        <form action="insere.php" method="post">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" />
            <br />
            <label for="user">User: </label>
            <input type="text" name="user" />
            <br />
            <label for="email">Email: </label>
            <input type="email" name="email" />
            <br />
            <input type="submit" value="Cadastrar" />
        </form>
</body>
</html>
