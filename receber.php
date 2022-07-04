<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receber Valores</title>
</head>

<body>
    <h1 align="center">Recebendo Dados de Disciplina</h1>
    <?php
   

    $servidor_bd = "localhost";
    $login_bd = "root";
    $senha_bd = "";
    $banco_de_dados = "disciplina";

    $con = new mysqli($servidor_bd, $login_bd, $senha_bd, $banco_de_dados);
    if ($con->connect_errno) {
        echo "<p>Ocorreu um erro: " . $con->errno . "<p>";
        echo "<p>Mensagem: " . $con->connect_error . "<p>";
    } 
    else {
        echo "<p>Conectado no BD com sucesso!<p>";
    }

    $nome = $_POST["nome"];
    $curso = $_POST["curso"];
    $cargaH = $_POST["cargaH"];
    $ativos = $_POST["ativos"];
    $preco = $_POST["preco"];
    $dataInicio = $_POST["dataInicio"];
    $dataFim = $_POST["dataFim"];

    $sql = "INSERT INTO disciplina values(null,'$nome','$curso','$cargaH','$ativos','$preco','$dataInicio','$dataFim')";

    $result = $con->query($sql);
    if ($con->errno) {
        echo "<p>Ocorreu um erro: " . $con->errno . "<p>";
        echo "<p>Mensagem: " . $con->connect_error . "<p>";
    } else {
        echo "<p>Disciplina Cadastrada com Sucesso!<p>";
    }

    $selecionar = "SELECT * FROM disciplina ORDER BY nome";

    $result = $con->query($selecionar);

    if ($result->num_rows > 0) {
        // exibe os valores de cada linha do resultado
            while (list($codigo, $nome, $idade, $email
            ) = $result->fetch_row()) {
                echo "<p>id: $codigo <br/>" . "Nome: $nome <br/>" .
                "Curso: $curso <br/>" . "cargaH: $cargaH <br/>" .
                "Ativo: $ativos <br/>" . "Preço: $ativos <br/>" .
                "Data de Inicio: $dataInicio <br/>" . "Data de Fim: $dataFim </p>";
        }
    } else {
        echo "0 resultados obtidos";
    }
    ?>

</body>



</html>