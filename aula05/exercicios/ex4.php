<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <p>Digite um email <input type="text" name="txtemail" id=""></p>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>

<?php

    // verifica se o email existe
    if (isset($_GET['txtemail'])) {
        $email = $_GET['txtemail'];
     
        // ler o json
        $conteudo = file_get_contents("usuarios.json");
        $dados = json_decode($conteudo, true);

        $usuarios = $dados["usuarios"];

        // buscar email no array
        $encontraremail = false;

        foreach ($usuarios as $usuario) {     
            if($usuario["email"] == $email){
                echo "Id: " . $usuario["id"] . "<br>";
                echo "Nome: ". $usuario["nome"] ."<br>";
                echo "Email: ". $usuario["email"]. "<br>";
                $encontraremail = true;
                break;
            }
        }

        if(!$encontraremail){
                echo "Nenhum usúario encontrado!";
        }
    } 

?>