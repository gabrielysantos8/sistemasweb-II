<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $email = $_POST['email'];

        // $ano = 2026 - $idade;

        $ano_atual = date('Y');
        $ano = $ano_atual - $idade;
    ?>

    <p>O nome é: <?php echo $nome; ?> </p>
    <p>A idade é: <?php echo $idade; ?> </p>
    <p>O email é: <?php echo $email; ?> </p>
    <p>Seu ano de nascimento é: <?php echo $ano ?></p>

    <?php
        if ($idade >= 18){
            echo "<p style = 'color: red';>Você é maior de idade</p>";
        } else{
            echo "<p style = 'color: blue';>Você é menor de idade</p>";
        }

        echo "<p>Lista de clientes</p>";
        echo "<ul>";
        for ($i = 1; $i <= 5 ;$i++){
            echo "<li>Cliente $i</li>";
        }
        echo "</ul>";

    ?>

        <style>
            table, tr, td{
                border: 1px solid black;
            }
        </style>
    <?php
        // tabela dinamica

        echo "<table>";
        for ($i=1; $i <= 3 ; $i++) { 
            echo "<tr>
                    <td>Linha $i coluna 1</td>
                    <td>Linha $i coluna 2</td>
                    <td>Linha $i coluna 3</td>
                </tr>";
        }
        echo "</table>";
    ?>
    
</body>
</html>