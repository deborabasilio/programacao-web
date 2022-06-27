<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadstro de Alunos</title>
    
    <link rel = "stylesheet" href = "estilos.css">

</head>
    <body>
        <h1>Cadastro de Alunos</h1>
        <form method = "POST" action = "insere_aluno.php">
            <p><label for = "nome">Nome do Aluno:</label></p>
            <p><input type = "text" name = "nome" id = "nome" /></p>

            <p><label for = "data">Data de Nascimento:</label></p>
            <p><input type = "date" name = "data" id = "data" /></p>

            <p><label for = "cidade">Cidade:</label></p>
            <p><input type = "text" name = "cidade" id = "cidade" /><br/></p>

            <p><input type = "submit" value = "Cadastrar" /></p>
        </form>
    </body>
</html>