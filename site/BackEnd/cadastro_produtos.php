<?php

$produto=$_POST['produto'];
$ean=$_POST['ean'];
$valor=$_POST['valor'];
$descricao=$_POST['descricao'];


include "conexao.php";

?>

<h2>Status da requisição: </h2>

<?php

$sql = "INSERT INTO `produtos`(`produto`, `ean`, `valor`, `descricao`) VALUES ('$produto','$ean','$valor','$descricao')";

if (mysqli_query($conn, $sql)) {
    echo "Produto cadastrado com sucesso!";
}else
    echo "Um erro ocorreu ..Produto não cadastrado.";

?>






<h2>Dados recebidos</h2>

<p>_____________________________________________________________</p>

<?php

echo " ". $produto. "<br/>";
echo " ". $ean. "<br/>";
echo " ". $valor. "<br/>";
echo " ". $descricao. "<br/>";

?>

<script>
        setTimeout(function() {
            window.location.href = "../FrontEnd/produtos.html";
        }, 5000);
</script>
