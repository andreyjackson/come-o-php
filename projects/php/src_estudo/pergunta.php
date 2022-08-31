<?php
    $perguntas = array ("qual a cor do cel", "quem descobril o Brasil", "quem é o presidente do Brasil");
    $respostas = array ("Azul", "Cristovoan Colombo", "lula");
    //armasena o valor randomico que sera feita as perguntas 
    $pos = 0;
    $msg = "";
    if(isset($_POST["sortPergunta"])){
        $pos = Sorteador(4);
    }
    if (isset ($_POST["EnviaResposta"])){
        $pos = $_POST["pos"];
        $resposta = $respostas[$ops];
        if($resposta == $_POST["resposata"]){
            $msg = "<h1>Pabains!!!! mizeravi vc acertou. </h1>";
        }else{
            $msg = "<h1>fiadapeste burro vc não tem vergonha não? </h1>";
        }
    }else{
         $pos = Sorteador(4);
    }
   
    function Sorteador($tl){
        return rand (0, $tl-1);

    }

?>

<!DOCTYPE html>
<html Lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz - simple</title>
</head>
<body>
    <h1>Jogo de pergunta e resposta</h1>
    <h2>tente responder a pergunta</h2>
    <h1> <?php echo $perguntas[$pos]; ?></h1>
    <form method="post" action="#">
        <input type="text" nome="resposta"/>
        <input type="hidden" name="pos" value="<?php echo $pos; ?>"
        <input type="submit" name="EnviaResposta" value="Responder"/><br>
    </form>
    <form method="post" action="#">
    <input type="submit" name="sortPergunta" value="Nova pergunta"/>        
    </form>
    <?php echo $msg; ?>
</body>
</html>
