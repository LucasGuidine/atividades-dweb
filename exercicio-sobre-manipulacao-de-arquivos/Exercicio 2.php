<?php
    function funcao($vetor, $arquivo){
        foreach($vetor as $valor){
            fwrite($arquivo, $valor . PHP_EOL);
        }
    }
    
    $vetor = array ("POO", "Dweb", "Biologia", "Língua inglesa", "Banco de dados");
    
    $arquivo = fopen("atividade2.txt", "w");
    
    funcao($vetor, $arquivo);
    funcao($vetor, $arquivo);
    
    fclose($arquivo);
    
    copy ("atividade2.txt", "atividade22.txt");

    unlink("atividade2.txt");

    $arquivo = fopen("atividade22.txt", "r");
    
    while (!feof($arquivo)){
        $linha = fgets($arquivo);
        echo $linha."<br>";
    }
    
    fclose($arquivo);   
?>
