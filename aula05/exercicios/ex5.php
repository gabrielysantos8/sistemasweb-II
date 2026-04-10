<?php

    // ler JSON
    $conteudo = file_get_contents("produtos.json");
    $dados = json_decode($conteudo, true);
    $produtos = $dados["produtos"];

    // remover produto
    foreach ($produtos as $key => $produto) {
        if ($produto["nome"] == "Guarda-roupa") {
            unset($produtos[$key]);
        }
    }

    // reorganizar o array
    $produtos = array_values($produtos);
    $dados["produtos"] = $produtos;

    // salvar o arquivo
    $json = json_encode($dados, JSON_PRETTY_PRINT);
    file_put_contents("produtos.json", $json);

?>