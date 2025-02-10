<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio - 03</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="container text-center">
    <h1 class="">Exercício 03 (Condicionais)</h1>
    <hr>
    
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

    <table class="table table-bordered border-dark">
        <thead>
            <tr>
                <th class="table-primary">Produto</th>
                <th class="table-primary">Valor sem desconto</th>
                <th class="table-primary">Valor do desconto</th>
                <th class="table-primary">Valor final</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?=$produto?></td>
                <td>R$ <?=number_format($preco, 2, ',', '.')?></td>
                <td class="table-danger"><?=$percentual?>% ( R$<?=number_format($desconto, 2, ',', '.')?> )</td>
                <td class="table-success">R$ <?=number_format($valorFinal, 2, ',', '.')?></td>
            </tr>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>