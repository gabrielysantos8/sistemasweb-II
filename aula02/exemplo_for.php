<?php
    for($i = 1; $i <= 5; $i++){
        echo $i;
        echo "<br>";
    }
    echo "<hr>";

    $nomes = ['Fulano', 'Ciclano', 'Beltrano', 'Gabriely'];
    // echo $nomes[0];
    // echo "<br>";
    // echo $nomes[1];
    // echo "<br>";
    // echo $nomes[2];
    // echo "<br>";


    for($i = 0; $i <= count($nomes) -1; $i++){
        echo $nomes[$i];
        echo "<br>";
    }

    echo "<hr>";

    foreach ($nomes as $key => $value) {
        echo $key ." ==> ". $nomes[$key];
        echo "<br>";
    }

?>
