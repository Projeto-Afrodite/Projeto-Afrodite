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
        
        <div id="formulario">
            <div class="cabecalho">
                
                <h1 id="titulo">login</h1>
                <br>
            </div>
            <form action="" method="post">
                <div>
                    <label for="">E-mail</label>
                    <input type="text" name="login" id="login">
                    <br>
            
                    <label for="">Senha</label>
                    <input type="password" name="senha" id="senha">
                     <br>       
                    <button type="submit"> logar </button>
                    </div>
                
            </form>
    
<?php
    if (isset($_POST['login'])) {
        $login = $_POST['login'];
        $senha = md5($_POST['senha']);
        //var_dump($login, $senha);

        include "../BackEnd/conexao.php";
        $sql = "SELECT * FROM usuarios WHERE login = '$login'";
        

        $result = mysqli_query($conn, $sql);
        
        $num_registros = mysqli_num_rows($result);
        //var_dump($num_registros);
       
            if ($num_registros == 1) {
                $linha = mysqli_fetch_assoc($result);
                
                if(($login == $linha['login']) and ($senha == $linha['senha'])) {
                    session_start();
                    $_SESSION['login'] = $login;
                    header("location: home.php");
            } else {
            echo "Senha invalida";

            } 
            } else {
                echo "Login não encontrado.";
            } 
    }
?>
        </div>
        
        <script src="mobile-navebar.js"></script><!--Referenciando o arquivo em JavaScript-->
   

        
        
    </main>

    
    
    
</body>

<footer>
    <e-mail></e-mail>
</footer>

</html>