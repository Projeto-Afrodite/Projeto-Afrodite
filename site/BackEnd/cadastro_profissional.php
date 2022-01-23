<?php

$nome=$_POST['nome'];
$sobrenome=$_POST['sobrenome'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$cpf=$_POST['cpf'];
$observacoes=$_POST['observacoes'];

include "conexao.php";

?>

<h3>Status da requisição: </h3>

<?php

$sql = "INSERT INTO `profissionais`(`nome`, `sobrenome`, `telefone`, `email`, `cpf`, `observacoes`) VALUES ('$nome','$sobrenome','$telefone','$email','$cpf','$observacoes')";

if (mysqli_query($conn, $sql)) {
    echo "Cadastro da(o) profissional " .$nome. " realizado com sucesso!";
}else
    echo "Ocorreu um erro e o cadastro da profissional ".$nome." não foi realizado.";

?>

<h3>Dados recebidos</h3>

<p>_____________________________________________________________</p>

<?php

echo " ". $nome. "<br/>";
echo " ". $sobrenome. "<br/>";
echo " ". $telefone. "<br/>";
echo " ". $email. "<br/>";
echo " ". $cpf. "<br/>";
echo " ". $observacoes. "<br/>";

?>

<script>
        setTimeout(function() {
            window.location.href = "../FrontEnd/profissional.html";
        }, 5000);
</script>
