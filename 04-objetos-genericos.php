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
    ?>

    <h2>Anlisando a estrutura de objetos</h2>
    <pre><?=var_dump($usuario)?></pre>
    
</body>
</html>