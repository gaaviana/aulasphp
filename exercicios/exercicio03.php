<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 03</title>
    <style>
        body {
            text-align: center;
            font-family: 'Times New Roman', Times, serif
        }
        table {
            text-align: center;
            border-collapse: collapse;
            margin: auto;
        }

        td, th {
            border: solid 1px;
            padding: 10px;
        }
        
        .desconto {
            color: white;
            background-color: red;
            border: solid 1px black;
        }

        .valorFinal {
            background-color: green;
            color: white;
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <h1>Exercício 03 (Condicionais)</h1>
    
    <?php
    $produto = "Goiaba";
    $preco = 6000;

    if ($preco > 5000) {
        $percentual =  0.15;
    } elseif ($preco > 3000) {
        $percentual =  0.10;
    } elseif ($preco > 1000) {
        $percentual =  0.05;
    } else {
        $percentual = 0;
    }

    $desconto = $preco * $percentual;
    $valorFinal = $preco - $desconto;
    ?>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Valor sem desconto</th>
                <th class="desconto">Valor do desconto</th>
                <th class="valorFinal">Valor final</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$produto?></td>
                <td>R$ <?=number_format($preco, 2, ',', '.')?></td>
                <td class="desconto"><?=$percentual?>% ( R$<?=number_format($desconto, 2, ',', '.')?> )</td>
                <td class="valorFinal">R$ <?=number_format($valorFinal, 2, ',', '.')?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>