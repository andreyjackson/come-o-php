<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>ola mundo</title>
</head>
<body>
    <?php 
        $msg = "clique em voltar para informar um nome na pagina de entrada";    
        //var_dump($_POST); //mostra tudo que esta recebendo 
        if(isset($_POST["usuario"])){  // verifica a existencia de um inpute usuario
        $nome = $_POST["usuario"];
        //genero
        if($_POST["genero"] == "Menino")
        {
            $msg = "parabems amigo ".$nome.", tudo certo?";
        } else {
            if($_POST["genero"] == "Menina")
            {
                $msg = "parabems amiga ".$nome.", tudo certo?";
            }else{
                if($_POST["genero"] == "Menine")
                {
                    $msg = "parabems amige ".$nome.", tudo certo?";
                }
            }
        }
        //$msg = "Olá ". $nome." Tudo blezinha?";

        }
    ?>
    <script>
        alert("<?php echo $msg; ?>"); // mostra uma mensagem na tela apos o submição da informação
    </script>    
    <a href = "input.php"> Voltar </a>
</body>
</html>