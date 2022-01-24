<?php

$server ="localhost";
$user = "root";
$pass = "Kranz@123";
$bd = "salao";


if( $conn = mysqli_connect($server, $user, $pass, $bd)) {
    //echo "Conectado a ".$bd;

} else {
    echo "Erro de conexão";
}

?>
