<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Sistema de Vendas</title>
    <style>
        input{
            display:block;
            margin-bottom: 20px;
        }
    </style>
</head>
    <body>
        <h1>Faça seu login</h1>
        <form action = "acesso.php" method = "post">
            <label for = "username">Usuário:</label>
            <input type = "text" name = "login" id = "username"/>

            <label for = "password">Senha:</label>
            <input type = "password" name = "senha" id = "password"/>

            <input type = "submit" value = "Acessar"/>
        </form>
    </body>
</html>