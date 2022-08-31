<!DOCTYPE HTML>
<html lang="pt-br">
<head>
    <meta charset="utf8"/>
    <title>Numero primo verificator</title>
</head>
<body>
    <form method="POST">
    <fieldset>
    <legend>Informe para verificar se ele é primo: </legend>
        <label for="valor">Número:</label>
        <select name="valor">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="outrovalor">definir manualmente: </option>
        </select>
        <br>
        <label for="outrovalor">Número</label>
        <input type="number" name="outrovalor" />
        <input type="submit" name="enviar" value="Verificar">
    </fieldset>
    </form>
    <?php
        $n = 0;
        $cont = 0;
        if(isset($_POST["enviar"]))
            if($_POST["valor"] != "outrovalor"){
                $n = $_POST["valor"];
            }else {
                $n = $_POST["outrovalor"];
            }
            for($i = 1; $i<=$n  ; $i++){
                if($n % $i == 0){
                    $cont++;
                }
            }
            if($cont == 2 || $n == 1){
                echo "<h1> O número $n é primo </h1>";
            }else{
                echo "<h1> O número $n não é primo </h1>";
            }
    ?>
</body>
</html>