<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf8"/>
    <title>Conversor numero binario</title>
</head>
<body>
    <form method="POST">
    <fieldset>
    <legend>Informe um numero inteiro para convrsão: </legend>
        <label for="valor">Número</label>
        <input type="number" name="valor" />
        <input type="submit" name="enviar" value="Verificar">
    </fieldset>
    </form>
    <?php
        $n = 0;
        if(isset($_POST["enviar"])){
                $n = $_POST["valor"];
                $binario = "";
                $resultado = $n;
                while($resultado>=2){
                    $resto = $resultado % 2;
                    $resultado = (int)($resultado / 2);
                    $binario = $resto . $binario;
                }
                $binario = $resultado . $binario;
                echo "<h1>O numero $n em binario é: $binario </h1>";
            }
    ?>
</body>
</html>