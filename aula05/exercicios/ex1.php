<?php

    // criar um array com 3 produtos
    $produtos = ['produtos' => [
        ['nome' => 'Camiseta',
        'preco' => 'R$30.00',
        'quantidade' => 102],

        ['nome' => 'Monitor',
        'preco' => 'R$1000.00',
        'quantidade' => 55],

        ['nome' => 'Guarda-roupa',
        'preco' => 'R$2500.00',
        'quantidade' => 30]
    ]];

    // converter para JSON
    $json_str = json_encode($produtos);

    // salvar o json em um arquivo
    file_put_contents("produtos.json", $json_str);
?>