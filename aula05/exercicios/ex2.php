<?php

    // ler o arquivo JSON
    $conteudo = file_get_contents("usuarios.json");

    // converter o JSON em um array
    $dados = json_decode($conteudo, true);

    // acessa o array dentro de "usuarios"
    $usuarios = $dados["usuarios"];

    // exibir
    foreach ($usuarios as $u) {
        echo "Nome: ". $u["nome"] ."<br>";
        echo "Email: ". $u["email"]. "<br>";
    }
?>