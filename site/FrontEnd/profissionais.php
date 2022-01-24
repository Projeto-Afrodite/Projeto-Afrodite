<?php include "../BackEnd/validar.php" ?>
<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRODITE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="formulario.css">
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
                <li><a href="../FrontEnd/clientes.php">CLIENTES</a></li>
                <li><a href="../FrontEnd/servicos.php">SERVIÇOS</a></li>
                <li><a href="../FrontEnd/produtos.php">PRODUTOS</a></li>
                <li><a href="../FrontEnd/profissionais.php">PROFISSIONAIS</a></li>
            </ul>
        </nav>
    </header>
    <main> <!--Espaço para inserir o Background-->

    </main>

    <div id="formulario">
        <div class="cabecalho">

        <h1 id="titulo">CADASTRO DE PROFISSIONAIS</h1>
        <br>
        </div>

        <form action="../BackEnd/cadastro_profissional.php" method="post">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome"><strong>Nome:</strong></label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div class="campo">
                    <label for="sobrenome"><strong>Sobrenome:</strong></label>
                    <input type="text" name="sobrenome" id="sobrenome" required>
                </div>
            </fieldset>

            <fieldset>
                <div class="campo">
                    <label for="telefone"><strong>Telefone:</strong></label>
                    <input type="text" name="telefone" id="telefone">
                </div>
                <div class="campo">
                    <label for="email"><strong>E-mail:</strong></label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="campo">
                    <label for="cpf"><strong>CPF/CNPJ:</strong></label>
                    <input type="text" name="cpf" id="cpf" pattern="[0-9]{11}" required>
                </div>
               
            </fieldset>
            

        <div class="campo">
            <label for=""><strong>Observações:</strong></label>
            <textarea name="observacoes" id="observacoes" cols="30" rows="4"></textarea>
        </div>

        <div>
            <button class="botao" type="submit">Salvar</button>
        </div>

        </form>
    </div>

    <script src="mobile-navebar.js"></script><!--Referenciando o arquivo em JavaScript-->
</body>

<footer>
    <e-mail></e-mail>
</footer>

</html>