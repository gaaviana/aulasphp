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
function exibirDadosAutor(){
    echo "<p>Fulano de Tal, <time>".date("d/m/y")."</time></p>";
}
?>
        <h3>Chamada do procedimento</h3>
<?php
$valor = 1500;
if ($valor> 1000) {
    exibirDadosAutor();
}
?>
        <div> <?=exibirDadosAutor()?> </div>

        <head>Outras Chamadas</head>
        <div><?=exibirDadosAutor()?></div>
        <ul>
            <li><?=exibirDadosAutor()?></li>
            <li><?=exibirDadosAutor()?></li>
        </ul>
        <hr>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>