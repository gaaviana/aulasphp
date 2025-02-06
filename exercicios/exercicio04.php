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
    </style>
</head>
<body>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>LINGUAGEM</th>
            <th>DESCERIÇÃO</th>
        </tr>
    </thead>
    <tbody>
        <?php
$dados = [
    "HTML" => "Estruturação",
    "CSS" => "Estilos",
    "JS" => "Comportamentos",
    "PHP" => "Back-End",
    "SQL" => "Manipulação de dados",
    "Java" => "Softwares"
];

$id = 1;
foreach ($dados as $linguagem => $descricao) {  
?>
    <tr>
        <td><?=$id?></td>
        <td><?=$linguagem?></td>
        <td><?=$descricao?></td>
    </tr>
<?php
$id++;
};
?>
    </tbody>
</table>
    
</body>
</html>