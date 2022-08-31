<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title>while - laço de repetição</title>
</head>

<body>
    <h1> while - taitol </h1>
    <?php
        $i = 1;
        while ($i <= 6){
            echo "<h$i> rola para </h$i>";
            var_dump($_POST); //recebe as informções do outro arquivo
            $i++;
        }
    ?>
<?php
    $l=5;
    $c=3;
?>
<h1> while - tabela <?php echo "$l X $c";?> </h1>
<?php   
    echo '<table border="3">';
    $il = 1;
    while ($il <= $l){      // cria as linhas atraves de recurção 
            echo "<tr>";
            $ic = 1;
            while ($ic <= $c)
            {
                echo "<td>Bilada surra de pal mole </td>";
                $ic++;
            }
            echo "</tr>";
            $il++;
    }
    echo '</table>';
?>
</body>
</html>