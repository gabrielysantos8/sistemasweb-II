<?php
    $n1 = 4;
    $n2 = 8;
    $n3 = 9;

    $media = ($n1 + $n2 + $n3) / 3;

    echo "Nota 1: " . $n1 . "<br>";
    echo "Nota 2: " . $n2 . "<br>";
    echo "Nota 3: " . $n3 . "<br>";
    
    if ($media >= 7){
        echo "Média: " . $media . " - Aprovado!";
    } else {
        echo "Média: " . $media . " - Reprovado!";
    }

?>