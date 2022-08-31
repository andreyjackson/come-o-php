<!DOCTYPE html>
<html lang = "pt-br">
<head>
    <meta charset="utf-8"/>
    <title>Detecta o maior numero informado</title>
</head>
<body>
    <form method="$_POST">
    <fieldset>   
    <legend>Favor informar o maior numero</legend>
        <label for="Valor1">Número;</label>
        <input type="number" name="Valor1" value ="0"><br>
        <label for="Valor2"> Número;</label>
        <input type="number" name="Valor2" value="0"><br>
        <label for="Valor3">Número</label>
        <input type="number" name="Valor3" value="0"><br>
        <input type="submit" name="rnviar" value="calcular"> 
    </fieldset>
    </form>
    <?php
        include ("BibliotecaFuncoes.php");
        if(isset($_POST["valor"])){
            $n1 = $_POST["Valor1"];
            $n2 = $_POST["Valor2"];
            $n3 = $_POST["Valor3"];
            $maior = MostraoMaiorNumero($n1, $n2, $n3);
            echo "<h1>O maior numero da variaveis informadas é: $MostraoMaiorNumero</h1>"
        }
    ?>
</body>