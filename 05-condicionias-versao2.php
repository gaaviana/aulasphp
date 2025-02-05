<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - condicionais</title>
    <style>
        .comprar {
            color: red;
        }

        .urgente {
            color: red;
            background-color: yellow;
        }

        .normal {
            color: darkgreen;
        }

    </style>
</head>
<body>
    <h1>(VERSÃO 2)Estrutura condicionais</h1>
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

    <hr>

    <h2>Composta usando <code>if</code> e <code>else</code></h2>

    <?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 10; 
    $qtdCritica = 5;

    echo "<h3>$produto</h3>";
    echo "<h4>Quantidade em estoque: $qtdEmEstoque</h4>";

    if ($qtdEmEstoque < $qtdCritica) {
        echo "<p class = 'comprar'>é necessário comprar!</p>";

        if ($qtdEmEstoque === 0) {
            echo "<p class = 'urgente' ><strong>URGENTE!!</strong></p>";
        }
    } else {
        echo "<p class = 'normal'>Estoque normal</p>";
    }
    ?>

    <hr>

    <h2>Encadeada usando <code>if/else/ifelse</code></h2>
    <!-- Verificar a idade de uma epssoa e determinar se ele é crinaça, adolescente, adulta ou idosa -->

    <?php
    $idade = 25;

    if ($idade <= 12) {
        echo "<p>Criança</p>";
    } elseif ($idade <= 17) {
        echo "<p>Adolescente</p>";
    } elseif ($idade <= 59) {
        echo "<p>Adulto</p>";
    } else {
        echo "<p>Idosa</p>";
    }

    
    ?>
    
</body>
</html>