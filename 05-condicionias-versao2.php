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
    ?>    
    <p><?=$numero?> é maior que 1</p>
    <?php    
    } 
    ?>

    <hr>

    <h2>Composta usando <code>if</code> e <code>else</code></h2>

    <?php
    $produto = "Ultrabook Asus";
    $qtdEmEstoque = 0; 
    $qtdCritica = 5;
    ?>

    <h3><?=$produto?></h3>
    <h4>Quantidade em estoque: <?=$qtdEmEstoque?></h4>

    <?php
    if ($qtdEmEstoque < $qtdCritica) {
    ?>
        <p class = 'comprar'>é necessário comprar!</p>
    <?php
        if ($qtdEmEstoque === 0) {
    ?>
        <p class = 'urgente' ><strong>URGENTE!!</strong></p>
    <?php
        }
    } else {
    ?>
        <p class = 'normal'>Estoque normal</p>
    <?php
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