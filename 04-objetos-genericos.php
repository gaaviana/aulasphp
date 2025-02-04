<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Objetos</title>
</head>
<body>
    <h1>Trabalhando com objetos genericos</h1>
    <hr>

    <?php
    // criando uma instancia de uma classe generica chamada stdClass (Stander Class)
    $usuario = new stdClass();

    $usuario->nome = "gaa";
    $usuario->idade = 19;
    $usuario->email = "gaa@gmail.com";
    $usuario->telefone = ["11-96659-5738", "25629292"];

    echo $usuario->nome;

    echo "<p><mark>{$usuario->nome}</mark></p>";
    ?>


    <h2>Anlisando a estrutura de objetos</h2>
    <pre><?=var_dump($usuario)?></pre>
    <hr>

    <h2>Saida de dados</h2>
    <p>Nome: <?=$usuario->nome?></p>
    <p>idade: <?=$ususario->idade?></p>
    <p>celular: <?=$usuario->telefone[1]?></p>


</body>
</html>