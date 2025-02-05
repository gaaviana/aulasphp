<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - condicionais</title>
</head>
<body>
    <h1>Estrutura condicionais</h1>
    <hr>

    <h2>Simples</h2>
    <h3><code>if</code></h3>

    <?php
    $numero = 5;
    
    if($numero > 1){
        echo "<p>$numero é maior que 1</p>";
    }

    // Sintaxe omitindo as chaves

    if($numero > 1)  echo "<p>$numero é maior que 1</p>";
    ?>

    <h2>Composta</h2>

    <?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 10; 
    $qtdCritica = 5;

    echo "<h3>$produto</h3>";
    echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";

    if ($qtdEmEstoque < $qtdCritica) {
        echo "<p>é necessário comprar!</p>";
    } else {
        echo "<p>Estoque normal</p>";
    }
    ?>
    
</body>
</html>