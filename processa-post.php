<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Processamento usando POST</h1>
        <hr>
<?php
// Capturando os dados transmitidos

$nome = $_POST ["nome"];
$email = $_POST ["email"];
$idade = $_POST ["idade"];
$mensagem = $_POST ["mensagem"];

$interesses = $_POST ["interesses"];?>
        <h2>Dados:</h2>
        <ul>
            <li>Nome: <?=$nome?></li>
            <li>Email: <?=$email?></li>
            <li>Idade: <?=$idade?></li>

            <!-- transformando o array em strings / utilizado para quando não precisa tratar os dados de forma individual -->
            <li>interesses - usando <code>implode()</code>:
                <?=implode(",", $interesses)?>
            </li>

            <li>interesses - usando <code>foreach()</code>:
                <ul>
                    <?php foreach($interesses as $interesse) { ?>
                        <li><?=$interesse?></li>
                    <?php }?>
                </ul>
            </li>

            <li>mensagem: <?=$mensagem?></li>


        </ul>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
</body>

</html>