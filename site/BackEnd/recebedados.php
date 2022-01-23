<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>

<body>
<h2>Teste de conexão com base de dados: </h2>

<?php
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];

include "conexao.php";
?>

<h2>Status da requisição: </h2>

<?php

$sql = "INSERT INTO `teste` (`nome`, `telefone`) VALUES ('$nome', '$telefone')";

if (mysqli_query($conn, $sql)) {
    echo"$nome ' cadastrado com sucesso!'";
}else{
    echo"Erro!' .$nome ' não cadastrado.";
}


?>


</body>
</html>