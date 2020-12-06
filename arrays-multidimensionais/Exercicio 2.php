<?php
    $matriz = array ("Henrique" => array ("idade" => 18, "cidade" => "Cataguases"), "Guilherme" => array ("idade" => 17, "cidade" => "Cataguases"), "Ayres" => array ("idade" => "17", "cidade" => "Leopoldina"), "Maria" => array ("idade" => 15, "cidade" => "Ubá"));

    foreach($matriz as $nome => $dados){
        echo "$nome:<br>";
        foreach($dados as $coluna => $informacao){
            echo "$coluna: $informacao<br>";
        }
        echo "<br>";
    }
?>