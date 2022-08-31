<?php
    function ExibeTabuada($n){
        for($i=0;$i<=10;$i++){
            echo "<h3> $n X $i = " . Multiplica($n,$i) . "</h3>";
        }
    }

function ExibeMensagem($msg){
    echo "<h1>$msg</h1>";
}

function Multiplica($valorA, $valorB){
    $total = $valorA * $valorB;
    return $total;
}

function ExibeDiaAtual(){
    $hoje = getdate();
    $retorno = "Domingo";
    switch ($hoje["wday"])
    {
        case 1:
        return "Segunda";
        break;
        case 2:
        return "Terça";
        break;
        case 3:
        return "Quarta";
        break;
        case 4:
        return "Quinta";
        break;
        case 5:
        return "Sexta";
        break;
        case 6:
        return "Sábado";
        break;
    }
    return $retorno;
}

function MostraoMaiorNumero($n1, $n2,$n3){
    $maior = $n1;
    if ($maior < $n2){
        $maior = $n2;
    } 
    if($maior < n3){
        $maior = $n3;
    }
    return $maior;
}
?>