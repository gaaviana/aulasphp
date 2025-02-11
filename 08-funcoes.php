<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Trabalhando com funções</h1>
        <hr>

        <h2>Função como procedimento (ou sub-rotina)</h2>
        <p><i>procedimentos</i> <b>não retornam</b> nada.</p>
        <hr>
        <?php
        function exibirDadosAutor()
        {
            echo "<p>Fulano de Tal, <time>" . date("d/m/y") . "</time></p>";
        }
        ?>
        <h3>Chamada do procedimento</h3>
        <?php
        $valor = 1500;
        if ($valor > 1000) {
            exibirDadosAutor();
        }
        ?>
        <div> <?= exibirDadosAutor() ?> </div>

        <head>Outras Chamadas</head>
        <div><?= exibirDadosAutor() ?></div>
        <ul>
            <li><?= exibirDadosAutor() ?></li>
            <li><?= exibirDadosAutor() ?></li>
        </ul>
        <hr>

        <h2>Função com parâmetros (ou argumentos)</h2>
        <?php
        function somar($valor1, $valor2) {
            // variavel de escopo LOCAL
            // $total = $valor1 + $valor2;

            // retonamos o resultado, ou seja, "mandamos para fora" da função o resultado do que ela fez
            // return $total;

            // Podemos também aplicar o retun direto na expressão (sem uso de variável local)
            return $valor1 + $valor2;
        }
        ?>

        <h3>Chamandas/retornos da função somar</h3>
        <p>Resultado 1: <?=somar(10,5)?></p>
        <p>Resultado 2: <?=somar(23,107)?></p>

        <?php
        // Chamando a função guardando o resultado numa variável global
        $resultado3 = somar(120, 788.85);
        ?>

        <p>Resultado 3: <?=$resultado3?> </p>

        <?php
        if ($resultado3 > 2000) { ?>
            <p class="alert alert-success">O resultado 3 é maior que 2000</p>
        <?php } else { ?>
            <p class="alert alert-danger">Resultado 3 não é maior que 2000</p>
        <?php } ?>

        <!-- usando uma função como parte de uma condição:
        PRIMEIRO, a função é chamada (e ai ela calcula e retorna), DEPOIS o resultado que ela retornou é comparado com a condição 
        -->

        <?php if(somar(10,30) < 50) {?>
            <p>Reprovado.....</p>
        <?php } ?> 
        
        <h3>Função com parâmetros opcionais</h3>

        <?php 
        function exibirSaudacao($mensagem, $pessoa = ""){
            return "Olá, $mensagem $pessoa";
        }
        ?>

        <p>$mensagem 1: <?=exibirSaudacao("bom dia", "gabriel")?></p>
        <p>$mensagem 1: <?=exibirSaudacao("bom dia")?></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>