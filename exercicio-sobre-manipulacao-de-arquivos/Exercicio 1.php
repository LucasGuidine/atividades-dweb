<?php
    $arquivo = fopen("atividade1.txt", "w");

    $a="Bom dia".PHP_EOL;
    $b="Boa tarde".PHP_EOL;
    $c="Boa noite".PHP_EOL;
    
    fwrite($arquivo, $a);
    fwrite($arquivo, $b);
    fwrite($arquivo, $c);

    fclose($arquivo);
    
    $arquivo = fopen("atividade1.txt", "r");

    while (!feof($arquivo)){
        $linha = fgets($arquivo);
        echo $linha."<br>";
    }
    
    fclose($arquivo);
?>
