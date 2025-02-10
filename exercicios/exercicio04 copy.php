<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body class="container">
<h1 class="text-center">Exercicio 04 - Array e Loops</h1>
<hr>

<table class="table table-light table-striped table-hover border border-dark-subtle my-5">
    <thead>
        <tr>
            <th class="table-dark">ID</th>
            <th class="table-dark">LINGUAGEM</th>
            <th class="table-dark">DESCRIÇÃO</th>
        </tr>
    </thead>
    <tbody>
        <?php
$linguagens = [
    [
        "id" => 1,
        "nome" => "HTML",
        "descricao" => "Estruturação"
    ],
    [
        "id" => 2,
        "nome" => "CSS",
        "descricao" => "Estilos"
    ],
    [
        "id" => 3,
        "nome" => "JS",
        "descricao" => "Comportamentos"
    ],
    [
        "id" => 4,
        "nome" => "PHP",
        "descricao" => "Back-End"
    ],
    [
        "id" => 5,
        "nome" => "SQL",
        "descricao" => "Manipulação de dados"
    ],
    [
        "id" => 6,
        "nome" => "Java",
        "descricao" => "Softwares"
    ],
];

foreach ($linguagens as $linguagem) {  
    ?>
    <tr>
        <td><?=$linguagem["id"]?></td>
        <td><?=$linguagem["nome"]?></td>
        <td><?=$linguagem["descricao"]?></td>
    </tr>
    <?php

};
?>
    </tbody>
    <caption>Tabela PHP com estilização BOOTSTRAP</caption>
</table>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

</body>
</html>