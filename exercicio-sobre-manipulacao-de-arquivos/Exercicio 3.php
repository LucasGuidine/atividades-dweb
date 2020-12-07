<?php
    $tipos = array();
    $valores = array();
    $meses = array();

    function CalculaRendimento ($tipos, $valores, $meses, $arquivo){
        $valorescorrigidos;
        for($i=0; $i<5; $i++){
            if($tipos[$i]==1){
                $valorescorrigidos[$i]=$valores[$i]*1.03*$meses[$i];
            }else{
                $valorescorrigidos[$i]=$valores[$i]*1.04*$meses[$i];
            }
            fwrite($arquivo, "Tipo de investimento: $tipos[$i]".PHP_EOL."Valor investido: R$ $valores[$i]".PHP_EOL."Duração: $meses[$i] meses".PHP_EOL."Valor corrigido R$ $valorescorrigidos[$i]".PHP_EOL."<br>".PHP_EOL);
        }
    }

    $tipos = array (1,2,1,2,1);
    $valores = array (400,120,4550,1200,9400);
    $meses = array (10,11,12,13,14);

    $arquivo = fopen("atividade3.txt", "w");

    CalculaRendimento($tipos, $valores, $meses, $arquivo);

    fclose($arquivo);

    $arquivo = fopen("atividade3.txt", "r");
    
    while (!feof($arquivo)){
        $linha = fgets($arquivo);
        echo $linha."<br>";
    }
?>
