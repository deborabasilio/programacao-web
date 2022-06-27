<?php

//obtendo valores do formulário
$n = $_POST["nome"];
$d = $_POST["data"];
$c = $_POST["cidade"];

//conexão com o banco de dados
$con = new mysqli("localhost", "root", "", "aula");


//criar a string com comando SQL
$sql = "INSERT INTO alunos VALUES (null, '$n', '$d', '$c')";

//executar o SQL no banco de dados
$result = $con->query($sql);

//verificar se ao menos uma linha foi modificada no BD
if($con->affected_rows > 0){
    echo "<p>Registro inserido com sucesso</p>";
}
else{
    echo "<p>Nada foi cadastrado. Tente novamente.</p>";
}

?>