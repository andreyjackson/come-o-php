<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title> ANDREY !!!</title>
</head>
<body>
    <form  method="post" action="/redirecionamento.php">
        <p>Informe o usuario: </p>
        <input type="text" name="usuario"><br>
        <input type="radio" name="genero" value="Menino">Menino <br>
        <input type="radio" name="genero" value="Menina">Menina <br>
        <input type="radio" name="genero" value="Menine">Menine <br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    /*
        //&_GET[] metodo padrão (não seguro)
        //$_POST[]
        //var_dump($_GET);
        if(isset($_POST["usuario"])){  // verifica a existencia de um inpute usuario
            $nome = $_POST["usuario"];
            $msg = "Olá ". $nome." Tudo blezinha?";
            ?>
            <script>
                alert("<?php echo $msg; ?>"); // mostra uma mensagem na tela apos o submição da informação
            </script>
            <?php
            echo "<h3> $msg <h3>";
        }
    */
    ?>
</body>
</html>