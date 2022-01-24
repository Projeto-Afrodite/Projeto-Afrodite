<?php include "../BackEnd/validar.php" ?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRODITE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="../FrontEnd/home.php">AFRODITE</a>
           
            <div class="mobile-menu"><!--criando o menu do tipo hamburger-->
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>

            <ul class="nav-list"> <!--Crinado a lista não ordenada do menu-->
                <li><a class="menu" href="../FrontEnd/home.php">HOME</a></li>
                <li><a href="../FrontEnd/agenda.html">AGENDA</a></li>
                <li><a href="../FrontEnd/cadastro.html">CADASTRO</a>
                <li><a href="../BackEnd/logout.php">LOGOUT</a>

                    <ul>
                        <li><a href="../FrontEnd/clientes.php">CLIENTES</a></li>
                        <li><a href="../FrontEnd/servicos.php">SERVIÇOS</a></li>
                        <li><a href="../FrontEnd/produtos.php">PRODUTOS</a></li>
                        <li><a href="../FrontEnd/profissionais.php">PROFISSIONAIS</a></li>
                    </ul>
                </li>
                <li><a href="../FrontEnd/financeiro.html">FINANCEIRO</a></li>
                <li><a href="../FrontEnd/configuracao.html">CONFIGURAÇÃO</a></li>
            </ul>
        </nav>
    </header>
    <main class="background-home"> <!--Espaço para inserir o Background-->
      
    </main>
    <script src="mobile-navebar.js"></script><!--Referenciando o arquivo em JavaScript-->
</body>

<footer>
    <e-mail></e-mail>
</footer>

</html>