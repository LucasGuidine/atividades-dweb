<?php
    function teste(){
        $a=1;
        global $b;
        static $c=3;
        echo "Variavel local: $a<br>";
        echo "Variavel global: $b<br>";
        echo "Variavel estatica: $c<br>";
        $c++;
        echo "Variavel superglobal: $GLOBALS[d] <br>";
        echo "<br>";
    }
    
    $b=2;
    $d=5;
    
    teste();
    teste();
    teste();
?>