<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>
    <style>
        html {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 50%;
            text-align: center;
        }

        th,td {
            border: solid 1px;
            padding: 10px;
        }

        /* par */
        tr:nth-child(even) {
            background-color: lightgray; 
        }
        tr:nth-child(odd) {
            background-color: white; 
        }

        tr:hover {
            transform: scale(1.1);
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>LINGUAGEM</th>
            <th>DESCRIÇÃO</th>
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
</table>

</body>
</html>