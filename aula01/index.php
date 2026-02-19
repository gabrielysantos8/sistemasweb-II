<?php
    $nota = 7;
    if($nota >= 6){
        echo "Aprovado";
    } else {
        echo "reprovado";
    }
    echo "<br>";
    for ($i = 1; $i <= 5; $i++){
        if ($i % 2 == 0){
            echo "Número: " . $i . "- Aprovado! <br>";
        } else {
            echo "Número: " . $i . "- Reprovado! <br>";
        }
    }
?>