<?php
    session_start();
    if (isset($_SESSION['login'])) {
        $login = $_SESSION['login'];
     } else {
        session_destroy();
        header("location: index.php?msg=Voce precisa logar para acessar este conteudo.");
    }

?>
