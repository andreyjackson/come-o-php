<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf8"/>
    <title>Tabuada</title>
</head>
<body>
    <form method="POST">
    <fieldset>
    <legend>Informe qual tabuada: </legend>
        <label for="valor">Numero:</label>
        <input type="number" name="valor" value="0"><br>
        <input type="submit" name="enviar" value="Calcular">
    </fieldset>
    </form>
    <?php
    $n=0;
    include ("BibliotecaFuncoes.php");
    if(isset($_POST["enviar"])){
        $n = $_POST["valor"];


        /*for($i=0;$i<=10;$i++){
            echo "<h3> $n X $i = " . $n*$i . "</h3>";
        }*/
    }
    ?>
</body>
</html>