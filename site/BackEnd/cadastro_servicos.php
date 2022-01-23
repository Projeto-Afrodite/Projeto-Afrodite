<?php

$servico=$_POST['servico'];
$duracao=$_POST['duracao'];
$valor=$_POST['valor'];
$descricao=$_POST['descricao'];


include "conexao.php";

?>

<h2>Status da requisição: </h2>

<?php

$sql = "INSERT INTO `servicos`(`servico`, `duracao`, `valor`, `descricao`) VALUES ('$servico','$duracao','$valor','$descricao')";

if (mysqli_query($conn, $sql)) {
    echo "Serviço cadastrado com sucesso!";
}else
    echo "Um erro ocorreu ..Serviço não cadastrado.";

?>

<h2>Dados recebidos</h2>

<p>_____________________________________________________________</p>

<?php

echo " ". $servico. "<br/>";
echo " ". $duracao. "<br/>";
echo " ". $valor. "<br/>";
echo " ". $descricao. "<br/>";

?>

<script>
        setTimeout(function() {
            window.location.href = "../FrontEnd/servicos.html";
        }, 5000);
</script>
