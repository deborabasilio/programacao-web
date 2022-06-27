<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadstro de Alunos</title>

    <link rel="stylesheet" href="estilos.css">

</head>

<body>
    <h1>Cadastro de Alunos</h1>
    <form method="POST" action="insere_aluno.php">
        <label for="nome">Nome do aluno:</label>
        <input type="text" name="nome" id="nome" />
        <label for="data">Data de Nascimento:</label>
        <input type="date" name="data" id="data" />
        <label for="cidade">Cidade:</label>
        <select name="cidade">
            <?php
            $con = new mysqli("localhost", "root", "", "vinicio");
            $sql = "SELECT codigo_cid, nome_cid, uf_cid 
                        FROM cidades ORDER BY nome_cid";
            $result = $con->query($sql);
            while ($linha = $result->fetch_assoc()) {
                echo "<option value=\"{$linha['codigo_cid']}\">{$linha['nome_cid']} - {$linha['uf_cid']}</option>";
            }
            ?>
        </select>


        <input type="submit" value="Cadastrar" />
    </form>
</body>

</html>
