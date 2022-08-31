<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title>Mostra o dia</title>
    </head>
<body>
    <?php
        include ("BibliotecaFuncoes.php");
        // Chama Chama função
        $dia = ExibeDiaAtual();
        ExibeMensagem("Hoje é $dia");
    ?>

    
</body>
</html>