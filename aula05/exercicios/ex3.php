<?php

    // ler o arquivo JSON e coverter para um array
    $conteudo = file_get_contents("produtos.json");
    $dados = json_decode($conteudo, true);

    // adiciona o novo produto dentro da lista produtos
    $dados["produtos"][] = [
        'nome' => 'Teclado',
        'preco' => 'R$179.00',
        'quantidade' => '34'
    ];

    // converter para JSON
    $json = json_encode($dados, JSON_PRETTY_PRINT);

    // salver no arquivo
    file_put_contents("produtos.json", $json);

?>