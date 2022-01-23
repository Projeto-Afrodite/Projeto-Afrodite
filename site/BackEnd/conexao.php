<?php

$server ="localhost";
$user = "usuario";
$pass = "senha";
$bd = "salao";


if( $conn = mysqli_connect($server, $user, $pass, $bd)) {
    echo "Conectado a ".$bd;

} else {
    echo "Erro de conexão";
}

?>

