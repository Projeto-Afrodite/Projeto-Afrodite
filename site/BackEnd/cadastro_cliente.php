<?php

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$nascimento=$_POST['nascimento'];
$observacao=$_POST['observacao'];

include "conexao.php";

?>

<h2>Status da requisição: </h2>

<?php

$sql = "INSERT INTO `clientes`(`nome`, `sobrenome`, `telefone`, `email`, `nascimento`, `observacao`) VALUES ('$nome','$sobrenome','$telefone','$email','$nascimento','$observacao')";

if (mysqli_query($conn, $sql)) {
    echo "cadastro do cliente " .$nome. " realizado com sucesso!";
}else
    echo "Cliente ".$nome." não cadastrado.";

?>

<h2>Dados recebidos</h2>

<p>_____________________________________________________________</p>

<?php

echo " ". $nome. "<br/>";
echo " ". $sobrenome. "<br/>";
echo " ". $telefone. "<br/>";
echo " ". $email. "<br/>";
echo " ". $nascimento. "<br/>";
echo " ". $observacao. "<br/>";


?>

<script>
        setTimeout(function() {
            window.location.href = "../FrontEnd/clientes.html";
        }, 5000);
</script>