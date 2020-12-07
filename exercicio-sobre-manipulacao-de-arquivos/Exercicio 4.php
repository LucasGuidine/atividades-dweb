<?php
    function Salvacontatos($agenda, $arquivo){
        foreach($agenda as $nome => $numero){
            fwrite($arquivo, "Nome: $nome".PHP_EOL."<br>"."Número: $numero"."<br>".PHP_EOL."<br>");
        }
    }
    
    $agenda=array("Henrique"=>"1 2345-6780", "Guilherme"=>"1 2345-6781", "Lucca"=>"1 2345-6782", "Édson"=>"1 2345-6783", "Ayres"=>"1 2345-6784", "Ana"=>"1 2345-6785", "Daniel"=>"1 2345-6786", "Eduardo"=>"1 2345-6787", "Felipe"=>"1 2345-6788", "Isabela"=>"1 2345-6789", "Lana"=>"1 2345-6780");

    $arquivo = fopen("atividade4.txt", "w");

    Salvacontatos($agenda, $arquivo);

    fclose($arquivo);

    $file = fopen("atividade4.txt", "r");

        while(!feof($file)){
            $linha = fgets($file);
            echo $linha;
        }

        fclose($file);
?>
